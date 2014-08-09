<?php

global $sr_prefix;

$gallery = get_post_meta($post->ID, $sr_prefix.'_medias', true);
$postid = $post->ID;

if( empty($gallery) || get_option($sr_prefix.'_blogentriesdisplay') == 'featuredimage' || 
	(get_post_meta($post->ID, $sr_prefix.'_mediaslayout', true) == "list" && !is_single()) ) {
?>	
	
<?php if(has_post_thumbnail()) { ?>
	<div class="entry-thumb entry-media blog-media">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('blog-thumb'); ?>
			<div class="overlay"><span class="overlaycolor"></span><span class="overlayicon"></span></div>
		</a>
	</div> <!-- END .entry-media -->
<?php } ?>
    
<?php	
} else {	

$medias = explode('|||', $gallery);

$output_medias = '';
foreach ($medias as $media) {
	$object = explode('~~', $media);
	$type = $object[0];
	$val = $object[1];
	
	$output_medias .= "<li>"; 
	if ($type == 'image') { 
		$image = wp_get_attachment_image_src($val, 'blog-thumb'); $image = $image[0];
		$fancyimage = wp_get_attachment_image_src($val, 'full'); $fancyimage = $fancyimage[0];
		$thisimage = '<img src="'.$image.'" alt="'.get_the_title($image[1]).'"/>';
			$output_medias .= $thisimage;
	} else {
		$output_medias .= $val;
	}
	$output_medias .= "</li>";
}

?>
    <?php if(get_post_meta($post->ID, $sr_prefix.'_mediaslayout', true) !== "list" ) {  ?>
    <div class="entry-media blog-media">
        <div id="slider-<?php echo $postid; ?>" class="flexslider-container post-slider">        
            <div class="flexslider">
                <ul class="slides">
                    <?php echo $output_medias; ?>                
                </ul>
            </div>
        </div>
    </div> <!-- END .entry-media -->
    <?php } else { ?>
    <div class="entry-media blog-media">
		<ul class="media-list">
			<?php echo $output_medias; ?>                
		</ul>
	</div> <!-- END .entry-media -->
    <?php } ?>
        
<?php } ?>