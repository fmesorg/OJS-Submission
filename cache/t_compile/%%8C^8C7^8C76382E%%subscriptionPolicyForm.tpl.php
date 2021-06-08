<?php /* Smarty version 2.6.26, created on 2019-09-20 15:01:31
         compiled from subscription/subscriptionPolicyForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'subscription/subscriptionPolicyForm.tpl', 17, false),array('function', 'translate', 'subscription/subscriptionPolicyForm.tpl', 17, false),array('function', 'fieldLabel', 'subscription/subscriptionPolicyForm.tpl', 61, false),array('function', 'form_language_chooser', 'subscription/subscriptionPolicyForm.tpl', 64, false),array('function', 'html_options', 'subscription/subscriptionPolicyForm.tpl', 147, false),array('modifier', 'assign', 'subscription/subscriptionPolicyForm.tpl', 63, false),array('modifier', 'escape', 'subscription/subscriptionPolicyForm.tpl', 71, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "manager.subscriptionPolicies"); ?><?php echo ''; ?><?php $this->assign('pageId', "manager.subscriptionPolicies"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionsSummary'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.summary"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions','path' => 'individual'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.individualSubscriptions"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions','path' => 'institutional'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.institutionalSubscriptions"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionTypes'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionTypes"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionPolicies'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'payments'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.payments"), $this);?>
</a></li>
</ul>

<?php if ($this->_tpl_vars['subscriptionPoliciesSaved']): ?>
<br/>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionPoliciesSaved"), $this);?>
<br />
<?php endif; ?>

<form id="subscriptionPolicies" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSubscriptionPolicies'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<script type="text/javascript">
		<?php echo '
		<!--
			function toggleAllowSetDelayedOpenAccessDuration(form) {
				form.delayedOpenAccessDuration.disabled = !form.delayedOpenAccessDuration.disabled;
			}
			function toggleAllowSetBeforeMonthsReminder(form) {
				form.numMonthsBeforeSubscriptionExpiryReminder.disabled = !form.numMonthsBeforeSubscriptionExpiryReminder.disabled;
			}
			function toggleAllowSetBeforeWeeksReminder(form) {
				form.numWeeksBeforeSubscriptionExpiryReminder.disabled = !form.numWeeksBeforeSubscriptionExpiryReminder.disabled;
			}
			function toggleAllowSetAfterMonthsReminder(form) {
				form.numMonthsAfterSubscriptionExpiryReminder.disabled = !form.numMonthsAfterSubscriptionExpiryReminder.disabled;
			}
			function toggleAllowSetAfterWeeksReminder(form) {
				form.numWeeksAfterSubscriptionExpiryReminder.disabled = !form.numWeeksAfterSubscriptionExpiryReminder.disabled;
			}
		// -->
		'; ?>

	</script>

<div id="subscriptionContact">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionContact"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionContactDescription"), $this);?>
</p>
<table width="100%" class="data">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionPolicies','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'subscriptionPoliciesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'subscriptionPoliciesUrl'));?>

			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'subscriptionPolicies','url' => $this->_tpl_vars['subscriptionPoliciesUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionName','key' => "user.name"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionName" id="subscriptionName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="60" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionEmail','key' => "user.email"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionEmail" id="subscriptionEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionPhone','key' => "user.phone"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionPhone" id="subscriptionPhone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionFax','key' => "user.fax"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="subscriptionFax" id="subscriptionFax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subscriptionMailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
		<td width="80%" class="value"><textarea name="subscriptionMailingAddress" id="subscriptionMailingAddress" rows="6" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionMailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
	</tr>
</table>
</div>

<div class="separator"></div>

<div id="additionalInformation">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionAdditionalInformation"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.subscriptionAdditionalInformationDescription"), $this);?>
</p>
<p>
	<textarea name="subscriptionAdditionalInformation[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="subscriptionAdditionalInformation" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionAdditionalInformation'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.htmlInstructions"), $this);?>
</span>
</p>
</div>

<div class="separator"></div>

<div id="expiry">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiry"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryDescription"), $this);?>
</p>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expirySelectOne"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label" align="right">
			<input type="radio" name="subscriptionExpiryPartial" id="subscriptionExpiryPartial-0" value="0"<?php if (! $this->_tpl_vars['subscriptionExpiryPartial']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td width="95%" class="value">
			<strong><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "subscriptionExpiryPartial-0",'key' => "manager.subscriptionPolicies.expiryFull"), $this);?>
</strong>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryFullDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	<tr valign="top">
		<td width="5%" class="label" align="right">
			<input type="radio" name="subscriptionExpiryPartial" id="subscriptionExpiryPartial-1" value="1"<?php if ($this->_tpl_vars['subscriptionExpiryPartial']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td width="95%" class="value">
			<strong><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "subscriptionExpiryPartial-1",'key' => "manager.subscriptionPolicies.expiryPartial"), $this);?>
</strong>
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryPartialDescription"), $this);?>
</span>
		</td>
	</tr>
</table>
</div>

<div class="separator"></div>

<div id="expiryReminders">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryReminders"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryRemindersDescription"), $this);?>
</p>
<p>
	<input type="checkbox" name="enableSubscriptionExpiryReminderBeforeMonths" id="enableSubscriptionExpiryReminderBeforeMonths" value="1" onclick="toggleAllowSetBeforeMonthsReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionExpiryReminderBeforeMonths']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableSubscriptionExpiryReminderBeforeMonths','key' => "manager.subscriptionPolicies.expiryReminderBeforeMonths1"), $this);?>

	<select name="numMonthsBeforeSubscriptionExpiryReminder" id="numMonthsBeforeSubscriptionExpiryReminder" class="selectMenu"<?php if (! $this->_tpl_vars['enableSubscriptionExpiryReminderBeforeMonths'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?>><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validNumMonthsBeforeExpiry'],'selected' => $this->_tpl_vars['numMonthsBeforeSubscriptionExpiryReminder']), $this);?>
</select>
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'numMonthsBeforeSubscriptionExpiryReminder','key' => "manager.subscriptionPolicies.expiryReminderBeforeMonths2"), $this);?>

</p>
<p>
	<input type="checkbox" name="enableSubscriptionExpiryReminderBeforeWeeks" id="enableSubscriptionExpiryReminderBeforeWeeks" value="1" onclick="toggleAllowSetBeforeWeeksReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionExpiryReminderBeforeWeeks']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableSubscriptionExpiryReminderBeforeWeeks','key' => "manager.subscriptionPolicies.expiryReminderBeforeWeeks1"), $this);?>

	<select name="numWeeksBeforeSubscriptionExpiryReminder" id="numWeeksBeforeSubscriptionExpiryReminder" class="selectMenu"<?php if (! $this->_tpl_vars['enableSubscriptionExpiryReminderBeforeWeeks'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?>><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validNumWeeksBeforeExpiry'],'selected' => $this->_tpl_vars['numWeeksBeforeSubscriptionExpiryReminder']), $this);?>
</select>
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'numWeeksBeforeSubscriptionExpiryReminder','key' => "manager.subscriptionPolicies.expiryReminderBeforeWeeks2"), $this);?>

</p>
<p>
	<input type="checkbox" name="enableSubscriptionExpiryReminderAfterWeeks" id="enableSubscriptionExpiryReminderAfterWeeks" value="1" onclick="toggleAllowSetAfterWeeksReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionExpiryReminderAfterWeeks']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableSubscriptionExpiryReminderAfterWeeks','key' => "manager.subscriptionPolicies.expiryReminderAfterWeeks1"), $this);?>

	<select name="numWeeksAfterSubscriptionExpiryReminder" id="numWeeksAfterSubscriptionExpiryReminder" class="selectMenu"<?php if (! $this->_tpl_vars['enableSubscriptionExpiryReminderAfterWeeks'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?>><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validNumWeeksAfterExpiry'],'selected' => $this->_tpl_vars['numWeeksAfterSubscriptionExpiryReminder']), $this);?>
</select>
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'numWeeksAfterSubscriptionExpiryReminder','key' => "manager.subscriptionPolicies.expiryReminderAfterWeeks2"), $this);?>

</p>
<p>
	<input type="checkbox" name="enableSubscriptionExpiryReminderAfterMonths" id="enableSubscriptionExpiryReminderAfterMonths" value="1" onclick="toggleAllowSetAfterMonthsReminder(this.form)"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionExpiryReminderAfterMonths']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableSubscriptionExpiryReminderAfterMonths','key' => "manager.subscriptionPolicies.expiryReminderAfterMonths1"), $this);?>

	<select name="numMonthsAfterSubscriptionExpiryReminder" id="numMonthsAfterSubscriptionExpiryReminder" class="selectMenu"<?php if (! $this->_tpl_vars['enableSubscriptionExpiryReminderAfterMonths'] || ! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled"<?php endif; ?>><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validNumMonthsAfterExpiry'],'selected' => $this->_tpl_vars['numMonthsAfterSubscriptionExpiryReminder']), $this);?>
</select>
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'numMonthsAfterSubscriptionExpiryReminder','key' => "manager.subscriptionPolicies.expiryReminderAfterMonths2"), $this);?>

</p>

<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?>
	<br/>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.expiryRemindersDisabled"), $this);?>

<?php endif; ?>
</div>

<div class="separator"></div>

<div id="onlinePaymentNotifications">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.onlinePaymentNotifications"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.onlinePaymentNotificationsDescription"), $this);?>
</p>
<?php if ($this->_tpl_vars['journalPaymentsEnabled'] && $this->_tpl_vars['acceptSubscriptionPayments']): ?>
<?php $this->assign('paymentsEnabled', true); ?>
<?php endif; ?>
<p>
	<input type="checkbox" name="enableSubscriptionOnlinePaymentNotificationPurchaseIndividual" id="enableSubscriptionOnlinePaymentNotificationPurchaseIndividual" value="1" <?php if (! $this->_tpl_vars['paymentsEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionOnlinePaymentNotificationPurchaseIndividual']): ?> checked="checked"<?php endif; ?> />
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableSubscriptionOnlinePaymentNotificationPurchaseIndividual','key' => "manager.subscriptionPolicies.enableSubscriptionOnlinePaymentNotificationPurchaseIndividual"), $this);?>

</p>
<p>
	<input type="checkbox" name="enableSubscriptionOnlinePaymentNotificationPurchaseInstitutional" id="enableSubscriptionOnlinePaymentNotificationPurchaseInstitutional" value="1" <?php if (! $this->_tpl_vars['paymentsEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionOnlinePaymentNotificationPurchaseInstitutional']): ?> checked="checked"<?php endif; ?> />
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableSubscriptionOnlinePaymentNotificationPurchaseInstitutional','key' => "manager.subscriptionPolicies.enableSubscriptionOnlinePaymentNotificationPurchaseInstitutional"), $this);?>

</p>
<p>
	<input type="checkbox" name="enableSubscriptionOnlinePaymentNotificationRenewIndividual" id="enableSubscriptionOnlinePaymentNotificationRenewIndividual" value="1" <?php if (! $this->_tpl_vars['paymentsEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionOnlinePaymentNotificationRenewIndividual']): ?> checked="checked"<?php endif; ?> />
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableSubscriptionOnlinePaymentNotificationRenewIndividual','key' => "manager.subscriptionPolicies.enableSubscriptionOnlinePaymentNotificationRenewIndividual"), $this);?>

</p>
<p>
	<input type="checkbox" name="enableSubscriptionOnlinePaymentNotificationRenewInstitutional" id="enableSubscriptionOnlinePaymentNotificationRenewInstitutional" value="1" <?php if (! $this->_tpl_vars['paymentsEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableSubscriptionOnlinePaymentNotificationRenewInstitutional']): ?> checked="checked"<?php endif; ?> />
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableSubscriptionOnlinePaymentNotificationRenewInstitutional','key' => "manager.subscriptionPolicies.enableSubscriptionOnlinePaymentNotificationRenewInstitutional"), $this);?>

</p>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.onlinePaymentPurchaseInstitutionalDescription"), $this);?>

<br />
<?php if (! $this->_tpl_vars['paymentsEnabled']): ?>
	<br />
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.onlinePaymentDisabled"), $this);?>

<?php endif; ?>
</div>

<div class="separator"></div>

<div id="openAccessOptions">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.openAccessOptions"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.openAccessOptionsDescription"), $this);?>
</p>

	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.delayedOpenAccess"), $this);?>
</h4>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.delayedOpenAccessDescription"), $this);?>
</p>
	<input type="checkbox" name="enableDelayedOpenAccess" id="enableDelayedOpenAccess" value="1" onclick="toggleAllowSetDelayedOpenAccessDuration(this.form)" <?php if ($this->_tpl_vars['enableDelayedOpenAccess']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableDelayedOpenAccess','key' => "manager.subscriptionPolicies.delayedOpenAccessDescription1"), $this);?>

	<select name="delayedOpenAccessDuration" id="delayedOpenAccessDuration" class="selectMenu" <?php if (! $this->_tpl_vars['enableDelayedOpenAccess']): ?> disabled="disabled"<?php endif; ?>><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validDuration'],'selected' => $this->_tpl_vars['delayedOpenAccessDuration']), $this);?>
</select>
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'delayedOpenAccessDuration','key' => "manager.subscriptionPolicies.delayedOpenAccessDescription2"), $this);?>


	<p>
	<input type="checkbox" name="enableOpenAccessNotification" id="enableOpenAccessNotification" value="1"<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?> disabled="disabled" <?php elseif ($this->_tpl_vars['enableOpenAccessNotification']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableOpenAccessNotification','key' => "manager.subscriptionPolicies.openAccessNotificationDescription"), $this);?>

	<?php if (! $this->_tpl_vars['scheduledTasksEnabled']): ?>
		<br/>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.openAccessNotificationDisabled"), $this);?>

	<?php endif; ?>
	</p>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.delayedOpenAccessPolicyDescription"), $this);?>
</p>
	<p>
	<textarea name="delayedOpenAccessPolicy[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="delayedOpenAccessPolicy" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['delayedOpenAccessPolicy'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.htmlInstructions"), $this);?>
</span>
	</p>

	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.authorSelfArchive"), $this);?>
</h4>
<p>
	<input type="checkbox" name="enableAuthorSelfArchive" id="enableAuthorSelfArchive" value="1"<?php if ($this->_tpl_vars['enableAuthorSelfArchive']): ?> checked="checked"<?php endif; ?> />&nbsp;
	<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableAuthorSelfArchive','key' => "manager.subscriptionPolicies.authorSelfArchiveDescription"), $this);?>

</p>
<p>
	<textarea name="authorSelfArchivePolicy[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="authorSelfArchivePolicy" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorSelfArchivePolicy'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
	<br />
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptionPolicies.htmlInstructions"), $this);?>
</span>
</p>
</div>

<div class="separator"></div>


<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptionPolicies','escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
