<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-06 04:26:23 PDT */ ?>

<!-- START HEADER.TPL -->
<div id="header">

	<div id="login">
		<?php if ($this->_vars['user_authenticated'] == true): ?>
			<?php echo $this->_confs['PLIGG_Visual_Welcome_Back']; ?>
 <?php echo $this->_vars['user_logged_in']; ?>

			&nbsp; | &nbsp;
			<a href="<?php echo $this->_vars['URL_userNoVar']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Profile']; ?>
</a>
		<?php endif; ?>
		
		<?php if ($this->_vars['user_authenticated'] != true): ?>
			<a href='<?php echo $this->_vars['URL_register']; ?>
'><?php echo $this->_confs['PLIGG_Visual_Register']; ?>
</a>
			&nbsp; | &nbsp;
			<a href='<?php echo $this->_vars['URL_login']; ?>
'><?php echo $this->_confs['PLIGG_Visual_Login_Title']; ?>
</a>
		<?php endif; ?>
		
		&nbsp; | &nbsp;
		<a href="<?php echo $this->_vars['URL_submit']; ?>
"><b><?php echo $this->_confs['PLIGG_Visual_Submit_A_New_Story']; ?>
</b></a>
		
		<?php if (isset ( $this->_vars['isgod'] ) && $this->_vars['isgod'] == 1): ?>
			&nbsp; | &nbsp;
			<a href="<?php echo $this->_vars['URL_admin']; ?>
"><b><?php echo $this->_confs['PLIGG_Visual_Header_AdminPanel']; ?>
</b></a>
		<?php endif; ?>
		
		<?php if ($this->_vars['user_authenticated'] == true): ?>
			&nbsp; | &nbsp;
			<a href="<?php echo $this->_vars['URL_logout']; ?>
"> <?php echo $this->_confs['PLIGG_Visual_Logout']; ?>
</a>
		<?php endif; ?>
		
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_login_link"), $this);?>
	</div>

<div id="logo">
	<a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</a><br/>
	<span><?php echo $this->_confs['PLIGG_Visual_RSS_Description']; ?>
</span>
</div>

<script type="text/javascript">
<?php if (! isset ( $this->_vars['searchboxtext'] )): ?>
	<?php $this->assign('searchboxtext', $this->_confs['PLIGG_Visual_Search_SearchDefaultText']); ?>			
<?php endif; ?>
var some_search='<?php echo $this->_vars['searchboxtext']; ?>
';
</script>


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

<!-- START NAVBAR -->
<ul id="nav">
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_navbar_start"), $this);?>
	<li <?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index"): ?>class="current"<?php endif; ?>><a href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['URL_base']; ?>
'><span><?php echo $this->_confs['PLIGG_Visual_Published_News']; ?>
</span></a></li>
	<li <?php if ($this->_vars['pagename'] == "upcoming"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_upcoming']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued']; ?>
</span></a></li>
	<?php if ($this->_vars['enable_group'] == "true"): ?>	
		<li <?php if ($this->_vars['pagename'] == "groups" || $this->_vars['pagename'] == "submit_groups" || $this->_vars['pagename'] == "group_story"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_groups']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</span></a></li>
	<?php endif; ?>
	<li><a href='<?php echo $this->_vars['URL_topusers']; ?>
'><span><?php echo $this->_confs['PLIGG_Visual_Top_Users']; ?>
</span></a></li>
	<?php if ($this->_vars['Enable_Tags']): ?>
	    <li <?php if ($this->_vars['pagename'] == "cloud"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_tagcloud']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Tags']; ?>
</span></a></li>
	<?php endif; ?>
	<?php if ($this->_vars['Enable_Live']): ?>
		<li <?php if ($this->_vars['pagename'] == "live"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_live']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Live']; ?>
</span></a></li>
	<?php endif; ?>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_navbar_end"), $this);?>
</ul>

<!-- END NAVBAR -->



</div>
<!-- END HEADER.TPL -->