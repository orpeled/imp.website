<?php

global $sr_prefix;
$postid = $post->ID;

$gallery = get_post_meta($post->ID, $sr_prefix.'_medias', true);
$display = get_post_meta($post->ID, $sr_prefix.'_mediaslayout', true);
$layout = get_post_meta($post->ID, $sr_prefix.'_portfolio_singlelayout', true);

$slides = explode('|||',$gallery);
$slider = '';
foreach ($slides as $s) {
	$object = explode('~~', $s);
	$type = $object[0];
	$val = $object[1];
	
	$slider .= "<li>"; 
	if ($type == 'image') { 
		$attachement = sr_get_attachment_infos( $val );
		$image = wp_get_attachment_image_src($val, 'single-portfolio-image-big');
		$image = $image[0];
		$thisimage = '<img src="'.$image.'" alt="'.get_the_title($image[1]).'"/>';
			$slider .= $thisimage;
		
		if ($attachement['caption'] && !get_option($sr_prefix.'_portfoliodisablecaption')) { 
				$slider .= '<div class="single-caption"><span class="caption-text">'.$attachement['caption'].'</span><span class="caption-bg"></span></div>';  }
	} else {
		$slider .= $val;
	}
	$slider .= "</li>";
}

?>
		<?php if($display !== "list" ) {  ?>
        <div id="slider-<?php echo get_the_ID(); ?>" class="flexslider-container portfolio-slider">        
            <div class="flexslider">
                <ul class="slides">
                    <?php echo $slider; ?>                
                </ul>
            </div>
        </div>
        <?php } else { ?>
        <ul class="gallery-list">
            <?php echo $slider; ?>
        </ul>
        <?php }  ?>