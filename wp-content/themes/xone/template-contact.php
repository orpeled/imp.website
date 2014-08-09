<?php
/*
Template Name: Google Map Fullwidth
*/

//get global prefix
global $sr_prefix;

//get template header
get_header();

if (have_posts()) : while (have_posts()) : the_post(); 

$latlong = get_post_meta(get_the_ID(), $sr_prefix.'_contact_latlong', true);
$mapinfo = get_post_meta(get_the_ID(), $sr_prefix.'_contact_info', true);
$pin = get_post_meta(get_the_ID(), $sr_prefix.'_contact_icon', true);

?>
     
		<!-- SECTION -->
		<section id="section-<?php echo $post->post_name; ?>">
			<div class="section-inner">
			
				<?php if( $latlong && $latlong !== '' ) { echo sr_googleMap($latlong, $mapinfo, $pin, false, 'header', '').'<div class="spacer spacer-big"></div>'; } ?> 
			
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