<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 10:09:14 PDT */ ?>

<fieldset>
	<legend><img src="<?php echo $this->_vars['captcha_img_path']; ?>
eye.png" align="absmiddle"/> Captcha</legend>

	<h2>Captcha Settings</h2><br />

	<?php if (isset ( $this->_vars['msg'] )): ?>
		<br />
		<p>
			<b><font color="red"><?php echo $this->_vars['msg']; ?>
</font></b>
		<p>
		<br />
	<?php endif; ?>

	<p>
		<b>Captcha Options</b>
		<ul>
			<li>Captcha in user registration 
				| <?php if ($this->_vars['captcha_reg_enabled'] == true): ?><b>Enabled</b><?php else: ?><a href="module.php?module=captcha&captcha=default&action=EnableReg&value=true">Enable</a><?php endif; ?>
				| <?php if ($this->_vars['captcha_reg_enabled'] == false): ?><b>Disabled</b><?php else: ?><a href="module.php?module=captcha&captcha=default&action=EnableReg&value=false">Disable</a><?php endif; ?>
			</li>
			<li>Captcha in story submission
				| <?php if ($this->_vars['captcha_story_enabled'] == true): ?><b>Enabled</b><?php else: ?><a href="module.php?module=captcha&captcha=default&action=EnableStory&value=true">Enable</a><?php endif; ?>
				| <?php if ($this->_vars['captcha_story_enabled'] == false): ?><b>Disabled</b><?php else: ?><a href="module.php?module=captcha&captcha=default&action=EnableStory&value=false">Disable</a><?php endif; ?>
			</li>
			<li>Captcha in comment submission 
				| <?php if ($this->_vars['captcha_comment_enabled'] == true): ?><b>Enabled</b><?php else: ?><a href="module.php?module=captcha&captcha=default&action=EnableComment&value=true">Enable</a><?php endif; ?>
				| <?php if ($this->_vars['captcha_comment_enabled'] == false): ?><b>Disabled</b><?php else: ?><a href="module.php?module=captcha&captcha=default&action=EnableComment&value=false">Disable</a><?php endif; ?>
			</li>
		</ul>
	</p>
	<br />
	<p>
		<b>Available Captchas</b>
		<ul>
			<li>reCaptcha | <?php if ($this->_vars['captcha_method'] == "reCaptcha"): ?><b>In Use</b><?php else: ?><a href="module.php?module=captcha&captcha=reCaptcha&action=enable">Enable</a><?php endif; ?> | <a href="module.php?module=captcha&captcha=reCaptcha&action=configure">Configure</a></li>
			<li>WhiteHat Method | <?php if ($this->_vars['captcha_method'] == "WhiteHat"): ?><b>In Use</b><?php else: ?><a href="module.php?module=captcha&captcha=WhiteHat&action=enable">Enable</a><?php endif; ?> | <a href="module.php?module=captcha&captcha=WhiteHat&action=configure">Configure</a></li>
			<li>Math Question | <?php if ($this->_vars['captcha_method'] == "math"): ?><b>In Use</b><?php else: ?><a href="module.php?module=captcha&captcha=math&action=enable">Enable</a><?php endif; ?> | <a href="module.php?module=captcha&captcha=math&action=configure">Configure</a></li>
		</ul>
	<p>


</fieldset>
