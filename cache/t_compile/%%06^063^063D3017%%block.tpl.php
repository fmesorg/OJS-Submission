<?php /* Smarty version 2.6.26, created on 2018-04-02 17:01:52
         compiled from file:/var/www/html/ijmewp/submission/plugins/blocks/user/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ijmewp/submission/plugins/blocks/user/block.tpl', 16, false),array('function', 'url', 'file:/var/www/html/ijmewp/submission/plugins/blocks/user/block.tpl', 20, false),array('modifier', 'escape', 'file:/var/www/html/ijmewp/submission/plugins/blocks/user/block.tpl', 17, false),)), $this); ?>
<div class="block after-login" id="sidebarUser">
	<?php if (! $this->_tpl_vars['implicitAuth']): ?>
		<span class="blockTitle">Login</span>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.loggedInAs"), $this);?>

		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong>
		<ul>
			<?php if ($this->_tpl_vars['hasOtherJournals']): ?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.myJournals"), $this);?>
</a></li>
			<?php endif; ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'profile'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.myProfile"), $this);?>
</a></li>
            <li>|</li>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOut'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.logout"), $this);?>
</a></li>
			<?php if ($this->_tpl_vars['userSession']->getSessionVar('signedInAs')): ?>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOutAsUser'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.signOutAsUser"), $this);?>
</a></li>
			<?php endif; ?>
            <div class="clear"></div>
		</ul>
	<?php else: ?>
		<?php if ($this->_tpl_vars['implicitAuth']): ?>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'implicitAuthLogin'), $this);?>
">Journals Login</a>
		<?php else: ?>
			<form method="post" action="<?php echo $this->_tpl_vars['userBlockLoginUrl']; ?>
">
				<table width="100%">
					<tr>
						<td width="65"><label for="sidebar-username"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</label></td>
						<td colspan="2"><input type="text" id="sidebar-username" name="username" value="" size="12" maxlength="32" class="textField" /></td>
					</tr>
					<tr>
						<td><label for="sidebar-password"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.password"), $this);?>
</label></td>
						<td><input type="password" id="sidebar-password" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="12" maxlength="32" class="textField" /></td>
						<td style="width:60px;"><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login"), $this);?>
" class="button" /></td>
					</tr>
					<tr>
						<td colspan="3"><input type="checkbox" id="remember" name="remember" value="1" /> <label class="remember1" for="remember"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.rememberMe"), $this);?>
</label><label class="remember">|&nbsp;<a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/index.php/ijme/user/register">Register</a></label><label class="remember">|&nbsp;<a href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/index.php/ijme/login/lostPassword">Forgot password</a></label></td>
					</tr>
					<tr>
						
					</tr>
				</table>
			</form>
		<?php endif; ?>
	<?php endif; ?>
</div>