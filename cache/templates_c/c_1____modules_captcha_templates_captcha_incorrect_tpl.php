<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:51:02 PDT */ ?>

<?php $this->config_load(captcha_lang_conf, null, null); ?>
<?php if ($this->_vars['submit_error'] == 'register_captcha_error'): ?>
	<div class="error"><?php echo $this->_confs['PLIGG_Captcha_Incorrect']; ?>
</div>
	<br/>
	<?php $this->config_load(captcha_pligg_lang_conf, null, null); ?>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

