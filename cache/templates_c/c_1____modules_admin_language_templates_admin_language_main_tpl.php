<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 06:01:39 PDT */ ?>

<?php $this->config_load(admin_language_lang_conf, null, null); ?>

<?php echo '
	<style type="text/css">
		td {line-height:18px;}
		.eip_editable { background-color: #ff9; padding: 3px; }
		.eip_savebutton { background-color: #36f; color: #fff; }
		.eip_cancelbutton { background-color: #000; color: #fff; }
		.eip_saving { background-color: #903; color: #fff; padding: 3px; }
		.eip_empty { color: #afafaf; }	
		.emptytext {padding:0px 6px 0px 6px;border-top:2px solid #828177;border-left:2px solid #828177;border-bottom:1px solid #B0B0B0;border-right:1px solid #B0B0B0;background:#F5F5F5;}
	</style>
'; ?>


<fieldset><legend><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/manage_lang.gif" align="absmiddle" /> <?php echo $this->_confs['PLIGG_Admin_Language']; ?>
</legend>
<p><?php echo $this->_confs['PLIGG_Admin_Language_Instructions_1']; ?>
</p>
<p><?php echo $this->_confs['PLIGG_Admin_Language_Instructions_2']; ?>
</p>

<br />
<strong><?php echo $this->_confs['PLIGG_Admin_Language_Filter_Text']; ?>
</strong>: 
<input type="text" id="filterfor">
<input type="button" name="filter" value="<?php echo $this->_confs['PLIGG_Admin_Language_Filter_Button']; ?>
" onclick="filtertotext();" class="log2">
<input type="button" name="clearfilter" value="<?php echo $this->_confs['PLIGG_Admin_Language_Filter_Clear']; ?>
" onclick="showall();" class="log2">
<br /><br />
<hr />

<?php if (count((array)$this->_vars['outputHtml'])):  foreach ((array)$this->_vars['outputHtml'] as $this->_vars['html']): ?>
	<?php echo $this->_vars['html']; ?>

<?php endforeach; endif; ?>

<?php echo '
	<script type="text/javascript">
function filtertotext(){
		var rows = document.getElementsByTagName("tr"); 
		var filterfor = document.getElementById(\'filterfor\').value;
		
		for (var i = 0; i < rows.length; i++) { 
			var x = rows[i].id;
			
			if(x.substr(0, 4) == \'row_\'){
				var y = x.substr(4, 1000).toUpperCase();
				if(y.indexOf(filterfor.toUpperCase())==-1){
					rows[i].style.display=\'none\';
				} else {
					rows[i].style.display=\'\';
				}
			}
		}
}

function showall(){
		var rows = document.getElementsByTagName("tr"); 
		for (var i = 0; i < rows.length; i++) { 
			rows[i].style.display=\'\';
		}

}
	</script>
'; ?>


<?php $this->config_load(admin_language_pligg_lang_conf, null, null); ?>
