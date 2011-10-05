<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:51:02 PDT */ ?>



<fieldset>

<?php if ($this->_vars['submit_error'] == 'invalidurl'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit2Errors_InvalidURL'];  if ($this->_vars['submit_url'] == "http://"): ?>. <?php echo $this->_confs['PLIGG_Visual_Submit2Errors_InvalidURL_Specify'];  else: ?>: <?php echo $this->_vars['submit_url'];  endif; ?></p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="javascript:gPageIsOkToExit=true;window.history.go(-1);" value="<?php echo $this->_confs['PLIGG_Visual_Submit2Errors_Back']; ?>
" class="submit">
	</form>
<?php endif; ?>

<?php if ($this->_vars['submit_error'] == 'dupeurl'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit2Errors_DupeArticleURL']; ?>
: <?php echo $this->_vars['submit_url']; ?>
</p>
	<p><?php echo $this->_confs['PLIGG_Visual_Submit2Errors_DupeArticleURL_Instruct']; ?>
</p>
	<p><a href="<?php echo $this->_vars['submit_search']; ?>
"><strong><?php echo $this->_confs['PLIGG_Visual_Submit2Errors_DupeArticleURL_Instruct2']; ?>
</strong></a></p>
	<br style="clear: both;" /><br style="clear: both;" />
	<form id="thisform">
		<input type=button onclick="javascript:gPageIsOkToExit=true;window.history.go(-1);" value="<?php echo $this->_confs['PLIGG_Visual_Submit2Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_error_2"), $this);?>



<?php if ($this->_vars['submit_error'] == 'badkey'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit3Errors_BadKey']; ?>
</p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php if ($this->_vars['submit_error'] == 'hashistory'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit3Errors_HasHistory']; ?>
: <?php echo $this->_vars['submit_error_history']; ?>
</p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php if ($this->_vars['submit_error'] == 'urlintitle'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit3Errors_URLInTitle']; ?>
</p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php if ($this->_vars['submit_error'] == 'incomplete'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Incomplete']; ?>
</p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php if ($this->_vars['submit_error'] == 'long_title'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Long_Title']; ?>
</p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php if ($this->_vars['submit_error'] == 'long_content'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Long_Content']; ?>
</p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php if ($this->_vars['submit_error'] == 'long_tags'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Long_Tags']; ?>
</p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php if ($this->_vars['submit_error'] == 'long_summary'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Long_Summary']; ?>
</p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php if ($this->_vars['submit_error'] == 'nocategory'): ?>
	<p class="error"><?php echo $this->_confs['PLIGG_Visual_Submit3Errors_NoCategory']; ?>
</p>
	<br/>
	<form id="thisform">
		<input type="button" onclick="gPageIsOkToExit=true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['pagename']; ?>
.php?id=<?php echo $this->_vars['link_id']; ?>
';" value="<?php echo $this->_confs['PLIGG_Visual_Submit3Errors_Back']; ?>
" class="submit" />
	</form>
<?php endif; ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_error_3"), $this);?>

</fieldset>
