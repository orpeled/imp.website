<?php
//get global prefix
global $sr_prefix;
global $query;
if ($query) { $query = $query; } else { $query = $wp_query; }

while ($query->have_posts()) : $query->the_post(); 

if (get_post_type( get_the_ID() ) == 'page') { $type = __("Page", 'sr_xone_theme'); }
if (get_post_type( get_the_ID() ) == 'post') { $type = __("Blog Post", 'sr_xone_theme'); }
if (get_post_type( get_the_ID() ) == 'portfolio') { $type = __("Portfolio Item", 'sr_xone_theme'); }
?>  
		
        			<div class="search-entry masonry-item">
                    	<div class="entry-intro search-intro">
                          <div class="entry-headline search-headline">
                          	<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                          	<h6 class="page-type subtitle"><?php echo $type; ?></h6>
                    		</div>
                    	</div>
               	</div> <!-- END .search-entry -->
                
<?php endwhile; ?>