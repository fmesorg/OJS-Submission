<?php

/**
 * @file pages/article/ArticleHandler.inc.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ArticleHandler
 * @ingroup pages_article
 *
 * @brief Handle requests for article functions.
 *
 */


import('classes.rt.ojs.RTDAO');
import('classes.rt.ojs.JournalRT');
import('classes.handler.Handler');
import('classes.rt.ojs.SharingRT');

class ArticleHandler extends Handler {
	/** journal associated with the request **/
	var $journal;

	/** issue associated with the request **/
	var $issue;

	/** article associated with the request **/
	var $article;

	/**
	 * Constructor
	 * @param $request Request
	 */
	function ArticleHandler(&$request) {
		parent::Handler($request);
		$router =& $request->getRouter();

		$this->addCheck(new HandlerValidatorJournal($this));
		$this->addCheck(new HandlerValidatorCustom($this, false, null, null, create_function('$journal', 'return $journal->getSetting(\'publishingMode\') != PUBLISHING_MODE_NONE;'), array($router->getContext($request))));
	}

	/**
	 * View Article.
	 * @param $args array
	 * @param $request Request
	 */
	function view($args, &$request) {
		$router =& $request->getRouter();
		$articleId = isset($args[0]) ? $args[0] : 0;
		$galleyId = isset($args[1]) ? $args[1] : 0;

		$this->validate($request, $articleId, $galleyId);
		$journal =& $this->journal;
		$issue =& $this->issue;
		$article =& $this->article;
		$this->setupTemplate();

		$rtDao =& DAORegistry::getDAO('RTDAO');
		$journalRt = $rtDao->getJournalRTByJournal($journal);

		$sectionDao =& DAORegistry::getDAO('SectionDAO');
		$section =& $sectionDao->getSection($article->getSectionId(), $journal->getId(), true);

		$version = null;
		if ($journalRt->getVersion()!=null && $journalRt->getDefineTerms()) {
			// Determine the "Define Terms" context ID.
			$version = $rtDao->getVersion($journalRt->getVersion(), $journalRt->getJournalId(), true);
			if ($version) foreach ($version->getContexts() as $context) {
				if ($context->getDefineTerms()) {
					$defineTermsContextId = $context->getContextId();
					break;
				}
			}
		}

		$commentDao =& DAORegistry::getDAO('CommentDAO');
		$enableComments = $journal->getSetting('enableComments');

		if (($article->getEnableComments()) && ($enableComments == COMMENTS_AUTHENTICATED || $enableComments == COMMENTS_UNAUTHENTICATED || $enableComments == COMMENTS_ANONYMOUS)) {
			$comments =& $commentDao->getRootCommentsBySubmissionId($article->getId());
		}

		$galleyDao =& DAORegistry::getDAO('ArticleGalleyDAO');
		
		
		if ($journal->getSetting('enablePublicGalleyId')) {
			$galley =& $galleyDao->getGalleyByBestGalleyId($galleyId, $article->getId());
		} else {
			$galley =& $galleyDao->getGalley($galleyId, $article->getId());
		}

		if ($galley && !$galley->isHtmlGalley() && !$galley->isPdfGalley()) {
			if ($galley->getRemoteURL()) {
				$request->redirectUrl($galley->getRemoteURL());
			}
			if ($galley->isInlineable()) {
				$this->viewFile(
					array($galley->getArticleId(), $galley->getId()),
					$request
				);
			} else {
				$this->download(
					array($galley->getArticleId(), $galley->getId()),
					$request
				);
			}
		}

		$templateMgr =& TemplateManager::getManager();
		$templateMgr->addJavaScript('js/relatedItems.js');
		$templateMgr->addJavaScript('js/inlinePdf.js');
		$templateMgr->addJavaScript('js/pdfobject.js');

		/*changes made by z-aksys*/
		$c_section = $section->_data;
		$c_section = $c_section['title'];
		$c_section = $c_section['en_US'];
		if($c_section=='Letters')
		$templateMgr->assign('is_letter_section', true);
		/*changes made by z-aksys ends here*/
		
		
		if (!$galley) {
			// Get the subscription status if displaying the abstract;
			// if access is open, we can display links to the full text.
			import('classes.issue.IssueAction');

			// The issue may not exist, if this is an editorial user
			// and scheduling hasn't been completed yet for the article.
			if ($issue) {
				$templateMgr->assign('subscriptionRequired', IssueAction::subscriptionRequired($issue));
			}

			$templateMgr->assign('subscribedUser', IssueAction::subscribedUser($journal, isset($issue) ? $issue->getId() : null, isset($article) ? $article->getId() : null));
			$templateMgr->assign('subscribedDomain', IssueAction::subscribedDomain($journal, isset($issue) ? $issue->getId() : null, isset($article) ? $article->getId() : null));

			$templateMgr->assign('showGalleyLinks', $journal->getSetting('showGalleyLinks'));

			import('classes.payment.ojs.OJSPaymentManager');
			$paymentManager = new OJSPaymentManager($request);
			if ( $paymentManager->onlyPdfEnabled() ) {
				$templateMgr->assign('restrictOnlyPdf', true);
			}
			if ( $paymentManager->purchaseArticleEnabled() ) {
				$templateMgr->assign('purchaseArticleEnabled', true);
			}

			// Article cover page.
			$locale = AppLocale::getLocale();
			if (isset($article) && $article->getLocalizedFileName() && $article->getLocalizedShowCoverPage() && !$article->getLocalizedHideCoverPageAbstract()) {
				import('classes.file.PublicFileManager');
				$publicFileManager = new PublicFileManager();
				$coverPagePath = $request->getBaseUrl() . '/';
				$coverPagePath .= $publicFileManager->getJournalFilesPath($journal->getId()) . '/';
				$templateMgr->assign('coverPagePath', $coverPagePath);
				$templateMgr->assign('coverPageFileName', $article->getLocalizedFileName());
				$templateMgr->assign('width', $article->getLocalizedWidth());
				$templateMgr->assign('height', $article->getLocalizedHeight());
				$templateMgr->assign('coverPageAltText', $article->getLocalizedCoverPageAltText());
			}

			// References list.
			// FIXME: We only display the edited raw citations right now. We also want
			// to allow for generated citations to be displayed here (including a way for
			// the reader to choose any of the installed citation styles for output), see #5938.
			$citationDao =& DAORegistry::getDAO('CitationDAO'); /* @var $citationDao CitationDAO */
			$citationFactory =& $citationDao->getObjectsByAssocId(ASSOC_TYPE_ARTICLE, $article->getId());
			$templateMgr->assign('citationFactory', $citationFactory);

			// Increment the published article's abstract views count
			if (!$request->isBot()) {
				$publishedArticleDao =& DAORegistry::getDAO('PublishedArticleDAO');
				$publishedArticleDao->incrementViewsByArticleId($article->getId());
			}
		} else {
			if (!$request->isBot() && !$galley->isPdfGalley()) {
				// Increment the galley's views count.
				// PDF galley views are counted in viewFile.
				$galleyDao->incrementViews($galley->getId());
			}

			// Use the article's CSS file, if set.
			if ($galley->isHTMLGalley() && $styleFile =& $galley->getStyleFile()) {
				$templateMgr->addStyleSheet($router->url($request, null, 'article', 'viewFile', array(
					$article->getId(),
					$galley->getBestGalleyId($journal),
					$styleFile->getFileId()
				)));
			}
		}

		$templateMgr->assign_by_ref('issue', $issue);
		$templateMgr->assign_by_ref('article', $article);
		$templateMgr->assign_by_ref('galley', $galley);
		$templateMgr->assign_by_ref('section', $section);
		$templateMgr->assign_by_ref('journalRt', $journalRt);
		$templateMgr->assign_by_ref('version', $version);
		$templateMgr->assign_by_ref('journal', $journal);
		$templateMgr->assign('articleId', $articleId);
		$templateMgr->assign('postingAllowed', (
			($article->getEnableComments()) && (
			$enableComments == COMMENTS_UNAUTHENTICATED ||
			(($enableComments == COMMENTS_AUTHENTICATED ||
			$enableComments == COMMENTS_ANONYMOUS) &&
			Validation::isLoggedIn()))
		));
		$templateMgr->assign('enableComments', $enableComments);
		$templateMgr->assign('postingLoginRequired', ($enableComments != COMMENTS_UNAUTHENTICATED && !Validation::isLoggedIn()));
		$templateMgr->assign('galleyId', $galleyId);
		$templateMgr->assign('defineTermsContextId', isset($defineTermsContextId)?$defineTermsContextId:null);
		$templateMgr->assign('comments', isset($comments)?$comments:null);

		$templateMgr->assign('sharingEnabled', $journalRt->getSharingEnabled());

		if($journalRt->getSharingEnabled()) {
			$templateMgr->assign('sharingRequestURL', $request->getRequestURL());
			$templateMgr->assign('sharingArticleTitle', $article->getArticleTitle());
			$templateMgr->assign_by_ref('sharingUserName', $journalRt->getSharingUserName());
			$templateMgr->assign_by_ref('sharingButtonStyle', $journalRt->getSharingButtonStyle());
			$templateMgr->assign_by_ref('sharingDropDownMenu', $journalRt->getSharingDropDownMenu());
			$templateMgr->assign_by_ref('sharingBrand', $journalRt->getSharingBrand());
			$templateMgr->assign_by_ref('sharingDropDown', $journalRt->getSharingDropDown());
			$templateMgr->assign_by_ref('sharingLanguage', $journalRt->getSharingLanguage());
			$templateMgr->assign_by_ref('sharingLogo', $journalRt->getSharingLogo());
			$templateMgr->assign_by_ref('sharingLogoBackground', $journalRt->getSharingLogoBackground());
			$templateMgr->assign_by_ref('sharingLogoColor', $journalRt->getSharingLogoColor());
			list($btnUrl, $btnWidth, $btnHeight) = SharingRT::sharingButtonImage($journalRt);
			$templateMgr->assign('sharingButtonUrl', $btnUrl);
			$templateMgr->assign('sharingButtonWidth', $btnWidth);
			$templateMgr->assign('sharingButtonHeight', $btnHeight);
		}

		$templateMgr->assign('articleSearchByOptions', array(
			'query' => 'search.allFields',
			'authors' => 'search.author',
			'title' => 'article.title',
			'abstract' => 'search.abstract',
			'indexTerms' => 'search.indexTerms',
			'galleyFullText' => 'search.fullText'
		));
		// consider public identifiers
		$pubIdPlugins =& PluginRegistry::loadCategory('pubIds', true);
		$templateMgr->assign('pubIdPlugins', $pubIdPlugins);
		$templateMgr->assign('isSingleArticeView',true);
		
		$commentDao =& DAORegistry::getDAO('CommentDAO');
		$parentId  = isset($args[2]) ? (int) $args[2] : 0;
		$parent =& $commentDao->getById($parentId, $articleId);
		import('classes.comment.form.CommentForm');
		$commentForm = new CommentForm(null, $articleId, $galleyId, isset($parent) ? $parentId : null);
        $commentForm->initData();
		import('lib.pkp.classes.captcha.CaptchaManager');
		$captchaManager = new CaptchaManager();
		$captcha = &$captchaManager->createCaptcha();
		if ($captcha) {
			$templateMgr->assign('captchaEnabled', $commentForm->captchaEnabled);
			//$commentForm->setData('captchaId', $captcha->getId());
			$templateMgr->assign('captchaId', $captcha->getId());
		}
		//$templateMgr->assign('captchaEnabled',true);
		
		$templateMgr->display('article/article.tpl');
	}

	/**
	 * Article interstitial page before PDF is shown
	 * @param $args array
	 * @param $request Request
	 * @param $galley ArticleGalley
	 */
	function viewPDFInterstitial($args, &$request, $galley = null) {
		$articleId = isset($args[0]) ? $args[0] : 0;
		$galleyId = isset($args[1]) ? $args[1] : 0;
		$this->validate($request, $articleId, $galleyId);
		$journal =& $this->journal;
		$issue =& $this->issue;
		$article =& $this->article;
		$this->setupTemplate();

		if (!$galley) {
			$galleyDao =& DAORegistry::getDAO('ArticleGalleyDAO');
			if ($journal->getSetting('enablePublicGalleyId')) {
				$galley =& $galleyDao->getGalleyByBestGalleyId($galleyId, $article->getId());
			} else {
				$galley =& $galleyDao->getGalley($galleyId, $article->getId());
			}
		}

		if (!$galley) $request->redirect(null, null, 'view', $articleId);

		$templateMgr =& TemplateManager::getManager();
		$templateMgr->assign('articleId', $articleId);
		$templateMgr->assign('galleyId', $galleyId);
		$templateMgr->assign_by_ref('galley', $galley);
		$templateMgr->assign_by_ref('article', $article);

		$templateMgr->display('article/pdfInterstitial.tpl');
	}

	/**
	 * Article interstitial page before a non-PDF, non-HTML galley is
	 * downloaded
	 * @param $args array
	 * @param $request Request
	 * @param $galley ArticleGalley
	 */
	function viewDownloadInterstitial($args, &$request, $galley = null) {
		$articleId = isset($args[0]) ? $args[0] : 0;
		$galleyId = isset($args[1]) ? $args[1] : 0;
		$this->validate($request, $articleId, $galleyId);
		$journal =& $this->journal;
		$issue =& $this->issue;
		$article =& $this->article;
		$this->setupTemplate();

		if (!$galley) {
			$galleyDao =& DAORegistry::getDAO('ArticleGalleyDAO');
			if ($journal->getSetting('enablePublicGalleyId')) {
				$galley =& $galleyDao->getGalleyByBestGalleyId($galleyId, $article->getId());
			} else {
				$galley =& $galleyDao->getGalley($galleyId, $article->getId());
			}
		}

		if (!$galley) $request->redirect(null, null, 'view', $articleId);

		$templateMgr =& TemplateManager::getManager();
		$templateMgr->assign('articleId', $articleId);
		$templateMgr->assign('galleyId', $galleyId);
		$templateMgr->assign_by_ref('galley', $galley);
		$templateMgr->assign_by_ref('article', $article);

		$templateMgr->display('article/interstitial.tpl');
	}

	/**
	 * Article view
	 * @param $args array
	 * @param $request Request
	 */
	function viewArticle($args, &$request) {
		// This function is deprecated since the Reading Tools frameset was removed.
		return $this->view($args, $request);
	}

	/**
	 * View a file (inlines file).
	 * @param $args array ($articleId, $galleyId, $fileId [optional])
	 * @param $request Request
	 */
	function viewFile($args, &$request) {
		$articleId = isset($args[0]) ? $args[0] : 0;
		$galleyId = isset($args[1]) ? $args[1] : 0;
		$fileId = isset($args[2]) ? (int) $args[2] : 0;

		$this->validate($request, $articleId, $galleyId);
		$journal =& $this->journal;
		$issue =& $this->issue;
		$article =& $this->article;

		$galleyDao =& DAORegistry::getDAO('ArticleGalleyDAO');
		if ($journal->getSetting('enablePublicGalleyId')) {
			$galley =& $galleyDao->getGalleyByBestGalleyId($galleyId, $article->getId());
		} else {
			$galley =& $galleyDao->getGalley($galleyId, $article->getId());
		}

		if (!$galley) $request->redirect(null, null, 'view', $articleId);

		if (!$fileId) {
			if(!$request->isBot()) $galleyDao->incrementViews($galley->getId());
			$fileId = $galley->getFileId();
		} else {
			if (!$galley->isDependentFile($fileId)) {
				$request->redirect(null, null, 'view', $articleId);
			}
		}

		if (!HookRegistry::call('ArticleHandler::viewFile', array(&$article, &$galley, &$fileId))) {
			import('classes.submission.common.Action');
			Action::viewFile($article->getId(), $fileId);
		}
	}

	/**
	 * Downloads the document
	 * @param $args array
	 * @param $request Request
	 */
	function download($args, &$request) {
		$articleId = isset($args[0]) ? $args[0] : 0;
		$galleyId = isset($args[1]) ? $args[1] : 0;
		$this->validate($request, $articleId, $galleyId);
		$journal =& $this->journal;
		$issue =& $this->issue;
		$article =& $this->article;

		$galleyDao =& DAORegistry::getDAO('ArticleGalleyDAO');
		if ($journal->getSetting('enablePublicGalleyId')) {
			$galley =& $galleyDao->getGalleyByBestGalleyId($galleyId, $article->getId());
		} else {
			$galley =& $galleyDao->getGalley($galleyId, $article->getId());
		}
		if (!$request->isBot() && $galley) $galleyDao->incrementViews($galley->getId());

		if ($article && $galley && !HookRegistry::call('ArticleHandler::downloadFile', array(&$article, &$galley))) {
			import('classes.file.ArticleFileManager');
			$articleFileManager = new ArticleFileManager($article->getId());
			$articleFileManager->downloadFile($galley->getFileId());
		}
	}

	/**
	 * Download a supplementary file
	 * @param $args array
	 * @param $request Request
	 */
	function downloadSuppFile($args, &$request) {
		$articleId = isset($args[0]) ? $args[0] : 0;
		$suppId = isset($args[1]) ? $args[1] : 0;
		$this->validate($request, $articleId);
		$journal =& $this->journal;
		$issue =& $this->issue;
		$article =& $this->article;

		$suppFileDao =& DAORegistry::getDAO('SuppFileDAO');
		if ($journal->getSetting('enablePublicSuppFileId')) {
			$suppFile =& $suppFileDao->getSuppFileByBestSuppFileId($suppId, $article->getId());
		} else {
			$suppFile =& $suppFileDao->getSuppFile((int) $suppId, $article->getId());
		}

		if ($article && $suppFile) {
			import('classes.file.ArticleFileManager');
			$articleFileManager = new ArticleFileManager($article->getId());
			if ($suppFile->getRemoteURL()) {
				$request->redirectUrl($suppFile->getRemoteURL());
			}
			$articleFileManager->downloadFile($suppFile->getFileId(), null, $suppFile->isInlineable());
		}
	}

	/**
	 * Validation
	 * @see lib/pkp/classes/handler/PKPHandler#validate()
	 * @param $request Request
	 * @param $articleId string
	 * @param $galleyId int or string
	 */
	function validate(&$request, $articleId, $galleyId = null) {
		parent::validate(null, $request);

		import('classes.issue.IssueAction');

		$router =& $request->getRouter();
		$journal =& $router->getContext($request);
		$journalId = $journal->getId();
		$article = $publishedArticle = $issue = null;
		$user =& $request->getUser();
		$userId = $user?$user->getId():0;

		$publishedArticleDao =& DAORegistry::getDAO('PublishedArticleDAO');
		if ($journal->getSetting('enablePublicArticleId')) {
			$publishedArticle =& $publishedArticleDao->getPublishedArticleByBestArticleId((int) $journalId, $articleId, true);
		} else {
			$publishedArticle =& $publishedArticleDao->getPublishedArticleByArticleId((int) $articleId, (int) $journalId, true);
		}

		$issueDao =& DAORegistry::getDAO('IssueDAO');
		if (isset($publishedArticle)) {
			$issue =& $issueDao->getIssueById($publishedArticle->getIssueId(), $publishedArticle->getJournalId(), true);
		} else {
			$articleDao =& DAORegistry::getDAO('ArticleDAO');
			$article =& $articleDao->getArticle((int) $articleId, $journalId, true);
		}

		// If this is an editorial user who can view unpublished/unscheduled
		// articles, bypass further validation. Likewise for its author.
		if (($article || $publishedArticle) && (($article && IssueAction::allowedPrePublicationAccess($journal, $article) || ($publishedArticle && IssueAction::allowedPrePublicationAccess($journal, $publishedArticle))))) {
			$this->journal =& $journal;
			$this->issue =& $issue;
			if(isset($publishedArticle)) {
				$this->article =& $publishedArticle;
			} else $this->article =& $article;

			return true;
		}

		// Make sure the reader has rights to view the article/issue.
		if ($issue && $issue->getPublished() && $publishedArticle->getStatus() == STATUS_PUBLISHED) {
			$subscriptionRequired = IssueAction::subscriptionRequired($issue);
			$isSubscribedDomain = IssueAction::subscribedDomain($journal, $issue->getId(), $publishedArticle->getId());

			// Check if login is required for viewing.
			if (!$isSubscribedDomain && !Validation::isLoggedIn() && $journal->getSetting('restrictArticleAccess') && isset($galleyId) && $galleyId) {
				Validation::redirectLogin();
			}

			// bypass all validation if subscription based on domain or ip is valid
			// or if the user is just requesting the abstract
			if ( (!$isSubscribedDomain && $subscriptionRequired) &&
			     (isset($galleyId) && $galleyId) ) {

				// Subscription Access
				$subscribedUser = IssueAction::subscribedUser($journal, $issue->getId(), $publishedArticle->getId());

				if (!(!$subscriptionRequired || $publishedArticle->getAccessStatus() == ARTICLE_ACCESS_OPEN || $subscribedUser)) {
					// if payment information is enabled,
					import('classes.payment.ojs.OJSPaymentManager');
					$paymentManager = new OJSPaymentManager($request);

					if ( $paymentManager->purchaseArticleEnabled() || $paymentManager->membershipEnabled() ) {
						/* if only pdf files are being restricted, then approve all non-pdf galleys
						 * and continue checking if it is a pdf galley */
						if ( $paymentManager->onlyPdfEnabled() ) {
							$galleyDao =& DAORegistry::getDAO('ArticleGalleyDAO');
							if ($journal->getSetting('enablePublicGalleyId')) {
								$galley =& $galleyDao->getGalleyByBestGalleyId($galleyId, $publishedArticle->getId());
							} else {
								$galley =& $galleyDao->getGalley($galleyId, $publishedArticle->getId());
							}
							if ( $galley && !$galley->isPdfGalley() ) {
								$this->journal =& $journal;
								$this->issue =& $issue;
								$this->article =& $publishedArticle;
								return true;
							}
						}

						if (!Validation::isLoggedIn()) {
							Validation::redirectLogin("payment.loginRequired.forArticle");
						}

						/* if the article has been paid for then forget about everything else
						 * and just let them access the article */
						$completedPaymentDao =& DAORegistry::getDAO('OJSCompletedPaymentDAO');
						$dateEndMembership = $user->getSetting('dateEndMembership', 0);
						if ($completedPaymentDao->hasPaidPurchaseArticle($userId, $publishedArticle->getId())
							|| $completedPaymentDao->hasPaidPurchaseIssue($userId, $issue->getId())
							|| (!is_null($dateEndMembership) && $dateEndMembership > time())) {
							$this->journal =& $journal;
							$this->issue =& $issue;
							$this->article =& $publishedArticle;
							return true;
						} else {
							$queuedPayment =& $paymentManager->createQueuedPayment($journalId, PAYMENT_TYPE_PURCHASE_ARTICLE, $user->getId(), $publishedArticle->getId(), $journal->getSetting('purchaseArticleFee'));
							$queuedPaymentId = $paymentManager->queuePayment($queuedPayment);

							$paymentManager->displayPaymentForm($queuedPaymentId, $queuedPayment);
							exit;
						}
					}

					if (!isset($galleyId) || $galleyId) {
						if (!Validation::isLoggedIn()) {
							Validation::redirectLogin("reader.subscriptionRequiredLoginText");
						}
						$request->redirect(null, 'about', 'subscriptions');
					}
				}
			}
		} else {
			$request->redirect(null, 'index');
		}
		$this->journal =& $journal;
		$this->issue =& $issue;
		$this->article =& $publishedArticle;
		return true;
	}

	function setupTemplate() {
		parent::setupTemplate();
		AppLocale::requireComponents(LOCALE_COMPONENT_PKP_READER, LOCALE_COMPONENT_PKP_SUBMISSION);
	}
}

?>
