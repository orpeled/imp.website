<?php

global $sr_prefix;

$link = get_post_meta($post->ID, $sr_prefix.'_link', true);

$content = get_the_content();
$content=str_ireplace('<p>','',$content);
$content=str_ireplace('</p>','',$content); 
?>
	<h4 class="link-text"><a href="<?php echo $link; ?>" target="_blank"><?php echo $content; ?></a></h4>
	<h6 class="link-name"><?php echo the_title(); ?></h6>
