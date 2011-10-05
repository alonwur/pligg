<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:12 PDT */ ?>

							<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_panel_tools_start"), $this);?>
                                                        <img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/icon_raten.gif" align="absmiddle" /> <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_delete_cache.php" class="colorbox_iframe1" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Delete_Cache']; ?>
"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Delete_Cache']; ?>
</a><br />
							<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/manage_config.gif" align="absmiddle"/> <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_optimize_database.php" class="colorbox_iframe1" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Optimize']; ?>
"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Optimize']; ?>
</a><br/>
							<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/backup_db.gif" align="absmiddle"/> <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_backup.php"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Backup_Nav']; ?>
</a><br/>
							<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_panel_tools_end"), $this);?>