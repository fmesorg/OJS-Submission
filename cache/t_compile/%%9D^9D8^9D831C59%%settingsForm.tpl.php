<?php /* Smarty version 2.6.26, created on 2017-04-01 13:51:18
         compiled from file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/generic/referral/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/generic/referral/settingsForm.tpl', 15, false),array('function', 'plugin_url', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/generic/referral/settingsForm.tpl', 21, false),array('function', 'fieldLabel', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/generic/referral/settingsForm.tpl', 26, false),array('modifier', 'escape', 'file:/home/25160-62955.cloudwaysapps.com/frgmxhwawa/public_html/submission/plugins/generic/referral/settingsForm.tpl', 28, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.referral.settings"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="referralSettings">
<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.settings.description"), $this);?>
</div>

<div class="separator"></div>

<br />

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'exclusions','key' => "plugins.generic.referral.excusions"), $this);?>
</td>
		<td width="80%" class="value">
			<textarea id="exclusions" name="exclusions" cols="40" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['exclusions'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
			<br/>
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.exclusions.description"), $this);?>
</span>
		</td>
	</tr>
</table>

<br/>

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/><input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="history.go(-1)"/>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>