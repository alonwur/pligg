<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:01 PDT */ ?>

<!-- START ABOUT -->
        	<div class="headline">
            	<div class="sectiontitle"><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/page.php?page=about"><?php echo $this->_confs['PLIGG_Visual_What_Is_Pligg']; ?>
</a></div>
            </div>
            <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_widget_about_start"), $this);?>
            <div id="aboutcontent">
                <?php echo $this->_confs['PLIGG_Visual_What_Is_Pligg_Text']; ?>

                <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_widget_about_end"), $this);?>
            </div>
<!-- END ABOUT -->