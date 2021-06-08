<?php /* Smarty version 2.6.26, created on 2019-09-20 15:02:15
         compiled from subscription/subscriptionForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'subscription/subscriptionForm.tpl', 19, false),array('function', 'fieldLabel', 'subscription/subscriptionForm.tpl', 65, false),array('function', 'html_options_translate', 'subscription/subscriptionForm.tpl', 67, false),array('function', 'html_select_date', 'subscription/subscriptionForm.tpl', 80, false),)), $this); ?>

<script type="text/javascript">
<!--
<?php echo '
function chooseEndDate() {
	var lengths = {'; ?>

				<?php $_from = $this->_tpl_vars['subscriptionTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subscriptionType']):
?>
			<?php if (! $this->_tpl_vars['subscriptionType']->getNonExpiring()): ?>
				<?php echo $this->_tpl_vars['subscriptionType']->getTypeId(); ?>
: "<?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getDuration())) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
",
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	<?php echo '};

	var subscriptionForm = document.getElementById(\'subscriptionForm\');
	var selectedTypeIndex = subscriptionForm.typeId.selectedIndex;
	var selectedTypeId = subscriptionForm.typeId.options[selectedTypeIndex].value;

	if (typeof(lengths[selectedTypeId]) != "undefined") {
		var duration = lengths[selectedTypeId];
		var dateStart = new Date(
			subscriptionForm.dateStartYear.options[subscriptionForm.dateStartYear.selectedIndex].value,
			subscriptionForm.dateStartMonth.options[subscriptionForm.dateStartMonth.selectedIndex].value - 1,
			subscriptionForm.dateStartDay.options[subscriptionForm.dateStartDay.selectedIndex].value,
			0, 0, 0
		);
		var dateEnd = dateStart;

		var months = duration % 12;
		var years = Math.floor(duration / 12);

		if (months + dateStart.getMonth() > 11) {
			dateEnd.setFullYear(dateStart.getFullYear()+1);
		}
		dateEnd.setFullYear(dateEnd.getFullYear() + years);
		dateEnd.setMonth((dateStart.getMonth() + months) % 12);

		// dateEnd now contains the calculated date of the subscription expiry.
		subscriptionForm.dateEndDay.selectedIndex = dateEnd.getDate() - 1;
		subscriptionForm.dateEndMonth.selectedIndex = dateEnd.getMonth();

		var i;
		for (i=0; i < subscriptionForm.dateEndYear.length; i++) {
			if (subscriptionForm.dateEndYear.options[i].value == dateEnd.getFullYear()) {
				subscriptionForm.dateEndYear.selectedIndex = i;
				break;
			}
		}
	}
}
'; ?>

// -->
</script>

<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'status','required' => 'true','key' => "manager.subscriptions.form.status"), $this);?>
</td>
	<td width="80%" class="value"><select name="status" id="status" class="selectMenu">
	<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['validStatus'],'selected' => $this->_tpl_vars['status']), $this);?>

	</select></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'typeId','required' => 'true','key' => "manager.subscriptions.form.typeId"), $this);?>
</td>
	<td class="value"><select name="typeId" id="typeId" class="selectMenu" onchange="chooseEndDate()">
		<?php $_from = $this->_tpl_vars['subscriptionTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subscriptionType']):
?>
			<option value="<?php echo $this->_tpl_vars['subscriptionType']->getTypeId(); ?>
"<?php if ($this->_tpl_vars['typeId'] == $this->_tpl_vars['subscriptionType']->getTypeId()): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['subscriptionType']->getSummaryString())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
	</select></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateStart','key' => "manager.subscriptions.form.dateStart"), $this);?>
</td>
	<td class="value" id="dateStart"><?php echo smarty_function_html_select_date(array('prefix' => 'dateStart','all_extra' => "class=\"selectMenu\" onchange=\"chooseEndDate()\"",'start_year' => ($this->_tpl_vars['yearOffsetPast']),'end_year' => ($this->_tpl_vars['yearOffsetFuture']),'time' => ($this->_tpl_vars['dateStart'])), $this);?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateEnd','key' => "manager.subscriptions.form.dateEnd"), $this);?>
</td>
	<td class="value" id="dateEnd">
		<?php echo smarty_function_html_select_date(array('prefix' => 'dateEnd','start_year' => ($this->_tpl_vars['yearOffsetPast']),'all_extra' => "class=\"selectMenu\"",'end_year' => ($this->_tpl_vars['yearOffsetFuture']),'time' => ($this->_tpl_vars['dateEnd'])), $this);?>

		<input type="hidden" name="dateEndHour" value="23" />
		<input type="hidden" name="dateEndMinute" value="59" />
		<input type="hidden" name="dateEndSecond" value="59" />
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'membership','key' => "manager.subscriptions.form.membership"), $this);?>
</td>
	<td class="value">
		<input type="text" name="membership" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['membership'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="membership" size="30" maxlength="40" class="textField" />
	</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'referenceNumber','key' => "manager.subscriptions.form.referenceNumber"), $this);?>
</td>
	<td class="value">
		<input type="text" name="referenceNumber" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['referenceNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="referenceNumber" size="30" maxlength="40" class="textField" />
	</td>
</tr>