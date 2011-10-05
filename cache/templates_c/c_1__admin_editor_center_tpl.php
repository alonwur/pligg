<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 06:01:00 PDT */ ?>

<h2 style="margin-top:8px;"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/template_edit.gif" align="absmiddle"/> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Editor']; ?>
</h2>
<a href="./admin_config.php?page=Template"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Editor_Change']; ?>
</a><br />


<?php if ($_POST['open']): ?>
    <?php if (! $this->_vars['error']): ?>
		<h3><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Template_File_Opened']; ?>
</h3>

		<form action="" method="post" <?php if ($this->_vars['filedata']): ?>onsubmit="if (this.updatedfile.value!='' || confirm('<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Template_Empty_Confirm']; ?>
')) this.isempty.value=1; else return false;"<?php endif; ?>>	
		<input type="hidden" name="the_file2" value="<?php echo $this->_vars['the_file']; ?>
" />
		<p><strong><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Template_Currently_Open']; ?>
: <?php echo $this->_vars['the_file']; ?>
</strong></p>
		
		<textarea rows="30" id="editor" name="updatedfile"><?php echo $this->_vars['filedata']; ?>
</textarea>
		<br/>
		<input type="button" value="Cancel" onClick="javascript:location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_editor.php'" class="log2" />
		<input type="reset" value="Reset" class="log2">
		<input type="hidden" name="isempty" value="<?php if ($this->_vars['filedata']): ?>0<?php else: ?>1<?php endif; ?>">
		<input type="submit" name="save" value="Save Changes" class="log2"/>
		
		</form>
		
    <?php else: ?>
		<div style="padding:10px 8px;margin:12px 5px 20px 5px;background:#fff;border:1px solid #bbb;">
			<h3 style="color:#8F1111;padding:0;margin:0;border-bottom:1px dotted #bbb;"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Template_Error']; ?>
</h3>
			<p><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Template_Cant_Open']; ?>
</p>
		</div>
    <?php endif; ?>
	

<?php elseif ($_POST['save']): ?>
    <?php echo $this->_vars['error']; ?>



<?php else: ?>
    <?php if ($this->_vars['files']): ?>

	<form action="" method="post">
	<br />
	<h3><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Editor_Choose']; ?>
</h3>
	<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Editor_Choose_Chmod']; ?>
<br />

	<select name="the_file">
	    <?php if (count((array)$this->_vars['files'])):  foreach ((array)$this->_vars['files'] as $this->_vars['file']): ?>
		<option value="<?php echo $this->_vars['file']; ?>
"><?php echo $this->_vars['file']; ?>
</option>
	    <?php endforeach; endif; ?>
	</select>
	<br/>
	<input type="submit" name="open" value="Open" class="log2" />	
	</form>

    <?php else: ?>
		<div style="padding:10px 8px;margin:12px 5px 20px 5px;background:#fff;border:1px solid #bbb;">
			<h3 style="color:#8F1111;padding:0;margin:0;border-bottom:1px dotted #bbb;"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Template_Error']; ?>
</h3>
			<p><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Template_Cant_Open']; ?>
</p>
		</div>
    <?php endif; ?>
<?php endif; ?>
	
