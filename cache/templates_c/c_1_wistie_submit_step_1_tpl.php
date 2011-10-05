<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:50:21 PDT */ ?>

<h1><?php echo $this->_confs['PLIGG_Visual_Submit1_Header']; ?>
</h1>
<div id="leftcol-superwide">
	
	<div id="submit">
		<div id="submit_content">
			<h2><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct']; ?>
:</h2>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step1_start"), $this);?>
			<ul class="instructions">
				<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_1A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_1A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_1B']; ?>
</li><?php endif; ?>
				<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_2A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_2A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_2B']; ?>
</li><?php endif; ?>
				<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_3A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_3A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_3B']; ?>
</li><?php endif; ?>
				<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_4A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_4A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_4B']; ?>
</li><?php endif; ?>
				<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_5A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_5A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_5B']; ?>
</li><?php endif; ?>
				<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_6A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_6A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_6B']; ?>
</li><?php endif; ?>
				<?php if ($this->_confs['PLIGG_Visual_Submit1_Instruct_7A'] != ''): ?><li><strong><?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_7A']; ?>
:</strong> <?php echo $this->_confs['PLIGG_Visual_Submit1_Instruct_7B']; ?>
</li><?php endif; ?>
			</ul>

			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step1_middle"), $this);?>
			<br />
			<h2><?php echo $this->_confs['PLIGG_Visual_Submit1_NewsSource']; ?>
</h2>
			<form action="<?php echo $this->_vars['URL_submit']; ?>
" method="post" id="thisform">
				<label for="url"><?php echo $this->_confs['PLIGG_Visual_Submit1_NewsURL']; ?>
:</label>
				<input type="text" name="url" id="url" value="http://" size="55" />
				
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step1_end"), $this);?>
				
				<input type="hidden" name="phase" value=1>
				<input type="hidden" name="randkey" value="<?php echo $this->_vars['submit_rand']; ?>
">
				<input type="hidden" name="id" value="c_1">
				<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Submit1_Continue']; ?>
" class="submit-s" />
			</form>
			<br />
			<?php if ($this->_vars['Submit_Require_A_URL'] != 1):  echo $this->_confs['PLIGG_Visual_Submit_Editorial'];  endif; ?>

		</div>
	</div>