<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format");  require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:01 PDT */ ?>

<br clear="all" />
<!-- START FOOTER -->
		<div id="footer">
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_footer_start"), $this);?>
        	<span class="subtext"> Copyright &copy; <?php echo $this->_run_modifier(time(), 'date_format', 'plugin', 1, "%Y"); ?>
 <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
 | Pligg <a href="http://www.pligg.com/" target="_blank">Content Management System</a> | <a href="http://www.pligg.com/hosting/" target="_blank">Cheap Web Hosting</a> | <a href="<?php echo $this->_vars['URL_advancedsearch']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Search_Advanced']; ?>
</a> | <a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/rssfeeds.php"><?php echo $this->_confs['PLIGG_Visual_RSS_Feeds']; ?>
</a> <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_footer_end"), $this);?></span>
        </div>
<!-- END FOOTER --> 
