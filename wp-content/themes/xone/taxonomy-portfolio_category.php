<?php
/*
Template Name: Portfolio
*/

//get global prefix
global $sr_prefix;

//get template header
get_header();


// GET OPTIONS
$size = get_option($sr_prefix.'_portfoliothumbsize');
if (!$size) { $size = 370; }

$gridwith = get_option($sr_prefix.'_portfoliogridwidth');
$carousel = get_option($sr_prefix.'_portfoliocarousel');

?>
			
		<!-- SECTION PORTFOLIO -->
		<section id="section-portfolio-category">
          	<div class="section-inner"> 
			
				<?php get_template_part( 'includes/page-title' ); ?>
				
				<?php 
					$sr_portfoliocount = get_option($sr_prefix.'_portfoliocount');
                    
                  $query = new WP_Query(array(
                        'posts_per_page'=> $sr_portfoliocount,
                        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
                        'portfolio_category' => get_query_var('portfolio_category'),
                        'post_type' => array('portfolio')
                  ) );
               ?>
								
				<!-- AJAX AREA -->    
            	<div id="ajax-portfolio" class="ajax-section">
					<div id="ajax-loader"><div class="loader-icon"><span class="spinner"></span><span></span></div></div>
					<div class="ajax-content clearfix"> 
						<!-- THE LOADED CONTENT WILL BE ADDED HERE -->
					</div>
            	</div>    
            	<!-- AJAX AREA -->
				
				<?php if ($gridwith == 'content') { ?><div class="wrapper"><?php } ?>
               	
					<?php if ($carousel !== 'true') { ?>
					<div id="portfolio-grid" class="masonry portfolio-entries clearfix" data-maxitemwidth="<?php echo $size; ?>">
					<?php } else { ?>
					<div id="portfolio-carousel" class="owl-carousel portfolio-entries">
					<?php } ?>
                  	<?php 
						while ($query->have_posts()) : $query->the_post(); 
							get_template_part( 'includes/loop', 'portfolio');
						endwhile;
						?>
                	</div>
                <?php if ($gridwith == 'content') { ?></div><?php } ?>
				
				<?php $max_num_page = $query->max_num_pages; loadmore('portfolio', $max_num_page, get_query_var('portfolio_category')); ?>
								
			</div>
		</section>
		
		<div class="spacer spacer-big"></div>
		<!-- SECTION PORTFOLIO -->
                
<?php get_footer(); ?>