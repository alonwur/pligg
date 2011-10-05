<?php
// The source code packaged with this file is Free Software, Copyright (C) 2005 by
// Ricardo Galli <gallir at uib dot es>.
// It's licensed under the AFFERO GENERAL PUBLIC LICENSE unless stated otherwise.
// You can get copies of the licenses here:
// 		http://www.affero.org/oagpl.html
// AFFERO GENERAL PUBLIC LICENSE is also included in the file called "COPYING".

include_once('Smarty.class.php');
$main_smarty = new Smarty;

include('config.php');
include(mnminclude.'html1.php');
include(mnminclude.'link.php');
include(mnminclude.'tags.php');
include(mnminclude.'user.php');
include(mnminclude.'csrf.php');
include(mnminclude.'smartyvariables.php');

// sidebar
$main_smarty = do_sidebar($main_smarty);

// pagename	
define('pagename', 'page'); 
$main_smarty->assign('pagename', pagename);

if($_REQUEST['page']){
	global $db, $main_smarty;
	$page = $db->escape(sanitize($_REQUEST['page'],4));
	$sql = (" SELECT * from ".table_links." where link_title_url='$page' and link_status='page'");
	$page_id=$db->get_results($sql);
	if($page_id){
		foreach($page_id as $page_results){
			$main_smarty->assign('page_title' , $page_results->link_title);
			$main_smarty->assign('meta_keywords' , $page_results->link_field1);
			$main_smarty->assign('meta_description' , $page_results->link_field2);
			$main_smarty->assign('page_content' , $page_results->link_content);
			$main_smarty->assign('posttitle', $page_results->link_title);
			$main_smarty->assign('link_id', $page_results->link_id);
		}
	}
}

// show the template
$main_smarty->assign('tpl_center', $the_template . '/page_center');
$main_smarty->display($the_template . '/pligg.tpl');

?>

