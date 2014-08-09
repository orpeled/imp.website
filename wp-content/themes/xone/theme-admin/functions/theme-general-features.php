<?php

/*-----------------------------------------------------------------------------------

	General Frontend theme features

-----------------------------------------------------------------------------------*/
global $sr_prefix;



/*-----------------------------------------------------------------------------------*/
/*	Ajax Loader (Isotope)
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_load_more_callback' ) ) {
	function sr_load_more_callback() {
		global $wpdb;
		global $sr_prefix;
		
		$page = intval( $_POST['page'] );
		$type =  $_POST['type'];
		$tax =  $_POST['tax'];
		
		if ($type == 'post') {
			query_posts( array(
				'post_type' => array('post'),
				'paged' => $page,
				'cat' => $tax
				) 
			);
			get_template_part( 'includes/loop', 'blog');
		} 
		else if ($type == 'portfolio') {
			$sr_portfoliocount = get_option($sr_prefix.'_portfoliocount');
			$taxes = explode(',',$tax);
			if ($taxes[0] == '' && count($taxes) < 2) { $taxquery = false; } else {
				$taxquery = array(
										array(
											'taxonomy' => 'portfolio_category',
											'field' => 'slug',
											'terms' => $taxes
										)
									);
			}
			
			query_posts( array(
				'posts_per_page'=> $sr_portfoliocount,
				'paged' => $page,
				'm' => get_query_var('m'),		   
				'w' => get_query_var('w'),
				'post_type' => array('portfolio'),
				'tax_query' => $taxquery
				) 
			);
			$portfoliolayout = get_option($sr_prefix.'_portfoliolayout');
			if (!$portfoliolayout) { $portfoliolayout = 'fullwidth'; }
			if ($portfoliolayout == 'fullwidth') {
				$portfoliosize = get_option($sr_prefix.'_portfoliosize');
				if (!$portfoliosize) { $portfoliosize = 'full-layout-big'; }
			} 
			global $portfoliosize;
			while (have_posts()) : the_post(); 
				get_template_part( 'includes/loop', 'portfolio');
			endwhile;
		}
		
		die(); // this is required to return a proper result
	}
}
add_action('wp_ajax_nopriv_sr_load_more', 'sr_load_more_callback'); 
add_action('wp_ajax_sr_load_more', 'sr_load_more_callback');



/*-----------------------------------------------------------------------------------*/
/*	Load more button (isotope)
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'loadmore' ) ) {
	function loadmore($type, $max_num_page, $tax, $related) {
		if (!$type) { $type = 'post'; }
		if ($max_num_page > 1) { 
			echo '<div id="load-more"><a href="#" class="sr-button small-button sr-button2" data-maxnumpage="'.$max_num_page.'" data-type="'.$type.'" data-tax="'.$tax.'" data-related="'.$related.'">'.__('Load More', 'sr_xone_theme').'</a>
			<div class="loader-icon"><span class="spinner"></span><span></span></div>
			</div>';
		}
	}
}




/*-----------------------------------------------------------------------------------*/
/*	Ajax Loader (Content)
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_get_content_callback' ) ) {
	function sr_get_content_callback() {
		global $wpdb;
		global $sr_prefix;
		
		$id =  $_POST['id'];
		$type =  $_POST['type'];
		
		if ($type == 'post') {
			// Count the views
			if(!isset($_COOKIE["viewscookie".$id]) && !isset($_POST['countlikes'])) { 
				sr_setPostMeta($id, 'views');
				setcookie("viewscookie".$id, 'yes', time()+3600, '/');
			}
			query_posts( 'p='.$id );
			get_template_part( 'includes/singlepost', 'blog');
		} 
		else if ($type == 'portfolio') {
			// Count the views
			if(!isset($_COOKIE["viewscookie".$id]) && !isset($_POST['countlikes'])) { 
				sr_setPostMeta($id, 'views');
				setcookie("viewscookie".$id, 'yes', time()+3600, '/');
			}
			query_posts( 'p='.$id.'&post_type=portfolio' );
			get_template_part( 'includes/singlepost', 'portfolio');
		}
		
		die(); // this is required to return a proper result
	}
}
add_action('wp_ajax_nopriv_sr_get_content', 'sr_get_content_callback'); 
add_action('wp_ajax_sr_get_content', 'sr_get_content_callback');




/*-----------------------------------------------------------------------------------*/
/*	Ajax Loader (Likes)
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_like_callback' ) ) {
	function sr_like_callback() {
		global $wpdb;
		
		$id = intval( $_POST['id'] );
		
		// Count the likes
		if (!isset($_COOKIE["likescookie".$id])) { 
			sr_setPostMeta($id, 'likes'); 
			setcookie("likescookie".$id, 'yes', time()+3000000, '/'); 
			echo sr_getPostMeta($id, 'likes');
		} else {
			echo 'cookieset';	
		}
		
		die(); // this is required to return a proper result
	}
}
add_action('wp_ajax_nopriv_sr_like', 'sr_like_callback'); 
add_action('wp_ajax_sr_like', 'sr_like_callback');



/*-----------------------------------------------------------------------------------*/
/*	Blog Metas
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_getBlogMeta' ) ) {
	function sr_getBlogMeta() {
		global $wp_query;	
		global $sr_prefix;
		
		// CATEGORY
		if ( !get_option($sr_prefix.'_blogpostsdisablecategory')) {
			$categories = get_the_category();
			$separator = ',';
			$output = '';
			if($categories){
				$output .= ' in ';
				foreach($categories as $category) {
					$output .= 	'<a class="cat-link" href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'sr_xone_theme' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
				}
				$metacategory = trim($output, $separator);
			} else { $metacategory = '';  }
		} else { $metacategory = '';  }
				
		
		// AUTHOR
		if (!get_option($sr_prefix.'_blogpostsdisableauthor')) {
			$author_id = $wp_query->post->post_author;
			$author_name = get_the_author_meta('nickname',$author_id);
			$author_name = get_the_author_meta('nickname',$author_id);
			$metaauthor = __( "By", 'sr_xone_theme' ).' '.$author_name;
     	} else { $metaauthor = '';  }
		
		if ($metaauthor || $metacategory ) {
		echo $metaauthor.$metacategory;
		}
				
		
	}						
}




/*-----------------------------------------------------------------------------------*/
/*	Pagination for pages
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_pagination' ) ) {
	function sr_pagination($prevtext = 'Previous', $nexttext = 'Next' )
	{
		global $query;		
		
		// No pagination on single sites
		if(!is_single())	
		{	
			if ( get_option( 'page_on_front' ) == get_the_ID() ) { $current = get_query_var('page') == 0 ? 1 : get_query_var('page'); } 
			else { $current = get_query_var('paged') == 0 ? 1 : get_query_var('paged'); }
			$total = $query->max_num_pages;																
			
			// If there are more than 1 page
			if($total > 1)	
			{				
				echo '<ul id="entries-pagination" class="clearfix">';
				
				// Back-Button
				if ($current == 1) { $prevdisable = 'inactive'; } else { $prevdisable = '';  }
				echo '<li class="prev '.$prevdisable.'"><a href="'.get_pagenum_link($current-1).'" title="'.$prevtext.'">'.$prevtext.'</a></li>';	
				
				// Next-Button
				if ($current == $total) { $nextdisable = 'inactive'; } else { $nextdisable = '';  }
				echo '<li class="next '.$nextdisable.'"><a href="'.get_pagenum_link($current+1).'" title="'.$nexttext.'">'.$nexttext.'</a></li>';
				
				echo '</ul> <!-- END #entries-pagination -->';
			}
		}
	}
}




/*-----------------------------------------------------------------------------------*/
/*	Pagination on single item view
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_singlepagination' ) ) {
	function sr_singlepagination($type,$id,$class,$prevtext = 'Previous', $nexttext = 'Next' ) {
		global $sr_prefix;
		
		$prev_item = get_adjacent_post(false,'',false) ; 
		$next_item = get_adjacent_post(false,'',true) ;
		
		if (is_single() && get_post_type() == 'portfolio' ) { $closelink = get_permalink( get_option($sr_prefix.'_portfoliopage') ); }
		else if (is_single() && get_post_type() == 'post' ) { $closelink = get_permalink( get_option('page_for_posts') ); }
		
			echo '<ul id="'.$id.'" class="'.$class.'">';
			if ($prev_item && $prev_item->ID) { 
				$prev_post = get_post($prev_item->ID);
				$prevdisable = ''; 
				$prevlink = get_permalink( $prev_item->ID ); 
				$prevtitle = $prev_post->post_title; 
				$prevslug = $prev_item->post_name; 
				$previd = $prev_item->ID; 
			} else { 
				$prevdisable = 'inactive'; 
				$prevlink = '#'; 
				$prevtitle = ''; 
				$prevslug = ''; 
				$previd = ''; 
			}
				echo '<li class="prev '.$prevdisable.'"><a href="'.$prevlink.'" title="'.$prevtitle.'" class="load-content" data-id="'.$previd.'" data-slug="'.$prevslug.'" data-type="'.$type.'"><span></span>'.$prevtext.'</a></li>'; 
			
			if ($next_item && $next_item->ID) { 
				$next_post = get_post($next_item->ID);
				$nextdisable = ''; 
				$nextlink = get_permalink( $next_item->ID ); 
				$nexttitle = $next_post->post_title; 
				$nextslug = $next_item->post_name; 
				$nextid = $next_item->ID; 
			} else { 
				$nextdisable = 'inactive'; 
				$nextlink = '#'; 
				$nexttitle = ''; 
				$nextslug = ''; 
				$nextid =''; 
			}
				echo '<li class="next '.$nextdisable.'"><a href="'.$nextlink.'" title="'.$nexttitle.'" class="load-content" data-id="'.$nextid.'" data-slug="'.$nextslug.'" data-type="'.$type.'">'.$nexttext.'<span></span></a></li>'; 
			echo '</ul>';
		
	}						
}




/*-----------------------------------------------------------------------------------*/
/*	Share
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_metaandshare' ) ) {
	function sr_metaandshare($type) {
		global $sr_prefix;
		global $wp_query;	
			
		$postid = $wp_query->post->ID;
		$og_title = get_the_title( $postid );
		$og_desc = get_post($postid);
		$og_desc = explode(' ', $og_desc->post_content, 15);
		$og_desc = preg_replace('/<img[^>]+./','', $og_desc);
		$og_desc = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $og_desc );
		array_pop($og_desc);
		$og_desc = implode(" ",$og_desc).'...';
		$og_desc = strip_tags(strip_shortcodes($og_desc));
		// RESET DESC
		$og_desc = '';
		$og_url = get_permalink( $postid );
		$og_img = wp_get_attachment_image_src( get_post_thumbnail_id( $postid ), 'medium' );;
		$og_img = $og_img[0];
		
		echo '<ul class="socialmedia-widget social-share">';
				
		if ( ($type == 'portfolio' && !get_option($sr_prefix.'_portfoliodisableshare')) || ($type == 'post' && !get_option($sr_prefix.'_blogpostsdisableshare')) ) { 
			?>
			<li class="facebook"><a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>','','width=900, height=500, toolbar=no, status=no'); return(false);">Facebook</a></li>
			
			<li class="twitter"><a href="" onclick="window.open('https://twitter.com/intent/tweet?text=Tweet%20this&amp;url=<?php the_permalink(); ?>','','width=650, height=350, toolbar=no, status=no'); return(false);">Tweet</a></li>
			
			<li class="googleplus"><a href="" onclick="window.open('https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=<?php the_permalink(); ?>&amp;image<?php echo $og_img; ?>','','width=900, height=500, toolbar=no, status=no'); return(false);">Google Plus</a></li>
			
			<li class="pinterest"><a href="" onclick="window.open('http://pinterest.com/pin/create/bookmarklet/?media=<?php echo $og_img; ?>&amp;url=<?php the_permalink(); ?>','','width=650, height=350, toolbar=no, status=no'); return(false);">Pinterest</a></li>
            <?php
		}
		
		echo '</ul>';
		
		
	}						
}



/*-----------------------------------------------------------------------------------*/
/*	Count/Get/Delete Views/Likes  
/*-----------------------------------------------------------------------------------*/
function sr_getPostMeta($postID, $method) {
	global $sr_prefix;
    $count_key = $sr_prefix.'_post_'.$method;
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        return "0";
    }
    return $count;
}


function sr_setPostMeta($postID, $method) {
	global $sr_prefix;
    $count_key = $sr_prefix.'_post_'.$method;
	
	## ALL TIME COUNTS
	$alltime = get_post_meta($postID, $count_key, true);
    if($alltime==''){
        $alltime = 1;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, $alltime);
    }else{
        $alltime++;
        update_post_meta($postID, $count_key, $alltime);
    }
	##
	
}

function sr_resetPostMeta($method,$type) {
    global $sr_prefix;
	$count_key = $sr_prefix.'_post_'.$method;
	
	$posts = get_posts( array('posts_per_page'  => -1,'post_type'=> $type) );
	foreach ( $posts as $p ) { 
		delete_post_meta($p->ID, $count_key);
	}
	
}

?>