<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-06 04:31:55 PDT */ ?>

   <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_module_upload_start"), $this);?>
<?php $this->config_load(upload_lang_conf, null, null); ?>

<?php 
	global $db;

	$alternates = unserialize(base64_decode(get_misc_data('upload_alternates')));
	$this->_vars['upload_directory'] = $upload_directory = get_misc_data('upload_directory');
	$this->_vars['upload_format'] = get_misc_data('upload_format');
	$this->_vars['upload_pre_format'] = get_misc_data('upload_pre_format');
	$this->_vars['upload_post_format'] = get_misc_data('upload_post_format');
        $sql = "SELECT * FROM " . table_prefix . "files where file_link_id='{$this->_vars['link_id']}' AND file_size='orig' ".(get_misc_data('upload_allow_hide') ? ' AND !file_hide_file' : '');
	$images = $db->get_results($sql,ARRAY_A);
	if($images)
	{
		for ($i=0; $i<sizeof($images); $i++)
		{
		    $pathinfo = pathinfo($images[$i]['file_name']);
		    $images[$i]['file_ext'] = strtolower($pathinfo['extension']);
		    $images[$i]['fields'] = unserialize(base64_decode($images[$i]['file_fields']));
		}
		$this->_vars['images'] = $images;
	}
 ?>                                                          

<?php if (sizeof ( $this->_vars['images'] )): ?><h3><?php echo $this->_confs['PLIGG_Upload_Attached']; ?>
</h3>
<?php echo $this->_vars['upload_pre_format']; ?>

<?php if (count((array)$this->_vars['images'])):  foreach ((array)$this->_vars['images'] as $this->_vars['image']): ?>

    <?php if ($this->_vars['image']['file_ext'] == 'txt'): ?><!-- Text file -->
    <?php elseif ($this->_vars['image']['file_ext'] == 'zip'): ?><!-- ZIP file -->
    <?php endif; ?>

    <?php if ($this->_vars['upload_format']): ?>
	<?php 
		$format = $this->_vars['upload_format'];
		$image  = $this->_vars['image'];
		if (strpos($image['file_name'],'http')===0)
		    $format = str_replace('{path}',$image['file_name'],$format);
		else
		    $format = str_replace('{path}',my_pligg_base."$upload_directory/{$image['file_name']}",$format);
	    	if (preg_match_all('/\{field(\d+)\}/s',$format,$m))
    		for ($i=0; $i<sizeof($m[1]); $i++)
    		{
			$field = $m[1][$i];
			$format = str_replace('{field'.$field.'}',$image['fields']['field'.$field] ? $image['fields']['field'.$field] : $alternates[$field],$format);
    		}
		echo $format;
	 ?>
    <?php else: ?>
	<?php if (strpos ( $this->_vars['image']['file_name'] , 'http' ) === 0): ?>
		<a href='<?php echo $this->_vars['image']['file_name']; ?>
'><?php echo $this->_vars['image']['file_name']; ?>
</a>
	<?php else: ?>
		<a href='<?php echo $this->_vars['my_pligg_base'];  echo $this->_vars['upload_directory']; ?>
/<?php echo $this->_vars['image']['file_name']; ?>
'><?php echo $this->_vars['image']['file_name']; ?>
</a>
	<?php endif; ?>
    <?php endif; ?>
    <br>
<?php endforeach; endif; ?>
<?php echo $this->_vars['upload_post_format']; ?>

<?php endif; ?>

<?php $this->config_load(upload_pligg_lang_conf, null, null); ?>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_module_upload_end"), $this);?>