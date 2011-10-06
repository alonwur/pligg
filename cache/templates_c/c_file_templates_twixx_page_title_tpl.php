<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-06 04:26:23 PDT */ ?>

<!-- START RSS -->
<div class="rsslink">
	<?php if ($this->_vars['URL_rss_page']): ?>
		<a href="<?php echo $this->_vars['URL_rss_page']; ?>
" target="_blank">
			<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/rss.gif" alt="RSS" />
		</a>
	<?php endif; ?>
</div>
<!-- END RSS -->

<?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index" || $this->_vars['pagename'] == "upcoming" && $this->_vars['pagename'] != "groups"): ?>
	<ul id="smalltabs">
		<?php if ($this->_vars['setmeka'] == "" || $this->_vars['setmeka'] == "recent"): ?><li id="active"><a id="current" href="<?php echo $this->_vars['index_url_recent']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_Recently_Pop']; ?>
</span></a><?php else: ?><li><a href="<?php echo $this->_vars['index_url_recent']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Recently_Pop']; ?>
</a><?php endif; ?></li>
		<?php if ($this->_vars['setmeka'] == "today"): ?><li id="active" href="<?php echo $this->_vars['index_url_today']; ?>
"><a href="<?php echo $this->_vars['index_url_today']; ?>
" id="current"><span class="active"><?php echo $this->_confs['PLIGG_Visual_Top_Today']; ?>
</span></a><?php else: ?><li><a href="<?php echo $this->_vars['index_url_today']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Top_Today']; ?>
</a><?php endif; ?></li>
		<?php if ($this->_vars['setmeka'] == "yesterday"): ?><li id="active"><a id="current" href="<?php echo $this->_vars['index_url_yesterday']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_Yesterday']; ?>
</span></a><?php else: ?><li><a href="<?php echo $this->_vars['index_url_yesterday']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Yesterday']; ?>
</a><?php endif; ?></li>
		<?php if ($this->_vars['setmeka'] == "week"): ?><li id="active"><a id="current" href="<?php echo $this->_vars['index_url_week']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_This_Week']; ?>
</span></a><?php else: ?><li><a href="<?php echo $this->_vars['index_url_week']; ?>
"><?php echo $this->_confs['PLIGG_Visual_This_Week']; ?>
</a><?php endif; ?></li>
		<?php if ($this->_vars['setmeka'] == "month"): ?><li id="active"><a id="current" href="<?php echo $this->_vars['index_url_month']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_This_Month']; ?>
</span></a><?php else: ?><li><a href="<?php echo $this->_vars['index_url_month']; ?>
"><?php echo $this->_confs['PLIGG_Visual_This_Month']; ?>
</a><?php endif; ?></li>
		<?php if ($this->_vars['setmeka'] == "year"): ?><li id="active"><a id="current" href="<?php echo $this->_vars['index_url_year']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_This_Year']; ?>
</span></a><?php else: ?><li><a href="<?php echo $this->_vars['index_url_year']; ?>
"><?php echo $this->_confs['PLIGG_Visual_This_Year']; ?>
</a><?php endif; ?></li>
		<?php if ($this->_vars['setmeka'] == "alltime"): ?><li id="active"><a id="current" href="<?php echo $this->_vars['index_url_alltime']; ?>
"><span class="active"><?php echo $this->_confs['PLIGG_Visual_This_All']; ?>
</span></a><?php else: ?><li><a href="<?php echo $this->_vars['index_url_alltime']; ?>
"><?php echo $this->_confs['PLIGG_Visual_This_All']; ?>
</a><?php endif; ?></li>
	</ul>
<?php endif; ?>



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



<center style="padding: 2px 5px; background: #f2fcff; margin: -5px 0px 15px 0px; border: 1px solid #daecf2;">
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
	<a class="addthis_button_tweet"></a>
	<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4d78909b574939ce"></script>
	<!-- AddThis Button END -->
</center>