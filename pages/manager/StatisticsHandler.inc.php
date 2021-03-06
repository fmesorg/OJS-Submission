<?php

/**
 * @file pages/manager/StatisticsHandler.inc.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class StatisticsHandler
 * @ingroup pages_manager
 *
 * @brief Handle requests for statistics functions. 
 */

import('pages.manager.ManagerHandler');

class StatisticsHandler extends ManagerHandler {
	/**
	 * Constructor
	 **/
	function StatisticsHandler() {
		parent::ManagerHandler();
	}
	/**
	 * Display a list of journal statistics.
	 * WARNING: This implementation should be kept roughly synchronized
	 * with the reader's statistics view in the About pages.
	 */
	function statistics() {
		$this->validate();
		$this->setupTemplate(true);

		$journal =& Request::getJournal();
		$templateMgr =& TemplateManager::getManager();

		$statisticsYear = Request::getUserVar('statisticsYear');
		if (empty($statisticsYear)) $statisticsYear = date('Y');
		$templateMgr->assign('statisticsYear', $statisticsYear);

		$sectionIds = $journal->getSetting('statisticsSectionIds');
		if (!is_array($sectionIds)) $sectionIds = array();
		$templateMgr->assign('sectionIds', $sectionIds);

		foreach ($this->_getPublicStatisticsNames() as $name) {
			$templateMgr->assign($name, $journal->getSetting($name));
		}
		$templateMgr->assign('statViews', $journal->getSetting('statViews'));

		$fromDate = mktime(0, 0, 0, 1, 1, $statisticsYear);
		$toDate = mktime(23, 59, 59, 12, 31, $statisticsYear);

		$journalStatisticsDao =& DAORegistry::getDAO('JournalStatisticsDAO');
		$articleStatistics = $journalStatisticsDao->getArticleStatistics($journal->getId(), null, $fromDate, $toDate);
		$templateMgr->assign('articleStatistics', $articleStatistics);

		$limitedArticleStatistics = $journalStatisticsDao->getArticleStatistics($journal->getId(), $sectionIds, $fromDate, $toDate);
		$templateMgr->assign('limitedArticleStatistics', $limitedArticleStatistics);

		$sectionDao =& DAORegistry::getDAO('SectionDAO');
		$sections =& $sectionDao->getJournalSections($journal->getId());
		$templateMgr->assign('sections', $sections->toArray());

		$issueStatistics = $journalStatisticsDao->getIssueStatistics($journal->getId(), $fromDate, $toDate);
		$templateMgr->assign('issueStatistics', $issueStatistics);

		$reviewerStatistics = $journalStatisticsDao->getReviewerStatistics($journal->getId(), $sectionIds, $fromDate, $toDate);
		$templateMgr->assign('reviewerStatistics', $reviewerStatistics);

		$allUserStatistics = $journalStatisticsDao->getUserStatistics($journal->getId(), null, $toDate);
		$templateMgr->assign('allUserStatistics', $allUserStatistics);

		$userStatistics = $journalStatisticsDao->getUserStatistics($journal->getId(), $fromDate, $toDate);
		$templateMgr->assign('userStatistics', $userStatistics);

		if ($journal->getSetting('publishingMode') == PUBLISHING_MODE_SUBSCRIPTION) {
			$allSubscriptionStatistics = $journalStatisticsDao->getSubscriptionStatistics($journal->getId(), null, $toDate);
			$templateMgr->assign('allSubscriptionStatistics', $allSubscriptionStatistics);

			$subscriptionStatistics = $journalStatisticsDao->getSubscriptionStatistics($journal->getId(), $fromDate, $toDate);
			$templateMgr->assign('subscriptionStatistics', $subscriptionStatistics);
		}

		$reportPlugins =& PluginRegistry::loadCategory('reports');
		$templateMgr->assign_by_ref('reportPlugins', $reportPlugins);

		$templateMgr->assign('helpTopicId', 'journal.managementPages.statsAndReports');

		$templateMgr->display('manager/statistics/index.tpl');
	}

	function saveStatisticsSections() {
		// The manager wants to save the list of sections used to
		// generate statistics.

		$this->validate();

		$journal =& Request::getJournal();

		$sectionIds = Request::getUserVar('sectionIds');
		if (!is_array($sectionIds)) {
			if (empty($sectionIds)) $sectionIds = array();
			else $sectionIds = array($sectionIds);
		}

		$journal->updateSetting('statisticsSectionIds', $sectionIds);
		Request::redirect(null, null, 'statistics', null, array('statisticsYear' => Request::getUserVar('statisticsYear')));
	}

	function _getPublicStatisticsNames() {
		return array(
			'statNumPublishedIssues',
			'statItemsPublished',
			'statNumSubmissions',
			'statPeerReviewed',
			'statCountAccept',
			'statCountDecline',
			'statCountRevise',
			'statDaysPerReview',
			'statDaysToPublication',
			'statRegisteredUsers',
			'statRegisteredReaders',
			'statSubscriptions',
		);
	}

	function savePublicStatisticsList() {
		$this->validate();

		$journal =& Request::getJournal();
		foreach ($this->_getPublicStatisticsNames() as $name) {
			$journal->updateSetting($name, Request::getUserVar($name)?true:false);
		}
		$journal->updateSetting('statViews', Request::getUserVar('statViews')?true:false);
		Request::redirect(null, null, 'statistics', null, array('statisticsYear' => Request::getUserVar('statisticsYear')));
	}

	function report($args, $request) {
		$this->validate();
		$this->setupTemplate();

		$journal =& Request::getJournal();

		$pluginName = array_shift($args);
		$reportPlugins =& PluginRegistry::loadCategory('reports');

		if ($pluginName == '' || !isset($reportPlugins[$pluginName])) {
			Request::redirect(null, null, 'statistics');
		}

		$plugin =& $reportPlugins[$pluginName];
		$plugin->display($args, $request);
	}
}

?>
