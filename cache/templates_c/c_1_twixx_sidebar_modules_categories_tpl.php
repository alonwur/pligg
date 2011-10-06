<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/modifier.repeat_count.php'); $this->register_modifier("repeat_count", "tpl_modifier_repeat_count");  require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-06 04:26:23 PDT */ ?>

<div id="categories">
<ul class="dropdown dropdown-horizontal">
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_widget_categories_start"), $this);?>
<?php if (isset($this->_sections['thecat'])) unset($this->_sections['thecat']);
$this->_sections['thecat']['name'] = 'thecat';
$this->_sections['thecat']['loop'] = is_array($this->_vars['cat_array']) ? count($this->_vars['cat_array']) : max(0, (int)$this->_vars['cat_array']);
$this->_sections['thecat']['show'] = true;
$this->_sections['thecat']['max'] = $this->_sections['thecat']['loop'];
$this->_sections['thecat']['step'] = 1;
$this->_sections['thecat']['start'] = $this->_sections['thecat']['step'] > 0 ? 0 : $this->_sections['thecat']['loop']-1;
if ($this->_sections['thecat']['show']) {
	$this->_sections['thecat']['total'] = $this->_sections['thecat']['loop'];
	if ($this->_sections['thecat']['total'] == 0)
		$this->_sections['thecat']['show'] = false;
} else
	$this->_sections['thecat']['total'] = 0;
if ($this->_sections['thecat']['show']):

		for ($this->_sections['thecat']['index'] = $this->_sections['thecat']['start'], $this->_sections['thecat']['iteration'] = 1;
			 $this->_sections['thecat']['iteration'] <= $this->_sections['thecat']['total'];
			 $this->_sections['thecat']['index'] += $this->_sections['thecat']['step'], $this->_sections['thecat']['iteration']++):
$this->_sections['thecat']['rownum'] = $this->_sections['thecat']['iteration'];
$this->_sections['thecat']['index_prev'] = $this->_sections['thecat']['index'] - $this->_sections['thecat']['step'];
$this->_sections['thecat']['index_next'] = $this->_sections['thecat']['index'] + $this->_sections['thecat']['step'];
$this->_sections['thecat']['first']	  = ($this->_sections['thecat']['iteration'] == 1);
$this->_sections['thecat']['last']	   = ($this->_sections['thecat']['iteration'] == $this->_sections['thecat']['total']);
?>
<?php if ($this->_vars['lastspacer'] == ""):  $this->assign('lastspacer', $this->_vars['cat_array'][$this->_sections['thecat']['index']]['spacercount']);  endif; ?>
<?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['auto_id'] != 0): ?>

<?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['spacercount'] < $this->_vars['submit_lastspacer']): ?></ul></li><?php endif; ?>
<?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['spacercount'] > $this->_vars['submit_lastspacer']): ?><ul><?php endif; ?>

	<li<?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['principlecat'] != 0): ?> class="dir"<?php endif; ?>>
	<a href="<?php if ($this->_vars['pagename'] == "upcoming" || $this->_vars['groupview'] == "upcoming"):  echo $this->_vars['URL_queuedcategory'].$this->_vars['cat_array'][$this->_sections['thecat']['index']]['safename'];  else:  echo $this->_vars['URL_maincategory'].$this->_vars['cat_array'][$this->_sections['thecat']['index']]['safename'];  endif;  
	global $URLMethod;
	if ($URLMethod==2) print "/";
	 ?>"><?php echo $this->_vars['cat_array'][$this->_sections['thecat']['index']]['name']; ?>
</a>
	<?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['principlecat'] == 0): ?></li><?php else:  endif;  $this->assign('submit_lastspacer', $this->_vars['cat_array'][$this->_sections['thecat']['index']]['spacercount']);  endif; ?>
<?php endfor; endif; ?>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_widget_categories_end"), $this);?>
<?php if ($this->_vars['cat_array'][$this->_sections['thecat']['index']]['spacercount'] < $this->_vars['submit_lastspacer']):  echo $this->_run_modifier($this->_vars['lastspacer'], 'repeat_count', 'plugin', 1, '</ul></li>');  endif; ?>
</ul>
</div>