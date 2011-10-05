<?php
	include_once('sidebar_comments_settings.php');

	// tell pligg what pages this module should be included in
	// pages are <script name> minus .php
	$do_not_include_in_pages = array();
	
	$include_in_pages = array('all');
	if( do_we_load_module() ) {		
		if(is_object($main_smarty)){
			$main_smarty->plugins_dir[] = sidebar_comments_plugins_path;

			module_add_action_tpl('tpl_pligg_sidebar_comments', sidebar_comments_tpl_path . 'sidebar_comments_index.tpl');

		}
	}
?>
