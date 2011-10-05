<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:01 PDT */ ?>

<?php if ($this->_vars['pagename'] == "story"): ?><br /><?php endif; ?>

<?php if ($this->_vars['pagename'] != "submit"): ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_sidebar2_start"), $this);?>
		<?php if ($this->_vars['pagename'] == "user"): ?>
			<div class="headline">
				<div class="sectiontitle"><a href="<?php echo $this->_vars['user_url_personal_data']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Profile']; ?>
</a></div>
			</div>

			<div id="navcontainer">
				<ul id="navlist">
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_sort_start"), $this);?>
					<li><a href="<?php echo $this->_vars['user_url_personal_data']; ?>
" class="navbut<?php echo $this->_vars['nav_pd']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_User_PersonalData']; ?>
</span></a></li>
					<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in']): ?>
					<li><a href="<?php echo $this->_vars['user_url_setting']; ?>
" class="navbut<?php echo $this->_vars['nav_set']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_User_Setting']; ?>
</span></a></li>
					<?php endif; ?>
					<li><a href="<?php echo $this->_vars['user_url_news_sent']; ?>
" class="navbut<?php echo $this->_vars['nav_ns']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_User_NewsSent']; ?>
</span></a></li>
					<li><a href="<?php echo $this->_vars['user_url_news_published']; ?>
" class="navbut<?php echo $this->_vars['nav_np']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_User_NewsPublished']; ?>
</span></a></li>
					<li><a href="<?php echo $this->_vars['user_url_news_unpublished']; ?>
" class="navbut<?php echo $this->_vars['nav_nu']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_User_NewsUnPublished']; ?>
</span></a></li>
					<li><a href="<?php echo $this->_vars['user_url_commented']; ?>
" class="navbut<?php echo $this->_vars['nav_c']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_User_NewsCommented']; ?>
</span></a></li>
					<li><a href="<?php echo $this->_vars['user_url_news_voted']; ?>
" class="navbut<?php echo $this->_vars['nav_nv']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_User_NewsVoted']; ?>
</span></a></li>
					<li><a href="<?php echo $this->_vars['user_url_saved']; ?>
" class="navbut<?php echo $this->_vars['nav_s']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_User_NewsSaved']; ?>
</span></a></li>
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_sort_end"), $this);?>
				</ul>
			</div>
		<?php endif; ?>
                 <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_sidebar_middle"), $this);?>
	<!-- START ABOUT -->
		<?php $this->assign('sidebar_module', "about_box");  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template_sidebar_modules']."/wrapper.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	<!-- END ABOUT -->

	<!-- START LINKS -->
	        	<div class="links">
	            	<div class="sectiontitle"><a href='<?php echo $this->_vars['URL_topusers']; ?>
'> <?php echo $this->_confs['PLIGG_Visual_Top_Users']; ?>
</a></div>
	            </div>
				<?php if ($this->_vars['Enable_Tags']): ?>
	            <div class="links">
	            	<div class="sectiontitle"><a href="<?php echo $this->_vars['URL_tagcloud']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Tags']; ?>
</a></div>
	            </div>
				<?php endif; ?>
				<?php if ($this->_vars['Enable_Live']): ?>
	            <div class="links">
	            	<div class="sectiontitle"><a href='<?php echo $this->_vars['URL_live']; ?>
'> <?php echo $this->_confs['PLIGG_Visual_Live']; ?>
</a></div>
	            </div>
				<?php endif; ?>
	<!-- END LINKS -->

	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_sidebar2_end"), $this);?>
	<br />
<?php endif; ?>