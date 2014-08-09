<?php 
global $sr_prefix;
/*-----------------------------------------------------------------------------------

	PORTFOLIO LOOP
	
-----------------------------------------------------------------------------------*/


// GET CATEGORIES
$categories = wp_get_object_terms($post->ID, 'portfolio_category'); 
$current_cats = '';
$masonry_cats = '';
$private = false;
foreach($categories as $cat){
	$category = $cat->slug; 
	$current_cats .= $cat->name.', ';
	$category = strtolower($category);
	if ($category == 'private') { $private = true; }
	$replace = array(" ", "'", '"', "&amp;",  "amp;", "&");
	$category = str_replace($replace, "", $category);
	$masonry_cats .= $category.' ';
}
$current_cats = substr($current_cats, 0, -2);

// GET OPTIONS
$lightbox = get_post_meta($post->ID, $sr_prefix.'_portfoliolightbox', true);
$projecttitle = get_option($sr_prefix.'_portfoliotitle');
$categoryname = get_option($sr_prefix.'_portfoliocategory');
$crop = get_option($sr_prefix.'_portfoliothumbcrop');
$carousel = get_option($sr_prefix.'_portfoliocarousel');


// IF LIGHTBOX
$moreimages = '';
if ($lightbox == 'yes') {
	$option = get_post_meta($post->ID, $sr_prefix.'_portfolio_lightboxoption', true);
	
	$itemClass = 'openfancybox';
	$itemLink = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-portfolio-image-big');
	$itemLink = $itemLink[0];
	$linkOption = 'rel="gallery"';
	
	if ($option == 'media') {
		$gallery = get_post_meta($post->ID, $sr_prefix.'_medias', true);
		$items = explode('|||',$gallery);
		$i=0;
		foreach ($items as $s) { 
			$object = explode('~~', $s); $type = $object[0]; $val = $object[1];
			if ($type == 'image') { 
				$attachement = sr_get_attachment_infos( $val ); $image = wp_get_attachment_image_src($val, 'single-portfolio-image-big');
				$image = $image[0];
				if ($i == 0) { $itemLink = $image; } else {
				$moreimages .= '<a href="'.$image.'" class="openfancybox" rel="gallery'.$post->ID.'" style="display:none;"></a>';	
				}
				$i++;
			}
		}
		$linkOption = 'rel="gallery'.$post->ID.'"';
	}
} else if ($lightbox == 'external') {
	$itemClass = '';
	$itemLink = get_post_meta($post->ID, $sr_prefix.'_portfolio_externalurl', true);
	$linkOption = 'target="'.get_post_meta($post->ID, $sr_prefix.'_portfolio_externaltarget', true).'"';
} else {
	$itemClass = 'load-content';
	$itemLink = get_permalink();
	$linkOption = 'data-id="'.get_the_ID().'" data-slug="'.$post->post_name.'" data-type="portfolio"';
}
// END IF LIGHTBOX
?>


				<div class="portfolio-entry <?php if($carousel == 'true') {echo'carousel';} else {echo'masonry';} ?>-item <?php echo $masonry_cats; ?>">
                	<div class="entry-thumb portfolio-thumb">
                        <div class="imgoverlay text-light">
                            <a href="<?php echo $itemLink; ?>" class="<?php echo $itemClass; ?>" <?php echo $linkOption; ?>>
                               	<?php 
									if (!$crop) {
										the_post_thumbnail('portfolio-crop-thumb');	
									} else {
										the_post_thumbnail('portfolio-thumb');	
									}
								 	?>
                            		<div class="overlay"><span class="overlaycolor"></span>
										<?php if ($projecttitle == 'hover' || !$categoryname) {  ?>
										<div class="overlayinfo">
											<?php if ($projecttitle == 'hover') { ?><h5 class="portfolio-name"><strong><?php the_title(); ?></strong></h5><?php } ?>
											<?php if (!$categoryname) {  ?><h6><?php echo $current_cats; ?></h6><?php } ?>
										</div>
										<?php } ?>
									</div>
                            </a>
                        </div><?php echo $moreimages; ?>
                    </div>
					
						<?php if ($projecttitle !== 'hover' && $projecttitle !== 'false') {  ?>
						<div class="entry-intro portfolio-intro">
                        <div class="intro-headline portfolio-intro-headline">
                            <h5 class="portfolio-name"><a href="<?php echo $itemLink; ?>" class="<?php echo $itemClass; ?>" <?php echo $linkOption; ?>><strong><?php the_title(); ?></strong></a></h5>
                        </div>
                    	</div>
						<?php } ?>
                    
                    
                </div>