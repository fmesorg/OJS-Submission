<?php /* Smarty version 2.6.26, created on 2012-07-26 18:40:07
         compiled from user/createAccountConference.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'user/createAccountConference.tpl', 16, false),array('function', 'url', 'user/createAccountConference.tpl', 21, false),array('block', 'iterate', 'user/createAccountConference.tpl', 18, false),array('modifier', 'escape', 'user/createAccountConference.tpl', 21, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "navigation.account"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="createAccountConference">
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.selectSchedConf"), $this);?>
:
<ul>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'schedConfs','item' => 'schedConf')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<li>
		<?php if ($this->_tpl_vars['source']): ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('schedConf' => $this->_tpl_vars['schedConf']->getPath(),'page' => 'user','op' => 'account','source' => ((is_array($_tmp=$this->_tpl_vars['source'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['schedConf']->getFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
		<?php else: ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('schedConf' => $this->_tpl_vars['schedConf']->getPath(),'page' => 'user','op' => 'account'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['schedConf']->getFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
		<?php endif; ?>
	</li>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</ul>
<?php if ($this->_tpl_vars['schedConfs']->wasEmpty()): ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.noSchedConfs"), $this);?>

<?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>