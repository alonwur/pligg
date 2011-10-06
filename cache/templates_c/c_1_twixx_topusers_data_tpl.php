<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-06 04:33:00 PDT */ ?>

<tr>
	<td><?php echo $this->_vars['user_rank']; ?>
</td>
	<td><?php if ($this->_vars['UseAvatars'] != "0"): ?><img src="<?php echo $this->_vars['user_avatar']; ?>
" align="absmiddle" /><?php endif; ?> <a href="<?php echo $this->_vars['user_userlink']; ?>
"><?php echo $this->_vars['user_username']; ?>
</a></td>
	<td><?php echo $this->_vars['user_total_links']; ?>
</td>
	<?php if ($this->_vars['user_total_links'] > 0): ?>
		<td><?php echo $this->_vars['user_published_links']; ?>
&nbsp;(<?php echo $this->_vars['user_published_links_percent']; ?>
%)</td>
	<?php else: ?>
		<td><?php echo $this->_vars['user_published_links']; ?>
&nbsp;(-)</td>
	<?php endif; ?>
	<td><?php echo $this->_vars['user_total_comments']; ?>
</td>
	<td><?php echo $this->_vars['user_total_votes']; ?>
</td>
	<?php if ($this->_vars['user_total_votes'] > 0): ?>
		<td><?php echo $this->_vars['user_published_votes']; ?>
&nbsp;(<?php echo $this->_vars['user_published_votes_percent']; ?>
%)</td>
	<?php else: ?>
		<td><?php echo $this->_vars['user_published_votes']; ?>
&nbsp;(-)</td>
	<?php endif; ?>
	<td><?php echo $this->_vars['user_karma']; ?>
</td>
</tr>
