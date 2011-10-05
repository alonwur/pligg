<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/modifier.truncate.php'); $this->register_modifier("truncate", "tpl_modifier_truncate");  require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/modifier.sanitize.php'); $this->register_modifier("sanitize", "tpl_modifier_sanitize");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 06:00:07 PDT */ ?>

<h2><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/news_manage.gif" align="absmiddle" />
<?php if ($_GET['user']):  echo $_GET['user']; ?>
's <?php echo $this->_confs['PLIGG_Visual_TopUsers_TH_News']; ?>

<?php else:  echo $this->_confs['PLIGG_Visual_AdminPanel_Links']; ?>

<?php endif; ?>
</h2>

<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<form action="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_links.php" method="get">
		<td width="300px">
				<input type="hidden" name="mode" value="search">
					<?php if (isset ( $_GET['keyword'] ) && $_GET['keyword'] != ""): ?>
						<?php $this->assign('searchboxtext', $this->_run_modifier($_GET['keyword'], 'sanitize', 'plugin', 1, 2)); ?>
					<?php else: ?>
						<?php $this->assign('searchboxtext', $this->_confs['PLIGG_Visual_Search_SearchDefaultText']); ?>			
					<?php endif; ?>
				<input type="text" size="30" name="keyword" value="<?php echo $this->_vars['searchboxtext']; ?>
" onfocus="if(this.value == '<?php echo $this->_vars['searchboxtext']; ?>
') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo $this->_vars['searchboxtext']; ?>
';}">
				<input type="hidden" name="user" value="<?php echo $_GET['user']; ?>
">
				<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Search_Go']; ?>
">
		</td>
		<td width="100px">
				<select name="filter" onchange="this.form.submit()">
					<option value="all" <?php if ($_GET['filter'] == "all"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_All']; ?>
</option>
					<option value="published" <?php if ($_GET['filter'] == "published"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Published']; ?>
</option>
					<option value="upcoming" <?php if ($_GET['filter'] == "upcoming"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Upcoming']; ?>
</option>
					<option value="discard" <?php if ($_GET['filter'] == "discard"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Discarded']; ?>
</option>
					<option value="spam" <?php if ($_GET['filter'] == "spam"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Spam']; ?>
</option>
					<option value="all">   ---   </option>
					<option value="today" <?php if ($_GET['filter'] == "today"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Today']; ?>
</option>
					<option value="yesterday" <?php if ($_GET['filter'] == "yesterday"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Yesterday']; ?>
</option>
					<option value="week" <?php if ($_GET['filter'] == "week"): ?> selected="selected" <?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Week']; ?>
</option>
				</select>
		</td>
		<td width="250px">
				<select name="pagesize" onchange="this.form.submit()">
					<option value="15" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 15): ?>selected<?php endif; ?>>Show 15</option>
					<option value="30" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 30): ?>selected<?php endif; ?>>Show 30</option>
					<option value="50" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 50): ?>selected<?php endif; ?>>Show 50</option>
					<option value="100" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 100): ?>selected<?php endif; ?>>Show 100</option>
					<option value="200" <?php if (isset ( $this->_vars['pagesize'] ) && $this->_vars['pagesize'] == 200): ?>selected<?php endif; ?>>Show 200</option>
				</select>
				<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Pagination_Items']; ?>

		</td>
		</form>
<form name="bulk_moderate" action="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_links.php?action=bulkmod&page=<?php echo $_GET['page']; ?>
" method="post">
		<td style="float:right;margin:0px 2px 0 0"><input type="submit" name="submit" onclick="return confirm_spam()" value="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Apply_Changes']; ?>
" class="log2" /></td>
	</tr>
</table>

<?php echo $this->_vars['hidden_token_admin_links_edit']; ?>

<table class="stripes" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<th><?php echo $this->_confs['PLIGG_Visual_View_Links_Author']; ?>
</th>
		<th><?php echo $this->_confs['PLIGG_Visual_View_Links_New_Window']; ?>
</th>
		<th nowrap><input type='checkbox' name='all1'  onclick='mark_all_publish();'><a onclick='mark_all_publish();' style="cursor:pointer;text-decoration:none;color:#fff;"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Publish']; ?>
</a></th>
		<th nowrap><input type='checkbox' name='all2' onclick='mark_all_queued();'><a onclick='mark_all_queued();' style="cursor:pointer;text-decoration:none;color:#fff;"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Upcoming']; ?>
</a></th>
		<th nowrap><input type='checkbox' name='all3' onclick='mark_all_spam();'><a onclick='mark_all_spam();' style="cursor:pointer;text-decoration:none;color:#fff;"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Spam']; ?>
</a></th>
		<th nowrap><input type='checkbox' name='all4' onclick='mark_all_discard();'><a onclick='mark_all_discard();' style="cursor:pointer;text-decoration:none;color:#fff;"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Discard']; ?>
</a></a></th>
	</tr>
	<?php if (isset($this->_sections['id'])) unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($this->_vars['template_stories']) ? count($this->_vars['template_stories']) : max(0, (int)$this->_vars['template_stories']);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
	$this->_sections['id']['total'] = $this->_sections['id']['loop'];
	if ($this->_sections['id']['total'] == 0)
		$this->_sections['id']['show'] = false;
} else
	$this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

		for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
			 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
			 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']	  = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']	   = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
	<tr>
		<td><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php?mode=view&user=<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_author']; ?>
" title="<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_author']; ?>
's Articles" id="link-<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
-author"><?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_author']; ?>
</a></td>
		<td>
			<div style="margin:0 10px 0 0;padding:0;float:left;">
				<a href='<?php echo $this->_vars['my_pligg_base']; ?>
/editlink.php?id=<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
'><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/icon_user_edit.png" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Edit']; ?>
" alt="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Edit']; ?>
" />
			</div>
			<a href="<?php echo $this->_vars['my_pligg_base']; ?>
/story.php?title=<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_title_url']; ?>
" title="<?php echo $this->_run_modifier($this->_vars['template_stories'][$this->_sections['id']['index']]['link_title'], 'truncate', 'plugin', 1, 50, "...", true); ?>
" class="colorbox_iframe2"><?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_title']; ?>
</a>
			<input type='hidden' name='old[<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
]' id="link-<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
-old" value='<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_status']; ?>
'>
		</td>
		<td style="width:70px;text-align:center;"><input type="radio" name="link[<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
]" id="link-<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
" value="published" <?php if ($this->_vars['template_stories'][$this->_sections['id']['index']]['link_status'] == 'published'): ?>checked<?php endif; ?>></td>
		<td style="width:70px;text-align:center;"><center><input type="radio" name="link[<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
]" id="link-<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
" value="queued" <?php if ($this->_vars['template_stories'][$this->_sections['id']['index']]['link_status'] == 'queued'): ?>checked<?php endif; ?>></td>
		<td style="width:70px;text-align:center;"><center><input type="radio" name="link[<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
]" id="link-<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
" value="spam" <?php if ($this->_vars['template_stories'][$this->_sections['id']['index']]['link_status'] == 'spam'): ?>checked<?php endif; ?>></td>
		<td style="width:70px;text-align:center;"><center><input type="radio" name="link[<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
]" id="link-<?php echo $this->_vars['template_stories'][$this->_sections['id']['index']]['link_id']; ?>
" value="discard" <?php if ($this->_vars['template_stories'][$this->_sections['id']['index']]['link_status'] == 'discard'): ?>checked<?php endif; ?>></td>
	</tr>	
	<?php endfor; endif; ?>
</table>

	<div style="float:right;margin:8px 2px 0 0;"><input type="submit" name="submit" onclick="return confirm_spam()" value="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Apply_Changes']; ?>
" class="log2" /></div>
	<div style="clear:both;"> </div>

</form>

<div style="float:right;margin-top:12px;"><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_delete_stories.php" class="colorbox_iframe1" title="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Delete_Stories']; ?>
"><p><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Delete_Stories']; ?>
</p></a></div>
<div style="clear:both;"> </div>

<SCRIPT>
var confirmation = "<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Confirm_Killspam']; ?>
\n";
<?php echo '
function mark_all_publish() {
	document.bulk_moderate.all1.checked=1;
	document.bulk_moderate.all2.checked=0;
	document.bulk_moderate.all3.checked=0;
	document.bulk_moderate.all4.checked=0;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if (document.bulk_moderate[i].value == "published") {
			document.bulk_moderate[i].checked = true;
		}
	}
}
function mark_all_discard() {
	document.bulk_moderate.all1.checked=0;
	document.bulk_moderate.all2.checked=0;
	document.bulk_moderate.all3.checked=0;
	document.bulk_moderate.all4.checked=1;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if (document.bulk_moderate[i].value == "discard") {
			document.bulk_moderate[i].checked = true;
		}
	}
}
function mark_all_queued() {
	document.bulk_moderate.all1.checked=0;
	document.bulk_moderate.all2.checked=1;
	document.bulk_moderate.all3.checked=0;
	document.bulk_moderate.all4.checked=0;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if (document.bulk_moderate[i].value == "queued") {
			document.bulk_moderate[i].checked = true;
		}
	}
}
function mark_all_spam() {
	document.bulk_moderate.all1.checked=0;
	document.bulk_moderate.all2.checked=0;
	document.bulk_moderate.all3.checked=1;
	document.bulk_moderate.all4.checked=0;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if (document.bulk_moderate[i].value == "spam") {
			document.bulk_moderate[i].checked = true;
		}
	}
}
function uncheck_all() {
	document.bulk_moderate.all1.checked=0;
	document.bulk_moderate.all2.checked=0;
	document.bulk_moderate.all3.checked=0;
	document.bulk_moderate.all4.checked=0;
	for (var i=0; i< document.bulk_moderate.length; i++) {
		if ((document.bulk_moderate[i].value == "queued")||(document.bulk_moderate[i].value == "discard")||(document.bulk_moderate[i].value == "spam")|| (document.bulk_moderate[i].value == "published")){
			document.bulk_moderate[i].checked = false;
		}
	}
}
function confirm_spam() {
    var checks = document.getElementsByTagName(\'INPUT\');
    var authors = new Array();
    for (var i=0; i<checks.length; i++)
     	if (checks[i].type=="radio" && checks[i].checked && checks[i].value=="spam")
        {
            old = document.getElementById(checks[i].id+\'-old\');
            if (old.value!=\'spam\')
            {
                author = document.getElementById(checks[i].id+\'-author\');
                authors[author.innerHTML] = 1;
            }
        }

    var message = "";
    for (name in authors)
	if (authors[name]==1)
            message += name+"\\n";
    if (message.length > 0)
        	return confirm(confirmation+message);
    return 1;
}
</SCRIPT>
'; ?>
