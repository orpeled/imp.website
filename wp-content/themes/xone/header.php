<?php 
global $sr_prefix;
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- scaling not possible (for smartphones, ipad, etc.) -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />


<?php  
$titles = sr_getTitle();
if ($titles['tax']) {
	$title =  $titles['tax'].' | '.$titles['title'];
	$pagetitle =  $titles['title'].': '.$titles['tax'];
} else {
	$title =  $titles['title'];
	$pagetitle =  $titles['title'];
}
?>
<title><?php echo $title; ?> | <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

<?php sr_get_social_metas(); ?>

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php if (!get_option($sr_prefix.'_disablepreloader')) { ?>
<!-- PAGELOADER -->
<div id="page-loader">
	<div class="page-loader-inner">
		<?php if (get_option($sr_prefix.'_preloaderlogo')) { ?>
    	<div class="loader-logo"><img src="<?php echo get_option($sr_prefix.'_preloaderlogo'); ?>" alt="Logo"/></div>
		<?php } ?>
		<div class="loader-icon"><span class="spinner"></span><span></span></div>
	</div>
</div>
<!-- PAGELOADER -->
<?php } ?>

<!-- PAGE CONTENT -->
<div id="page-content" <?php if (!get_option($sr_prefix.'_disablefixedheader')) { ?>class="fixed-header"<?php } ?>>
	
	<?php
		$headeroptions = '';
		if (get_option($sr_prefix.'_headerstyle') == 'overlay' && is_page_template('template-onepage.php')) { 
			if (get_option($sr_prefix.'_overlaymenu')) { $menucolor = get_option($sr_prefix.'_overlaymenu'); } else {$menucolor = 'light';}
			$headeroptions .= 'header-overlay overlay-'.$menucolor.' '; 
		} 
		if (get_option($sr_prefix.'_headerbackground')) { $headeroptions .= get_option($sr_prefix.'_headerbackground').'-header '; } 
		if (!get_option($sr_prefix.'_resizeheader')) { } else {  $headeroptions .= 'no-resize '; } 
		
		if (get_option($sr_prefix.'_headerlayout') == 'logo-left' || !get_option($sr_prefix.'_headerlayout')) 
		{ $headeroptions .= 'logo-left '; } 
		else {  $headeroptions .= get_option($sr_prefix.'_headerlayout'); } 
	?>
	
    <!-- HEADER -->
	<header class="<?php echo $headeroptions; ?>">        
		<div class="header-inner wrapper clearfix">
                            
			<?php if (get_option($sr_prefix.'_logo')) { ?>
			<div id="logo">
				<?php if (get_option($sr_prefix.'_headerstyle') && get_option($sr_prefix.'_overlaylogo') && is_page_template('template-onepage.php')) { ?>
				<a id="overlay-logo" class="logotype" href="<?php echo home_url(); ?>/#"><img src="<?php echo get_option($sr_prefix.'_overlaylogo'); ?>" alt="Logo"></a>
				<?php } ?>
				<a id="defaut-logo" class="logotype" href="<?php echo home_url(); ?>/#"><img src="<?php echo get_option($sr_prefix.'_logo'); ?>" alt="Logo"></a>
			</div>    
			<?php } else { ?>
			<div id="logo">
				<h2><a id="defaut-logo" class="logotype" href="<?php echo home_url(); ?>"><strong><?php bloginfo('name'); ?></strong></a></h2>
			</div>	
			<?php } ?> 
			
			<?php if(has_nav_menu('primary-menu')) {  
				if (get_option($sr_prefix.'_headerbackground') == 'custom'){ 
					$menuClass = 'menu-'.get_option($sr_prefix.'_headerbackgroundstyle'); 
				} else { $menuClass = ''; }
			?>
			
			<!-- MENU -->
     		<div class="menu <?php echo $menuClass; ?> clearfix">
           <?php	
				wp_nav_menu(  
					array(  
						'theme_location'  => 'primary-menu', 
						'container'       => 'nav',  			        
						'container_id'    => 'main-nav',  
						'container_class' => '',  
						'menu_class'      => '', 
						'menu_id'         => 'primary' ,
						'walker' 			=> new sr_menu_output()
					)
				);  
			?>
			
			<?php
				if (!get_option($sr_prefix.'_disablefixedheader') && !get_option($sr_prefix.'_disbalebulletnavigation')) {	
					wp_nav_menu(  
						array(  
							'theme_location'  => 'primary-menu', 
							'container'       => 'nav',  			        
							'container_id'    => 'menu-controls',  
							'container_class' => '',  
							'menu_class'      => '', 
							'menu_id'         => '' ,
							'walker' 			=> new sr_bulletmenu_output()
						)
					);  
				} // END if
			?>
			
			</div>
			<!-- MENU -->
			<?php } // END if has_nav_menu ?>   
			                     
		</div> <!-- END .header-inner -->
	</header> <!-- END header -->
	<!-- HEADER -->
	
	<!-- PAGEBODY -->
	<div class="page-body">