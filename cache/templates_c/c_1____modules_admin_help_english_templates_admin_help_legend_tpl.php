<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:11 PDT */ ?>

<?php echo '<script>
$(document).ready(function(){
$(".colorbox_iframeadminhelp").colorbox({iframe:true, innerWidth:640, innerHeight:640});
});
</script>'; ?>

<?php if ($this->_vars['pagename'] == "admin_backup"): ?>

 <div class="help">

	<a href="../modules/admin_help_english/docs/admin_backup.html" class="colorbox_iframeadminhelp" title="Help"><img src="../modules/admin_help_english/css/images/help.gif" /></a>

 </div>

<?php endif; ?>



<?php if ($this->_vars['pagename'] == "admin_comments"): ?>

  <div class="help">

	<a href="../modules/admin_help_english/docs/admin_comments.html" class="colorbox_iframeadminhelp" title="Help"><img src="../modules/admin_help_english/css/images/help.gif" /></a>

 </div>

<?php endif; ?>



<?php if ($this->_vars['pagename'] == "admin_editor"): ?>

 <div class="help">

	<a href="../modules/admin_help_english/docs/template_edit.html" class="colorbox_iframeadminhelp" title="Help"><img src="../modules/admin_help_english/css/images/help.gif" /></a>

 </div>

<?php endif; ?>



<?php if ($this->_vars['pagename'] == "admin_index"): ?>

  <div class="help">

	<a href="../modules/admin_help_english/docs/admin_index.html" class="colorbox_iframeadminhelp" title="Help"><img src="../modules/admin_help_english/css/images/help.gif" /></a>

 </div>

<?php endif; ?>



<?php if ($this->_vars['pagename'] == "admin_links"): ?>

 <div class="help">

	<a href="../modules/admin_help_english/docs/admin_links.html" class="colorbox_iframeadminhelp" title="Help"><img src="../modules/admin_help_english/css/images/help.gif" /></a>

 </div>

<?php endif; ?>



<?php if ($this->_vars['pagename'] == "admin_modules"): ?>

 <div class="help">

	<a href="../modules/admin_help_english/docs/admin_modules.html" class="colorbox_iframeadminhelp" title="Help"><img src="../modules/admin_help_english/css/images/help.gif" /></a>

 </div>

<?php endif; ?>



<?php if ($this->_vars['pagename'] == "admin_page"): ?>

  <div class="help" style="margin-top:-6px;">

	<a href="../modules/admin_help_english/docs/admin_page.html" class="colorbox_iframeadminhelp" title="Help"><img src="../modules/admin_help_english/css/images/help.gif" /></a>

 </div>

<?php endif; ?>



<?php if ($this->_vars['pagename'] == "admin_users"): ?>

 <div class="help">

	<a href="../modules/admin_help_english/docs/admin_users.html" class="colorbox_iframeadminhelp" title="Help"><img src="../modules/admin_help_english/css/images/help.gif" /></a>

 </div>



<?php endif; ?>

