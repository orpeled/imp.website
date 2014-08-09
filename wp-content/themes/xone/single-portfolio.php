<?php

//get global prefix
global $sr_prefix;

// Count the views
if(!isset($_COOKIE["viewscookie".get_the_ID()]) && !isset($_POST['countlikes'])) { 
	sr_setPostMeta(get_the_ID(), 'views');
	setcookie("viewscookie".get_the_ID(), 'yes', time()+3000000, '/');
}

//get template header
get_header();

?>

		<!-- SECTION PORTFOLIO -->
		<section id="section-portfolio-single">
			<?php get_template_part( 'includes/singlepost', 'portfolio'); ?>
		</section>
		<!-- SECTION PORTFOLIO -->
		
<?php get_footer(); ?>