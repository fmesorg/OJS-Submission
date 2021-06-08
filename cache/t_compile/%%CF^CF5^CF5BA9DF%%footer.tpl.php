<?php /* Smarty version 2.6.26, created on 2019-01-14 13:06:56
         compiled from core:common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'core:common/footer.tpl', 21, false),array('function', 'call_hook', 'core:common/footer.tpl', 33, false),array('function', 'get_debug_info', 'core:common/footer.tpl', 171, false),array('modifier', 'assign', 'core:common/footer.tpl', 58, false),array('modifier', 'escape', 'core:common/footer.tpl', 193, false),array('modifier', 'default', 'core:common/footer.tpl', 193, false),)), $this); ?>

<?php if ($this->_tpl_vars['displayCreativeCommons']): ?>

  <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense"), $this);?>


<?php endif; ?>

<!--<?php if ($this->_tpl_vars['pageFooter']): ?>

  <br /><br />

  <?php echo $this->_tpl_vars['pageFooter']; ?>


<?php endif; ?>-->

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>


<div class="footer-ad-container">
</div>

</div><!-- #content -->

</div><!-- last-2 main -->

</div><!--last-3 main-content end bootstrap span-->



<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::LeftSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'leftSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'leftSidebarCode'));?>




      <?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::RightSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'rightSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'rightSidebarCode'));?>




      <?php if ($this->_tpl_vars['leftSidebarCode'] || $this->_tpl_vars['rightSidebarCode']): ?>



      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/sidebar.css" type="text/css" />



      <?php endif; ?>



      <?php if ($this->_tpl_vars['leftSidebarCode']): ?>



      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/leftSidebar.css" type="text/css" />



      <?php endif; ?>



      <?php if ($this->_tpl_vars['rightSidebarCode']): ?>



      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/rightSidebar.css" type="text/css" />



      <?php endif; ?>



      <?php if ($this->_tpl_vars['leftSidebarCode'] && $this->_tpl_vars['rightSidebarCode']): ?>



      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/bothSidebars.css" type="text/css" />



      <?php endif; ?>

<div class="col-md-3 rightsidebar">

                        <?php if ($this->_tpl_vars['leftSidebarCode'] || $this->_tpl_vars['rightSidebarCode']): ?>

                          <div id="sidebar">

                            <?php if ($this->_tpl_vars['leftSidebarCode']): ?>

                              <div id="leftSidebar">

                                <?php echo $this->_tpl_vars['leftSidebarCode']; ?>


                              </div>

                            <?php endif; ?>

                            <?php if ($this->_tpl_vars['rightSidebarCode']): ?>

                              <div id="rightSidebar">
                        
                                <?php echo $this->_tpl_vars['rightSidebarCode']; ?>

                        <div class="sidebar-ad-container" style="margin: 20px auto; height:100%">
                                                </div>
                              </div>

                            <?php endif; ?>

                          </div>

                        <?php endif; ?>

                      </div>



</div><!--last-4 end bootstrap row col-md-12-->

</div><!--last-5  row body -->



</div><!--last-6 end bootstrap span-->

</div><!--last-7 end bootstrap row-->



<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>


<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>



</div><!--last-8 container -->

<?php if (! empty ( $this->_tpl_vars['systemNotifications'] )): ?>

  <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.notification"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'defaultTitleText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'defaultTitleText'));?>


  <script type="text/javascript">

    <!--

    <?php $_from = $this->_tpl_vars['systemNotifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['notification']):
?>

      <?php echo '

          $.pnotify({

              pnotify_title: \''; ?>
<?php if ($this->_tpl_vars['notification']->getIsLocalized()): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['notification']->getTitle()), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'js')))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['defaultTitleText']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['defaultTitleText']));?>
<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['notification']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'js')))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['defaultTitleText']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['defaultTitleText'])); ?>
<?php endif; ?><?php echo '\',

              pnotify_text: \''; ?>
<?php if ($this->_tpl_vars['notification']->getIsLocalized()): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['notification']->getContents(),'param' => $this->_tpl_vars['notification']->getParam()), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'js'));?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['notification']->getContents())) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'js')); ?>
<?php endif; ?><?php echo '\',

              pnotify_addclass: \''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['notification']->getStyleClass())) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'js')); ?>
<?php echo '\',

              pnotify_notice_icon: \'notifyIcon '; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['notification']->getIconClass())) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'js')); ?>
<?php echo '\'

          });

      '; ?>


    <?php endforeach; endif; unset($_from); ?>

    // -->

  </script>

<?php endif; ?>
</div> <!--last-9 container -->

<!--</div>--><!--end bootstrap container-->
<div class="footer">

	<div class="scroll-to-top">

		<a href="#scroll-to-top"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/images/theme/scroll-to-top-btn.png"></a>		

		<script src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/custom.js?v=1.1"></script>

	</div>

  <div class="container">

      &copy <?php echo '<?php'; ?>
 echo date('Y'); <?php echo '?>'; ?>
. All rights reserved | Designed &amp; Developed by <a class="company-link" href="/about-us/fmes/overview/" target="_blank">FMES</a> | <a class="company-link" href="http://ijme.in/index.php/ijme/pages/view/disclaimer">Disclaimer</a>
  </div>

</div>
    
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<?php echo '
	<script language="javascript">
	<!--
		$(document).ready(function(){
			//setTimeout(setActionOgGooglAds, 5000);
			//setInterval(function(){googletag.pubads().refresh([adsbygoogle]);}, 2000); 
		});
		
		function setActionOgGooglAds(){
			$(\'.i-header-banner\').click(function(){
				$(this).find(\'a\').attr(\'target\',\'_blank\');				
			});
			
			console.log($(\'iframe\').length);
		
			$(\'iframe\').each(function(){
				$(this).find(\'iframe\').each(function(){
					var strURL = $(this).attr(\'src\');
					console.log(strURL);
					$(this).attr(\'src\',strURL);
				});
			});
			
			
			
		}
		 
		 
	-->
	</script>
	'; ?>

</body>





</html>


