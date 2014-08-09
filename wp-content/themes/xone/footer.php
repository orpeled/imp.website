<?php 

global $sr_prefix;

?>
	</div> <!-- END .page-body -->
	<!-- PAGEBODY -->
	
	<?php if (!get_option($sr_prefix.'_disablebacktotop') || get_option($sr_prefix.'_footerlogo') || !get_option($sr_prefix.'_socialdisable') || get_option($sr_prefix.'_copyright_text')) { ?>  
	<!-- FOOTER -->
	<footer>
		<div class="footerinner wrapper align-center text-light">
			<?php if (!get_option($sr_prefix.'_disablebacktotop')) { ?>
			<a id="backtotop" href="#" class="sr-button sr-button4 mini-button sr-buttonicon"><i class="fa fa-chevron-up"></i></a>
			<?php } ?>
			
			<?php if (get_option($sr_prefix.'_footerlogo')) { ?>
			<p class="footer-logo"><img src="<?php echo get_option($sr_prefix.'_footerlogo'); ?>" alt="Footer Logo"></p>
			<?php } ?>
			
			<?php if(!get_option($sr_prefix.'_socialdisable')) { ?>
			<ul class="socialmedia-widget">
				<?php if (get_option($sr_prefix.'_facebook')) { ?><li class="facebook" ><a href="<?php echo get_option($sr_prefix.'_facebook'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_twitter')) { ?><li class="twitter"><a href="<?php echo get_option($sr_prefix.'_twitter'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_googleplus')) { ?><li class="googleplus"><a href="<?php echo get_option($sr_prefix.'_googleplus'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_vimeo')) { ?><li class="vimeo"><a href="<?php echo get_option($sr_prefix.'_vimeo'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_pinterest')) { ?><li class="pinterest"><a href="<?php echo get_option($sr_prefix.'_pinterest'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_youtube')) { ?><li class="youtube"><a href="<?php echo get_option($sr_prefix.'_youtube'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_instagram')) { ?><li class="instagram"><a href="<?php echo get_option($sr_prefix.'_instagram'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_dribbble')) { ?><li class="dribbble"><a href="<?php echo get_option($sr_prefix.'_dribbble'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_deviantart')) { ?><li class="deviantart"><a href="<?php echo get_option($sr_prefix.'_deviantart'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_behance')) { ?><li class="behance"><a href="<?php echo get_option($sr_prefix.'_behance'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_thumblr')) { ?><li class="thumblr"><a href="<?php echo get_option($sr_prefix.'_thumblr'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_flickr')) { ?><li class="flickr"><a href="<?php echo get_option($sr_prefix.'_flickr'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_forrst')) { ?><li class="forrst"><a href="<?php echo get_option($sr_prefix.'_forrst'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (get_option($sr_prefix.'_linkedin')) { ?><li class="linkedin"><a href="<?php echo get_option($sr_prefix.'_linkedin'); ?>" target="_blank"></a></li><?php } ?>
				<?php if (!get_option($sr_prefix.'_rss')) { ?><li class="rss"><a href="<?php echo bloginfo('rss2_url') ?>" target="_blank"></a></li><?php } ?>
			</ul>
			<?php } ?>
			
			<?php if(get_option($sr_prefix.'_copyright_text')) { ?>
			<p class="copyright"><?php echo stripslashes(get_option($sr_prefix.'_copyright_text')) ?></p>
			<?php } ?>
		</div>
	</footer>
	<!-- FOOTER --> 
	<?php } ?>

</div> <!-- END #page-content -->
<!-- PAGE CONTENT -->

<?php wp_footer(); ?>

</body>
</html>