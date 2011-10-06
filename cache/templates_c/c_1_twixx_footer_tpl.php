<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format");  require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-06 04:26:23 PDT */ ?>

<br clear="all" />
<!-- START FOOTER -->
		<div id="footer">
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_footer_start"), $this);?>
        	<a href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['URL_base']; ?>
'><?php echo $this->_confs['PLIGG_Visual_Published_News']; ?>
</a>
			| <a href="<?php echo $this->_vars['URL_upcoming']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued']; ?>
</a>
			| <a href="<?php echo $this->_vars['URL_submit']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Submit_A_New_Story']; ?>
</a>
			<?php if ($this->_vars['enable_group'] == "true"): ?>	
				| <a href="<?php echo $this->_vars['URL_groups']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</span></a>
			<?php endif; ?>
			| <a href="<?php echo $this->_vars['URL_advancedsearch']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Search_Advanced']; ?>
</a>
        	| <a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/rssfeeds.php"><?php echo $this->_confs['PLIGG_Visual_RSS_Feeds']; ?>
</a>
        	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_footer_end"), $this);?>
        </div>
        <div id="subfooter">
        	Copyright &copy; <?php echo $this->_run_modifier(time(), 'date_format', 'plugin', 1, "%Y"); ?>
 <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/"><?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</a>
        	&nbsp;|&nbsp; Powered by <a href="http://www.pligg.com/">Pligg CMS</a>
        	&nbsp;|&nbsp; Designed by <a href="http://www.pligg-templates.net/">Pligg Templates</a>
        </div>
<!-- END FOOTER --> 
