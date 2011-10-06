<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-06 04:32:41 PDT */ ?>

<!-- START SUBMIT_GROUPS.TPL -->
<?php if ($this->_vars['enable_group'] == "true" && $this->_vars['group_allow'] == 1): ?>
<div class="headline">
	<?php if ($this->_vars['error']): ?>
		<div class="error"><?php echo $this->_vars['error']; ?>
</div>
		<br />
	<?php endif; ?>
	<form action="<?php echo $this->_vars['URL_submit_groups']; ?>
" method="post" name="thisform" id="thisform" enctype="multipart/form-data">
		<?php echo $this->_vars['hidden_token_submit_group']; ?>

		<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Title']; ?>
:</label><br/><?php echo $this->_confs['PLIGG_Visual_Group_Submit_TitleInstruction']; ?>
<br/>
		<input type="text" id="group_title" class="text" name="group_title" value="<?php echo $_POST['group_title']; ?>
" size="60" maxlength="120" />
		<br /><br/>
		<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Description']; ?>
:</label><br/><?php echo $this->_confs['PLIGG_Visual_Group_Submit_DescriptionInstruction']; ?>
<br/>
		<textarea name="group_description" rows="10" cols="60" maxlength="600" id="group_description" ><?php echo $_POST['group_description']; ?>
</textarea><br />
		<br />
		<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Privacy']; ?>
: &nbsp;</label>
			<select name="group_privacy" onchange="document.getElementById('group_email').style.display=this.selectedIndex==0 ? 'none' : 'block';">
				<option value = "public" <?php if ($_POST['group_privacy'] == 'public'): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Public']; ?>
</option>
				<option value = "private" <?php if ($_POST['group_privacy'] == 'private'): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Private']; ?>
</option>
				<option value = "restricted" <?php if ($_POST['group_privacy'] == 'restricted'): ?>selected<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Restricted']; ?>
</option>
			</select>
			<br/><?php echo $this->_confs['PLIGG_Visual_Group_Submit_PrivacyInstruction']; ?>
<br/>
			<div id='group_email' <?php if ($_POST['group_privacy'] == 'public' || $_POST['group_privacy'] == ''): ?>style="display:none;"<?php endif; ?>>
			<input type="checkbox" id="group_notify_email" size="4" name="group_notify_email" value="1" <?php if ($_POST['group_notify_email']): ?>checked<?php endif; ?>> <label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Notify']; ?>
:</label>
			<br /><br />
			</div>
		<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Mail_Friends']; ?>
:</label><br />
		<?php echo $this->_confs['PLIGG_Visual_Group_Submit_Mail_Friends_Desc']; ?>
<br/>
		<textarea type="text" id="group_mailer" rows="4" cols="60" name="group_mailer" ><?php echo $_POST['group_mailer']; ?>
</textarea><br />
		<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_vote_to_publish']; ?>
:</label><br/><?php echo $this->_confs['PLIGG_Visual_Group_Submit_NoOfVoteInstruction']; ?>
<br/>
		<input type="text" id="group_vote_to_publish" size="4" name="group_vote_to_publish" value="<?php echo $_POST['group_vote_to_publish']; ?>
"><br /><br />
		<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Submit_Group_create']; ?>
" class="submit" />
	</form>
</div>

<?php else: ?>
	<?php echo $this->_confs['PLIGG_Visual_Group_Disabled']; ?>

<?php endif; ?>
<!-- END SUBMIT_GROUPS.TPL -->