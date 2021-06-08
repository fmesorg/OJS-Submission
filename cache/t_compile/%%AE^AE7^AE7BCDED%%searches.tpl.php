<?php /* Smarty version 2.6.26, created on 2021-01-07 21:55:35
         compiled from rtadmin/searches.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'rtadmin/searches.tpl', 18, false),array('function', 'translate', 'rtadmin/searches.tpl', 25, false),array('function', 'page_info', 'rtadmin/searches.tpl', 58, false),array('function', 'page_links', 'rtadmin/searches.tpl', 59, false),array('modifier', 'to_array', 'rtadmin/searches.tpl', 18, false),array('modifier', 'escape', 'rtadmin/searches.tpl', 43, false),array('modifier', 'truncate', 'rtadmin/searches.tpl', 44, false),array('block', 'iterate', 'rtadmin/searches.tpl', 41, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "rt.searches"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<script type="text/javascript">
<?php echo '
$(document).ready(function() { setupTableDND("#dragTable", 
'; ?>

"<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveSearch','path' => ((is_array($_tmp=$this->_tpl_vars['version']->getVersionId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['context']->getContextId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['context']->getContextId()))), $this);?>
"
<?php echo '
); });
'; ?>

</script>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editContext','path' => ((is_array($_tmp=$this->_tpl_vars['version']->getVersionId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['context']->getContextId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['context']->getContextId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.contexts.metadata"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'searches','path' => ((is_array($_tmp=$this->_tpl_vars['version']->getVersionId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['context']->getContextId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['context']->getContextId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.searches"), $this);?>
</a></li>
</ul>

<br />

<div id="searches">

<table class="listing" width="100%" id="dragTable">
	<tr><td class="headseparator" colspan="3">&nbsp;</td></tr>
	<tr valign="top">
		<td class="heading" width="50%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.search.title"), $this);?>
</td>
		<td class="heading" width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.search.url"), $this);?>
</td>
		<td class="heading" width="20%" align="right">&nbsp;</td>
	</tr>
	<tr><td class="headseparator" colspan="3">&nbsp;</td></tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'searches','item' => 'search')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<tr valign="top" class="data" id=search-<?php echo $this->_tpl_vars['search']->getSearchId(); ?>
>
			<td class="drag"><?php echo ((is_array($_tmp=$this->_tpl_vars['search']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
			<td class="drag"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['search']->getUrl())) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 30)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
			<td align="right"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveSearch','path' => ((is_array($_tmp=$this->_tpl_vars['version']->getVersionId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['context']->getContextId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['context']->getContextId())),'id' => $this->_tpl_vars['search']->getSearchId(),'dir' => 'u'), $this);?>
" class="action">&uarr;</a>&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveSearch','path' => ((is_array($_tmp=$this->_tpl_vars['version']->getVersionId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['context']->getContextId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['context']->getContextId())),'id' => $this->_tpl_vars['search']->getSearchId(),'dir' => 'd'), $this);?>
" class="action">&darr;</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSearch','path' => ((is_array($_tmp=$this->_tpl_vars['version']->getVersionId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['context']->getContextId(), $this->_tpl_vars['search']->getSearchId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['context']->getContextId(), $this->_tpl_vars['search']->getSearchId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteSearch','path' => ((is_array($_tmp=$this->_tpl_vars['version']->getVersionId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['context']->getContextId(), $this->_tpl_vars['search']->getSearchId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['context']->getContextId(), $this->_tpl_vars['search']->getSearchId()))), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.searches.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
		</tr>
		<?php if ($this->_tpl_vars['searches']->eof()): ?>
		<tr><td class="endseparator" colspan="3"></td></tr>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php if ($this->_tpl_vars['searches']->wasEmpty()): ?>
		<tr valign="top">
			<td class="nodata" colspan="3"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
		<tr><td class="endseparator" colspan="3"></td></tr>
	<?php else: ?>
		<tr>
			<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['searches']), $this);?>
</td>
			<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'searches','name' => 'searches','iterator' => $this->_tpl_vars['searches']), $this);?>
</td>
		</tr>
	<?php endif; ?>
	</table>
<br/>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createSearch','path' => ((is_array($_tmp=$this->_tpl_vars['version']->getVersionId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['context']->getContextId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['context']->getContextId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.searches.createSearch"), $this);?>
</a><br/>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
