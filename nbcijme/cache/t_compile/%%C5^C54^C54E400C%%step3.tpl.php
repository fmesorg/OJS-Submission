<?php /* Smarty version 2.6.26, created on 2012-07-30 23:41:14
         compiled from author/submit/step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'author/submit/step3.tpl', 20, false),array('function', 'fieldLabel', 'author/submit/step3.tpl', 43, false),array('function', 'form_language_chooser', 'author/submit/step3.tpl', 52, false),array('function', 'translate', 'author/submit/step3.tpl', 53, false),array('function', 'html_options', 'author/submit/step3.tpl', 108, false),array('modifier', 'escape', 'author/submit/step3.tpl', 21, false),array('modifier', 'assign', 'author/submit/step3.tpl', 45, false),)), $this); ?>
<?php if ($this->_tpl_vars['showPaperSteps']): ?>
	<?php $this->assign('pageTitle', "author.submit.step3"); ?>
<?php else: ?>
	<?php $this->assign('pageTitle', "author.submit.step3AbstOnly"); ?>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "author/submit/submitHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="separator"></div>

<form name="submit" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSubmit','path' => $this->_tpl_vars['submitStep']), $this);?>
">
<input type="hidden" name="paperId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['paperId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script type="text/javascript">
<!--
// Move author up/down
function moveAuthor(dir, authorIndex) {
	var form = document.submit;
	form.moveAuthor.value = 1;
	form.moveAuthorDir.value = dir;
	form.moveAuthorIndex.value = authorIndex;
	form.submit();
}
// -->
</script>
'; ?>


<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
<div id="locales">
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submit','path' => '3','paperId' => $this->_tpl_vars['paperId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submitFormUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submitFormUrl'));?>

						<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['authorIndex'] => $this->_tpl_vars['author']):
?>
				<?php $_from = $this->_tpl_vars['author']['biography']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisLocale'] => $this->_tpl_vars['thisBiography']):
?>
					<?php if ($this->_tpl_vars['thisLocale'] != $this->_tpl_vars['formLocale']): ?><input type="hidden" name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][biography][<?php echo ((is_array($_tmp=$this->_tpl_vars['thisLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['thisBiography'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /><?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'submit','url' => $this->_tpl_vars['submitFormUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
</table>
</div>
<?php endif; ?>

<div id="authors">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "paper.authors"), $this);?>
</h3>

<input type="hidden" name="deletedAuthors" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['deletedAuthors'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<input type="hidden" name="moveAuthor" value="0" />
<input type="hidden" name="moveAuthorDir" value="" />
<input type="hidden" name="moveAuthorIndex" value="" />

<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['authorIndex'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
<input type="hidden" name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][authorId]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['authorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<input type="hidden" name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][seq]" value="<?php echo $this->_tpl_vars['authorIndex']+1; ?>
" />
<?php if ($this->_foreach['authors']['total'] <= 1): ?>
<input type="hidden" name="primaryContact" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php endif; ?>

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-firstName",'required' => 'true','key' => "user.firstName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][firstName]" id="authors-<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-middleName",'key' => "user.middleName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][middleName]" id="authors-<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-lastName",'required' => 'true','key' => "user.lastName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][lastName]" id="authors-<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="90" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-email",'required' => 'true','key' => "user.email"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][email]" id="authors-<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-url",'key' => "user.url"), $this);?>
</td>
	<td class="value"><input type="text" name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][url]" id="authors-<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-affiliation",'key' => "user.affiliation"), $this);?>
</td>
	<td width="80%" class="value">
		<textarea name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][affiliation]" class="textArea" id="authors-<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-affiliation" rows="5" cols="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea><br/>
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation.description"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-country",'key' => "common.country"), $this);?>
</td>
	<td width="80%" class="value">
		<select name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][country]" id="authors-<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-country" class="selectMenu">
			<option value=""></option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['author']['country']), $this);?>

		</select>
	</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-".($this->_tpl_vars['authorIndex'])."-biography",'key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
	<td width="80%" class="value"><textarea name="authors[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][biography][<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" class="textArea" id="authors-<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-biography" rows="5" cols="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']['biography'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
<?php if ($this->_foreach['authors']['total'] > 1): ?>
<tr valign="top">
	<td colspan="2">
		<a href="javascript:moveAuthor('u', '<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
')" class="action">&uarr;</a> <a href="javascript:moveAuthor('d', '<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
')" class="action">&darr;</a><br/>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.reorderInstructions"), $this);?>

	</td>
</tr>
<tr valign="top">
	<td width="80%" class="value" colspan="2"><input type="radio" name="primaryContact" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['primaryContact'] == $this->_tpl_vars['authorIndex']): ?> checked="checked"<?php endif; ?> /> <label for="primaryContact"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.selectPrincipalContact"), $this);?>
</label> <input type="submit" name="delAuthor[<?php echo ((is_array($_tmp=$this->_tpl_vars['authorIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.deleteAuthor"), $this);?>
" class="button" /></td>
</tr>
<tr>
	<td colspan="2"><br/></td>
</tr>
<?php endif; ?>
</table>
<?php endforeach; else: ?>
<input type="hidden" name="authors[0][authorId]" value="0" />
<input type="hidden" name="primaryContact" value="0" />
<input type="hidden" name="authors[0][seq]" value="1" />
<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-firstName",'required' => 'true','key' => "user.firstName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][firstName]" id="authors-0-firstName" size="20" maxlength="40" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-middleName",'key' => "user.middleName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][middleName]" id="authors-0-middleName" size="20" maxlength="40" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-lastName",'required' => 'true','key' => "user.lastName"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][lastName]" id="authors-0-lastName" size="20" maxlength="90" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-affiliation",'key' => "user.affiliation"), $this);?>
</td>
	<td width="80%" class="value">
		<textarea class="textArea" name="authors[0][affiliation]" id="authors-0-affiliation" rows="5" cols="40"></textarea><br/>
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation.description"), $this);?>
</span>
	</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-country",'key' => "common.country"), $this);?>
</td>
	<td width="80%" class="value">
		<select name="authors[0][country]" id="authors-0-country" class="selectMenu">
			<option value=""></option>
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['countries']), $this);?>

		</select>
	</td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-email",'required' => 'true','key' => "user.email"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][email]" id="authors-0-email" size="30" maxlength="90" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-url",'required' => 'true','key' => "user.url"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="authors[0][url]" id="authors-0-url" size="30" maxlength="90" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "authors-0-biography",'key' => "user.biography"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
</td>
	<td width="80%" class="value"><textarea name="authors[0][biography]" class="textArea" id="authors-0-biography[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" rows="5" cols="40"></textarea></td>
</tr>
</table>
<?php endif; unset($_from); ?>

<p><input type="submit" class="button" name="addAuthor" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.addAuthor"), $this);?>
" /></p>
</div>
<div class="separator"></div>

<div id="title">
<?php if ($this->_tpl_vars['collectAbstracts']): ?>
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.titleAndAbstract"), $this);?>
</h3>
<?php else: ?>
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "paper.title"), $this);?>
</h3>
<?php endif; ?>

<table width="100%" class="data">

<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "paper.title"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="title[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>

<?php if ($this->_tpl_vars['collectAbstracts']): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abstract','key' => "paper.abstract",'required' => 'true'), $this);?>
</td>
	<td width="80%" class="value"><textarea name="abstract[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="abstract" class="textArea" rows="15" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['abstract'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
<?php endif; ?>
</table>
</div>
<div class="separator"></div>

<div id="indexing">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.indexing"), $this);?>
</h3>

<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('metaDiscipline') || $this->_tpl_vars['currentSchedConf']->getSetting('metaSubjectClass') || $this->_tpl_vars['currentSchedConf']->getSetting('metaSubject') || $this->_tpl_vars['currentSchedConf']->getSetting('metaCoverage') || $this->_tpl_vars['currentSchedConf']->getSetting('metaType')): ?><p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionIndexingDescription"), $this);?>
</p><?php endif; ?>

<table width="100%" class="data">
<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('metaDiscipline')): ?>
<tr valign="top">
	<td<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaDisciplineExamples') != ''): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'discipline','key' => "paper.discipline"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="discipline[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="discipline" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['discipline'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" /></td>
</tr>
<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaDisciplineExamples') != ''): ?>
<tr valign="top">
	<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaDisciplineExamples'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</span></td>
</tr>
<?php endif; ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('metaSubjectClass')): ?>
<tr valign="top">
	<td rowspan="2" width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subjectClass','key' => "paper.subjectClassification"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="subjectClass[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="subjectClass" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subjectClass'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" /></td>
</tr>
<tr valign="top">
	<td width="20%" class="label"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('metaSubjectClassUrl'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaSubjectClassTitle'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('metaSubject')): ?>
<tr valign="top">
	<td<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaSubjectExamples') != ''): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "paper.subject"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="subject[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" /></td>
</tr>
<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaSubjectExamples') != ''): ?>
<tr valign="top">
	<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaSubjectExamples'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</span></td>
</tr>
<?php endif; ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('metaCoverage')): ?>
<tr valign="top">
	<td<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaCoverageGeoExamples') != ''): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverageGeo','key' => "paper.coverageGeo"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="coverageGeo[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="coverageGeo" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverageGeo'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" /></td>
</tr>
<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaCoverageGeoExamples') != ''): ?>
<tr valign="top">
	<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaCoverageGeoExamples'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</span></td>
</tr>
<?php endif; ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr valign="top">
	<td<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaCoverageChronExamples') != ''): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverageChron','key' => "paper.coverageChron"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="coverageChron[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="coverageChron" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverageChron'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" /></td>
</tr>
<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaCoverageChronExamples') != ''): ?>
<tr valign="top">
	<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaCoverageChronExamples'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</span></td>
</tr>
<?php endif; ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr valign="top">
	<td<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaCoverageResearchSampleExamples') != ''): ?> rowspan="2"<?php endif; ?> width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverageSample','key' => "paper.coverageSample"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="coverageSample[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="coverageSample" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverageSample'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" /></td>
</tr>
<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaCoverageResearchSampleExamples') != ''): ?>
<tr valign="top">
	<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaCoverageResearchSampleExamples'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</span></td>
</tr>
<?php endif; ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('metaType')): ?>
<tr valign="top">
	<td width="20%" <?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaTypeExamples') != ''): ?>rowspan="2" <?php endif; ?>class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'type','key' => "paper.type"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="type[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="type" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['type'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" /></td>
</tr>

<?php if ($this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaTypeExamples') != ''): ?>
<tr valign="top">
	<td><span class="instruct"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getLocalizedSetting('metaTypeExamples'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</span></td>
</tr>
<?php endif; ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<?php endif; ?>

<tr valign="top">
	<td rowspan="2" width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'language','key' => "paper.language"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="language" id="language" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['language'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="10" /></td>
</tr>
<tr valign="top">
	<td><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.languageInstructions"), $this);?>
</span></td>
</tr>
</table>
</div>
<div class="separator"></div>

<div id="supportingAgencies">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionSupportingAgencies"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionSupportingAgenciesDescription"), $this);?>
</p>

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sponsor','key' => "submission.agencies"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" class="textField" name="sponsor[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="sponsor" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" /></td>
</tr>
</table>
</div>
<div class="separator"></div>

<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('metaCitations')): ?>
<div id="metaCitations">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.submissionCitations"), $this);?>
</p>

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'citations','key' => "submission.citations"), $this);?>
</td>
	<td width="80%" class="value"><textarea name="citations" id="citations" class="textArea" rows="15" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['citations'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
</table>
</div>

<div class="separator"></div>
<?php endif; ?>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="confirmAction('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'author'), $this);?>
', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.cancelSubmission"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php if ($this->_tpl_vars['scrollToAuthor']): ?>
	<?php echo '
	<script type="text/javascript">
		var authors = document.getElementById(\'authors\');
		authors.scrollIntoView(false);
	</script>
	'; ?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>