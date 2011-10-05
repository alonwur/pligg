<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:11 PDT */ ?>

<form method="get">
	<input type="hidden" name="widget" value="statistics">
	<p><?php echo $this->_confs['PLIGG_Statistics_Widget_Description']; ?>
</p>
	<p style="margin:5px 7px 0 7px;">
		<input type="hidden" name="version" value="0">
		<input type="checkbox" name="version" value="1" <?php if ($this->_vars['sw_version'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_Version']; ?>
<br />
		<input type="hidden" name="members" value="0">
		<input type="checkbox" name="members" value="1" <?php if ($this->_vars['sw_members'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_Members']; ?>
<br />
		<input type="hidden" name="groups" value="0">
		<input type="checkbox" name="groups" value="1" <?php if ($this->_vars['sw_groups'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_Groups']; ?>
<br />
		<input type="hidden" name="links" value="0">
		<input type="checkbox" name="links" value="1" <?php if ($this->_vars['sw_links'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_Links']; ?>
<br />
		<input type="hidden" name="published" value="0">
		<input type="checkbox" name="published" value="1" <?php if ($this->_vars['sw_published'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_Published']; ?>
<br />
		<input type="hidden" name="upcoming" value="0">
		<input type="checkbox" name="upcoming" value="1" <?php if ($this->_vars['sw_upcoming'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_Upcoming']; ?>
<br />
		<input type="hidden" name="votes" value="0">
		<input type="checkbox" name="votes" value="1" <?php if ($this->_vars['sw_votes'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_Votes']; ?>
<br />
		<input type="hidden" name="comments" value="0">
		<input type="checkbox" name="comments" value="1" <?php if ($this->_vars['sw_comments'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_Comments']; ?>
<br />
		<input type="hidden" name="latestuser" value="0">
		<input type="checkbox" name="latestuser" value="1" <?php if ($this->_vars['sw_newuser'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_Latest_User']; ?>
<br />
		<input type="hidden" name="phpver" value="0">
		<input type="checkbox" name="phpver" value="1" <?php if ($this->_vars['phpver'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_PHP_Version']; ?>
<br />
		<input type="hidden" name="mysqlver" value="0">
		<input type="checkbox" name="mysqlver" value="1" <?php if ($this->_vars['mysqlver'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_MySQL_Version']; ?>
<br />
		<input type="hidden" name="dbsize" value="0">
		<input type="checkbox" name="dbsize" value="1" <?php if ($this->_vars['sw_dbsize'] == "1"): ?>checked<?php endif; ?>> <?php echo $this->_confs['PLIGG_Statistics_Widget_DB_Size']; ?>
<br />
	</p>
	<br />
	<p style="margin:0 0 5px 8px;">
		<input type = "submit" value="<?php echo $this->_confs['PLIGG_Statistics_Widget_Save']; ?>
">
	</p>
</form>