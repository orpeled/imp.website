<?php
/*-----------------------------------------------------------------------------------

	WRITE PAGE TITLE
	
-----------------------------------------------------------------------------------*/

global $sr_prefix;

$titles = sr_getTitle();
if ($titles['tax']) {
	$pagetitle =  $titles['tax'];
	$pagesub =  $titles['title'];
} else {
	$pagetitle =  $titles['title'];
}

if (is_home()) { $theId = get_option( 'page_for_posts' );  } else if (!is_404() && !is_tag() && !is_category() && !is_search() && !is_archive() && !is_tax()) { $theId = get_the_ID();  }

if (is_single()) { $theId = get_option( 'page_for_posts' ); }

// ALTERNATIVE MAIN TITLE
if (isset($theId) && get_post_meta($theId, $sr_prefix.'_alttitle', true)) { $pagetitle = get_post_meta($theId, $sr_prefix.'_alttitle', true); } 
// GET SUBTITLE
if (isset($theId) && get_post_meta($theId, $sr_prefix.'_subtitle', true)) { $pagesub = get_post_meta($theId, $sr_prefix.'_subtitle', true); }

// GET OPTIONS
if (isset($theId)) {
$showpagetitle = get_post_meta($theId, $sr_prefix.'_showpagetitle', true);
$titlecolor = get_post_meta($theId, $sr_prefix.'_titlecolor', true);
} else {
$showpagetitle = "true";
$titlecolor = false;
}
if ($titlecolor) { $changecolor = 'style="color:'.$titlecolor.';"';}


// PORTFOLIO PAGETITLE
if (is_single() && get_post_type() == 'portfolio' && get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_singlepagetitle', true) == 'true') { 
	get_template_part( 'includes/loop', 'portfolio-fullwidth');	
} else if( !isset($showpagetitle) || (isset($showpagetitle) && $showpagetitle !== 'false') ) { 

?>
				
				<?php if ($showpagetitle  !== 'false') { ?>
				<div class="wrapper">
				<div class="section-title">
                	<h2 <?php if (isset($changecolor)) { echo $changecolor; }?>><?php echo $pagetitle; ?></h2>
              		<div class="seperator size-small"><span></span></div>
					<?php if (isset($pagesub) && $pagesub !== '') { ?>
					<h4 class="subtitle"><?php echo $pagesub; ?></h4>
					<?php } ?>
              	</div>
              	</div>
				<?php } ?>
    
<?php } ?>