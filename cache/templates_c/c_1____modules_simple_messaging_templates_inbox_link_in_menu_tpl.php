<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:01 PDT */ ?>

<?php $this->config_load($this->_vars['simple_messaging_lang_conf'], null, null); ?>
<?php if ($this->_vars['user_authenticated'] == true): ?>
	<div class="links">
		<div class="sectiontitle">
			
			
			<a href="<?php echo $this->_vars['URL_simple_messaging_inbox']; ?>
" class="main">
			<span><?php echo $this->_confs['PLIGG_MESSAGING_Inbox']; ?>
 <?php if ($this->_vars['msg_new_count'] > 0): ?>(<?php echo $this->_vars['msg_new_count']; ?>
 <?php echo $this->_confs['PLIGG_MESSAGING_New']; ?>
)<?php endif; ?> </span>
			</a>
		</div>
	</div>
<?php endif; ?>
<?php $this->config_load(simple_messaging_pligg_lang_conf, null, null); ?>