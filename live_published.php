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
include(mnminclude.'smartyvariables.php');

// breadcrumbs and page title
$navwhere['text1'] = $main_smarty->get_config_vars('PLIGG_Visual_Breadcrumb_Live');
$navwhere['link1'] = getmyurl('live', '');
$navwhere['text2'] = $main_smarty->get_config_vars('PLIGG_Visual_Breadcrumb_Published');
$navwhere['link2'] = getmyurl('live_published', '');
$main_smarty->assign('navbar_where', $navwhere);
$main_smarty->assign('posttitle', $main_smarty->get_config_vars('PLIGG_Visual_Breadcrumb_Published'));

// figure out what "page" of the results we're on
$offset = (get_current_page() - 1) * $top_users_size;

// always check groups (to hide private groups)
$from = " LEFT JOIN ".table_groups." ON ".table_links.".link_group_id = ".table_groups.".group_id ";
$groups = $db->get_results("SELECT * FROM " . table_group_member . " WHERE member_user_id = {$current_user->user_id} and member_status = 'active'");
if($groups)
{
    $group_ids = array();
    foreach($groups as $group)
	$group_ids[] = $group->member_group_id;
    $group_list = join(",",$group_ids);
    $where = " AND (".table_groups.".group_privacy!='private' OR ISNULL(".table_groups.".group_privacy) OR ".table_groups.".group_id IN($group_list)) ";
}
else
{
    $group_list = '';
    $where = " AND (".table_groups.".group_privacy!='private' OR ISNULL(".table_groups.".group_privacy))";
}

$select = "SELECT * ";
$from_where = " FROM " . table_links . " 
		LEFT JOIN " . table_users . " ON link_author=user_id 
		$from
		WHERE link_status = 'published' $where";
$order_by = " ORDER BY link_published_date DESC, link_date DESC";

// pagename
define('pagename', 'live_published');
$main_smarty->assign('pagename', pagename);

// get the data to be displayed
$rows = $db->get_var("SELECT count(*) as count $from_where $order_by");
$stories = $db->get_results("$select $from_where $order_by LIMIT $offset,$top_users_size");

$link = new Link;
//$user = new User;
if($stories) {
	foreach($stories as $story) {
	$link->id = $story->link_id;
	$cached_links[$story->link_id] = $story;
	$link->read();
	$live_item['link_date'] = txt_time_diff($link->published_date);
	$live_item['link_title'] = $link->title;
	if(Voting_Method == 2) {
		$live_item['link_votes'] = $link->votes/2;
	} else {
		$live_item['link_votes'] = $link->votes;
	}
	$live_item['link_username'] = $story->user_login;
	$live_item['link_category'] = GetCatName($link->category);
	$live_item['link_category_url'] = getmyurl("maincategory",$link->category_safe_name()); 
	$live_item['link_url'] = $link->get_internal_url();
	$live_items[] = $live_item;
	}
	$main_smarty->assign('live_items', $live_items);
}

// pagination
$main_smarty->assign('live_pagination', do_pages($rows, $top_users_size, "published", true));
// sidebar
$main_smarty = do_sidebar($main_smarty);

// show the template
$main_smarty->assign('tpl_center', $the_template . '/live_published_center');
$main_smarty->display($the_template . '/pligg.tpl');
?>
