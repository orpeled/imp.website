<?php
//get global prefix
global $sr_prefix;
global $wp_query;

//get template header
get_header();

if (is_home()) { $theId = get_option( 'page_for_posts' );  } else if (!is_404() && !is_tag() && !is_category() && !is_search() && !is_archive() && !is_tax()) { $theId = get_the_ID();  }

$blog = get_post(get_option( 'page_for_posts' )); $slug = $blog->post_name;

$sidebar = get_option($sr_prefix.'_blogentriessidebar');
if (!$sidebar) { $sidebar = 'right'; }
if ($sidebar == 'right') { $sidebarclass = 'left-float'; } 
else if ($sidebar == 'left') { $sidebarclass = 'right-float'; } 
else if ($sidebar == 'false') { $sidebarclass = 'no-sidebar'; }
?>

		<!-- SECTION -->
		<section id="section-<?php echo $slug; ?>">
			<div class="section-inner wrapper clearfix">	 
			
				<?php get_template_part( 'includes/page-title' ); ?>
				
           	<div class="main-content <?php echo $sidebarclass; ?>">
					<?php
					//** QUERY IF SEARCH
					if (get_query_var('s')) {
						$query = new WP_Query(array(
							'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
							's' => get_query_var('s'),
							'post_type' => array('post')
						));
					} 
					
					//** NO POST INFO
					if (!have_posts()) { echo '<div class="nopost"><h3>'.__("No posts has been found!", 'sr_xone_theme').'</h3></div>'; } else {
                	?>
					
            		<div id="blog-entries">
					<?php get_template_part( 'includes/loop', 'blog'); ?>
                	<?php sr_pagination(__('Previous Page', 'sr_xone_theme'), __('Next Page', 'sr_xone_theme')); ?>  
					</div>
					
					<?php } // END else have_post ?>
				</div>
				
				<?php if ($sidebar !== "false") { ?>
				<aside id="sidebar" class="<?php if ($sidebar == 'right') { ?>right-float<?php } else { ?>left-float<?php } ?>">
					<?php get_sidebar(); ?>
				</aside>
				<?php } ?>

			</div>
		</section>
		<!-- SECTION -->

<?php get_footer(); ?>