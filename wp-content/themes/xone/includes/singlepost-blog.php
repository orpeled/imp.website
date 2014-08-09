<?php
//get global prefix
global $sr_prefix;
global $query;

if ($query) { $query = $query; } else { $query = $wp_query; }

if (have_posts()) : while (have_posts()) : the_post();

$format = get_post_format(); 
if( false === $format ) { $format = 'standard'; }

?>  

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="blog-entry clearfix">
					
						<div class="blog-date">
                      	<span class="date-day"><?php the_time('d') ?></span>  
                         	<span class="date-month"><strong><?php the_time('M') ?> <?php the_time('Y') ?></strong></span>  
                 		</div>
						
						<div class="blog-content">
							<?php 
							if( $format == 'standard' || $format == 'gallery' || $format == 'image' || $format == 'video' || $format == 'audio' ) { 
								get_template_part( 'includes/post-type', $format ); ?>
							
							<div class="blog-headline">
								<h3 class="post-name"><strong><?php the_title(); ?></strong></h3>
								<h6 class="post-meta"><?php sr_getBlogMeta(); ?></h6>
							</div>
							
							<div class="blog-intro">
							<?php the_content(); ?>
							
							<?php wp_link_pages('before=<p><strong>Pages:</strong>&after=</p>&next_or_number=number'); ?>
							</div>
						
							<?php } else {	get_template_part( 'includes/post-type', $format );	 } ?>
							
							<?php if ( !get_option($sr_prefix.'_blogpostsdisabletags') ) { ?>
							<div class="blog-tags clearfix"><?php the_tags( '', '', ''); ?></div>
							<?php } ?>
							
						</div>
						
						<div class="clear"></div>
						
						<?php if ( !get_option($sr_prefix.'_blogpostsdisableauthorinfo') && get_the_author_meta('description') ) { ?>
						<div class="blog-author clearfix">
							<div class="author-image">
								<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?></a>
							</div>   
							<div class="author-bio">
								<h5><?php _e('About', 'sr_xone_theme'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></h5>
								<p><?php the_author_meta('description'); ?></p>
							</div>
						</div>
						<?php } ?>
						
					</div>
					</div>
                
					<?php if (get_option($sr_prefix.'_commentsblog') == 'enabled' && comments_open() && !post_password_required() ) { ?>
                  	<?php comments_template( '', true ); ?>
                  <?php } ?>
                
<?php endwhile; endif; ?>