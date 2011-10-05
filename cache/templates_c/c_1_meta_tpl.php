<?php require_once('/opt/bitnami/apache2/htdocs/pligg/plugins/modifier.sanitize.php'); $this->register_modifier("sanitize", "tpl_modifier_sanitize");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2011-10-04 05:49:01 PDT */ ?>



	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	

<?php if ($this->_vars['meta_description'] != ""): ?>
	<meta name="description" content="<?php echo $this->_vars['meta_description']; ?>
" />
<?php elseif ($this->_vars['pagename'] == "search"): ?>
	<meta name="description" content="<?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 <?php echo $this->_run_modifier($this->_run_modifier($_GET['search'], 'sanitize', 'plugin', 1, 2), 'stripslashes', 'PHP', 1); ?>
" />
<?php else: ?>
	<meta name="description" content="<?php echo $this->_run_modifier($this->_confs['PLIGG_Visual_What_Is_Pligg_Text'], 'htmlentities', 'PHP', 1); ?>
" />
<?php endif; ?>

<?php if ($this->_vars['meta_keywords'] != ""): ?>
	<meta name="keywords" content="<?php echo $this->_vars['meta_keywords']; ?>
" />
<?php elseif ($this->_vars['pagename'] == "search"): ?>
	<meta name="keywords" content="<?php echo $this->_run_modifier($this->_run_modifier($_GET['search'], 'sanitize', 'plugin', 1, 2), 'stripslashes', 'PHP', 1); ?>
" />
<?php else: ?>
	<meta name="keywords" content="<?php echo $this->_confs['PLIGG_Visual_Meta_Keywords']; ?>
" />
<?php endif; ?>  

	<meta name="Language" content="<?php echo $this->_confs['PLIGG_Visual_Meta_Language']; ?>
" />
	<meta name="Robots" content="All" />
		