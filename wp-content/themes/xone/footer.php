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
            <a href="http://www.facebook.com/imp.computer"><img src="http://127.0.0.1:8888/wp-content/uploads/2014/09/Fb_Button.png" alt="Fb_Button" width="90" height="86" class="alignleft size-full wp-image-934 smaller_social_button_fb_footer" /></a><a href="http://twitter.com/theimpcomputer"><img src="http://127.0.0.1:8888/wp-content/uploads/2014/09/Twitter_Button.png" alt="Twitter_Button" width="90" height="86" class="alignleft size-full wp-image-935 smaller_social_button_twitter_footer" /></a>
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
            <!-- MENU -->
            <div class="footer_menu <?php echo $menuClass; ?> clearfix">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary-menu',
                        'container'       => 'nav',
                        'container_id'    => 'main-nav',
                        'container_class' => 'container_footer_menu',
                        'menu_class'      => 'footer_menu_right',
                        'menu_id'         => 'footer_primary' ,
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
                            'container_class' => 'container_footer_menu',
                            'menu_class'      => 'footer_menu_right',
                            'menu_id'         => 'footer_primary' ,
                            'walker' 			=> new sr_bulletmenu_output()
                        )
                    );
                } // END if
                ?>

            </div>
            <!-- MENU -->

		</div>
	</footer>
	<!-- FOOTER --> 
	<?php } ?>

</div> <!-- END #page-content -->
<!-- PAGE CONTENT -->

<?php wp_footer(); ?>

</body>
</html>