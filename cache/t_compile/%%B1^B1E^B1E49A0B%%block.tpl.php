<?php /* Smarty version 2.6.26, created on 2016-11-15 17:49:58
         compiled from file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/languageToggle/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/languageToggle/block.tpl', 12, false),array('function', 'url', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/languageToggle/block.tpl', 14, false),array('function', 'html_options', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/languageToggle/block.tpl', 14, false),array('modifier', 'escape', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/blocks/languageToggle/block.tpl', 14, false),)), $this); ?>
<?php if ($this->_tpl_vars['enableLanguageToggle']): ?>
<div class="block" id="sidebarLanguageToggle">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.language"), $this);?>
</span>
	<form action="#">
		<select <?php if ($this->_tpl_vars['isPostRequest']): ?>disabled="disabled" <?php endif; ?>size="1" name="locale" onchange="location.href=<?php if ($this->_tpl_vars['languageToggleNoUser']): ?>'<?php echo ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (strstr ( $this->_tpl_vars['currentUrl'] , '?' )): ?>&amp;<?php else: ?>?<?php endif; ?>setLocale='+this.options[this.selectedIndex].value<?php else: ?>('<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'setLocale','path' => 'NEW_LOCALE','source' => $_SERVER['REQUEST_URI']), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
'.replace('NEW_LOCALE', this.options[this.selectedIndex].value))<?php endif; ?>" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['languageToggleLocales'],'selected' => $this->_tpl_vars['currentLocale']), $this);?>
</select>
	</form>
</div>
<?php endif; ?>