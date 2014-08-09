 	<?php
//get global prefix
global $sr_prefix;
global $query;
if ($query) { $query = $query; } else { $query = $wp_query; }

$sidebar = get_option($sr_prefix.'_blogentriessidebar');
if (!$sidebar) { $sidebar = 'right'; }
$excerptlength = get_option($sr_prefix.'_blogentriesexcerpt');
if (!$excerptlength) { $excerptlength = 50; }
$readmore = get_option($sr_prefix.'_blogentriesreadmore');

while ($query->have_posts()) : $query->the_post(); 

$format = get_post_format(); 
if( false === $format ) { $format = 'standard'; }

?>  
		
                   	<div class="blog-entry clearfix <?php echo 'format-'.$format; ?>">
						
							<div class="blog-date">
                         		<span class="date-day"><?php the_time('d') ?></span>  
                         		<span class="date-month"><strong><?php the_time('M') ?> <?php the_time('Y') ?></strong></span>  
                        	</div>
							
							<div class="blog-content">
                        		<?php 
								if( $format == 'standard' || $format == 'gallery' || $format == 'image' || $format == 'video' || $format == 'audio' ) { 
									get_template_part( 'includes/post-type', $format ); ?>
								
								<div class="blog-headline">
                            		<h3 class="post-name"><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></h3>
                            		<h6 class="post-meta"><?php sr_getBlogMeta(); ?></h6>
                            	</div>
                            	
								<div class="blog-intro">
								<?php 
									if (get_option($sr_prefix.'_blogentriesexorfull') == 'full') {
										the_content();
									} else {
										echo content('excerpt', $excerptlength, false); 
									}
								?>
                         		</div>
                                
                            	<?php if (!$readmore) { ?>
                            	<p><a href="<?php the_permalink(); ?>" class="readmore-button"><?php _e("Read More", 'sr_xone_theme'); ?></a></p>
                            	<?php } ?>
								
                            	<?php } else {	get_template_part( 'includes/post-type', $format );	 } ?>
								
							</div>
						
						</div>
                
<?php endwhile; ?>