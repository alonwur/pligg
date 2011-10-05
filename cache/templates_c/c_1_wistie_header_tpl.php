<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:01 PDT */ ?>

<!-- START HEADER.TPL -->
<div id="login">
	<?php if ($this->_vars['user_authenticated'] == true):  echo $this->_confs['PLIGG_Visual_Welcome_Back']; ?>
 <span style="text-transform:capitalize"><a href="<?php echo $this->_vars['URL_userNoVar']; ?>
"><?php echo $this->_vars['user_logged_in']; ?>
</a></span> | <a href="<?php echo $this->_vars['URL_logout']; ?>
"> <?php echo $this->_confs['PLIGG_Visual_Logout']; ?>
</a><?php endif; ?>
	
	<?php if ($this->_vars['user_authenticated'] != true): ?>
		<a href='<?php echo $this->_vars['URL_register']; ?>
'><?php echo $this->_confs['PLIGG_Visual_Register']; ?>
</a> | <a href='<?php echo $this->_vars['URL_login']; ?>
'><?php echo $this->_confs['PLIGG_Visual_Login_Title']; ?>
</a>
    <?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_login_link"), $this);?>
</div>

<div id="logo"><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</a></div>
<script type="text/javascript">
<?php if (! isset ( $this->_vars['searchboxtext'] )): ?>
	<?php $this->assign('searchboxtext', $this->_confs['PLIGG_Visual_Search_SearchDefaultText']); ?>			
<?php endif; ?>
var some_search='<?php echo $this->_vars['searchboxtext']; ?>
';
</script>

<!-- START SEARCH -->
<div class="search">

	<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/search.php" method="get" name="thisform-search" id="thisform-search" <?php if ($this->_vars['urlmethod'] == 2): ?>onsubmit='document.location.href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/search/"+this.search.value.replace(/\//g,"|").replace(/\?/g,"%3F"); return false;'<?php endif; ?>>

		<input type="text" size="20" class="searchfield" name="search" id="searchsite" value="<?php echo $this->_vars['searchboxtext']; ?>
" onfocus="if(this.value == some_search) {this.value = '';}" onblur="if (this.value == '') {this.value = some_search;}"/>
		<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Search_Go']; ?>
" class="searchbutton" />
	</form>
</div>
<div class="clear"></div>
<!-- END SEARCH -->

<!-- START NAVBAR -->
<ul id="nav">
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_navbar_start"), $this);?>
	<li <?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index"): ?>class="current"<?php endif; ?>><a href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['URL_base']; ?>
'><?php echo $this->_confs['PLIGG_Visual_Published_News']; ?>
</a></li>
	<li <?php if ($this->_vars['pagename'] == "upcoming"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_upcoming']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued']; ?>
</a></li>
	<li <?php if ($this->_vars['pagename'] == "submit"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_submit']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Submit_A_New_Story']; ?>
</a></li>
	<?php if ($this->_vars['enable_group'] == "true"): ?>	
		<li <?php if ($this->_vars['pagename'] == "groups" || $this->_vars['pagename'] == "submit_groups" || $this->_vars['pagename'] == "group_story"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_groups']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</span></a></li>
	<?php endif; ?>	
	<?php if ($this->_vars['user_authenticated'] == true): ?><li <?php if ($this->_vars['pagename'] == "user"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_userNoVar']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Profile']; ?>
</span></a></li><?php endif; ?>
	<?php if (isset ( $this->_vars['isgod'] ) && $this->_vars['isgod'] == 1): ?><li><a href="<?php echo $this->_vars['URL_admin']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Header_AdminPanel']; ?>
</span></a></li><?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_navbar_end"), $this);?>
</ul>
<?php $this->assign('sidebar_module', "categories");  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template_sidebar_modules']."/wrapper.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<!-- END NAVBAR -->

<!-- START RSS -->
<div class="rsslink">
	<?php if ($this->_vars['URL_rss_page']): ?>
	<a href="<?php echo $this->_vars['URL_rss_page']; ?>
" target="_blank">
		RSS &nbsp;<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/rss.gif" align="top" border="0" alt="RSS" />
	</a>
	<?php endif; ?>
</div>
<!-- END RSS -->

<!-- START BREADCRUMBS -->
<?php if ($this->_vars['pagename'] == "submit_groups"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Submit_A_New_Group']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "groups"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "group_story"): ?><h1><?php echo $this->_vars['group_name']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "login"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Login']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "register"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Register']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "editlink"): ?><h1><?php echo $this->_confs['PLIGG_Visual_EditStory_Header']; ?>
: <?php echo $this->_vars['submit_url_title']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "rssfeeds"): ?><h1><?php echo $this->_confs['PLIGG_Visual_RSS_Feeds']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "topusers"): ?><h1><?php echo $this->_confs['PLIGG_Visual_TopUsers_Statistics']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "cloud"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Tags_Tags']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "live" || $this->_vars['pagename'] == "live_unpublished" || $this->_vars['pagename'] == "live_published" || $this->_vars['pagename'] == "live_comments"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Live']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "advancedsearch"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Search_Advanced']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "profile"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Profile_ModifyProfile']; ?>
</h1><?php endif; ?>
<?php if ($this->_vars['pagename'] == "user"): ?><h1><a href="<?php echo $this->_vars['user_url_personal_data']; ?>
"><span style="text-transform:capitalize"><?php echo $this->_vars['page_header']; ?>
</span></a> <a href="<?php echo $this->_vars['user_rss'].$this->_vars['view_href']; ?>
" target="_blank"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/rss.gif" style="margin-left:6px;border:0;"></a></h1><?php endif; ?>

<?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Published_News'];  endif; ?>
<?php if ($this->_vars['pagename'] == "upcoming"): ?><h1><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued'];  endif; ?>
<?php if ($this->_vars['pagename'] == "noresults"): ?><h1><?php echo $this->_vars['posttitle']; ?>

<?php elseif (isset ( $this->_vars['get']['search'] )): ?><h1><?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 <?php if ($this->_vars['get']['search']):  echo $this->_vars['get']['search'];  else:  echo $this->_vars['get']['date'];  endif;  endif; ?>
<?php if (isset ( $this->_vars['get']['q'] )): ?><h1><?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 <?php echo $this->_vars['get']['q'];  endif; ?> 
<?php if ($this->_vars['pagename'] == "index" || $this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "upcoming" || isset ( $this->_vars['get']['search'] ) || isset ( $this->_vars['get']['q'] )): ?>
	<?php if (isset ( $this->_vars['navbar_where']['link2'] ) && $this->_vars['navbar_where']['link2'] != ""): ?> &#187; <a href="<?php echo $this->_vars['navbar_where']['link2']; ?>
"><?php echo $this->_vars['navbar_where']['text2']; ?>
</a><?php elseif (isset ( $this->_vars['navbar_where']['text2'] ) && $this->_vars['navbar_where']['text2'] != ""): ?> &#187; <?php echo $this->_vars['navbar_where']['text2'];  endif; ?>
	<?php if (isset ( $this->_vars['navbar_where']['link3'] ) && $this->_vars['navbar_where']['link3'] != ""): ?> &#187; <a href="<?php echo $this->_vars['navbar_where']['link3']; ?>
"><?php echo $this->_vars['navbar_where']['text3']; ?>
</a><?php elseif (isset ( $this->_vars['navbar_where']['text3'] ) && $this->_vars['navbar_where']['text3'] != ""): ?> &#187; <?php echo $this->_vars['navbar_where']['text3'];  endif; ?>
	<?php if (isset ( $this->_vars['navbar_where']['link4'] ) && $this->_vars['navbar_where']['link4'] != ""): ?> &#187; <a href="<?php echo $this->_vars['navbar_where']['link4']; ?>
"><?php echo $this->_vars['navbar_where']['text4']; ?>
</a><?php elseif (isset ( $this->_vars['navbar_where']['text4'] ) && $this->_vars['navbar_where']['text4'] != ""): ?> &#187; <?php echo $this->_vars['navbar_where']['text4'];  endif; ?>
	</h1>
<?php endif; ?>
<?php if ($this->_vars['posttitle'] != "" && $this->_vars['pagename'] == "page"): ?><h1><?php echo $this->_vars['posttitle']; ?>
</h1><?php endif; ?>
<!-- END BREADCRUMBS -->

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_breadcrumb_end"), $this);?>
<!-- END HEADER.TPL -->