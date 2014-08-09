<?php
/*-----------------------------------------------------------------------------------

	WRITE PAGE SECTION
	
-----------------------------------------------------------------------------------*/

global $sr_prefix;



// -----------------------------------
// GET OPTIONS
// -----------------------------------
$bgoption = get_post_meta(get_the_ID(), $sr_prefix.'_sectionbackground', true);
$portfoliooption = get_post_meta(get_the_ID(), $sr_prefix.'_portfoliofrontpage', true);
if ($portfoliooption && $portfoliooption == 'yes') { $bgoption = 'none'; }

$text = '';
$bgclass = '';
$slider = '';

if ($bgoption == 'color') {
	$text = get_post_meta(get_the_ID(), $sr_prefix.'_color_textcolor', true);
} else if ($bgoption == 'image') {
	$text = get_post_meta(get_the_ID(), $sr_prefix.'_image_textcolor', true);
	$parallax = get_post_meta(get_the_ID(), $sr_prefix.'_image_parallax', true);
	$overlaycolor = get_post_meta(get_the_ID(), $sr_prefix.'_image_overlaycolor', true);
	$slider = get_post_meta(get_the_ID(), $sr_prefix.'_image_slider', true);
	
	if ($parallax == 'true') { $bgclass = 'parallax-section'; }
	if ($overlaycolor) { $imageoverlay = true; }
} else if ($bgoption == 'video') {
	$text = get_post_meta(get_the_ID(), $sr_prefix.'_video_textcolor', true);
	$mp4 = get_post_meta(get_the_ID(), $sr_prefix.'_video_mp4', true);
	$webm = get_post_meta(get_the_ID(), $sr_prefix.'_video_webm', true);
	$oga = get_post_meta(get_the_ID(), $sr_prefix.'_video_oga', true);
	$width = get_post_meta(get_the_ID(), $sr_prefix.'_video_width', true);
	$height = get_post_meta(get_the_ID(), $sr_prefix.'_video_height', true);
	$poster = get_post_meta(get_the_ID(), $sr_prefix.'_video_poster', true);
	$parallax = get_post_meta(get_the_ID(), $sr_prefix.'_video_parallax', true);
	$overlaycolor = get_post_meta(get_the_ID(), $sr_prefix.'_video_overlaycolor', true);
	$overlayopacity = get_post_meta(get_the_ID(), $sr_prefix.'_video_overlayopacity', true);
	$sound = get_post_meta(get_the_ID(), $sr_prefix.'_video_sound', true);
	$slider = get_post_meta(get_the_ID(), $sr_prefix.'_video_slider', true);
	
	if ($mp4 && $width && $height) { $bgclass = 'videobg-section'; }
	
	$videosettings = 'data-videomp4="'.$mp4.'" data-videowebm="'.$webm.'" data-videooga="'.$oga.'" data-videowidth="'.$width.'" data-videoheight="'.$height.'" data-videoposter="'.$poster.'" data-videoparallax="'.$parallax.'" data-videooverlaycolor="'.$overlaycolor.'" data-videooverlayopacity="0.'.$overlayopacity.'" data-sound="'.$sound.'"';
} else if ($bgoption == 'slider') { 
	$slider = get_post_meta(get_the_ID(), $sr_prefix.'_slider_slider', true);
}
// -----------------------------------
// GET OPTIONS
// -----------------------------------
?>

		<!-- SECTION -->
		<section id="section-<?php echo $post->post_name; ?>" class="<?php if ($bgclass) { echo $bgclass;} ?>" <?php if (isset($videosettings) && $videosettings) { echo $videosettings; } ?>>
          	<div class="section-inner<?php if ($text) { echo ' text-'.$text;} ?>"> 
			
			<?php 
			if (isset($slider) && $slider && $slider !== 'false') {
				if(class_exists('RevSlider')){ 
					echo putRevSlider($slider); 
				}
			} else { 
				$templatename = get_page_template_slug( $post->ID );
				
				if (!$templatename && $templatename =='' || ($templatename == 'template-onepage.php' && $portfoliooption == 'no')) {
					// FOR ALL DEFAULT TEMPLATES
					get_template_part( 'includes/page-title' ); 
					echo '<div class="wrapper">';
					the_content(); 
					echo '</div>';
				} else if ($templatename == 'template-contact.php') {
					// FOR CONTACT TEMPLATES
					$latlong = get_post_meta(get_the_ID(), $sr_prefix.'_contact_latlong', true);
					$mapinfo = get_post_meta(get_the_ID(), $sr_prefix.'_contact_info', true);
					$pin = get_post_meta(get_the_ID(), $sr_prefix.'_contact_icon', true);
					
					if( $latlong && $latlong !== '' ) { 
						echo sr_googleMap($latlong, $mapinfo, $pin, false, 'header', '').'<div class="spacer spacer-big"></div>'; 
					} 
			
					get_template_part( 'includes/page-title' ); 
					echo '<div class="wrapper">';
					the_content(); 
					echo '</div>';
					
				} else if ($templatename == 'template-portfolio.php' || ($templatename == 'template-onepage.php' && $portfoliooption == 'yes')) {
					get_template_part( 'includes/page-title' ); 
					if (get_the_content()) { $content = apply_filters ("the_content", $post->post_content); }
					
					// -----------------------------------
					// IF TEMPLATE IS PORTFOLIO
					// -----------------------------------
					
					// Portfolio options
					$size = get_option($sr_prefix.'_portfoliothumbsize'); if (!$size) { $size = 370; }
					$gridwith = get_option($sr_prefix.'_portfoliogridwidth');
					$carousel = get_option($sr_prefix.'_portfoliocarousel');
					
					// Get categories
					$category = get_post_meta(get_the_ID(), $sr_prefix.'_portfoliocategories', true);
					if ($templatename == 'template-onepage.php') { $category = get_post_meta(get_the_ID(), $sr_prefix.'_portfoliofrontpagecategories', true); }
        			$sr_portfoliocount = get_option($sr_prefix.'_portfoliocount');
					
					if ($category[0] == '' && count($category) < 2) { $taxquery = false; } else {
						$taxquery = array(	array('taxonomy' => 'portfolio_category','field' => 'slug','terms' => $category));
					}
					$loadmorecats = ''; foreach ($category as $c) { $loadmorecats .= $c.','; } $loadmorecats = substr_replace($loadmorecats ,"",-1);
					
					$pagenumber = ( get_query_var('paged') ? get_query_var('paged') : 1 );
					$portfolioquery = new WP_Query(array(
                        	'posts_per_page'=> $sr_portfoliocount,
                        	'paged' => $pagenumber,
                        	'post_type' => array('portfolio'),
							'tax_query' => $taxquery
                    ) );
					
					$related = 'grid-'.$post->post_name;
					?>
					
					<!-- AJAX AREA -->    
					<div id="ajax-portfolio-<?php echo get_the_ID(); ?>" class="ajax-section">
						<div id="ajax-loader"><div class="loader-icon"><span class="spinner"></span><span></span></div></div>
						<div class="ajax-content clearfix"> 
							<!-- THE LOADED CONTENT WILL BE ADDED HERE -->
						</div>
					</div>    
					<!-- AJAX AREA -->
					
					<?php 
					$filter = get_post_meta(get_the_ID(), $sr_prefix.'_portfoliofilter', true);
					if ($templatename == 'template-onepage.php') { $filter = get_post_meta(get_the_ID(), $sr_prefix.'_portfoliofrontpagefilter', true); }
					if ($filter !== 'no' && count($category) > 1 && is_array($category) && $carousel !== 'true') {
					?>	
						<ul id="menu-portfolio-filter" class="filter clearfix" data-related-grid="portfolio-grid-<?php echo get_the_ID(); ?>">
							<li><a class="active" data-option-value="*"><?php _e( 'All', 'sr_xone_theme' ); ?></a></li>
							<?php foreach ($category as $c) { 
								$term = get_term_by('slug', $c, 'portfolio_category');
								$termlink = get_term_link($c, 'portfolio_category');
								if ($c !== '' && term_exists( $c , 'portfolio_category' )) {
							?>
							<li><a data-option-value=".<?php echo $c; ?>" href="<?php echo $termlink; ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></li>
							<?php }
							} ?>
						</ul>
					<?php } ?>
					
					<?php if ($gridwith == 'content') { ?><div class="wrapper"><?php } ?>
               	
					<?php if ($carousel !== 'true') { ?>
						<div id="portfolio-grid-<?php echo get_the_ID(); ?>" class="masonry portfolio-entries clearfix <?php echo $related; ?>" data-maxitemwidth="<?php echo $size; ?>" data-ajax="ajax-portfolio-<?php echo get_the_ID(); ?>">
						<?php } else { ?>
						<div id="portfolio-carousel-<?php echo get_the_ID(); ?>" class="owl-carousel portfolio-carousel portfolio-entries" data-ajax="ajax-portfolio-<?php echo get_the_ID(); ?>">
						<?php } ?>
						<?php 
						while ($portfolioquery->have_posts()) : $portfolioquery->the_post(); 
							get_template_part( 'includes/loop', 'portfolio');
						endwhile;
						?> 
						</div>
					<?php if ($gridwith == 'content') { ?></div><?php } ?>
					<?php wp_reset_query(); ?>
					
					<?php if ($carousel !== 'true') { $max_num_page = $portfolioquery->max_num_pages; loadmore('portfolio', $max_num_page, $loadmorecats, $related); } ?>
					
					<?php if (isset($content) && $content !== '') { echo '<div class="wrapper">'.$content.'</div>'; } ?>
															
				<?php }
			} ?>
			
			</div>
			<?php if (isset($imageoverlay) && $imageoverlay) { ?><div class="section-overlay"></div><?php } ?>
		</section>
		<!-- SECTION -->