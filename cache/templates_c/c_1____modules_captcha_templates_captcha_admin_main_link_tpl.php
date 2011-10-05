<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:12 PDT */ ?>

<?php $this->config_load(captcha_lang_conf, null, null); ?>
<img src="<?php echo $this->_vars['captcha_img_path']; ?>
eye.png" align="absmiddle"/> <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=captcha"><?php echo $this->_confs['PLIGG_Captcha_BreadCrumb']; ?>
</a><br/>
<?php $this->config_load(captcha_pligg_lang_conf, null, null); ?>