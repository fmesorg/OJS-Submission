<?php /* Smarty version 2.6.26, created on 2016-11-15 18:51:28
         compiled from file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/generic/referral/readerReferrals.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/generic/referral/readerReferrals.tpl', 13, false),array('block', 'iterate', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/generic/referral/readerReferrals.tpl', 16, false),array('modifier', 'escape', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/generic/referral/readerReferrals.tpl', 17, false),)), $this); ?>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.referrals"), $this);?>
</h3>

<ul class="plain">
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'referrals','item' => 'referral')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<li>&#187; <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['referral']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" target="_parent"><?php echo ((is_array($_tmp=$this->_tpl_vars['referral']->getReferralName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php if ($this->_tpl_vars['referrals']->wasEmpty()): ?>
		<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.all.empty"), $this);?>
</li>
	<?php endif; ?>
</ul>