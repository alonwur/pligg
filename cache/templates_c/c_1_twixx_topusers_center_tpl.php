<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-06 04:33:00 PDT */ ?>

<div class="pagewrap">
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_topusers_start"), $this);?>
<table>
	<tr>
		<th><?php echo $this->_confs['PLIGG_Visual_Rank']; ?>
</th>
		<?php if (count((array)$this->_vars['headers'])):  foreach ((array)$this->_vars['headers'] as $this->_vars['number'] => $this->_vars['header']): ?>
			<th>
				<?php if ($this->_vars['number'] == $_GET['sortby']): ?>
					<span><?php echo $this->_vars['header']; ?>
</span>
				<?php else: ?>
					<a href="?sortby=<?php echo $this->_vars['number']; ?>
"><?php echo $this->_vars['header']; ?>
</a>
				<?php endif; ?>
			</th>
		<?php endforeach; endif; ?>

		<th>
			<?php echo $this->_confs['PLIGG_Visual_TopUsers_TH_Karma']; ?>

		</th>
	</tr>

	<?php echo $this->_vars['users_table']; ?>


</table>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_topusers_end"), $this);?>
</div>

<br />
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_start"), $this);?>
<?php echo $this->_vars['topusers_pagination']; ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_pagination_end"), $this);?>