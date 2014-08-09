<?php

/*-----------------------------------------------------------------------------------
	
	Plugin Name: Flickr Widget 
	Description: Display your flickr images  
	Version: 1.0  
	Author: SpabRice  
	Author URI: http://www.spab-rice.com  
	
-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/*	Register Flickr Widget & enqueu scripts
/*-----------------------------------------------------------------------------------*/

add_action( 'widgets_init', 'sr_flickr_widget' );

function sr_flickr_widget() {
	register_widget( 'sr_flickr_widget' );
}



/*-----------------------------------------------------------------------------------*/
/*	Widget Class
/*-----------------------------------------------------------------------------------*/

class sr_flickr_widget extends WP_Widget {

	/*  Widget setup  */
	
	function sr_flickr_widget() {
	
		// Widget settings
		$widget_ops = array( 'classname' => 'sr_flickr_widget', 'description' => __('A simple flickr Widget to show your flickr images.', 'sr_xone_theme') );
		$control_ops = array( 'width' => 200, 'height' => 350, 'id_base', 'sr-flickr-widget' );

		// Create widget
		$this->WP_Widget( 'sr_flickr_widget', __('SR - Flickr','sr_xone_theme'), $widget_ops, $control_ops );
	}
	


	/*  Display Widget */
	
	function widget( $args, $instance ) {
		extract( $args );

		// Get the inputs
		$sr_title = apply_filters('widget_title', $instance['title'] );
		$sr_flickr_id = $instance['flickrid'];
		$sr_flickr_amount = $instance['flickritems'];
		if ($sr_flickr_amount > 30) { $sr_flickr_amount = 30; }
		
		// Display the WidgetBefore settings
		echo $before_widget;
		
		
		// Display the title
		if ( $sr_title ) { echo $before_title . $sr_title . $after_title; }
			
			
		$id = rand(0,999);
		/* Display Latest Flickr */
		?>
			<script type="text/javascript">
				jQuery(document).ready(function($){
				  	$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?ids=<?php echo $sr_flickr_id; ?>&lang=en-us&format=json&jsoncallback=?", function(data){
					  $.each(data.items, function(index, item){
						if (index < <?php echo $sr_flickr_amount; ?>){
							$("<img/>").attr("src", item.media.m).appendTo(".flickr<?php echo $id; ?>")
							  .wrap("<li><a href='" + item.link + "' target='_blank'></a></li>");
						}
					  });
					});
				});
  			</script>
            <div class="flickr-widget">
            	<ul class="flickr-list flickr<?php echo $id; ?>">
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
		$instance['flickrid'] = strip_tags( $new_instance['flickrid'] );
		$instance['flickritems'] = strip_tags( $new_instance['flickritems'] );

		return $instance;
	}
	
	/* Widget settings */
	
		 
	function form( $instance ) {

		// Set up default settings
		$defaults = array(
		'title' => 'My Flickr',
		'flickrid' => '',
		'flickritems' => '6'
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
		
		?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'sr_xone_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<!-- Flickr ID: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'flickrid' ); ?>"><?php _e('Flickr ID', 'sr_xone_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'flickrid' ); ?>" name="<?php echo $this->get_field_name( 'flickrid' ); ?>" value="<?php echo $instance['flickrid']; ?>" />
            <small>Get your ID (<a href="http://idgettr.com/">idgettr</a>)</small>
		</p>
        
        <!-- Flickr Items: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'flickritems' ); ?>"><?php _e('Flickr Items', 'sr_xone_theme') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'flickritems' ); ?>" name="<?php echo $this->get_field_name( 'flickritems' ); ?>" value="<?php echo $instance['flickritems']; ?>" />
            <small><?php _e('Choose a number of items (max = 30)', 'sr_xone_theme'); ?></small>
		</p>
			
		
		
	<?php
	}
}

?>