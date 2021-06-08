<?php /* Smarty version 2.6.26, created on 2019-09-20 15:02:15
         compiled from subscription/subscriptionFormUser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'subscription/subscriptionFormUser.tpl', 12, false),array('function', 'fieldLabel', 'subscription/subscriptionFormUser.tpl', 15, false),array('function', 'html_options_translate', 'subscription/subscriptionFormUser.tpl', 38, false),array('function', 'html_options', 'subscription/subscriptionFormUser.tpl', 85, false),array('modifier', 'escape', 'subscription/subscriptionFormUser.tpl', 16, false),)), $this); ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.form.userProfileInstructions"), $this);?>
</span></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userSalutation','key' => "user.salutation"), $this);?>
</td>
	<td class="value"><input type="text" name="userSalutation" id="userSalutation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userSalutation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userFirstName','required' => 'true','key' => "user.firstName"), $this);?>
</td>
	<td class="value"><input type="text" name="userFirstName" id="userFirstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userFirstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userMiddleName','key' => "user.middleName"), $this);?>
</td>
	<td class="value"><input type="text" name="userMiddleName" id="userMiddleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userMiddleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userLastName','required' => 'true','key' => "user.lastName"), $this);?>
</td>
	<td class="value"><input type="text" name="userLastName" id="userLastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userLastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userInitials','key' => "user.initials"), $this);?>
</td>
	<td class="value"><input type="text" name="userInitials" id="userInitials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userInitials'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="5" class="textField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.initialsExample"), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('suppressId' => 'true','name' => 'userGender','key' => "user.gender"), $this);?>
</td>
	<td class="value">
		<select name="userGender" id="userGender" size="1" class="selectMenu">
			<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['genderOptions'],'selected' => $this->_tpl_vars['userGender']), $this);?>

		</select>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userAffiliation','key' => "user.affiliation"), $this);?>
</td>
	<td class="value">
		<textarea name="userAffiliation[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="userAffiliation" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['userAffiliation'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea><br/>
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation.description"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userUrl','key' => "user.url"), $this);?>
</td>
	<td class="value"><input type="text" name="userUrl" id="userUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userEmail','required' => 'true','key' => "user.email"), $this);?>
</td>
	<td class="value"><input type="text" name="userEmail" id="userEmail" value="<?php if ($this->_tpl_vars['userEmail']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['userEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>" size="30" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<table width="100%">
			<tr valign="top">
				<td width="5%"><input type="checkbox" name="notifyEmail" id="notifyEmail" value="1"<?php if ($this->_tpl_vars['notifyEmail']): ?> checked="checked"<?php endif; ?> /></td>
				<td width="95%"><label for="notifyEmail"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.subscriptions.form.notifyEmail"), $this);?>
</label></td>
			</tr>
		</table>
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userPhone','key' => "user.phone"), $this);?>
</td>
	<td class="value"><input type="text" name="userPhone" id="userPhone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userFax','key' => "user.fax"), $this);?>
</td>
	<td class="value"><input type="text" name="userFax" id="userFax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userMailingAddress','key' => "common.mailingAddress"), $this);?>
</td>
	<td class="value"><textarea name="userMailingAddress" id="userMailingAddress" rows="3" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['userMailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userCountry','key' => "common.country"), $this);?>
</td>
	<td class="value">
		<select name="userCountry" id="userCountry" class="selectMenu">
			<option value=""></option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['validCountries'],'selected' => $this->_tpl_vars['userCountry']), $this);?>

		</select>
	</td>
</tr>
