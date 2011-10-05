<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:53 PDT */ ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_start"), $this);?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_center_just_below_header"), $this);?>

<?php if ($this->_vars['user_view'] == 'search'): ?>
	<div id="navbar">
		<?php if ($this->_vars['Allow_Friends'] != "0"): ?>	
			<div id="search_users">
				<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php" method="get"
		<?php 
		global $URLMethod, $my_base_url, $my_pligg_base;
		if ($URLMethod==2) print "onsubmit='document.location.href=\"{$my_base_url}{$my_pligg_base}/user/search/\"+encodeURIComponent(this.keyword.value); return false;'";
		 ?>
>
				<input type="hidden" name="view" value="search">
					<?php if ($this->_vars['get']['keyword'] != ""): ?>
						<?php $this->assign('searchboxtext', $this->_vars['get']['keyword']); ?>
					<?php else: ?>
						<?php $this->assign('searchboxtext', $this->_confs['PLIGG_Visual_Search_SearchDefaultText']); ?>			
					<?php endif; ?>
				<input type="text" name="keyword" class="field" value="<?php echo $this->_vars['searchboxtext']; ?>
" onfocus="if(this.value == '<?php echo $this->_vars['searchboxtext']; ?>
') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo $this->_vars['searchboxtext']; ?>
';}">
				<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_User_Search_Users']; ?>
" class="button">
				</form>
			</div>
			<?php if ($this->_vars['user_login'] != $this->_vars['user_logged_in']): ?>
				<?php if ($this->_vars['is_friend'] > 0): ?>
					<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/user_delete.gif" align="absmiddle" />
					<a href="<?php echo $this->_vars['user_url_remove']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Remove_Friend']; ?>
 <?php echo $this->_vars['user_login']; ?>
 <?php echo $this->_confs['PLIGG_Visual_User_Profile_Remove_Friend_2']; ?>
</a>
					<?php if ($this->_vars['user_authenticated'] == true): ?>
						<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_center"), $this);?>
					<?php endif; ?> 			
				<?php else: ?>
					<?php if ($this->_vars['user_authenticated'] == true): ?>
						<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/user_add.gif" align="absmiddle" />
						<a href="<?php echo $this->_vars['user_url_add']; ?>
">	<?php echo $this->_confs['PLIGG_Visual_User_Profile_Add_Friend']; ?>
 <?php echo $this->_vars['user_login']; ?>
 <?php echo $this->_confs['PLIGG_Visual_User_Profile_Add_Friend_2']; ?>
</a>
					<?php endif; ?>   
				<?php endif; ?>      		
			<?php else: ?>
				<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends.png" align="absmiddle" />
				<a href="<?php echo $this->_vars['user_url_friends']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends']; ?>
</a> 
				&nbsp;|&nbsp;
				<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends2.png" align="absmiddle" />
				<a href="<?php echo $this->_vars['user_url_friends2']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends_2']; ?>
</a> 

				
			<?php endif; ?> 
		<?php endif; ?>
	</div>

	<?php if ($this->_vars['userlist']): ?>
		<h2><?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 '<?php echo $this->_vars['search']; ?>
'</h2>

		<table cellpadding="1" border="0">
			<tr><th><?php echo $this->_confs['PLIGG_Visual_Login_Username']; ?>
</th><th><?php echo $this->_confs['PLIGG_Visual_User_Profile_Joined']; ?>
</th><th><?php echo $this->_confs['PLIGG_Visual_User_Profile_Homepage']; ?>
</th><th>Add/Remove</th></tr>
			<?php if (isset($this->_sections['nr'])) unset($this->_sections['nr']);
$this->_sections['nr']['name'] = 'nr';
$this->_sections['nr']['loop'] = is_array($this->_vars['userlist']) ? count($this->_vars['userlist']) : max(0, (int)$this->_vars['userlist']);
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
				<tr>
				<td width="240px"><img src="<?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['Avatar']; ?>
" align="absmiddle" /> <a href="<?php echo $this->_vars['URL_user'].$this->_vars['userlist'][$this->_sections['nr']['index']]['user_login']; ?>
"><?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_login']; ?>
</a></td>
				<td width="120px"><?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_date']; ?>
</td>
				<td width="300px" style="text-align:center;"><?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['user_url']; ?>
</td>
				<td width="80px" style="text-align:center;"><?php if ($this->_vars['userlist'][$this->_sections['nr']['index']]['status'] == 0): ?>	
						<a href="<?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['add_friend']; ?>
"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/user_add.gif" align="absmiddle" border="0" /></a>
					<?php else: ?>
						<a href="<?php echo $this->_vars['userlist'][$this->_sections['nr']['index']]['remove_friend']; ?>
"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/user_delete.gif" align="absmiddle" border="0"/></a>
					<?php endif; ?>
				</td>	
				</tr>
			<?php endfor; endif; ?>
		</table>
	<?php else: ?>
		<h2><?php echo $this->_confs['PLIGG_Visual_Search_NoResults']; ?>
 '<?php echo $this->_vars['search']; ?>
'</h2>
	<?php endif; ?>
	
<?php endif; ?>


<?php if ($this->_vars['user_view'] == 'viewfriends'): ?>
	<div id="navbar">
		<?php if ($this->_vars['Allow_Friends'] != "0"): ?>
			<?php if ($this->_vars['user_authenticated'] == true): ?> 
				<div id="search_users">
					<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php" method="get"
		<?php 
		global $URLMethod, $my_base_url, $my_pligg_base;
		if ($URLMethod==2) print "onsubmit='document.location.href=\"{$my_base_url}{$my_pligg_base}/user/search/\"+encodeURIComponent(this.keyword.value); return false;'";
		 ?>
>
					<input type="hidden" name="view" value="search">
					<input type="text" name="keyword" class="field">
					<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_User_Search_Users']; ?>
" class="button">
					</form>
				</div>
			<?php endif; ?>
			
			<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends2.png" align="absmiddle" /> 
			<a href="<?php echo $this->_vars['user_url_friends2']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends_2']; ?>
</a> 

		<?php endif; ?>
	</div>

	<h2><?php echo $this->_confs['PLIGG_Visual_User_Profile_Your_Friends']; ?>
</h2>

	<?php if ($this->_vars['friends']): ?>
	  	<table>
		<th style="width:250px;text-align:left;"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Username']; ?>
</th>
		<?php if (check_for_enabled_module ( 'simple_messaging' , 0.6 ) && $this->_vars['is_friend']): ?><th style="width:90px;text-align:left;"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Message']; ?>
</th><?php endif; ?>
		<th style="width:60px;text-align:center;"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Remove_Friend']; ?>
</th>
		<?php if (count((array)$this->_vars['friends'])):  foreach ((array)$this->_vars['friends'] as $this->_vars['myfriend']): ?>
			<?php 
				$this->_vars['friend_avatar'] = get_avatar('small', $this->_vars['myfriend']['user_avatar_source'], $this->_vars['myfriend']['user_login'], $this->_vars['myfriend']['user_email']);
				$this->_vars['profileURL'] = getmyurl('user2', $this->_vars['myfriend']['user_login'], 'profile');
				$this->_vars['removeURL'] = getmyurl('user_add_remove', $this->_vars['myfriend']['user_login'], 'removefriend');
			 ?>
			<tr>
			<td><img src="<?php echo $this->_vars['friend_avatar']; ?>
" align="absmiddle" /> <a href="<?php echo $this->_vars['profileURL']; ?>
"><?php echo $this->_vars['myfriend']['user_login']; ?>
</a></td>
			<?php if (check_for_enabled_module ( 'simple_messaging' , 0.6 ) && $this->_vars['is_friend']): ?><td align="center"><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=compose&return=<?php echo $this->_run_modifier($_SERVER['REQUEST_URI'], 'urlencode', 'PHP', 1); ?>
&to=<?php echo $this->_vars['myfriend']['user_login']; ?>
"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/simple_messaging/images/reply.png" border="0" /></a></td><?php endif; ?>
			<td align="center"><a href = "<?php echo $this->_vars['removeURL']; ?>
"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/user_delete.gif" border=0></a></td>
			</tr>
		<?php endforeach; endif; ?>
		</table>
	<?php else: ?>
		<br /><br />
		<h2 style="text-align:center;"><span style="text-transform:capitalize;"><?php echo $this->_vars['user_username']; ?>
</span> <?php echo $this->_confs['PLIGG_Visual_User_Profile_No_Friends']; ?>
</h2>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->_vars['user_view'] == 'setting'): ?>
	<div id="navbar" style="margin-bottom:-20px;border-bottom:0;"></div>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_settings_start"), $this);?>
	<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/user_settings.php?login=<?php echo $this->_vars['user_username']; ?>
" method="post">
		<?php echo $this->_vars['hidden_token_user_settings']; ?>

		
		<div class="user_settings_template">
			<?php if ($this->_vars['Allow_User_Change_Templates']): ?>
			<strong><?php echo $this->_confs['PLIGG_Visual_User_Setting_Template']; ?>
</strong>
			<select name='template'>
			<?php if (count((array)$this->_vars['templates'])):  foreach ((array)$this->_vars['templates'] as $this->_vars['template']): ?>
			<option <?php if ($this->_vars['template'] == $this->_vars['current_template']): ?>selected<?php endif; ?>><?php echo $this->_vars['template']; ?>
</option>
			<?php endforeach; endif; ?>
			</select>
			<?php endif; ?>
			<br /><br />
			<strong><?php echo $this->_confs['PLIGG_Visual_User_Setting_Categories']; ?>
</strong>
			<br /><br />
			<?php if (count((array)$this->_vars['category'])):  $this->_templatelite_vars['foreach'][cate]['iteration'] = 0;  foreach ((array)$this->_vars['category'] as $this->_vars['cat']):  $this->_templatelite_vars['foreach'][cate]['iteration']++; ?>
				<!--<?php if ($this->_vars['smarty']['foreach']['cate']['iteration'] % 5 == 0): ?><br style="clear:both;"><?php endif; ?>-->
				<div class="usercategory_outer">
					<div class="usercategory_checkbox">
						<input type="checkbox" name="chack[]" value="<?php echo $this->_vars['cat']['category__auto_id']; ?>
" <?php if (! in_array ( $this->_vars['cat']['category__auto_id'] , $this->_vars['user_category'] )): ?> checked="checked"<?php endif; ?>>
					</div>
					<div class="usercategory_name">
						<?php echo $this->_vars['cat']['category_name']; ?>

					</div>
				</div>
				
			<?php endforeach; endif; ?>
		</div>

		<br style="clear:both;" />
		<div class="user_settings_save">
		<input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Visual_Profile_Save']; ?>
">
		</div>
	</form>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_settings_end"), $this);?>
	<div style="margin-top:5px;border-bottom:2px solid #DEDEDE;"> </div>
<?php endif; ?>

<?php if ($this->_vars['user_view'] == 'viewfriends2'): ?>
	<div id="navbar">
		<?php if ($this->_vars['Allow_Friends'] != "0"): ?>	 
			<?php if ($this->_vars['user_authenticated'] == true): ?> 
				<div id="search_users">
					<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php" method="get"
		<?php 
		global $URLMethod, $my_base_url, $my_pligg_base;
		if ($URLMethod==2) print "onsubmit='document.location.href=\"{$my_base_url}{$my_pligg_base}/user/search/\"+encodeURIComponent(this.keyword.value); return false;'";
		 ?>
>
					<input type="hidden" name="view" value="search">
					<input type="text" name="keyword" class="field">
					<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_User_Search_Users']; ?>
" class="button">
					</form>
				</div>
			<?php endif; ?>		
			<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends.png" align="absmiddle" />
			<a href="<?php echo $this->_vars['user_url_friends']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends']; ?>
</a>

		<?php endif; ?>
	</div>

	<h2><?php echo $this->_confs['PLIGG_Visual_User_Profile_Viewing_Friends_2a']; ?>
</h2>
	<?php if ($this->_vars['friends']): ?>
	  	<table>
			<?php if (check_for_enabled_module ( 'simple_messaging' , 0.6 ) && $this->_vars['is_friend']): ?>
				<th style="width:250px;text-align:left;"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Username']; ?>
</th>
				<th style="width:60px;text-align:left;"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Message']; ?>
</th>
			<?php endif; ?>
			<?php if (count((array)$this->_vars['friends'])):  foreach ((array)$this->_vars['friends'] as $this->_vars['myfriend']): ?>
				<?php 
					$this->_vars['friend_avatar'] = get_avatar('small', $this->_vars['myfriend']['user_avatar_source'], $this->_vars['myfriend']['user_login'], $this->_vars['myfriend']['user_email']);
					$this->_vars['profileURL'] = getmyurl('user2', $this->_vars['myfriend']['user_login'], 'profile');
					$this->_vars['removeURL'] = getmyurl('user_add_remove', $this->_vars['myfriend']['user_login'], 'removefriend');
				 ?>

				<tr>
				<td><img src="<?php echo $this->_vars['friend_avatar']; ?>
" align="absmiddle" /> <a href="<?php echo $this->_vars['profileURL']; ?>
"><?php echo $this->_vars['myfriend']['user_login']; ?>
</a></td>
				<?php if (check_for_enabled_module ( 'simple_messaging' , 0.6 ) && $this->_vars['is_friend']): ?><td><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=compose&to=<?php echo $this->_vars['myfriend']['user_login']; ?>
&return=<?php echo $this->_run_modifier($_SERVER['REQUEST_URI'], 'urlencode', 'PHP', 1); ?>
"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/simple_messaging/images/reply.png" border="0" /></a></td><?php endif; ?>
				</tr>
			<?php endforeach; endif; ?>
		</table>
	<?php else: ?>
		<br /><br />
		<h2 style="text-align:center;"><span style="text-transform:capitalize;"><?php echo $this->_vars['user_username']; ?>
</span> <?php echo $this->_confs['PLIGG_Visual_User_Profile_No_Friends_2']; ?>
</h2>
	<?php endif; ?>
<?php endif; ?>


<?php if ($this->_vars['user_view'] == 'removefriend'): ?>
	<div id="navbar">
		<?php if ($this->_vars['Allow_Friends'] != "0"): ?>		
			<?php if ($this->_vars['user_authenticated'] == true): ?> 
				<div id="search_users">
					<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php" method="get"
		<?php 
		global $URLMethod, $my_base_url, $my_pligg_base;
		if ($URLMethod==2) print "onsubmit='document.location.href=\"{$my_base_url}{$my_pligg_base}/user/search/\"+encodeURIComponent(this.keyword.value); return false;'";
		 ?>
>
					<input type="hidden" name="view" value="search">
					<input type="text" name="keyword" class="field">
					<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_User_Search_Users']; ?>
" class="button">
					</form>
				</div>
			<?php endif; ?>
			<?php if ($this->_vars['user_login'] != $this->_vars['user_logged_in']): ?>	  
				<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends.png" align="absmiddle" />
				<a href="<?php echo $this->_vars['user_url_friends']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends']; ?>
</a>
				&nbsp;|&nbsp;
				<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends2.png" align="absmiddle" />
				<a href="<?php echo $this->_vars['user_url_friends2']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends_2']; ?>
</a>	  
			<?php endif; ?>

		<?php endif; ?>
	</div>

	<br /><br />
	<h2 style="text-align:center;"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Friend_Removed']; ?>
</h2>
<?php endif; ?>


<?php if ($this->_vars['user_view'] == 'addfriend'): ?>
	<div id="navbar">
		<?php if ($this->_vars['Allow_Friends'] != "0"): ?>	 
			<?php if ($this->_vars['user_authenticated'] == true): ?> 
				<div id="search_users">
					<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php" method="get"
		<?php 
		global $URLMethod, $my_base_url, $my_pligg_base;
		if ($URLMethod==2) print "onsubmit='document.location.href=\"{$my_base_url}{$my_pligg_base}/user/search/\"+encodeURIComponent(this.keyword.value); return false;'";
		 ?>
>
					<input type="hidden" name="view" value="search">
					<input type="text" name="keyword" class="field">
					<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_User_Search_Users']; ?>
" class="button">
					</form>
				</div>
			<?php endif; ?>
			
			<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends.png" align="absmiddle" />
			<a href="<?php echo $this->_vars['user_url_friends']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends']; ?>
</a>
			&nbsp;|&nbsp;
			<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends2.png" align="absmiddle" />
			<a href="<?php echo $this->_vars['user_url_friends2']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends_2']; ?>
</a>

		<?php endif; ?>
	</div>

	<br /><br />
	<h2 style="text-align:center;"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Friend_Added']; ?>
</h2>
<?php endif; ?>


<?php if ($this->_vars['user_view'] == 'profile'): ?>
	<div id="navbar">	
		<?php if ($this->_vars['Allow_Friends'] != "0"): ?>	
			<?php if ($this->_vars['user_authenticated'] == true): ?> 
				<div id="search_users">
					<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php" method="get"
		<?php 
		global $URLMethod, $my_base_url, $my_pligg_base;
		if ($URLMethod==2) print "onsubmit='document.location.href=\"{$my_base_url}{$my_pligg_base}/user/search/\"+encodeURIComponent(this.keyword.value); return false;'";
		 ?>
>
					<input type="hidden" name="view" value="search">
					<input type="text" name="keyword" class="field">
					<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_User_Search_Users']; ?>
" class="button">
					</form>
				</div>
			<?php endif; ?>
			<?php if ($this->_vars['user_login'] != $this->_vars['user_logged_in']): ?>
			<?php if (check_for_enabled_module ( 'simple_messaging' , 0.6 ) && $this->_vars['is_friend']):  if ($this->_vars['friends']): ?><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/simple_messaging/images/reply.png" border="0" align="absmiddle" /> <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=compose&return=<?php echo $this->_run_modifier($_SERVER['REQUEST_URI'], 'urlencode', 'PHP', 1); ?>
&to=<?php echo $this->_vars['user_login']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Message']; ?>
 <span style="text-transform:capitalize;"><?php echo $this->_vars['user_login']; ?>
</span></a> &nbsp;|&nbsp;<?php endif;  endif; ?>
				<?php if ($this->_vars['is_friend'] > 0): ?>
					<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/user_delete.gif" align="absmiddle" />
					<a href="<?php echo $this->_vars['user_url_remove']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Remove_Friend']; ?>
 <span style="text-transform:capitalize;"><?php echo $this->_vars['user_login']; ?>
</span> <?php echo $this->_confs['PLIGG_Visual_User_Profile_Remove_Friend_2']; ?>
</a>

			   		<?php if ($this->_vars['user_authenticated'] == true): ?>
						<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_user_center"), $this);?>
					<?php endif; ?>
		 			
				<?php else: ?>
		  				
					<?php if ($this->_vars['user_authenticated'] == true): ?> 					
						<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/user_add.gif" align="absmiddle" />
						<a href="<?php echo $this->_vars['user_url_add']; ?>
">	<?php echo $this->_confs['PLIGG_Visual_User_Profile_Add_Friend']; ?>
 <span style="text-transform:capitalize;"><?php echo $this->_vars['user_login']; ?>
</span> <?php echo $this->_confs['PLIGG_Visual_User_Profile_Add_Friend_2']; ?>
</a>
					<?php endif; ?>   
		   
				<?php endif; ?>   
		   		
			<?php else: ?>
				<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends.png" align="absmiddle" />
				<a href="<?php echo $this->_vars['user_url_friends']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends']; ?>
</a> 
				&nbsp;|&nbsp;
				<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/friends2.png" align="absmiddle" />
				<a href="<?php echo $this->_vars['user_url_friends2']; ?>
"><?php echo $this->_confs['PLIGG_Visual_User_Profile_View_Friends_2']; ?>
</a>
		  
			<?php endif; ?> 
		<?php endif; ?>
	</div>	

	<div id="wrapper">
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_info_start"), $this);?>
		
		<div id="personal_info">
			<fieldset><legend><?php echo $this->_confs['PLIGG_Visual_User_PersonalData']; ?>
</legend>
			<table style="border:none">
				<tr>
					<td style="background:none"><strong><?php echo $this->_confs['PLIGG_Visual_Login_Username']; ?>
:</strong></td>
					<td style="background:none"><?php if ($this->_vars['UseAvatars'] != "0"): ?><span id="ls_avatar"><img src="<?php echo $this->_vars['Avatar_ImgSrc']; ?>
" alt="Avatar" align="absmiddle" /></span><?php endif; ?> <span style="text-transform:capitalize;"><?php echo $this->_vars['user_username']; ?>
</span></td>
				</tr>			
				<?php if ($this->_vars['user_names'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_User']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_names']; ?>
</td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_url'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Homepage']; ?>
:</strong></td>
					<td style="text-align:center;"><a href="<?php echo $this->_vars['user_url']; ?>
" target="_blank" rel="nofollow"><?php echo $this->_vars['user_url']; ?>
</a></td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_publicemail'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_PublicEmail']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_publicemail']; ?>
</td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_location'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_Profile_Location']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_location']; ?>
</td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_occupation'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_Profile_Occupation']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_occupation']; ?>
</td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_aim'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_AIM']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_aim']; ?>
</td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_msn'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_MSN']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_msn']; ?>
</td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_yahoo'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Yahoo']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_yahoo']; ?>
</td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_gtalk'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_GTalk']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_gtalk']; ?>
</td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_skype'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Skype']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_skype']; ?>
</td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_irc'] != ""): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_IRC']; ?>
:</strong></td>
					<td><a href="<?php echo $this->_vars['user_irc']; ?>
" target="_blank"><?php echo $this->_vars['user_irc']; ?>
</a></td>
				</tr>
				<?php endif; ?>

				<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in']): ?>
				<tr>
					<td><input type="button" value="<?php echo $this->_confs['PLIGG_Visual_User_Profile_Modify']; ?>
" onclick="location='<?php echo $this->_vars['URL_Profile']; ?>
'"></td>
				</tr>
				<?php endif; ?>

			</table>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_show_extra_profile"), $this);?>

			</fieldset>
		</div>
		
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_info_middle"), $this);?>
		
		<div id="stats">
			<fieldset><legend><?php echo $this->_confs['PLIGG_Visual_User_Profile_User_Stats']; ?>
</legend>
			<table style="border:none;">
				<?php if ($this->_vars['user_karma'] > "0.00"): ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_Rank']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_rank']; ?>
</td>
				</tr>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_KarmaPoints']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_karma']; ?>
</td>
				</tr>
				<?php endif; ?>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Joined']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_joined']; ?>
</td>
				</tr>
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Total_Links']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_total_links']; ?>
</td>
				</tr>
				
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Published_Links']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_published_links']; ?>
</td>
				</tr>
				
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Total_Comments']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_total_comments']; ?>
</td>
				</tr>
				
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Total_Votes']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_total_votes']; ?>
</td>
				</tr>
				
				<tr>
					<td><strong><?php echo $this->_confs['PLIGG_Visual_User_Profile_Published_Votes']; ?>
:</strong></td>
					<td><?php echo $this->_vars['user_published_votes']; ?>
</td>
				</tr>
			</table>
			</fieldset>
		</div>
		
		<?php if ($this->_vars['enable_group'] == "true"): ?>
		<div id="groups">
			<fieldset><legend><?php echo $this->_confs['PLIGG_Visual_User_Profile_User_Groups']; ?>
</legend>
				<ul class="group_membership_list"><?php echo $this->_vars['group_display']; ?>
</ul>
			</fieldset>
		</div>
		<?php endif; ?>
		
		<?php if ($this->_vars['Allow_Friends'] != "0"): ?>
		<div id="friends">
			<fieldset><legend><?php echo $this->_confs['PLIGG_Visual_User_Profile_Friends']; ?>
</legend>
			<?php if ($this->_vars['friends']): ?>			
				<table id="friendlist">
					<thead>
						<tr>
							<th scope="col" style="width:25px;"></th>
							<th scope="col"><?php echo $this->_confs['PLIGG_Visual_Login_Username']; ?>
</th>
							<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_friend_th"), $this);?>
							<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in']): ?><th scope="col"><?php echo $this->_confs['PLIGG_Visual_User_Profile_Remove_Friend']; ?>
</th><?php endif; ?>
						</tr>
					</thead>
					<tbody>
						<?php if (count((array)$this->_vars['friends'])):  foreach ((array)$this->_vars['friends'] as $this->_vars['myfriend']): ?>
							<?php 
								$this->_vars['friend_avatar'] = get_avatar('small', $this->_vars['myfriend']['user_avatar_source'], $this->_vars['myfriend']['user_login'], $this->_vars['myfriend']['user_email']);
								$this->_vars['profileURL'] = getmyurl('user2', $this->_vars['myfriend']['user_login'], 'profile');
								$this->_vars['removeURL'] = getmyurl('user_add_remove', $this->_vars['myfriend']['user_login'], 'removefriend');
							 ?>
							<tr>
							<td><a href="<?php echo $this->_vars['profileURL']; ?>
"><img src="<?php echo $this->_vars['friend_avatar']; ?>
" style="text-decoration:none;border:0;"/></a></td>
							<td><a href="<?php echo $this->_vars['profileURL']; ?>
"><?php echo $this->_vars['myfriend']['user_login']; ?>
</a></td>
							<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_friend_td"), $this);?>
							<?php if ($this->_vars['user_login'] == $this->_vars['user_logged_in']): ?>
								<td><a href="<?php echo $this->_vars['removeURL']; ?>
"><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/delete.gif" style="border:0;text-decoration:none;"/></a> <a href="<?php echo $this->_vars['removeURL']; ?>
"> <?php echo $this->_vars['myfriend']['user_login']; ?>
</a></td>
							<?php endif; ?>
							</tr>
						<?php endforeach; endif; ?>
					</tbody>
				</table>
			<?php else: ?>
				<br /><span style="text-transform:capitalize;"><?php echo $this->_vars['user_username']; ?>
</span> <?php echo $this->_confs['PLIGG_Visual_User_Profile_No_Friends']; ?>

			<?php endif; ?>
			</fieldset>
		</div>
		<?php endif; ?>
		
		<div class="clear"> </div>

		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_info_end"), $this);?>
		
		

	</div>	
<?php endif; ?>

<?php if (isset ( $this->_vars['user_page'] )):  echo $this->_vars['user_page'];  endif; ?>
<?php if (isset ( $this->_vars['user_pagination'] )):  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_start"), $this); echo $this->_vars['user_pagination'];  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_end"), $this); endif; ?>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_profile_end"), $this);?>