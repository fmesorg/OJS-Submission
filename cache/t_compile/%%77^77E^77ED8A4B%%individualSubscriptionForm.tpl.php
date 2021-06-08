<?php /* Smarty version 2.6.26, created on 2019-09-20 15:02:15
         compiled from subscription/individualSubscriptionForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'subscription/individualSubscriptionForm.tpl', 14, false),array('function', 'fieldLabel', 'subscription/individualSubscriptionForm.tpl', 35, false),array('function', 'form_language_chooser', 'subscription/individualSubscriptionForm.tpl', 42, false),array('function', 'translate', 'subscription/individualSubscriptionForm.tpl', 43, false),array('function', 'icon', 'subscription/individualSubscriptionForm.tpl', 69, false),array('modifier', 'to_array', 'subscription/individualSubscriptionForm.tpl', 14, false),array('modifier', 'assign', 'subscription/individualSubscriptionForm.tpl', 14, false),array('modifier', 'escape', 'subscription/individualSubscriptionForm.tpl', 27, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageCrumbTitle', ($this->_tpl_vars['subscriptionTitle'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['subscriptionId']): ?><?php echo ''; ?><?php $this->assign('pageTitle', "manager.subscriptions.edit"); ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSubscription','path' => ((is_array($_tmp='individual')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['subscriptionId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['subscriptionId'])),'userId' => $this->_tpl_vars['userId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('pageTitle', "manager.subscriptions.create"); ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createSubscription','path' => 'individual','userId' => $this->_tpl_vars['userId']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('pageId', "manager.subscriptions.individualSubscriptionForm"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<br/>

<form method="post" id="subscriptionForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateSubscription','path' => 'individual'), $this);?>
">
<?php if ($this->_tpl_vars['subscriptionId']): ?>
<input type="hidden" name="subscriptionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php if ($this->_tpl_vars['subscriptionId']): ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSubscription','path' => ((is_array($_tmp='individual')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['subscriptionId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['subscriptionId'])),'userId' => $this->_tpl_vars['userId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'formUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'formUrl'));?>

			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createSubscription','path' => 'individual','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'formUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'formUrl'));?>

			<?php endif; ?>
			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'subscriptionForm','url' => $this->_tpl_vars['formUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "subscription/subscriptionForm.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (! $this->_tpl_vars['subscriptionId']): ?>
	<script type="text/javascript">
	<!--
	chooseEndDate();
	// -->
	</script>
<?php endif; ?>
</table>

<br />
<div class="separator"></div>
<br />

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userId','required' => 'true','key' => "manager.subscriptions.form.userId"), $this);?>
</td>
	<td width="80%" class="value">
		<?php $this->assign('emailString', ($this->_tpl_vars['userFullName'])." <".($this->_tpl_vars['userEmail']).">"); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['emailString'])) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'redirectUrl' => $this->_tpl_vars['currentUrl']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

		<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
&nbsp;&nbsp;<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['url']), $this);?>
&nbsp;&nbsp;<a href="<?php if ($this->_tpl_vars['subscriptionId']): ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber','path' => 'individual','subscriptionId' => $this->_tpl_vars['subscriptionId']), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'selectSubscriber','path' => 'individual'), $this);?>
<?php endif; ?>" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.select"), $this);?>
</a>
		<input type="hidden" name="userId" id="userId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
	</td>
</tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "subscription/subscriptionFormUser.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>

<br />
<div class="separator"></div>
<br />

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'notes','key' => "manager.subscriptions.form.notes"), $this);?>
</td>
	<td width="80%" class="value"><textarea name="notes" id="notes" cols="40" rows="6" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['notes'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['subscriptionId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.form.saveAndCreateAnother"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions','path' => 'individual','escape' => false), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
