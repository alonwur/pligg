<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-05 09:36:33 PDT */ ?>



<?php $this->config_load(upload_lang_conf, null, null); ?>

<h2><?php echo $this->_confs['PLIGG_Upload_Attach']; ?>
</h2>
(<?php echo $this->_vars['upload_extensions']; ?>
 <?php echo $this->_confs['PLIGG_Upload_Extensions_Allowed']; ?>
)<br /><br />

<script>
var uploading = '<fieldset style="border:1px solid #eee;padding:10px;margin-bottom:10px;font-weight:bold;width:450px;"><h2><?php echo $this->_confs['PLIGG_Upload_Uploading']; ?>
...</h2></fieldset>';
var failed = '<fieldset style="border:1px solid #eee;padding:10px;margin-bottom:10px;font-weight:bold;width:450px;"><h2><?php echo $this->_confs['PLIGG_Upload_Failed']; ?>
...</h2></fieldset>';
var my_pligg_base = '<?php echo $this->_vars['my_pligg_base']; ?>
';
var mandatory = '<?php echo $this->_confs['PLIGG_Upload_Mandatory_Error']; ?>
';
var choose_file = '<?php echo $this->_confs['PLIGG_Upload_Choose_File']; ?>
';
var choose_url = '<?php echo $this->_confs['PLIGG_Upload_Choose_URL']; ?>
';
</script>
<script src='<?php echo $this->_vars['my_pligg_base']; ?>
/modules/upload/js/upload.js'></script>

<?php $this->assign('upload_fields', '1'); ?>

<?php if (isset($this->_sections['files'])) unset($this->_sections['files']);
$this->_sections['files']['name'] = 'files';
$this->_sections['files']['start'] = (int)0;
$this->_sections['files']['loop'] = is_array($this->_vars['upload_maxnumber']) ? count($this->_vars['upload_maxnumber']) : max(0, (int)$this->_vars['upload_maxnumber']);
$this->_sections['files']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['files']['show'] = true;
$this->_sections['files']['max'] = $this->_sections['files']['loop'];
if ($this->_sections['files']['start'] < 0)
	$this->_sections['files']['start'] = max($this->_sections['files']['step'] > 0 ? 0 : -1, $this->_sections['files']['loop'] + $this->_sections['files']['start']);
else
	$this->_sections['files']['start'] = min($this->_sections['files']['start'], $this->_sections['files']['step'] > 0 ? $this->_sections['files']['loop'] : $this->_sections['files']['loop']-1);
if ($this->_sections['files']['show']) {
	$this->_sections['files']['total'] = min(ceil(($this->_sections['files']['step'] > 0 ? $this->_sections['files']['loop'] - $this->_sections['files']['start'] : $this->_sections['files']['start']+1)/abs($this->_sections['files']['step'])), $this->_sections['files']['max']);
	if ($this->_sections['files']['total'] == 0)
		$this->_sections['files']['show'] = false;
} else
	$this->_sections['files']['total'] = 0;
if ($this->_sections['files']['show']):

		for ($this->_sections['files']['index'] = $this->_sections['files']['start'], $this->_sections['files']['iteration'] = 1;
			 $this->_sections['files']['iteration'] <= $this->_sections['files']['total'];
			 $this->_sections['files']['index'] += $this->_sections['files']['step'], $this->_sections['files']['iteration']++):
$this->_sections['files']['rownum'] = $this->_sections['files']['iteration'];
$this->_sections['files']['index_prev'] = $this->_sections['files']['index'] - $this->_sections['files']['step'];
$this->_sections['files']['index_next'] = $this->_sections['files']['index'] + $this->_sections['files']['step'];
$this->_sections['files']['first']	  = ($this->_sections['files']['iteration'] == 1);
$this->_sections['files']['last']	   = ($this->_sections['files']['iteration'] == $this->_sections['files']['total']);
?>
    <?php $this->assign('number', $this->_sections['files']['iteration']); ?>
    
    <div id='form_<?php echo $this->_vars['number']; ?>
'
    <?php 
	global $db;
	$upload_dir = mnmpath . get_misc_data('upload_directory');
	$this->_vars['file'] = '';
    	$images = $db->get_results($sql = "SELECT * from " . table_prefix . "files where file_link_id='{$this->_vars['submit_id']}' AND file_number='{$this->_vars['number']}' ORDER BY file_orig_id",ARRAY_A);
    	if($images || $this->_vars['number']>1)
	    print "style='display:none;'";

    	if($images)
	{
	    $this->_vars['file'] = $images[0]['file_name'];
	    $this->_vars['hide_thumb'] = $images[0]['file_hide_thumb'];
	    $this->_vars['hide_file'] = $images[0]['file_hide_file'];
	    $this->_vars['ispicture'] = $images[0]['file_ispicture'];
    	    $_SESSION['upload_files'][$this->_vars['number']] = array('id' => $images[0]['file_id']);
	    if ($this->_vars['number']>1)
	    	$this->_vars['upload_fields']++;
	    // Check if file is an image
	    if (strpos($images[0]['file_name'],'http')===0)
	    	$filename = $images[0]['file_name'];
	    else
	    	$filename = $upload_dir."/".$images[0]['file_name'];
	    if (!($str = @file_get_contents($filename)))   print "Can't read file $filename"; 
	    elseif (!($img = @imagecreatefromstring($str))) {
		$images = array();
	    }
	}
	$this->_vars['images'] = $images;
	$this->_vars['upload_directory']  = get_misc_data('upload_directory'); 
	$this->_vars['mandatory']  = unserialize(get_misc_data('upload_mandatory')); 
	$this->_vars['display']  = unserialize(get_misc_data('upload_display')); 
	$this->_vars['upload_thdirectory']= get_misc_data('upload_thdirectory');
	$this->_vars['upload_allow_hide']= get_misc_data('upload_allow_hide');
	$this->_vars['additional_fields'] = unserialize(base64_decode(get_misc_data('upload_fields')));
	$fields = $db->get_col($sql = "SELECT file_fields from " . table_prefix . "files where file_link_id='{$this->_vars['submit_id']}' AND file_number='{$this->_vars['number']}' AND file_size='orig'",ARRAY_A);
    	$values = unserialize(base64_decode($fields[0]));

     ?>
>
	<fieldset style="border:1px solid #eee;padding:10px;margin-bottom:10px;font-weight:bold;width:450px;">
    	<form method=post enctype="multipart/form-data" action='<?php echo $this->_vars['my_pligg_base']; ?>
/modules/upload/upload.php'  target='upload_iframe_<?php echo $this->_vars['number']; ?>
'>
		
		<input type='hidden' name='id' value='<?php echo $this->_vars['submit_id']; ?>
'>
    	    <input type='hidden' name='number' value='<?php echo $this->_vars['number']; ?>
'>
    	    <?php if (strstr ( $this->_vars['upload_external'] , 'file' )): ?>
    		<?php echo $this->_confs['PLIGG_Upload_Upload']; ?>
: <input style='margin-bottom:5px' size='10' type='file' name='upload_files[]' id='file_<?php echo $this->_vars['number']; ?>
' !onchange='submitUploadForm(this.form)'>
    		<?php if (strstr ( $this->_vars['upload_external'] , 'url' )): ?>
	    	    <?php echo $this->_confs['PLIGG_Upload_OR']; ?>
 
    		<?php endif; ?>
    	    <?php endif; ?>
    	    <?php if (strstr ( $this->_vars['upload_external'] , 'url' )): ?>
		<?php echo $this->_confs['PLIGG_Upload_Link']; ?>
: <input type='text' name='upload_urls[]' id='url_<?php echo $this->_vars['number']; ?>
' value='http://' !onchange='submitUploadForm(this.form)'>
    	    <?php endif; ?>
	    <?php if (count((array)$this->_vars['additional_fields'])):  foreach ((array)$this->_vars['additional_fields'] as $this->_vars['i'] => $this->_vars['field']): ?>
	    <br /><?php echo $this->_vars['field'];  if ($this->_vars['mandatory'][$this->_vars['i']+1] > 0) echo "<font color=red>*</font>"; ?>: <input type='text' size='57' name='field<?php echo $this->_vars['i']+1; ?>' <?php if ($this->_vars['mandatory'][$this->_vars['i']+1] > 0) echo "id='mandatory'"; ?> value='<?php echo $values['field'.($this->_vars['i']+1)]; ?>'>
	    <?php endforeach; endif; ?>
		<br /><br />
	    <input type='button' value='Upload' onclick='submitUploadForm(this.form)'>
		
    	</form>
    </div>
    <div id='thumb_<?php echo $this->_vars['number']; ?>
'><?php if ($this->_vars['images'] || $this->_vars['file']):  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['upload_tpl_path']."upload_ajax.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
  endif; ?></div>
    <iframe name="upload_iframe_<?php echo $this->_vars['number']; ?>
" id="upload_iframe_<?php echo $this->_vars['number']; ?>
" style='display:none;'></iframe> 
    </fieldset>
<?php endfor; endif; ?>
<script>
var upload_fields = <?php echo $this->_vars['upload_fields']; ?>
;
</script>
<button onclick='if (upload_fields < <?php echo $this->_vars['upload_maxnumber']; ?>
) add_upload_field(<?php echo $this->_vars['upload_maxnumber']; ?>
); if (++upload_fields >= <?php echo $this->_vars['upload_maxnumber']; ?>
) this.disabled=true;' <?php if ($this->_vars['upload_fields'] >= $this->_vars['upload_maxnumber']): ?>disabled<?php endif; ?>><?php echo $this->_confs['PLIGG_Upload_Add_File']; ?>
</button>

<?php $this->config_load(upload_pligg_lang_conf, null, null); ?>
