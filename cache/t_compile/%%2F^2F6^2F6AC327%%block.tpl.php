<?php /* Smarty version 2.6.26, created on 2018-04-03 16:07:40
         compiled from file:/var/www/html/ijmewp/submission/plugins/generic/announcementFeed/templates/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ijmewp/submission/plugins/generic/announcementFeed/templates/block.tpl', 11, false),array('function', 'url', 'file:/var/www/html/ijmewp/submission/plugins/generic/announcementFeed/templates/block.tpl', 12, false),array('modifier', 'to_array', 'file:/var/www/html/ijmewp/submission/plugins/generic/announcementFeed/templates/block.tpl', 12, false),)), $this); ?>
<div class="block" id="sidebarAnnouncementFeed">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>
</span>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'gateway','op' => 'plugin','path' => ((is_array($_tmp='AnnouncementFeedGatewayPlugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'atom') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'atom'))), $this);?>
">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/announcementFeed/templates/images/atom10_logo.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.announcementfeed.atom.altText"), $this);?>
" border="0" /></a>
	<br/>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'gateway','op' => 'plugin','path' => ((is_array($_tmp='AnnouncementFeedGatewayPlugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'rss2') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'rss2'))), $this);?>
">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/announcementFeed/templates/images/rss20_logo.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.announcementfeed.rss2.altText"), $this);?>
" border="0" /></a>
	<br/>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'gateway','op' => 'plugin','path' => ((is_array($_tmp='AnnouncementFeedGatewayPlugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'rss') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'rss'))), $this);?>
">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/announcementFeed/templates/images/rss10_logo.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.announcementfeed.rss1.altText"), $this);?>
" border="0" /></a>
</div>