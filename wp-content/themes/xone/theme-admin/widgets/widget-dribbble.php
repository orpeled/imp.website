<?php

/*-----------------------------------------------------------------------------------
	
	Plugin Name: Dribbble Widget 
	Description: Display your Dribbbles   
	Version: 1.0  
	Author: SpabRice  
	Author URI: http://www.spab-rice.com  
	
-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/*	Register dribbble Widget & enqueu scripts
/*-----------------------------------------------------------------------------------*/

add_action( 'widgets_init', 'sr_dribbble_widget' );

function sr_dribbble_widget() {
	register_widget( 'sr_dribbble_widget' );
}




/*-----------------------------------------------------------------------------------*/
/*	Widget Class
/*-----------------------------------------------------------------------------------*/

class sr_dribbble_widget extends WP_Widget {

	/*  Widget setup  */
	
	function sr_dribbble_widget() {
	
		// Widget settings
		$widget_ops = array( 'classname' => 'sr_dribbble_widget', 'description' => __('A simple Dribbble Widget to show your Dribbbles.', 'sr_xone_theme') );
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base', 'sr-dribbble-widget' );

		// Create widget
		$this->WP_Widget( 'sr_dribbble_widget', __('SR - Dribbbles','sr_xone_theme'), $widget_ops, $control_ops );
	}
	


	/*  Display Widget */
	
	function widget( $args, $instance ) {
		extract( $args );

		// Get the inputs
		$sr_title = apply_filters('widget_title', $instance['title'] );
		$sr_dribbble_name = $instance['dribbblename'];
		$sr_dribbble_amount = $instance['dribbbleitems'];
		if ($sr_dribbble_amount > 30) { $sr_dribbble_amount = 9; }
		
		// Display the WidgetBefore settings
		echo $before_widget;
		
		
		// Display the title
		if ( $sr_title ) { echo $before_title . $sr_title . $after_title; }
			
			
		$id = rand(0,999);
		/* Display Latest dribbble */
		?>
			<script type="text/javascript">
				jQuery.getJSON("http://api.dribbble.com/players/<?php echo $sr_dribbble_name; ?>/shots?callback=?", function(data) {

	    		jQuery.each(data.shots, function(index, shot) {
	    			if (index < <?php echo $sr_dribbble_amount; ?>){    		
	    				jQuery(".dribbble-list").append("<li><a href='" + shot.image_url + "' target='_blank'><img src='" + shot.image_teaser_url + "' /></a></li>");
					}
	    		});

	    	});
  			</script>
            <div class="dribbble-widget">
            	<ul class="dribbble-list">
                </ul>
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
		$instance['dribbblename'] = strip_tags( $new_instance['dribbblename'] );
		$instance['dribbbleitems'] = strip_tags( $new_instance['dribbbleitems'] );

		return $instance;
	}
	
	/* Widget settings */
	
		 
	function form( $instance ) {

		// Set up default settings
		$defaults = array(
		'title' => 'My dribbble',
		'dribbblename' => 'spabrice',
		'dribbbleitems' => '6'
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
		
		?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'sr_xone_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- dribbble ID: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'dribbblename' ); ?>"><?php _e('Dribbble Name', 'sr_xone_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'dribbblename' ); ?>" name="<?php echo $this->get_field_name( 'dribbblename' ); ?>" value="<?php echo $instance['dribbblename']; ?>" />
		</p>
        
        <!-- dribbble Items: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'dribbbleitems' ); ?>"><?php _e('Dribbble Items', 'sr_xone_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'dribbbleitems' ); ?>" name="<?php echo $this->get_field_name( 'dribbbleitems' ); ?>" value="<?php echo $instance['dribbbleitems']; ?>" />
            <small><?php _e('Choose a number of items (max = 30)', 'sr_xone_theme'); ?></small>
		</p>
			
		
		
	<?php
	}
}

?>