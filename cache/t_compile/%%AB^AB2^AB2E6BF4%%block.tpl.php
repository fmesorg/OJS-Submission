<?php /* Smarty version 2.6.26, created on 2016-11-15 17:49:58
         compiled from file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/navigation/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/navigation/block.tpl', 12, false),array('function', 'call_hook', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/navigation/block.tpl', 20, false),array('function', 'html_options_translate', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/navigation/block.tpl', 31, false),array('function', 'url', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/navigation/block.tpl', 42, false),)), $this); ?>
<?php if (! $this->_tpl_vars['currentJournal'] || $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
<div class="block" id="sidebarNavigation">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.navigation.journalContent"), $this);?>
</span>

	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
</span>
		<form id="simpleSearchForm" method="get" action="<?php echo $this->_tpl_vars['baseUrl']; ?>
/index.php/ijme/search/search">
		<table width="100%" id="simpleSearchInput">
			<tr>
				<td colspan="2">
				<?php ob_start(); ?><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Search::SearchResults::FilterInput",'filterName' => 'simpleQuery','filterValue' => "",'size' => 15), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('filterInput', ob_get_contents());ob_end_clean(); ?>
				<?php if (empty ( $this->_tpl_vars['filterInput'] )): ?>
										<input type="text" id="simpleQuery" name="query" size="15" maxlength="255" value="" class="textField" />
				<?php else: ?>
					<?php echo $this->_tpl_vars['filterInput']; ?>

				<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td><select id="searchField" name="searchField" size="1" class="selectMenu">
					<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['articleSearchByOptions']), $this);?>

				</select></td>
				<td style="width:59px;"><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button" /></td>
			</tr>
		</table>
	</form>


	<!--<?php if ($this->_tpl_vars['currentJournal']): ?>
	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.browse"), $this);?>
</span>
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'archive'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.browseByIssue"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search','op' => 'authors'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.browseByAuthor"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search','op' => 'titles'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.browseByTitle"), $this);?>
</a></li>
		<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Plugins::Blocks::Navigation::BrowseBy"), $this);?>

		<?php if ($this->_tpl_vars['hasOtherJournals']): ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.otherJournals"), $this);?>
</a></li>
			<?php if ($this->_tpl_vars['siteCategoriesEnabled']): ?><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'search','op' => 'categories'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.categories"), $this);?>
</a></li><?php endif; ?>
		<?php endif; ?>
	</ul>
	<?php endif; ?>-->
</div>
<?php endif; ?>