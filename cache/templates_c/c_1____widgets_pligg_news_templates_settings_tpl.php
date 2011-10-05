<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:13 PDT */ ?>

<form method="get">
	<input type="hidden" name="widget" value="pligg_news">
	<p>
		<?php echo $this->_confs['PLIGG_News_Widget_Select_Show']; ?>
		
		<select name="stories" value="pligg_news">
			<option value="1" <?php if ($this->_vars['news_count'] == "1"): ?>selected="selected"<?php endif; ?>>1</option>
			<option value="2" <?php if ($this->_vars['news_count'] == "2"): ?>selected="selected"<?php endif; ?>>2</option>
			<option value="3" <?php if ($this->_vars['news_count'] == "3"): ?>selected="selected"<?php endif; ?>>3</option>
			<option value="4" <?php if ($this->_vars['news_count'] == "4"): ?>selected="selected"<?php endif; ?>>4</option>
			<option value="5" <?php if ($this->_vars['news_count'] == "5"): ?>selected="selected"<?php endif; ?>>5</option>
		</select>
		<?php echo $this->_confs['PLIGG_News_Widget_Select_Items']; ?>

		
		
		
	</p>
	<br />
	<p>
		<input type = "submit" value="<?php echo $this->_confs['PLIGG_News_Widget_Save']; ?>
">
	</p>
</form>