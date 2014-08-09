<?php
//get global prefix
global $sr_prefix;
global $query;

if ($query) { $query = $query; } else { $query = $wp_query; }

if (have_posts()) : while (have_posts()) : the_post();

// GET METAS 
$slides = get_post_meta(get_the_ID(), $sr_prefix.'_medias', true);
$style = get_post_meta(get_the_ID(), $sr_prefix.'_portfolio_singlelayout',true);
if (!$style) { $style = 'contentwidth'; }

?>
			<div id="portfolio-single" class="section-inner">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			  <div class="wrapper clearfix">
				<div class="section-title project-title">
					<h2 class="project-name"><?php the_title(); ?></h2>
					<?php if (!get_option($sr_prefix.'_portfoliodisablepagination')) {
					sr_singlepagination('portfolio','','single-pagination portfolio-pagination clearfix','',''); } ?>
				</div> <!-- END .section-title -->
				
				<?php sr_metaandshare("portfolio"); ?>
				
				<?php if ($style == 'leftright') {  ?><div class="main-content left-float"><?php } ?>
				<div class="entry-media portfolio-media">
					<?php if ($slides) { get_template_part( 'includes/portfolio', 'gallery' ); } ?>
				</div>
				<?php if ($style == 'leftright') {  ?></div><?php } ?>
				
				<?php if ($style == 'leftright') {  ?><aside class="right-float"><?php } ?>
				<div class="entry-content portfolio-content">
					<?php the_content(); ?>
				</div> <!-- END .entry-content -->
				<?php if ($style == 'leftright') {  ?></aside><?php } ?>
				
				</div> <!-- END .wrapper -->
				
			</div>
				<div class="close-project"><a href="<?php echo home_url(); ?>">Close</a></div>
			</div>
					
					
<?php endwhile; endif; ?>