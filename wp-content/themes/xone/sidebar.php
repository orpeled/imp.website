<?php
global $prefix;
?>

<?php 
	if (is_page()) { 
		dynamic_sidebar('Sidebar Page');
	} else {
		dynamic_sidebar('Sidebar Blog');
	}
?>
