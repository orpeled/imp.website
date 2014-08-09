<?php

global $sr_prefix;

$quote = get_post_meta($post->ID, $sr_prefix.'_quote', true);

?>
    <h4 class="quote-text"><?php echo $quote; ?></h4>
    <h6 class="quote-author">- <?php the_title(); ?> -</h6>
