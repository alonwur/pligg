<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:53:37 PDT */ ?>



<?php echo '
<script>
var RecaptchaOptions = {
   theme : \'white\',


   tabindex : 16
};
</script>
'; ?>




<?php if (isset ( $this->_vars['register_captcha_error'] )): ?><br /><div class="error"><?php echo $this->_vars['register_captcha_error']; ?>
</div><br /><?php endif;  
	require_once(captcha_captchas_path . '/reCaptcha/libs/recaptchalib.php');
	$publickey = get_misc_data('reCaptcha_pubkey'); // you got this from the signup page
	echo recaptcha_get_html($publickey);
?>
