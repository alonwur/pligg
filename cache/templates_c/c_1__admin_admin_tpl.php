<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkForCss.php'); $this->register_function("checkForCss", "tpl_function_checkForCss");  require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:11 PDT */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="<?php echo $this->_confs['PLIGG_Visual_Language_Direction']; ?>
" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php if ($this->_vars['pagename'] == "admin_users"):  echo '
	<script language="javascript" type="text/javascript">
		parent.$.fn.colorbox.close()
	</script>
';  endif; ?>

	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_head_start"), $this);?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/css/fraxi.css" media="screen">
	<?php echo tpl_function_checkForCss(array(), $this);?>
	
	<meta name="Language" content="en-us">
	<meta name="Robots" content="none">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<title><?php echo $this->_confs['PLIGG_Visual_Name']; ?>
 Admin Panel</title>
	<link rel="icon" href="<?php echo $this->_vars['my_pligg_base']; ?>
/favicon.ico" type="image/x-icon"/>	
	
	<!--[if lte IE 6]><link rel="stylesheet" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/css/ie6.css" type="text/css" media="all" /><![endif]-->

	<script type='text/javascript' src='<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/js/zebrastripe.js'></script>
	
	<?php if ($this->_vars['pagename'] == "admin_categories" || $this->_vars['modulename'] == "admin_language" || $this->_vars['modulename'] == "rss_import" || $this->_vars['pagename'] == "admin_config"): ?>
		<script type='text/javascript' src='<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/js/simpleedit.js'></script>
		<script type='text/javascript' src='<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/js/move.js'></script>
		<script type='text/javascript' src='<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/js/accordian.pack.js'></script>
	<?php endif; ?>

	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_head_end"), $this);?>

	<?php if ($this->_vars['pagename'] != "admin_categories"): ?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
	<?php endif; ?>
	
	<?php if ($this->_vars['pagename'] == "admin_index"): ?>
		<link type="text/css" href="../templates/admin/css/jquery.ui.theme.css" rel="stylesheet" /> 
		<link type="text/css" href="../templates/admin/css/admin_home.css" rel="stylesheet" />
		<script type="text/javascript" src="../templates/admin/js/jquery.ui.core.js"></script> 
		<script type="text/javascript" src="../templates/admin/js/jquery.ui.widget.js"></script> 
		<script type="text/javascript" src="../templates/admin/js/jquery.ui.mouse.js"></script> 
		<script type="text/javascript" src="../templates/admin/js/jquery.ui.sortable.js"></script>
		
		<link type="text/css" href="../templates/admin/css/coda-slider-2.0.css" rel="stylesheet" media="screen" /> 
		<script type="text/javascript" src="../templates/admin/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="../templates/admin/js/jquery.coda-slider-2.0.js"></script> 
	<?php endif; ?>
	
	<?php if ($this->_vars['pagename'] != "admin_categories"): ?>
	<!-- START Colorbox Lightbox -->
		<link media="screen" rel="stylesheet" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/css/colorbox.css" />
		<script src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/js/jquery.colorbox.js"></script>
		<?php echo '
		<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$("a[rel=\'colorbox_image_1\']").colorbox();
				$("a[rel=\'colorbox_image_2\']").colorbox({transition:"fade"});
				$("a[rel=\'colorbox_image_3\']").colorbox({transition:"none", width:"75%", height:"75%"});
				$("a[rel=\'colorbox_image_4\']").colorbox({slideshow:true});
				$(".colorbox_ajax").colorbox();
				$(".colorbox_iframe1").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".colorbox_iframe2").colorbox({width:"80%", height:"80%", iframe:true});
				$(".colorbox_inline").colorbox({width:"50%", inline:true, href:"#inline_example1"});
			});
		</script>
		'; ?>

	<!-- END Colorbox Lightbox -->
	<?php endif; ?>
	
	<?php if ($this->_vars['pagename'] == "admin_index"): ?>
		<?php echo '
		<script type="text/javascript">
		$(function() {
			$(".column").sortable({
				connectWith: \'.column\'
			});

			$(".portlet").addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
				.find(".portlet-header")
					.addClass("ui-widget-header")
					.end()
				.find(".portlet-content");

			$(".ui-icon-minusthick").click(function() {
				$(this).toggleClass("ui-icon-minusthick").toggleClass("ui-icon-plusthick");
				$(this).parents(".portlet:first").find(".portlet-content:first").toggle();
				$(this).parents(".portlet:first").find(".portlet-content:first").each(function(index) {
					$.get("admin_index.php", { action: "minimize", display: this.style.display, id: this.parentNode.id }, function(data){
					});
				});
			});
			$(".ui-icon-plusthick").click(function() {
				$(this).toggleClass("ui-icon-plusthick").toggleClass("ui-icon-minusthick");
				$(this).parents(".portlet:first").find(".portlet-content:first").toggle();
				$(this).parents(".portlet:first").find(".portlet-content:first").each(function(index) {
					$.get("admin_index.php", { action: "minimize", display: this.style.display, id: this.parentNode.id }, function(data){
					});
				});
				var panelHeight = $(this).parents(".portlet:first").find(".panel:first").height();
				var codaslider = $(this).parents(".portlet:first").find(".coda-slider:first");
				codaslider.codaSlider();
	//			codaslider.css({ height: panelHeight });
			});


			jQuery(document).ajaxError(function(event, request, settings){ alert("Error"); });

			$( ".column" ).sortable({
				stop: function(event, ui) { 
					var data = \'\';
					$(".portlet").each(function(index) {
						data += this.id + \',\';
					});
					$.get("admin_index.php", { action: "move", left: ui.offset.left, top: ui.offset.top, id: ui.item[0].id, list: data }, function(data){
	//  					alert("data load " + data);
					});

				}
			});

	//		$(".column").disableSelection();

		});
		$().ready(function() {
			$(".coda-slider").each(function(index) {
			$(\'#\'+this.id).codaSlider();
			});
		});
		</script>
		'; ?>

	<?php endif; ?>

</head>
<body dir="<?php echo $this->_confs['PLIGG_Visual_Language_Direction']; ?>
">
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_body_start"), $this);?>
<div id="header">
	<div class="logo"><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/logo.gif" alt="Pligg CMS" title="Pligg CMS"/></a></div>
	<div id="head-nav">
		<ul class="nav-menu">
			<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_index.php" <?php if ($this->_vars['pagename'] == "admin_index"): ?>class="navcur"<?php else: ?>class="nav"<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel']; ?>
</a></li>
			<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_links.php" <?php if ($this->_vars['pagename'] == "admin_categories" || $this->_vars['pagename'] == "admin_comments" || $this->_vars['pagename'] == "admin_links" || $this->_vars['pagename'] == "admin_users" || $this->_vars['pagename'] == "admin_user_validate" || $this->_vars['pagename'] == "admin_page"): ?>class="navcur"<?php else: ?>class="nav"<?php endif; ?> ><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Manage_Nav']; ?>
</a></li> 
			<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_config.php" <?php if ($this->_vars['pagename'] == "admin_config"): ?>class="navcur"<?php else: ?>class="nav"<?php endif; ?> ><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Configure']; ?>
</a></li>
			<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_modules.php" <?php if ($this->_vars['pagename'] == "admin_modules"): ?>class="navcur"<?php else: ?>class="nav"<?php endif; ?> ><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Modules_Nav']; ?>
</a></li>
			<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_widgets.php" <?php if ($this->_vars['pagename'] == "admin_widgets"): ?>class="navcur"<?php else: ?>class="nav"<?php endif; ?> ><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Widgets_Nav']; ?>
</a></li>
			<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_editor.php" <?php if ($this->_vars['pagename'] == "admin_editor"): ?>class="navcur"<?php else: ?>class="nav"<?php endif; ?> ><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Template_Nav']; ?>
</a></li>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_header_admin_links"), $this);?>
			<li><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/" class="nav"><?php echo $this->_confs['PLIGG_Visual_Home']; ?>
</a></li>
		</ul>
		<div id="navbar">
			  <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/"><?php echo $this->_confs['PLIGG_Visual_Home']; ?>
</a> &rsaquo; <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_index.php"><?php echo $this->_confs['PLIGG_Visual_AdminPanel']; ?>
</a> &rsaquo; 
			  <?php if ($this->_vars['pagename'] == "admin_backup"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Backup'];  endif; ?>
			  <?php if ($this->_vars['module'] == "captcha"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Captcha'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_categories" || $this->_vars['pagename'] == "admin_categories_tasks"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Categories'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_comments"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Comments'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_config"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Configure'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_index"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Home'];  endif; ?>
			  <?php if ($this->_vars['module'] == "admin_language"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Language'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_modules"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Modules_Nav'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_widgets"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Widgets_Nav'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_page"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Pages'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_links"):  echo $this->_confs['PLIGG_Visual_AdminPanel_News'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_editor"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Template_Nav'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_users"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Users'];  endif; ?>
			  <?php if ($this->_vars['pagename'] == "admin_group"):  echo $this->_confs['PLIGG_Visual_AdminPanel_Groups'];  endif; ?>
			  <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_breadcrumbs"), $this);?>
		</div>
	</div>
</div>
<div style="clear:both;"></div>

<?php if ($this->_vars['pagename'] == "admin_links" || $this->_vars['pagename'] == "admin_users" || $this->_vars['pagename'] == "admin_comments" || $this->_vars['pagename'] == "admin_categories" || $this->_vars['pagename'] == "admin_categories_tasks" || $this->_vars['pagename'] == "admin_page" || $this->_vars['pagename'] == "edit_page" || $this->_vars['pagename'] == "submit_page" || $this->_vars['pagename'] == "admin_group"): ?>
	<div class="tab-nav-spacing"><div class="tab-nav">
		<ul>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_navtabs_start"), $this);?>
			<li <?php if ($this->_vars['pagename'] == "admin_links"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_links.php"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_News']; ?>
</a></span></li>
			<li <?php if ($this->_vars['pagename'] == "admin_users"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Users']; ?>
</a></span></li>
			<li <?php if ($this->_vars['pagename'] == "admin_comments"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_comments.php"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Comments']; ?>
</a></span></li>
			<li <?php if ($this->_vars['pagename'] == "admin_categories" || $this->_vars['pagename'] == "admin_categories_tasks"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_categories.php"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Categories']; ?>
</a></span></li>
			<li <?php if ($this->_vars['pagename'] == "admin_page" || $this->_vars['pagename'] == "edit_page" || $this->_vars['pagename'] == "submit_page"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_page.php"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Pages']; ?>
</a></span></li>
			<li <?php if ($this->_vars['pagename'] == "admin_group"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_group.php"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Groups']; ?>
</a></span></li>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_navtabs_end"), $this);?>
		</ul>
	</div></div>
<?php endif; ?>

<?php if ($this->_vars['pagename'] == "admin_modules"): ?>
	<div class="tab-nav-spacing"><div class="tab-nav">
		<ul>
			<li <?php if ($this->_vars['pagename'] == "admin_modules" && $_GET['status'] != "uninstalled"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_modules.php"><?php echo $this->_confs['PLIGG_Visual_Modules_Installed']; ?>
</a></span></li>
			<li <?php if ($this->_vars['pagename'] == "admin_modules" && $_GET['status'] == "uninstalled"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_modules.php?status=uninstalled"><?php echo $this->_confs['PLIGG_Visual_Modules_Uninstalled']; ?>
</a></span></li>
		</ul>
	</div></div>
<?php endif; ?>

<?php if ($this->_vars['pagename'] == "admin_widgets"): ?>
	<div class="tab-nav-spacing"><div class="tab-nav">
		<ul>
			<li <?php if ($_GET['status'] != "uninstalled"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_widgets.php"><?php echo $this->_confs['PLIGG_Visual_Widgets_Installed']; ?>
</a></span></li>
			<li <?php if ($_GET['status'] == "uninstalled"): ?>class="cur"<?php endif; ?>><span><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_widgets.php?status=uninstalled"><?php echo $this->_confs['PLIGG_Visual_Widgets_Uninstalled']; ?>
</a></span></li>
		</ul>
	</div></div>
<?php endif; ?>

<div style="clear:both;"></div>
<div class="demo" id="main_content">
	<div class="bluerndcontent">
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_legend_before"), $this);?>
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_center'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		
			<?php if (( $this->_vars['pagename'] == "admin_users" && $_GET['mode'] != 'view' ) || $this->_vars['pagename'] == "admin_comments" || $this->_vars['pagename'] == "admin_links" || $this->_vars['pagename'] == "admin_user_validate"): ?>	
				<br />
				<?php  
				Global $db, $main_smarty, $rows, $offset, $URLMethod;
				$oldURLMethod=$URLMethod;
				$URLMethod=1;
				$pagesize=get_misc_data('pagesize');
				do_pages($rows, $pagesize ? $pagesize : 30, $the_page); 
				$URLMethod=$oldURLMethod;
				 ?>
			<?php endif; ?> 
		
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_legend_after"), $this);?>

	</div>
</div>

<div id="footer-wrap">
	<div class="footer">
		<div class="rss-feeds">
		<h1>Pligg RSS Feeds</h1>
		<ul>
			<li><a href="http://www.pligg.com/blog/feed/" target="_blank">Blog</a></li>
			<li><a href="http://twitter.com/statuses/user_timeline/6024362.rss" target="_blank">Twitter</a></li>
			<li><a href="http://forums.pligg.com/external.php" target="_blank">Forum</a></li>
		</ul>
		</div>
	</div>
	<div id="about">
	<h3><a href="http://forums.pligg.com/" target="_blank"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Help']; ?>
!</a></h3>
	<br /><div class="design"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Help_1']; ?>
 <a href="http://www.pligg.com">Pligg.com</a> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Help_2']; ?>
 <a href="http://forums.pligg.com">Pligg Forum.</a></div>
	<br>
	</div>
</div>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_admin_body_end"), $this);?>
</body>
</html>
