<?php /* Smarty version 2.6.26, created on 2018-05-03 16:10:35
         compiled from issue/archive.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'iterate', 'issue/archive.tpl', 55, false),array('modifier', 'escape', 'issue/archive.tpl', 66, false),array('modifier', 'strip_unsafe_html', 'issue/archive.tpl', 75, false),array('modifier', 'nl2br', 'issue/archive.tpl', 75, false),array('function', 'url', 'issue/archive.tpl', 72, false),array('function', 'translate', 'issue/archive.tpl', 72, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "archive.archives"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="issues">
    <?php $this->assign('issue_count', 0); ?>
    <?php $this->_tag_stack[] = array('iterate', array('from' => 'issues','item' => 'issue')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>        
        
	<?php if ($this->_tpl_vars['issue']->getYear() != $this->_tpl_vars['lastYear']): ?>
		<?php if (! $this->_tpl_vars['notFirstYear']): ?>
			<?php $this->assign('notFirstYear', 1); ?>
		<?php else: ?>
			</div>
                        <?php if ($this->_tpl_vars['issue_count']%3 == 0): ?><div style="clear: both;"></div><?php endif; ?>
		<?php endif; ?>
                <?php $this->assign('issue_count', $this->_tpl_vars['issue_count']+1); ?>                
		<div class="cust-col-md-4 <?php if ($this->_tpl_vars['issue_count']%3 == 0): ?>last-col <?php echo $this->_tpl_vars['issue_count']; ?>
<?php endif; ?>">
		<h3 class="issue-archive-year"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h3>
		<?php $this->assign('lastYear', $this->_tpl_vars['issue']->getYear()); ?>
	<?php endif; ?>

	<div class="single-issue" style="clear:left;">
	<?php if ($this->_tpl_vars['issue']->getLocalizedFileName() && $this->_tpl_vars['issue']->getShowCoverPage($this->_tpl_vars['locale']) && ! $this->_tpl_vars['issue']->getHideCoverPageArchives($this->_tpl_vars['locale'])): ?>
		<div class="issueCoverImage"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this);?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getFileName($this->_tpl_vars['locale']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['issue']->getCoverPageAltText($this->_tpl_vars['locale']) != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getCoverPageAltText($this->_tpl_vars['locale']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?> alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.coverPage.altText"), $this);?>
"<?php endif; ?>/></a>
		</div>
		<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h4>
		<div class="issueCoverDescription"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverPageDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
	<?php else: ?>
		<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h4>
		<div class="issueDescription"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
	<?php endif; ?>
	</div>

    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php if ($this->_tpl_vars['notFirstYear']): ?><br /></div><?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
