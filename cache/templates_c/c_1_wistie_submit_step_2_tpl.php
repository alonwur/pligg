<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/modifier.repeat_count.php'); $this->register_modifier("repeat_count", "tpl_modifier_repeat_count");  require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:53:37 PDT */ ?>

<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/story_preview.js"></script>

<h1><?php echo $this->_confs['PLIGG_Visual_Submit2_Header']; ?>
</h1>
<div id="submit">
	<div id="submit_step_1_content">
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step2_start"), $this);?>
		<form action="<?php echo $this->_vars['URL_submit']; ?>
" method="post" name="thisform" id="thisform" enctype="multipart/form-data" onsubmit="return checkForm()">
		<div class="submit_step_1_left">
				<?php if ($this->_vars['Submit_Show_URL_Input'] == 1): ?>
					<h2><?php echo $this->_confs['PLIGG_Visual_Submit2_Source']; ?>
</h2>
					<label><?php echo $this->_confs['PLIGG_Visual_Submit2_NewsURL']; ?>
: </label>
					<a href="<?php echo $this->_vars['submit_url']; ?>
" class="simple"><?php echo $this->_vars['submit_url']; ?>
</a>
					<?php if ($this->_vars['submit_url_title'] != "1"): ?>
						<br />
						<label><?php echo $this->_confs['PLIGG_Visual_Submit2_URLTitle']; ?>
: </label><?php echo $this->_vars['submit_url_title']; ?>

					<?php endif; ?>
				<?php endif; ?>
			<br /><br />
			<h2><?php echo $this->_confs['PLIGG_Visual_Submit2_Details']; ?>
</h2>
			<label><?php echo $this->_confs['PLIGG_Visual_Submit2_Title']; ?>
: </label><?php echo $this->_confs['PLIGG_Visual_Submit2_TitleInstruct']; ?>
<br/>
			<input type="text" id="title" class="text" name="title" value="<?php if ($this->_vars['submit_title']):  echo $this->_vars['submit_title'];  else:  echo $this->_vars['submit_url_title'];  endif; ?>" size="54" maxlength="<?php echo $this->_vars['maxTitleLength']; ?>
" />

			<br /><br/>

			<label><?php echo $this->_confs['PLIGG_Visual_Submit2_Category']; ?>
: </label><?php echo $this->_confs['PLIGG_Visual_Submit2_CatInstruct']; ?>
<br/>
			<select name="category" id="category" onchange="if ($('#category option:selected').val()>0) $('#lp-category').text($('#category option:selected').text()); else $('#lp-category').text('');">
				<option value=""><?php echo $this->_confs['PLIGG_Visual_Submit2_CatInstructSelect']; ?>
</option>
				<?php if (isset($this->_sections['thecat'])) unset($this->_sections['thecat']);
$this->_sections['thecat']['name'] = 'thecat';
$this->_sections['thecat']['loop'] = is_array($this->_vars['submit_cat_array']) ? count($this->_vars['submit_cat_array']) : max(0, (int)$this->_vars['submit_cat_array']);
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
				   <option value = "<?php echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id']; ?>
" <?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id'] == $this->_vars['submit_category']): ?>selected<?php endif; ?>>
						  <?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'] < $this->_vars['submit_lastspacer']):  echo $this->_run_modifier($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacerdiff'], 'repeat_count', 'plugin', 1, '');  endif; ?>
						  <?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'] > $this->_vars['submit_lastspacer']):  endif; ?>
						  <?php echo $this->_run_modifier($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount'], 'repeat_count', 'plugin', 1, '&nbsp;&nbsp;&nbsp;'); ?>

						  <?php echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['name']; ?>

						  &nbsp;&nbsp;&nbsp;
						  <?php $this->assign('submit_lastspacer', $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['spacercount']); ?>
				  </option>
				<?php endfor; endif; ?>
			</select>

			<br/><br/>

			<?php if ($this->_vars['enable_group'] && $this->_vars['output'] != ''): ?>
				<label><?php echo $this->_confs['PLIGG_Visual_Group_Submit_story']; ?>
: </label><br/>
				<?php echo $this->_vars['output']; ?>

				<br/><br/>
			<?php endif; ?>
			
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_header_admin_main_comment_subscription"), $this);?>
			
			
			
			<?php if ($this->_vars['enable_tags']): ?>
				<label><?php echo $this->_confs['PLIGG_Visual_Submit2_Tags']; ?>
: </label>
				<strong><?php echo $this->_confs['PLIGG_Visual_Submit2_Tags_Inst1']; ?>
</strong><br /><?php echo $this->_confs['PLIGG_Visual_Submit2_Tags_Example']; ?>
 <em><?php echo $this->_confs['PLIGG_Visual_Submit2_Tags_Inst2']; ?>
</em><br/>
				<input type="text" id="tags" class="wickEnabled" name="tags" value="<?php echo $this->_vars['tags_words']; ?>
" size="54" maxlength="<?php echo $this->_vars['maxTagsLength']; ?>
" /><br /><br />
				<script type="text/javascript" language="JavaScript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/tag_data.js"></script> 
				<script type="text/javascript" language="JavaScript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/wick.js"></script> 
			<?php endif; ?>

			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step2_middle"), $this);?>

			<label><?php echo $this->_confs['PLIGG_Visual_Submit2_Description']; ?>
: </label><?php echo $this->_confs['PLIGG_Visual_Submit2_DescInstruct']; ?>

			<?php if ($this->_vars['Story_Content_Tags_To_Allow'] == ""): ?>
				<br/><strong><?php echo $this->_confs['PLIGG_Visual_Submit2_No_HTMLTagsAllowed']; ?>
 </strong><?php echo $this->_confs['PLIGG_Visual_Submit2_HTMLTagsAllowed']; ?>

			<?php else: ?>
				<br/><?php echo $this->_confs['PLIGG_Visual_Submit2_HTMLTagsAllowed']; ?>
: <?php echo $this->_vars['Story_Content_Tags_To_Allow']; ?>

			<?php endif; ?>
			<br/><textarea name="bodytext" class="bodytext" rows="10" cols="41" id="bodytext" maxlength="<?php echo $this->_vars['maxStoryLength']; ?>
" WRAP="SOFT" onkeypress="counter(this)" onkeydown="counter(this)" onkeyup="counter(this); if(!this.form.summarycheckbox || !this.form.summarytext) return; if(this.form.summarycheckbox.checked == false) {this.form.summarytext.value = this.form.bodytext.value.substring(0, <?php echo $this->_vars['StorySummary_ContentTruncate']; ?>
);}textCounter(this.form.summarytext,this.form.remLen, <?php echo $this->_vars['StorySummary_ContentTruncate']; ?>
);"><?php if ($this->_vars['submit_url_description']):  echo $this->_vars['submit_url_description'];  endif;  echo $this->_vars['submit_content']; ?>
</textarea><br />
			
			<?php if ($this->_vars['Spell_Checker'] == 1): ?><input type="button" name="spelling" value="<?php echo $this->_confs['PLIGG_Visual_Check_Spelling']; ?>
" class="submit" onclick="openSpellChecker('bodytext');"/><?php endif; ?>

			<br />
			<br />

			<div id="sumtrack">
				<?php if ($this->_vars['SubmitSummary_Allow_Edit'] == 1): ?>
				<label><?php echo $this->_confs['PLIGG_Visual_Submit2_Summary']; ?>
: </label><?php echo $this->_confs['PLIGG_Visual_Submit2_SummaryInstruct'];  echo $this->_confs['PLIGG_Visual_Submit2_SummaryLimit'];  echo $this->_vars['StorySummary_ContentTruncate'];  echo $this->_confs['PLIGG_Visual_Submit2_SummaryLimitCharacters']; ?>

					<input type="checkbox" name="summarycheckbox" id="summarycheckbox" onclick="SetState(this, this.form.summarytext)"> <?php echo $this->_confs['PLIGG_Visual_Submit2_SummaryCheckBox']; ?>

					<?php if ($this->_vars['Story_Content_Tags_To_Allow'] == ""): ?>
						<br /><strong><?php echo $this->_confs['PLIGG_Visual_Submit2_No_HTMLTagsAllowed']; ?>
 </strong><?php echo $this->_confs['PLIGG_Visual_Submit2_HTMLTagsAllowed']; ?>

					<?php else: ?>
						<br /><?php echo $this->_confs['PLIGG_Visual_Submit2_HTMLTagsAllowed']; ?>
: <?php echo $this->_vars['Story_Content_Tags_To_Allow']; ?>

					<?php endif; ?>
					<br/><textarea disabled="true" name="summarytext" class="summarytext" rows="5" cols="60" maxlength="<?php echo $this->_vars['maxSummaryLength']; ?>
" id="summarytext" WRAP="SOFT" onkeydown="textCounter(this.form.summarytext,this.form.remLen, <?php echo $this->_vars['StorySummary_ContentTruncate']; ?>
);"><?php echo $this->_vars['submit_summary']; ?>
</textarea><br />
					<input readonly type="text" name="remLen" size="3" maxlength="3" value="400"><?php echo $this->_confs['PLIGG_Visual_Submit2_SummaryCharactersLeft']; ?>

					<?php if ($this->_vars['Spell_Checker'] == 1): ?><input type="button" name="spelling" value="<?php echo $this->_confs['PLIGG_Visual_Check_Spelling']; ?>
" class="submit" onclick="openSpellChecker('summarytext');"/><?php endif; ?>
					<br /><br />
				<?php endif; ?>

				
			</div>
		</div>

		<div class="submit_right_sidebar" id="dockcontent">
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_preview_start"), $this);?>
			<div class="preview-story">
				<h3 class="preview-title"><?php echo $this->_confs['PLIGG_Visual_Story_Preview']; ?>
</h3>
				<div class="headline">
				<?php if ($this->_vars['Voting_Method'] == 2): ?>
					<h4 id="ls_title-<?php echo $this->_vars['link_shakebox_index']; ?>
">
						<ul class='star-rating<?php echo $this->_vars['star_class']; ?>
' id="xvotes-<?php echo $this->_vars['link_shakebox_index']; ?>
">
							<li class="current-rating" style="width: 100px;" ></li>
							<span id="mnmc-<?php echo $this->_vars['link_shakebox_index']; ?>
" style="display: none;">
									<li><a href="#" class='one-star'>1</a></li>
									<li><a href="#" class='two-stars'>2</a></li>
									<li><a href="#" class='three-stars'>3</a></li>
									<li><a href="#" class='four-stars'>4</a></li>
									<li><a href="#" class='five-stars'>5</a></li>
							</span>
							<span id="mnmd-<?php echo $this->_vars['link_shakebox_index']; ?>
" style="display: none;">
									<li class='one-star-noh'>1</li>
									<li class='two-stars-noh'>2</li>
									<li class='three-stars-noh'>3</li>
									<li class='four-stars-noh'>4</li>
									<li class='five-stars-noh'>5</li>
							</span>
						</ul>
					</h4>
				<?php else: ?>
					<div class="vote">
						<span class="submit_votenumber">
							1
						</span><br />
						<span class="subtext">
							<?php echo $this->_confs['PLIGG_Visual_Vote_For_It']; ?>

						</span>
					</div>
				<?php endif; ?>	
					<div class="title">
						<h2 style="min-height:16px;">
							<div id="lp-title"><?php if ($this->_vars['submit_title']):  echo $this->_vars['submit_title'];  else:  echo $this->_vars['submit_url_title'];  endif; ?></div>
						</h2>
						
						<span class="subtext">
							<?php 
							global $main_smarty, $current_user;

							if ($current_user->user_id > 0 && $current_user->authenticated) {
								$login=$current_user->user_login;
							}

							// Read the users information from the database
							$user=new User();
							$user->username = $login;
							// Assign smarty variables to use in the template.
							$main_smarty->assign('user_username', $user->username);
							$main_smarty->assign('user_url_personal_data', getmyurl('user2', $login, 'profile'));
							 ?>

							<?php echo $this->_confs['PLIGG_Visual_LS_Posted_By']; ?>
 <a href="<?php echo $this->_vars['user_url_personal_data']; ?>
"><?php echo $this->_vars['user_username']; ?>
</a> 
							
							<?php if ($this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
								(<a href="<?php echo $this->_vars['url']; ?>
" target="_blank"><?php echo $this->_vars['url_short']; ?>
</a>)
							<?php else: ?>
								(<?php echo $this->_vars['No_URL_Name']; ?>
)
							<?php endif; ?>
						</span>
					</div>
				</div>
				<div class="storycontent">
					<span class="news-body-text">
						<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_preview_middle"), $this);?>
						<span id="ls_contents-<?php echo $this->_vars['link_shakebox_index']; ?>
">
							<div id="lp-bodytext"><?php if ($this->_vars['submit_url_description']):  echo $this->_vars['submit_url_description'];  endif;  echo $this->_vars['submit_content']; ?>
</div>
							<div style="clear:both;"></div> 
						</span>
					</span>
				</div>	
				<div class="storyfooter" style="float:right;font-size:10px;">	
					<div id="lp-category">
						<?php if (isset($this->_sections['thecat'])) unset($this->_sections['thecat']);
$this->_sections['thecat']['name'] = 'thecat';
$this->_sections['thecat']['loop'] = is_array($this->_vars['submit_cat_array']) ? count($this->_vars['submit_cat_array']) : max(0, (int)$this->_vars['submit_cat_array']);
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
						   <?php if ($this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['auto_id'] == $this->_vars['submit_category']):  echo $this->_vars['submit_cat_array'][$this->_sections['thecat']['index']]['name'];  endif; ?>
						<?php endfor; endif; ?>
					</div>| 
					<div id="lp-tags"><?php echo $this->_vars['tags_words']; ?>
</div>
				</div>
				<div style="clear:both;"></div>
			</div>

			<?php echo '
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function() {
						$(\'#submit_step_1_content input, #submit_step_1_content textarea, #submit_step_1_content select\').bind(\'blur keyup\',function() {
							// Main content
							$(\'#lp-bodytext\').text($(\'#bodytext\').val());
							$(\'#lp-bodytext\').html($(\'#lp-bodytext\').html().replace(/\\n/g,\'<br />\'));
							
							// Other
							$(\'#lp-link_group_id\').text($(\'#link_group_id\').val());
							$(\'#lp-tags\').text($(\'#tags\').val());
							$(\'#lp-title\').text($(\'#title\').val());
						});
					});
				</script>
			'; ?>

	
			<?php echo tpl_function_checkActionsTpl(array('location' => "submit_step_2_pre_extrafields"), $this);?>

			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_extra_fields'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
			<br />

			<?php if (isset ( $this->_vars['register_step_1_extra'] )): ?>
				<?php echo $this->_vars['register_step_1_extra']; ?>

			<?php endif; ?>

			<input class="button_max" type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Submit2_Continue']; ?>
" />
			
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step2_end"), $this);?>
			
		</div>
		
		<div style="clear:both;"></div>

		<input type="hidden" name="url" id="url" value="<?php echo $this->_vars['submit_url']; ?>
" />
		<input type="hidden" name="phase" value="2" />
		<input type="hidden" name="randkey" value="<?php echo $this->_vars['randkey']; ?>
" />
		<input type="hidden" name="id" value="<?php echo $this->_vars['submit_id']; ?>
" />
		</form>
	</div>
</div>

<?php echo '
<script type="text/javascript">
	var dock0=new dockit("dockcontent", 0);
</script>
'; ?>
