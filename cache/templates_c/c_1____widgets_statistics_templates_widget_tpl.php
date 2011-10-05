<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:11 PDT */ ?>

<table style="width:70%;min-width:500px;float:left;">
	<tr>
		<td valign="top" width="135px">
			<strong>
			<?php if ($this->_vars['sw_version'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_Version']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['sw_members'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_Front_Members']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['sw_groups'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_Front_Groups']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['sw_links'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_Front_Submissions']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['sw_published'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_Front_Published']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['sw_upcoming'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_Front_Upcoming']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['sw_votes'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_Front_Votes']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['sw_comments'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_Front_Comments']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['sw_newuser'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_Front_Member']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['phpver'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_PHP_Version']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['mysqlver'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_MySQL_Version']; ?>
:<br /><?php endif; ?>
			<?php if ($this->_vars['sw_dbsize'] == "1"):  echo $this->_confs['PLIGG_Statistics_Widget_DB_Size']; ?>
:<?php endif; ?>
			</strong>
		</td>
		<td valign="top">
			<?php if ($this->_vars['sw_version'] == "1"):  echo $this->_vars['version_number']; ?>
<br /><?php endif; ?>
			<?php if ($this->_vars['sw_members'] == "1"):  echo $this->_vars['members']; ?>
<br /><?php endif; ?>
			<?php if ($this->_vars['sw_groups'] == "1"):  echo $this->_vars['grouptotal']; ?>
<br /><?php endif; ?>
			<?php if ($this->_vars['sw_links'] == "1"):  echo $this->_vars['total']; ?>
<br /><?php endif; ?>
			<?php if ($this->_vars['sw_published'] == "1"):  echo $this->_vars['published']; ?>
<br /><?php endif; ?>
			<?php if ($this->_vars['sw_upcoming'] == "1"):  echo $this->_vars['queued']; ?>
<br /><?php endif; ?>
			<?php if ($this->_vars['sw_votes'] == "1"):  echo $this->_vars['votes']; ?>
<br /><?php endif; ?>
			<?php if ($this->_vars['sw_comments'] == "1"):  echo $this->_vars['comments']; ?>
<br /><?php endif; ?>
			<?php if ($this->_vars['sw_newuser'] == "1"): ?><a href="<?php echo $this->_vars['URL_user'].$this->_vars['last_user']; ?>
" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Latest_User']; ?>
" class="colorbox_iframe2"><?php echo $this->_vars['last_user']; ?>
</a><br /><?php endif; ?>
			<?php if ($this->_vars['phpver'] == "1"):  
			if( function_exists( "phpversion" ) ){
				print phpversion();
			}else{
				print 'Unknown';
			}
			 ?><br /><?php endif; ?>
			<?php if ($this->_vars['mysqlver'] == "1"): ?>
				<?php 
					function find_SQL_Version() {
					   $output = shell_exec('mysql -V');
					   preg_match('@[0-9]+\.[0-9]+\.[0-9]+@', $output, $version);
					   return $version[0];
					}
					echo find_SQL_Version();
				 ?><br />
			<?php endif; ?>
			<?php if ($this->_vars['sw_dbsize'] == "1"):  echo $this->_vars['dbsize'];  endif; ?>
		</td>	
	</tr>
</table>
