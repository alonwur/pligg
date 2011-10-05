<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 10:39:00 PDT */ ?>

<?php 
	global $db;
//print_r($this->_vars);

	$upload_link = get_misc_data('upload_link');
	$upload_defsize = get_misc_data('upload_defsize');
	$alternates = unserialize(base64_decode(get_misc_data('upload_alternates')));
	$this->_vars['upload_directory'] = $upload_directory = get_misc_data('upload_directory');
	$this->_vars['upload_thdirectory'] = $upload_thdirectory = get_misc_data('upload_thdirectory');
	$this->_vars['upload_thumb_format'] = get_misc_data('upload_thumb_format');
	$this->_vars['upload_thumb_pre_format'] = get_misc_data('upload_t_pre_format');
	$this->_vars['upload_thumb_post_format'] = get_misc_data('upload_t_post_format');
	if (get_misc_data('upload_allow_hide'))
	    $hide_sql = " AND !a.file_hide_thumb";
	if ($upload_link=='story')
	     $sql = "SELECT a.*, b.file_fields AS `fields`, '' AS link_name 
				FROM " . table_prefix . "files a 
				LEFT JOIN " . table_prefix . "files b ON a.file_orig_id=b.file_id
				WHERE a.file_link_id='{$this->_vars['link_id']}' AND a.file_size='$upload_defsize' $hide_sql
				ORDER BY file_number";
	elseif ($upload_link=='orig')
	     $sql = "SELECT a.*, b.file_fields AS `fields`, IF(LEFT(b.file_name,4)='http',b.file_name,CONCAT('$upload_directory/',b.file_name)) AS link_name 
				FROM " . table_prefix . "files a 
				LEFT JOIN " . table_prefix . "files b ON a.file_orig_id=b.file_id 
				WHERE a.file_link_id='{$this->_vars['link_id']}' AND a.file_size='$upload_defsize' $hide_sql
				ORDER BY file_number";
	else
	     $sql = "SELECT a.*, c.file_fields AS `fields`, CONCAT('$upload_thdirectory/',b.file_name) AS link_name 
				FROM " . table_prefix . "files a 
				LEFT JOIN " . table_prefix . "files b ON a.file_orig_id=b.file_orig_id AND b.file_size='$upload_link' 
				LEFT JOIN " . table_prefix . "files c ON a.file_orig_id=c.file_id 
				WHERE a.file_link_id='{$this->_vars['link_id']}' AND a.file_size='$upload_defsize' $hide_sql
				ORDER BY file_number";
	$images = $db->get_results($sql,ARRAY_A);
	if($images)
	{
		for ($i=0; $i<sizeof($images); $i++)
		    if ($images[$i]['file_fields'])
		    	$images[$i]['fields'] = unserialize(base64_decode($images[$i]['file_fields']));
		    else
		    	$images[$i]['fields'] = unserialize(base64_decode($images[$i]['fields']));
		$this->_vars['images'] = $images;
	}
 ?>                                                          

<?php if (sizeof ( $this->_vars['images'] )): ?>
<?php echo $this->_vars['upload_thumb_pre_format']; ?>

<?php if (count((array)$this->_vars['images'])):  foreach ((array)$this->_vars['images'] as $this->_vars['image']): ?>
    <?php if ($this->_vars['upload_thumb_format']): ?>
	<?php 
		$format = $this->_vars['upload_thumb_format'];
		$image  = $this->_vars['image'];
		if (strpos($image['file_name'],'http')===0)
		    $format = str_replace('{path}',$image['file_name'],$format);
		elseif ($image['file_size']=='orig')
		    $format = str_replace('{path}',my_pligg_base."$upload_directory/{$image['file_name']}",$format);
		else
		    $format = str_replace('{path}',my_pligg_base."$upload_thdirectory/{$image['file_name']}",$format);
		if ($image['link_name'])
		{
		    if (strpos($image['link_name'],'http')===0)
		    	$format = str_replace('{target}',$image['link_name'],$format);
		    else
		    	$format = str_replace('{target}',my_pligg_base.$image['link_name'],$format);
		}
		else
		{
		    	if ($this->_vars['use_title_as_link'])
			{
				if ($this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://")
		    			$format = str_replace('{target}',$this->_vars['url'],$format);
				else
		    			$format = str_replace('{target}',$this->_vars['story_url'],$format);
			}
			else
			{
				if ($this->_vars['pagename'] == "story" && $this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://")
		    			$format = str_replace('{target}',$this->_vars['url'],$format);
				else
		    			$format = str_replace('{target}',$this->_vars['story_url'],$format);
			}
		}
	    	if (preg_match_all('/\{field(\d+)\}/s',$format,$m))
    		for ($i=0; $i<sizeof($m[1]); $i++)
    		{
			$field = $m[1][$i];
			$format = str_replace('{field'.$field.'}',$image['fields']['field'.$field] ? $image['fields']['field'.$field] : $alternates[$field],$format);
    		}
		echo $format;
	 ?>
    <?php else: ?>
	<?php if ($this->_vars['image']['link_name']): ?>
		<?php if (strpos ( $this->_vars['image']['link_name'] , 'http' ) === 0): ?>
			<a href='<?php echo $this->_vars['image']['link_name']; ?>
' <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?> <?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>>
		<?php else: ?>
			<a href='<?php echo $this->_vars['my_pligg_base'];  echo $this->_vars['image']['link_name']; ?>
' <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?>>
		<?php endif; ?>
	<?php else: ?>
			<?php if ($this->_vars['use_title_as_link'] == true): ?>
				<?php if ($this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
					<a href="<?php echo $this->_vars['url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?> <?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>>
				<?php else: ?>
					<a href="<?php echo $this->_vars['story_url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?>>
				<?php endif; ?>
			 <?php else: ?>
				<?php if ($this->_vars['pagename'] == "story" && $this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
					<a href="<?php echo $this->_vars['url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?> <?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>>
				<?php else: ?> 
				  <a href="<?php echo $this->_vars['story_url']; ?>
">
				<?php endif; ?>
			<?php endif; ?>
	<?php endif; ?>
	<?php if (strpos ( $this->_vars['image']['file_name'] , 'http' ) === 0): ?>
		<img src='<?php echo $this->_vars['image']['file_name']; ?>
'/> 
	<?php elseif ($this->_vars['image']['file_size'] == 'orig'): ?>
		<img src='<?php echo $this->_vars['my_pligg_base'];  echo $this->_vars['upload_directory']; ?>
/<?php echo $this->_vars['image']['file_name']; ?>
'/> 
	<?php else: ?>
		<img src='<?php echo $this->_vars['my_pligg_base'];  echo $this->_vars['upload_thdirectory']; ?>
/<?php echo $this->_vars['image']['file_name']; ?>
'/>
	<?php endif; ?>
	</a>
    <?php endif; ?>
<?php endforeach; endif; ?>
<?php echo $this->_vars['upload_thumb_post_format']; ?>

<?php endif; ?>