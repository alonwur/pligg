<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 06:03:08 PDT */ ?>

<?php if ($this->_vars['pagename'] == "story"): ?><br /><?php endif; ?>

<?php echo $this->_vars['the_story']; ?>


<br/>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_who_voted_start"), $this);?>
<div id="who_voted">
	<h2><?php echo $this->_confs['PLIGG_Visual_Story_WhoVoted']; ?>
</h2>
	<div class="whovotedwrapper" id="idwhovotedwrapper">
		<ol>
			<?php if (isset($this->_sections['nr'])) unset($this->_sections['nr']);
$this->_sections['nr']['name'] = 'nr';
$this->_sections['nr']['loop'] = is_array($this->_vars['voter']) ? count($this->_vars['voter']) : max(0, (int)$this->_vars['voter']);
$this->_sections['nr']['show'] = true;
$this->_sections['nr']['max'] = $this->_sections['nr']['loop'];
$this->_sections['nr']['step'] = 1;
$this->_sections['nr']['start'] = $this->_sections['nr']['step'] > 0 ? 0 : $this->_sections['nr']['loop']-1;
if ($this->_sections['nr']['show']) {
	$this->_sections['nr']['total'] = $this->_sections['nr']['loop'];
	if ($this->_sections['nr']['total'] == 0)
		$this->_sections['nr']['show'] = false;
} else
	$this->_sections['nr']['total'] = 0;
if ($this->_sections['nr']['show']):

		for ($this->_sections['nr']['index'] = $this->_sections['nr']['start'], $this->_sections['nr']['iteration'] = 1;
			 $this->_sections['nr']['iteration'] <= $this->_sections['nr']['total'];
			 $this->_sections['nr']['index'] += $this->_sections['nr']['step'], $this->_sections['nr']['iteration']++):
$this->_sections['nr']['rownum'] = $this->_sections['nr']['iteration'];
$this->_sections['nr']['index_prev'] = $this->_sections['nr']['index'] - $this->_sections['nr']['step'];
$this->_sections['nr']['index_next'] = $this->_sections['nr']['index'] + $this->_sections['nr']['step'];
$this->_sections['nr']['first']	  = ($this->_sections['nr']['iteration'] == 1);
$this->_sections['nr']['last']	   = ($this->_sections['nr']['iteration'] == $this->_sections['nr']['total']);
?>
				<li>
					<?php if ($this->_vars['UseAvatars'] != "0"): ?><img src="<?php echo $this->_vars['voter'][$this->_sections['nr']['index']]['Avatar_ImgSrc']; ?>
" alt="Avatar" align="top" /><?php endif; ?> 
					<a href = "<?php echo $this->_vars['URL_user'].$this->_vars['voter'][$this->_sections['nr']['index']]['user_login']; ?>
"><?php echo $this->_vars['voter'][$this->_sections['nr']['index']]['user_login']; ?>
</a><br/>
				</li>
			<?php endfor; endif; ?>
		</ol>
	</div>
</div>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_who_voted_end"), $this);?>

<br style="clear:both" />
<?php if (count ( $this->_vars['related_story'] ) != 0): ?>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_related_start"), $this);?>
<div id="related">
	<h2><?php echo $this->_confs['PLIGG_Visual_Story_RelatedStory']; ?>
</h2>	
	<ol>
		<?php if (isset($this->_sections['nr'])) unset($this->_sections['nr']);
$this->_sections['nr']['name'] = 'nr';
$this->_sections['nr']['loop'] = is_array($this->_vars['related_story']) ? count($this->_vars['related_story']) : max(0, (int)$this->_vars['related_story']);
$this->_sections['nr']['show'] = true;
$this->_sections['nr']['max'] = $this->_sections['nr']['loop'];
$this->_sections['nr']['step'] = 1;
$this->_sections['nr']['start'] = $this->_sections['nr']['step'] > 0 ? 0 : $this->_sections['nr']['loop']-1;
if ($this->_sections['nr']['show']) {
	$this->_sections['nr']['total'] = $this->_sections['nr']['loop'];
	if ($this->_sections['nr']['total'] == 0)
		$this->_sections['nr']['show'] = false;
} else
	$this->_sections['nr']['total'] = 0;
if ($this->_sections['nr']['show']):

		for ($this->_sections['nr']['index'] = $this->_sections['nr']['start'], $this->_sections['nr']['iteration'] = 1;
			 $this->_sections['nr']['iteration'] <= $this->_sections['nr']['total'];
			 $this->_sections['nr']['index'] += $this->_sections['nr']['step'], $this->_sections['nr']['iteration']++):
$this->_sections['nr']['rownum'] = $this->_sections['nr']['iteration'];
$this->_sections['nr']['index_prev'] = $this->_sections['nr']['index'] - $this->_sections['nr']['step'];
$this->_sections['nr']['index_next'] = $this->_sections['nr']['index'] + $this->_sections['nr']['step'];
$this->_sections['nr']['first']	  = ($this->_sections['nr']['iteration'] == 1);
$this->_sections['nr']['last']	   = ($this->_sections['nr']['iteration'] == $this->_sections['nr']['total']);
?>
			<li><a href = "<?php echo $this->_vars['related_story'][$this->_sections['nr']['index']]['url']; ?>
"><?php echo $this->_vars['related_story'][$this->_sections['nr']['index']]['link_title']; ?>
</a><br/></li> 
		<?php endfor; endif; ?>
	</ol>
</div>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_related_end"), $this);?>
<?php endif; ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_start"), $this);?>
<div id="comments">
	<form action="" method="post" id="thisform">
		<h3><a name="comments" class="comments_title"><?php echo $this->_confs['PLIGG_Visual_Story_Comments']; ?>
</a></h3>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_individual_start"), $this);?>
			<?php echo $this->_vars['the_comments']; ?>

		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_individual_end"), $this);?>
		<?php if ($this->_vars['user_authenticated'] != ""): ?>
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/comment_form.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		<?php else: ?>
			<br/>
			<?php echo tpl_function_checkActionsTpl(array('location' => "anonymous_comment_form"), $this);?>
			<div align="center" class="login_to_comment">
				<a href="<?php echo $this->_vars['login_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Story_LoginToComment']; ?>
</a> <?php echo $this->_confs['PLIGG_Visual_Story_Register']; ?>
 <a href="<?php echo $this->_vars['register_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Story_RegisterHere']; ?>
</a>.
			</div>
		<?php endif; ?>
	</form>
</div>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_end"), $this);?>
