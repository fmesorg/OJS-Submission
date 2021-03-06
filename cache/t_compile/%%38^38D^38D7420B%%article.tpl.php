<?php /* Smarty version 2.6.26, created on 2018-04-05 15:12:01
         compiled from article/article.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'article/article.tpl', 27, false),array('function', 'url', 'article/article.tpl', 34, false),array('function', 'call_hook', 'article/article.tpl', 166, false),array('modifier', 'escape', 'article/article.tpl', 33, false),array('modifier', 'to_array', 'article/article.tpl', 34, false),array('modifier', 'strip_unsafe_html', 'article/article.tpl', 121, false),array('modifier', 'nl2br', 'article/article.tpl', 121, false),array('block', 'iterate', 'article/article.tpl', 226, false),)), $this); ?>
<?php if ($this->_tpl_vars['galley']): ?>
	<?php $this->assign('pubObject', $this->_tpl_vars['galley']); ?>
<?php else: ?>
	<?php $this->assign('pubObject', $this->_tpl_vars['article']); ?>
<?php endif; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "article/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['galley']): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/author_content.js"></script>
<div class="about-author-content" style="display: none;">
<div class="block" id="articleToolsInContent" style="float: right; border-bottom: 0; border: 1px solid #ddd;">
	

<?php if ($this->_tpl_vars['journalRt'] && $this->_tpl_vars['journalRt']->getEnabled()): ?>
	
	<h4 class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.readingTools.articleTools"), $this);?>
</h4>
	<?php if ($this->_tpl_vars['journalRt']->getAbstract() && $this->_tpl_vars['galley'] && $this->_tpl_vars['article']->getLocalizedAbstract()): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/abstract.png" class="articleToolIcon" />
						<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley1']):
        $this->_foreach['galleyList']['iteration']++;
?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['galley1']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)) == 'PDF'): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley1']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley1']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" class="file" target="_parent"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley1']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><br/>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalRt']->getPrinterFriendly()): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/printArticle.png" class="articleToolIcon" /> <a href="<?php if (! $this->_tpl_vars['galley'] || $this->_tpl_vars['galley']->isHtmlGalley()): ?>javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rt','op' => 'printerFriendly','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
');<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
<?php endif; ?>"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.readingTools.printThisArticle"), $this);?>
</a>
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalRt']->getViewMetadata()): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/metadata.png" class="articleToolIcon" /> <a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rt','op' => 'metadata','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.viewMetadata"), $this);?>
</a><br />
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalRt']->getCaptureCite()): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/citeArticle.png" class="articleToolIcon" /> <a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rt','op' => 'captureCite','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite"), $this);?>
</a><br />
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalRt']->getSupplementaryFiles() && is_a ( $this->_tpl_vars['article'] , 'PublishedArticle' ) && $this->_tpl_vars['article']->getSuppFiles()): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/suppFiles.png" class="articleToolIcon" /> <a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rt','op' => 'suppFiles','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.suppFiles"), $this);?>
</a><br />
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalRt']->getFindingReferences()): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/findingReferences.png" class="articleToolIcon" /> <a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rt','op' => 'findingReferences','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.findingReferences"), $this);?>
</a>
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalRt']->getViewReviewPolicy()): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/editorialPolicies.png" class="articleToolIcon" /> <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'editorialPolicies','anchor' => 'peerReviewProcess'), $this);?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.reviewPolicy"), $this);?>
</a>
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalRt']->getEmailOthers()): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/emailArticle.png" class="articleToolIcon" />
			<?php if ($this->_tpl_vars['isUserLoggedIn']): ?><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rt','op' => 'emailColleague','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.readingTools.emailThisArticle"), $this);?>
</a>
			<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.readingTools.emailThisArticle"), $this);?>
 <span style="font-size: 0.8em">(<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.readingTools.loginRequired"), $this);?>
)</span><?php endif; ?>
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journalRt']->getEmailAuthor()): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/emailArticle.png" class="articleToolIcon" />
			<?php if ($this->_tpl_vars['isUserLoggedIn']): ?><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rt','op' => 'emailAuthor','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
');"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.emailAuthor"), $this);?>
</a>
			<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.emailAuthor"), $this);?>
 <span style="font-size: 0.8em">(<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.readingTools.loginRequired"), $this);?>
)</span><?php endif; ?>
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['enableComments']): ?>
		<div class="articleToolItem">
			<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/blocks/readingTools/icons/postComment.png" class="articleToolIcon" />
			<?php if ($this->_tpl_vars['postingLoginRequired']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.readingTools.postComment"), $this);?>
 <span style="font-size: 0.8em">(<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.readingTools.loginRequired"), $this);?>
)</span>
			<?php else: ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'comment','op' => 'add','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.readingTools.postComment"), $this);?>
</a><?php endif; ?>
		</div>
	<?php endif; ?>
</div>
</div>
<?php endif; ?>

<?php endif; ?>



<?php if ($this->_tpl_vars['galley']): ?>
	<div>
	<?php if ($this->_tpl_vars['galley']->isHTMLGalley()): ?>
		<?php echo $this->_tpl_vars['galley']->getHTMLContents(); ?>

	<?php elseif ($this->_tpl_vars['galley']->isPdfGalley()): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "article/pdfViewer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<div class="author-section-bottom">
		<div class="blockTitle">
						About the Authors
		</div>
		<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
		<div id="authorBio">
			<div>
				<p><em><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</em> (<?php echo $this->_tpl_vars['author']->getEmail(); ?>
)</p>
				<?php if ($this->_tpl_vars['author']->getUrl()): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'quotes')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><br/><?php endif; ?>
				<?php $this->assign('authorAffiliation', $this->_tpl_vars['author']->getLocalizedAffiliation()); ?>
								<p><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedBiography())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
				<?php if ($this->_tpl_vars['authorAffiliation']): ?><?php echo $this->_tpl_vars['authorAffiliation']; ?>
<?php endif; ?>
				<?php if ($this->_tpl_vars['author']->getCountry()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getCountryLocalized())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
			</div>
	
					</div>
		<?php if (! ($this->_foreach['authors']['iteration'] == $this->_foreach['authors']['total'])): ?><div class="separator"></div><?php endif; ?>
	
		<?php endforeach; endif; unset($_from); ?>
	</div>
	
	<!--changes made-->
	<?php if ($this->_tpl_vars['is_letter_section']): ?>
		<?php endif; ?>
	<!--#changes made-->
	
	</div>
<?php else: ?>
	
		<?php if (is_a ( $this->_tpl_vars['article'] , 'PublishedArticle' )): ?><?php $this->assign('galleys', $this->_tpl_vars['article']->getGalleys()); ?><?php endif; ?>
		<?php if ($this->_tpl_vars['galleys'] && $this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks']): ?>
		<div id="topBar">
			<div id="accessKey">
				<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.openAccess"), $this);?>
&nbsp;
				<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
				<?php if ($this->_tpl_vars['purchaseArticleEnabled']): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionOrFeeAccess"), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscriptionAccess"), $this);?>

				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
	
	<?php if ($this->_tpl_vars['coverPagePath']): ?>
		<div id="articleCoverImage"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageFileName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['coverPageAltText'] != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?> alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.coverPage.altText"), $this);?>
"<?php endif; ?><?php if ($this->_tpl_vars['width']): ?> width="<?php echo ((is_array($_tmp=$this->_tpl_vars['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['height']): ?> height="<?php echo ((is_array($_tmp=$this->_tpl_vars['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>/>
		</div>
	<?php endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Article::Article::ArticleCoverImage"), $this);?>

	<div id="articleTitle"><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</h3></div>
	<div id="authorString"><em><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</em></div>
	<br />
	<?php if ($this->_tpl_vars['article']->getLocalizedAbstract()): ?>
		<div id="articleAbstract">
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</h4>
		
		<div><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
		
		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['article']->getLocalizedSubject()): ?>
		<div id="articleSubject">
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subject"), $this);?>
</h4>
		
		<div><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</div>
		
		</div>
	<?php endif; ?>

	<?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || $this->_tpl_vars['subscribedUser'] || $this->_tpl_vars['subscribedDomain'] )): ?>
		<?php $this->assign('hasAccess', 1); ?>
	<?php else: ?>
		<?php $this->assign('hasAccess', 0); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['galleys']): ?>
		<div id="articleFullText">
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.fullText"), $this);?>
</h4>
		<?php if ($this->_tpl_vars['hasAccess'] || ( $this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] )): ?>
			<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" class="file" target="_parent"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
				<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && $this->_tpl_vars['restrictOnlyPdf']): ?>
					<?php if ($this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || ! $this->_tpl_vars['galley']->isPdfGalley()): ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
					<?php else: ?>
						<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['subscriptionRequired'] && $this->_tpl_vars['showGalleyLinks'] && ! $this->_tpl_vars['restrictOnlyPdf']): ?>
				<?php if ($this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN): ?>
					<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_open_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoOpen.altText"), $this);?>
" />
				<?php else: ?>
					<img class="accessLogo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/icons/fulltext_restricted_medium.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.accessLogoRestricted.altText"), $this);?>
" />
				<?php endif; ?>
			<?php endif; ?>
		<?php else: ?>
			&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'subscriptions'), $this);?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.subscribersOnly"), $this);?>
</a>
		<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['citationFactory']->getCount()): ?>
		<div id="articleCitations">
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations"), $this);?>
</h4>
		
		<div>
			<?php $this->_tag_stack[] = array('iterate', array('from' => 'citationFactory','item' => 'citation')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['citation']->getRawCitation())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</p>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>
		
		</div>
	<?php endif; ?>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
	<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
		<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['pubObject'])); ?>
	<?php else: ?>
		<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['pubObject'],true)); ?>	<?php endif; ?>
	<?php if ($this->_tpl_vars['pubId']): ?>
		<br />
		<br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdDisplayType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
: <?php if (((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))): ?><a id="pub-id::<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['pubId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "article/comments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<!--
<?php echo '
function handleAnonymousCheckbox(theBox) {
	var submitForm = document.getElementById(\'submit\');
	if (theBox.checked) {
		submitForm.posterName.disabled = false;
		submitForm.posterEmail.disabled = false;
		submitForm.posterName.value = "";
		submitForm.posterEmail.value = "";
		submitForm.posterName.focus();
	} else {
		submitForm.posterName.disabled = true;
		submitForm.posterEmail.disabled = true;
		'; ?>
<?php if ($this->_tpl_vars['isUserLoggedIn'] && ( $this->_tpl_vars['enableComments'] == COMMENTS_ANONYMOUS || $this->_tpl_vars['enableComments'] == COMMENTS_UNAUTHENTICATED )): ?>
		submitForm.posterName.value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['userName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
";
		submitForm.posterEmail.value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['userEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
";
		<?php endif; ?><?php echo '
	}
}
// -->
'; ?>

</script>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
