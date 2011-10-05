<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/modifier.sanitize.php'); $this->register_modifier("sanitize", "tpl_modifier_sanitize");  require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 06:02:57 PDT */ ?>

<?php if ($this->_vars['pagename'] != "login"): ?>
<div class="headline">
	<div class="sectiontitle"><a href="<?php echo $this->_vars['URL_login']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Login_Title']; ?>
</a></div>
</div>
<div class="boxcontent">
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_widget_login_start"), $this);?>
	<form action="<?php echo $this->_vars['URL_login']; ?>
" method="post"> 
		<?php echo $this->_confs['PLIGG_Visual_Login_Username']; ?>
:<br /><input type="text" name="username" class="login" value="<?php if (isset ( $this->_vars['login_username'] )):  echo $this->_vars['login_username'];  endif; ?>" tabindex="40" /><br />
		<?php echo $this->_confs['PLIGG_Visual_Login_Password']; ?>
:<br /><input type="password" name="password" class="login" tabindex="41" /><br />
		<input type="hidden" name="processlogin" value="1"/>
		<input type="hidden" name="return" value="<?php echo $this->_run_modifier($_GET['return'], 'sanitize', 'plugin', 1, 3); ?>
"/>
		<?php echo $this->_confs['PLIGG_Visual_Login_Remember']; ?>
: <input type="checkbox" name="persistent" tabindex="42" />
		<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Login_LoginButton']; ?>
" class="submit-s" tabindex="43" />
	</form>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_widget_login_end"), $this);?>
</div>
<?php endif; ?>