<?php
/*
* Main Page
*/

//get global prefix
global $sr_prefix;

//get template header
get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>
		
		<!-- SECTION -->
		<section id="section-<?php echo $post->post_name; ?>">
          	<div class="section-inner"> 
			
				<?php get_template_part( 'includes/page-title' ); ?>
				
				<div class="wrapper">
				<?php the_content(); ?>
				</div>
				
			</div>
		</section>
		<!-- SECTION -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>