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

if (get_the_content()) { $content = apply_filters ("the_content", $post->post_content); }

?>
			
		<!-- SECTION PORTFOLIO -->
		<section id="section-<?php echo $post->post_name; ?>">
          	<div class="section-inner"> 
			
				<?php get_template_part( 'includes/page-title' ); ?>
				
				<?php 
					/*
					** GET CATEGORIES TO SHOW
					*/
				
					$category = get_post_meta(get_the_ID(), $sr_prefix.'_portfoliocategories', true);
          			if (get_query_var('portfolio_category')) { $category = get_query_var('portfolio_category'); }
        			$sr_portfoliocount = get_option($sr_prefix.'_portfoliocount');
					
					if ($category[0] == '' && count($category) < 2) { $taxquery = false; } else {
						$taxquery = array(	array(
										'taxonomy' => 'portfolio_category',
										'field' => 'slug',
										'terms' => $category
									));
					}
					
					$loadmorecats = '';
					foreach ($category as $c) { $loadmorecats .= $c.','; }
					$loadmorecats = substr_replace($loadmorecats ,"",-1);
				 
					if ( get_option( 'page_on_front' ) == get_the_ID() ) { $pagenumber = ( get_query_var('page') ? get_query_var('page') : 1 ); } 
					else { $pagenumber = ( get_query_var('paged') ? get_query_var('paged') : 1 ); }  
                    $query = new WP_Query(array(
                        'posts_per_page'=> $sr_portfoliocount,
                        'paged' => $pagenumber,
                        'm' => get_query_var('m'),		   
                        'w' => get_query_var('w'),
                        'post_type' => array('portfolio'),
						'tax_query' => $taxquery
                    ) );
					
					$related = 'grid-'.$post->post_name;
                ?>
				
                <?php if (!have_posts($query)) { echo '<div class="nopost"><h3>'.__("No posts has been found!", 'sr_xone_theme').'</h3></div>'; } ?>
				
				<!-- AJAX AREA -->    
            	<div id="ajax-portfolio" class="ajax-section">
					<div id="ajax-loader"><div class="loader-icon"><span class="spinner"></span><span></span></div></div>
					<div class="ajax-content clearfix"> 
						<!-- THE LOADED CONTENT WILL BE ADDED HERE -->
					</div>
            	</div>    
            	<!-- AJAX AREA -->
					
				  <?php 
                if (get_post_meta(get_the_ID(), $sr_prefix.'_portfoliofilter', true) !== 'no' && count($category) > 1 && is_array($category) && $carousel !== 'true') {
                ?>	
					<ul id="menu-portfolio-filter" class="filter clearfix" data-related-grid="portfolio-grid">
						<li><a class="active" data-option-value="*">All</a></li>
						<?php foreach ($category as $c) { 
							$term = get_term_by('slug', $c, 'portfolio_category');
							$termlink = get_term_link($c, 'portfolio_category');
							if ($c !== '') {
						?>
						<li><a data-option-value=".<?php echo $c; ?>" href="<?php echo $termlink; ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></li>
						<?php } } ?>
					</ul>
                <?php } ?>
				
				<?php if ($gridwith == 'content') { ?><div class="wrapper"><?php } ?>
               	
					<?php if ($carousel !== 'true') { ?>
					<div id="portfolio-grid" class="masonry portfolio-entries clearfix <?php echo $related; ?>" data-maxitemwidth="<?php echo $size; ?>">
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
				
				<?php $max_num_page = $query->max_num_pages; loadmore('portfolio', $max_num_page, $loadmorecats, $related); ?>
              	<?php wp_reset_query(); ?>
				
				<?php if (isset($content) && $content !== '') { echo '<div class="wrapper">'.$content.'</div>'; } ?>
				
			</div>
		</section>
		<!-- SECTION PORTFOLIO -->
                
<?php get_footer(); ?>