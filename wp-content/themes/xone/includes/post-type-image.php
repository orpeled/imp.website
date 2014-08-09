<?php

global $sr_prefix;

if (is_single() && get_option($sr_prefix.'_blogentriessidebar') == "false") { $imagesize = 'single-blog-image'; } else { $imagesize = 'blog-thumb'; }

?>

<?php if(has_post_thumbnail()) { ?>
	<?php if(is_single()) { ?>
    <div class="entry-media blog-media">
		<?php the_post_thumbnail($imagesize); ?>
	</div> <!-- END .entry-media -->
    <?php } else { ?>
    <div class="entry-thumb entry-media blog-media">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail($imagesize); ?>
			<div class="overlay"><span class="overlaycolor"></span><span class="overlayicon"></span></div>
		</a>
	</div> <!-- END .entry-media -->
    <?php } ?>
<?php } ?>
  