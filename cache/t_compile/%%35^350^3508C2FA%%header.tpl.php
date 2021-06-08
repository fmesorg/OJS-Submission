<?php /* Smarty version 2.6.26, created on 2018-04-05 15:12:01
         compiled from article/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'article/header.tpl', 19, false),array('function', 'call_hook', 'article/header.tpl', 104, false),array('function', 'url', 'article/header.tpl', 262, false),array('modifier', 'assign', 'article/header.tpl', 19, false),array('modifier', 'escape', 'article/header.tpl', 59, false),array('modifier', 'strip_tags', 'article/header.tpl', 61, false),array('modifier', 'to_array', 'article/header.tpl', 264, false),)), $this); ?>

<?php echo ''; ?><?php if (! $this->_tpl_vars['pageTitleTranslated']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pageCrumbTitle']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageCrumbTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageCrumbTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageCrumbTitleTranslated'));?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['pageCrumbTitleTranslated']): ?><?php echo ''; ?><?php $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['pageTitleTranslated']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>


<!DOCTYPE html>

<html>

  <head>

    <!-- Head start's from here (Note: This is the head section. Directly copy and paste this code)-->

    <!--[if IE]>

		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/ie.css" />

	<![endif]-->

    


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   



    



    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

    <title><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 | <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getFirstAuthor(true))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 | <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</title>

    <meta name="description" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php if ($this->_tpl_vars['article']->getLocalizedSubject()): ?>
        <meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php endif; ?>

    

    <?php echo $this->_tpl_vars['metaCustomHeaders']; ?>


    <?php if ($this->_tpl_vars['displayFavicon']): ?>

      <link rel="icon" href="<?php echo $this->_tpl_vars['faviconDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayFavicon']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" type="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayFavicon']['mimeType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/pkp.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/common.css" type="text/css" />
    
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/compiled.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/articleView.css" type="text/css" />
	<?php if ($this->_tpl_vars['journalRt'] && $this->_tpl_vars['journalRt']->getEnabled()): ?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/rtEmbedded.css" type="text/css" />
	<?php endif; ?>
      
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

      <!-- Bootstrap -->
    <!--commented below line-->
    <!--<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>-->
    <script src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/bootstrap/bootstrap-theme.min.css" type="text/css" />
    <!--<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>

    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">-->

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



      <?php $_from = $this->_tpl_vars['stylesheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>

      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />

      <?php endforeach; endif; unset($_from); ?>



        <!-- Default global locale keys for JavaScript -->

      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/jsLocaleKeys.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



        <!-- Compiled scripts -->

      <?php if ($this->_tpl_vars['useMinifiedJavaScript']): ?>

      <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/pkp.min.js"></script>

      <?php else: ?>

      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/minifiedScripts.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

      <?php endif; ?>



        <!-- Add javascript required for font sizer -->

      <script type="text/javascript">

<?php echo '

<!--

$(function(){

fontSize("#sizer", "body", 9, 16, 32, "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['basePath'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '"); // Initialize the font sizer

});



          '; ?>


        </script>



        



          <?php echo $this->_tpl_vars['additionalHeadData']; ?>

	  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/bootstrap/bootstrap-theme.min.css" type="text/css" />
	  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/bootstrap/custom.css" type="text/css" />
	  
	  <?php echo '
	  <script>
		(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
	  
		ga(\'create\', \'UA-42369332-1\', \'auto\');
		ga(\'send\', \'pageview\');
	  
	  var _gaq = _gaq || [];
	  _gaq.push([\'_setAccount\', \'UA-42369332-1\']);
	  _gaq.push([\'_trackPageview\']);
	  
	  </script>
	  '; ?>

	  
        </head>

        <body>
          <div class="container last-9">
            <div class="last-8">
	      <div class="row header">
		<div class="col-md-5 i-header-logo">
		  <?php if ($this->_tpl_vars['displayPageHeaderLogo'] && is_array ( $this->_tpl_vars['displayPageHeaderLogo'] )): ?>
		    <a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/index.php/ijme/index"><img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" <?php if ($this->_tpl_vars['displayPageHeaderLogoAltText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogoAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeaderLogo.altText"), $this);?>
"<?php endif; ?> /></a>
		  <?php endif; ?>
		  <?php if ($this->_tpl_vars['displayPageHeaderTitle'] && is_array ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?>
		    <a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/index.php/ijme/index"><img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" <?php if ($this->_tpl_vars['displayPageHeaderTitleAltText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitleAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeader.altText"), $this);?>
"<?php endif; ?> /></a>
		  <?php elseif ($this->_tpl_vars['displayPageHeaderTitle']): ?>
		    <?php echo $this->_tpl_vars['displayPageHeaderTitle']; ?>

		  <?php elseif ($this->_tpl_vars['alternatePageHeader']): ?>
		    <?php echo $this->_tpl_vars['alternatePageHeader']; ?>

		  <?php elseif ($this->_tpl_vars['siteTitle']): ?>
		    <?php echo $this->_tpl_vars['siteTitle']; ?>

		  <?php else: ?>
		    <?php echo $this->_tpl_vars['applicationName']; ?>

		  <?php endif; ?>
		</div>
		<div class="col-md-7 i-header-banner">
		  <!-- <a href="http://ijme.in/~ijmein/index.php/ijme/announcement/view/4"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/images/theme/top_banner.jpg"></a> -->
      
	      <?php echo '
		  <ins class="adsbygoogle"
			   style="display:block"
			   data-ad-client="ca-pub-2011095144903626"
			   data-ad-slot="2507395191"
			   data-ad-format="auto"></ins>
		  <script>
		  (adsbygoogle = window.adsbygoogle || []).push({});
		  </script>
		  '; ?>

		  
		</div>
	      </div>  
	      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/navbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <div class="row last-7">
                <div class="col-md-12 last-6">
                  <div id="body last-5">
                    <div class="row last-4">
                      
                      <div class="col-md-9 main-content last-3">
                        <!--start bootstrap span-->
                        <div id="main" class="last-2">
			
			
			
			
			<?php if ($this->_tpl_vars['isSingleArticeView']): ?>
				<div id="breadcrumb">
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this);?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a> &gt;
					<?php if ($this->_tpl_vars['issue']): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this);?>
" target="_parent"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification(false,true))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a> &gt;<?php endif; ?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
" class="current" target="_parent"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getFirstAuthor(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
				</div>
			<?php else: ?>			
                          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/breadcrumbs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
			
			
			<?php if ($this->_tpl_vars['sharingEnabled']): ?>
				<!-- start AddThis -->
				<?php if (isset ( $this->_tpl_vars['sharingDropDownMenu'] )): ?>
					<?php if (isset ( $this->_tpl_vars['sharingUserName'] )): ?>
					<script type="text/javascript">
					    var addthis_pub = '<?php echo $this->_tpl_vars['sharingUserName']; ?>
';
					</script>
					<?php endif; ?>                                   
					<div class="addthis_container">
					    <a href="http://www.addthis.com/bookmark.php"
					    onmouseover="return addthis_open(this, '', '<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingArticleURL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingArticleTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
')"
					    onmouseout="addthis_close()" onclick="return addthis_sendto()"> <img src="<?php echo $this->_tpl_vars['sharingButtonUrl']; ?>
" width="<?php echo $this->_tpl_vars['sharingButtonWidth']; ?>
" height="<?php echo $this->_tpl_vars['sharingButtonHeight']; ?>
" border="0" alt="Bookmark and Share" style="border:0;padding:0" /> </a>
					    <script type="text/javascript" src="http://s7.addthis.com/js/200/addthis_widget.js"></script>
					</div>
				<?php else: ?>
					<a href="http://www.addthis.com/bookmark.php"
					onclick="window.open('http://www.addthis.com/bookmark.php?pub=<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingUserName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
&amp;url=<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingRequestURL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
&amp;title=<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingArticleTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
', 'addthis',
					'scrollbars=yes,menubar=no,width=620,height=520,resizable=yes,toolbar=no,location=no,status=no');
					return false;"
					title="Bookmark using any bookmark manager!" target="_blank"> <img src="<?php echo $this->_tpl_vars['sharingButtonUrl']; ?>
" width="<?php echo $this->_tpl_vars['sharingButtonWidth']; ?>
" height="<?php echo $this->_tpl_vars['sharingButtonHeight']; ?>
" border="0" alt="Bookmark and Share" style="border:0;padding:0" /> </a>
				<?php endif; ?>
				<!-- end AddThis -->
			<?php endif; ?>
                        
			  <!--<h4><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</h4>-->
                         
			 <?php if ($this->_tpl_vars['onlineFirst']): ?>
			 <h4 style='margin-bottom: 0;'>Online First</h4>
			 <?php else: ?>
				<?php if ($this->_tpl_vars['coverPagePath'] || $this->_tpl_vars['pageSubtitle']): ?>
				<div class="row toc-top">
				<div class="col-md-4">
				 <?php if ($this->_tpl_vars['coverPagePath']): ?>
				  <div id="issueCoverImage">
				   <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPagePath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getFileName($this->_tpl_vars['locale']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['coverPageAltText'] != ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?> alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.coverPage.altText"), $this);?>
"<?php endif; ?><?php if ($this->_tpl_vars['width']): ?> width="<?php echo ((is_array($_tmp=$this->_tpl_vars['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['height']): ?> height="<?php echo ((is_array($_tmp=$this->_tpl_vars['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>/>
				  </div>
				 <?php endif; ?>
				</div>
				<div class="col-md-8 toc-titles">			  
				 <?php if ($this->_tpl_vars['pageSubtitle'] && ! $this->_tpl_vars['pageSubtitleTranslated']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageSubtitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageSubtitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageSubtitleTranslated'));?>
<?php endif; ?>
				 <?php if ($this->_tpl_vars['pageSubtitleTranslated']): ?>
				   <h3><?php echo $this->_tpl_vars['pageSubtitleTranslated']; ?>
Online first</h3>
				 <?php endif; ?>
				</div>
				</div>
				<?php endif; ?>
			 <?php endif; ?>
			 
			 
			 
                        <div id="content">


