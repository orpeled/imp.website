<?php

/*-----------------------------------------------------------------------------------
	
	Plugin Name: tag Widget 
	Description: Display your tag  
	Version: 1.0  
	Author: SpabRice  
	Author URI: http://www.spab-rice.com  
	
-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/*	Register tag Widget & enqueu scripts
/*-----------------------------------------------------------------------------------*/

add_action( 'widgets_init', 'sr_tag_widget' );

function sr_tag_widget() {
	register_widget( 'sr_tag_widget' );
}



/*-----------------------------------------------------------------------------------*/
/*	Widget Class
/*-----------------------------------------------------------------------------------*/

class sr_tag_widget extends WP_Widget {

	/*  Widget setup  */
	
	function sr_tag_widget() {
	
		// Widget settings
		$widget_ops = array( 'classname' => 'sr_tag_widget', 'description' => __('A simple tag Widget.', 'sr_xone_theme') );
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base', 'sr-tag-widget' );

		// Create widget
		$this->WP_Widget( 'sr_tag_widget', __('SR - Tags','sr_xone_theme'), $widget_ops, $control_ops );
	}
	


	/*  Display Widget */
	
	function widget( $args, $instance ) {
		extract( $args );

		// Get the inputs
		$sr_title = apply_filters('widget_title', $instance['title'] );
		
		// Display the WidgetBefore settings
		echo $before_widget;
		
		
		// Display the title
		if ( $sr_title ) { echo $before_title . $sr_title . $after_title; }
			
			
		$id = rand(0,999);
		/* Display Latest tag */
		?>
			<div class="tag-list">
				<?php $tags = get_tags();
				
				foreach ($tags as $t) {
					$tag_link = get_tag_link($t->term_id);
					echo '<a href="'.$tag_link.'" title="'.$t->name.' Tag" class="'.$t->slug.'">'.$t->name.'</a> ';
				}
				
				?>
            </div>
        <?php   
		
		
		// Display the WidgetAfter settings
		echo $after_widget;
	}
	
	

	/* Update Widget */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		return $instance;
	}
	
	/* Widget settings */
	
		 
	function form( $instance ) {

		// Set up default settings
		$defaults = array(
		'title' => 'Tags'
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
		
		?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'sr_xone_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- tag ID: Text Input -->
		<p>
            <small>-----------<br />This Widget display all tags of your blog posts.<br />-----------</small>
		</p>
        	
		
		
	<?php
	}
}

?>