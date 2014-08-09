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

$sidebar = get_option($sr_prefix.'_blogentriessidebar');
if (!$sidebar) { $sidebar = 'right'; }
if ($sidebar == 'right') { $sidebarclass = 'left-float'; } 
else if ($sidebar == 'left') { $sidebarclass = 'right-float'; } 
else if ($sidebar == 'false') { $sidebarclass = 'no-sidebar'; }

$blog = get_post(get_option( 'page_for_posts' )); $slug = $blog->post_name;
?>

		<section id="section-<?php echo $slug; ?>">
			<div class="section-inner wrapper clearfix">
			
				<?php get_template_part( 'includes/page-title' ); ?>
			
           	<div class="main-content <?php echo $sidebarclass; ?>">
					
					<div id="blog-single">
					<?php get_template_part( 'includes/singlepost', 'blog'); ?>
					</div>
					
				</div>
				
				<?php if ($sidebar !== "false") { ?>
				<aside id="sidebar" class="<?php if ($sidebar == 'right') { ?>right-float<?php } else { ?>left-float<?php } ?>">
					<?php get_sidebar(); ?>
				</aside>
				<?php } ?>
				
			</div>
		</section>

<?php get_footer(); ?>