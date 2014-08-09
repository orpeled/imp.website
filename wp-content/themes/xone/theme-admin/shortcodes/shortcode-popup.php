<?php

$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];

// Access WordPress
require_once( $path_to_wp . '/wp-load.php' );



$sc = 'sc';
/*-----------------------------------------------------------------------------------*/
/*	Sections & Options
/*-----------------------------------------------------------------------------------*/

$options = array(
	
	array( "name" => __("Accordion", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "accordion",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => "Group",
				   "id" => $sc."_accordiongroup",
				   "type" => "groupstart"
				  ),
							
				array( "name" => __("Open", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_accordionopen",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"No", 
									"value" => "no"),			 	
							array(	"name" =>"Yes", 
									"value" => "yes")
							)
					  ),
				
				array( "name" => __("Title", 'sr_xone_theme'),
				   	   "desc" => "",
					   "id" => $sc."_accordiontitle",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_accordiontext",
					   "type" => "textarea"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_accordiongroup",
				   "type" => "groupend"
				  ),
			
			array( "name" => __("Add Accordion", 'sr_xone_theme'),
				   "id" => $sc."_accordionduplicater",
				   "group" => $sc."_accordiongroup",
				   "type" => "grouduplicater"
				  ),

	array ( "name" => __("Accordion", 'sr_xone_theme'),
		   	"id" => "accordion",
		    "type" => "sectionend"),
	
	
	
	array( "name" => __("Alerts", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "alert",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Alert Type/Color", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_alertcolor",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Info / Blue", 
							  	"value" => "info"),
						array(	"name" =>"Note / Yellow", 
							  	"value" => "note"),
						array(	"name" =>"Confirm / Green", 
							  	"value" => "confirm"),
						array(	"name" =>"Error / Red", 
							  	"value" => "error")
						)
				  ),
	
			array( "name" => __("Alert Text", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_alerttext",
				   "type" => "textarea"
				  ),
						
	
	array( "name" => __("Alerts", 'sr_xone_theme'),
		   "id" => "alert",
		    "type" => "sectionend"),
	
	
	/*array( "name" => __("Animation", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "animation",
		   "type" => "sectionstart"
		  ),
		  
		  array( "name" => __("Type of animation", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_animationtype",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Fade In", 
							  	"value" => "fade"),
						array(	"name" =>"From Top", 
							  	"value" => "fromtop"),
						array(	"name" =>"From Right", 
							  	"value" => "fromright"),
						array(	"name" =>"From Bottom", 
							  	"value" => "frombottom"),
						array(	"name" =>"From Left", 
							  	"value" => "fromleft"),
						array(	"name" =>"Zoom In", 
							  	"value" => "zoomin"),
						array(	"name" =>"Zoom Out", 
							  	"value" => "zoomout")
						)
				  ),
				  
				array( "name" => __("Delay (optional)", 'sr_xone_theme'),
				   	   "desc" => "Enter a delay value if wanted",
					   "id" => $sc."_animationdelay",
					   "type" => "text"
					  ),	
		  
	array( "name" => __("Animation", 'sr_xone_theme'),
		   "id" => "animation",
		    "type" => "sectionend"),*/
	
	
	
	array( "name" => __("Buttons", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "buttons",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Button Size", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_buttonsize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" => __("Mini", 'sr_xone_theme'), 
							  	"value" => "mini-button"),
						array(	"name" => __("Small", 'sr_xone_theme'), 
							  	"value" => "small-button"),		
						array(	"name" => __("Medium", 'sr_xone_theme'), 
							  	"value"=> "medium-button"),
						array(	"name" => __("Big", 'sr_xone_theme'), 
							  	"value"=> "big-button")
						)
				  ),
			
			array( "name" => __("Button Color", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_buttoncolor",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" => __("Grey Bordered to Dark", 'sr_xone_theme'), 
							  	"value" => "sr-button1"),
						array(	"name" => __("Dark Bordered to Dark", 'sr_xone_theme'), 
							  	"value" => "sr-button2"),
						array(	"name" => __("Color Bordered to Color", 'sr_xone_theme'), 
							  	"value" => "sr-button3"),
						array(	"name" => __("White Bordered to White (for dark background)", 'sr_xone_theme'), 
							  	"value" => "sr-button4"),
						array(	"name" => __("Full Color", 'sr_xone_theme'), 
							  	"value" => "sr-button5"),
						array(	"name" => __("Full Dark", 'sr_xone_theme'), 
							  	"value" => "sr-button6"),
						array(	"name" => __("Full White (for dark background)", 'sr_xone_theme'), 
							  	"value" => "sr-button7")
						)
				  ),
				  
			array( "name" => __("Button type", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_buttontype",
				   "type" => "selectbox-hiding",
				   "option" => array( 
						array(	"name" => __("Text Button", 'sr_xone_theme'), 
							  	"value" => "text"),
						array(	"name" => __("Icon Button", 'sr_xone_theme'), 
							  	"value"=> "icon")		
						)
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttontype",
				   "hiding" => "text",
				   "type" => "hidinggroupstart"
				  ),
		
				array( "name" => __("Button Text", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_button_text_text",
					   "type" => "text"
					  ),	  					  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttontype",
				   "hiding" => "text",
				   "type" => "hidinggroupend"
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttontype",
				   "hiding" => "icon",
				   "type" => "hidinggroupstart"
				  ),
		
				array( "name" => __("Choose Icon", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_button_icon_icon",
					   "type" => "icons"
					  ),	  					  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttontype",
				   "hiding" => "icon",
				   "type" => "hidinggroupend"
				  ),
				  
			array( "name" => __("Go To", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_buttongoto",
				   "type" => "selectbox-hiding",
				   "option" => array( 
						array(	"name" => __("URL", 'sr_xone_theme'), 
							  	"value" => "url"),
						array(	"name" => __("Scroll to section", 'sr_xone_theme'), 
							  	"value"=> "scrollto"),
						array(	"name" => __("Open Lightbox Video", 'sr_xone_theme'), 
							  	"value"=> "video")		
						)
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttongoto",
				   "hiding" => "url",
				   "type" => "hidinggroupstart"
				  ),
		
				array( "name" => __("Button URL", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_button_url_url",
					   "type" => "text"
					  ),	  
				  
				array( "name" => __("Button Target", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_button_url_target",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" => __("Same page", 'sr_xone_theme'), 
									"value" => "_self"),
							array(	"name" => __("New Page", 'sr_xone_theme'), 
									"value"=> "_blank")		
							)
					  ),		  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttongoto",
				   "hiding" => "color",
				   "type" => "hidinggroupend"
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttongoto",
				   "hiding" => "scrollto",
				   "type" => "hidinggroupstart"
				  ),
				  
				array( "name" => __("Scroll to Section", 'sr_xone_theme'),
					   "desc" => "Make sure that this section is inlcuded in the same page.",
					   "id" => $sc."_button_scroll_section",
					   "type" => "scrolltosection"
					  ),		  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttongoto",
				   "hiding" => "scrollto",
				   "type" => "hidinggroupend"
				  ),
				  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttongoto",
				   "hiding" => "video",
				   "type" => "hidinggroupstart"
				  ),
				  
				array( "name" => __("Video URL", 'sr_xone_theme'),
					   "desc" => "Make sure to enter the url which is provided on the embedded iframe code on 'src'<br><br>Example Vimeo: http://player.vimeo.com/video/VIMEOID<br><br>Example Vimeo: http://www.youtube.com/embed/YOUTUBEID",
					   "id" => $sc."_button_video_video",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Video Width", 'sr_xone_theme'),
					   "desc" => "Enter the video width",
					   "id" => $sc."_button_video_width",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Video Height", 'sr_xone_theme'),
					   "desc" => "Enter the video height",
					   "id" => $sc."_button_video_height",
					   "type" => "text"
					  ),		  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_buttongoto",
				   "hiding" => "video",
				   "type" => "hidinggroupend"
				  ),
			
	
	array( "name" => __("Buttons", 'sr_xone_theme'),
		   	"id" => "buttons",
		    "type" => "sectionend"),
	
	
	
	
	
	array( "name" => __("Columns", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "columns",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Column Layout", 'sr_xone_theme'),
				   "desc" => __("Choose your layout for the columns you want include.", 'sr_xone_theme'),
				   "id" => $sc."_columnlayout",
				   "type" => "radiocustom",
				   "option" => array( 
						array(	"name" =>"Layout 2 x one_half", 
							  	"value" => "layout_onehalf-onehalf"),
						array( 	"name"=>"Layout one_third + two_third", 
							  	"value"=> "layout_onethird-twothird"),
						array( 	"name"=>"Layout two_third + one_third", 
							  	"value"=> "layout_twothird-onethird"),
						array(	"name" =>"Layout 3 x one_third", 
							  	"value"=> "layout_onethird-onethird-onethird"),
						array(	"name" =>"Layout one_half + 2 x one_fourth", 
							  	"value"=> "layout_onehalf-onefourth-onefourth"),
						array(	"name" =>"Layout 4 x one_fourth", 
							  	"value"=> "layout_onefourth-onefourth-onefourth-onefourth"),
						array(	"name" =>"Layout 5 x one_fifth", 
							  	"value"=> "layout_onefifth-onefifth-onefifth-onefifth-onefifth")
						)
				  ),
				  
			array( "name" => "Group",
				   "id" => $sc."_group_column_one",
				   "type" => "groupstart"
				  ),
	
				array( "name" => __("Column 1", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_column_one",
					   "type" => "textarea"
					  ),
					  
				array( "name" => __("BG Column 1", 'sr_xone_theme'),
					   "desc" => __("Leave empty if no background wanted", 'sr_xone_theme'),
					   "id" => $sc."_column_one_bg",
					   "type" => "color"
					  ),
					  
			array( "name" => "Group END",
				   "id" => $sc."_group_column_one",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_group_column_two",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Column 2", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_column_two",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("BG Column 2", 'sr_xone_theme'),
					   "desc" => __("Leave empty if no background wanted", 'sr_xone_theme'),
					   "id" => $sc."_column_two_bg",
					   "type" => "color"
					  ),
			
			array( "name" => "Group END",
				   "id" => $sc."_group_column_two",
				   "type" => "groupend"
				  ),
				  
			array( "name" => "Group",
				   "id" => $sc."_group_column_three",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Column 3", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_column_three",
					   "type" => "textarea"
					  ),
					  
				array( "name" => __("BG Column 3", 'sr_xone_theme'),
					   "desc" => __("Leave empty if no background wanted", 'sr_xone_theme'),
					   "id" => $sc."_column_three_bg",
					   "type" => "color"
					  ),
					  
			array( "name" => "Group END",
				   "id" => $sc."_group_column_three",
				   "type" => "groupend"
				  ),
				  
			array( "name" => "Group",
				   "id" => $sc."_group_column_four",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Column 4", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_column_four",
					   "type" => "textarea"
					  ),
					  
				array( "name" => __("BG Column 4", 'sr_xone_theme'),
					   "desc" => __("Leave empty if no background wanted", 'sr_xone_theme'),
					   "id" => $sc."_column_four_bg",
					   "type" => "color"
					  ),
					  
			array( "name" => "Group END",
				   "id" => $sc."_group_column_four",
				   "type" => "groupend"
				  ),
				  
			array( "name" => "Group",
				   "id" => $sc."_group_column_five",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Column 5", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_column_five",
					   "type" => "textarea"
					  ),
					  
				array( "name" => __("BG Column 5", 'sr_xone_theme'),
					   "desc" => __("Leave empty if no background wanted", 'sr_xone_theme'),
					   "id" => $sc."_column_five_bg",
					   "type" => "color"
					  ),
				  
			array( "name" => "Group END",
				   "id" => $sc."_group_column_three",
				   "type" => "groupend"
				  ),
				  
			array( "name" => __("Animation", 'sr_xone_theme'),
				   "desc" => "Do you want to add an animation effect?",
				   "id" => $sc."_columnanimation",
				   "type" => "selectbox-hiding",
				   "option" => array( 
						array(	"name" => __("No animation", 'sr_xone_theme'), 
							  	"value" => "false"),
						array(	"name" => __("Add animation for each column", 'sr_xone_theme'), 
							  	"value" => "column"),
						array(	"name" => __("Add animation for whole row", 'sr_xone_theme'), 
							  	"value"=> "row")		
						)
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_columnanimation",
				   "hiding" => "column",
				   "type" => "hidinggroupstart"
				  ),
		
				array( "name" => __("Type of animation", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_columnanimationtype",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"Fade In", 
									"value" => "fade"),
							array(	"name" =>"From Top", 
									"value" => "fromtop"),
							array(	"name" =>"From Right", 
									"value" => "fromright"),
							array(	"name" =>"From Bottom", 
									"value" => "frombottom"),
							array(	"name" =>"From Left", 
									"value" => "fromleft"),
							array(	"name" =>"Zoom In", 
									"value" => "zoomin"),
							array(	"name" =>"Zoom Out", 
									"value" => "zoomout")
							)
					  ),
				  
				array( "name" => __("Delay (optional)", 'sr_xone_theme'),
				   	   "desc" => "Enter a delay value if wanted",
					   "id" => $sc."_columnanimationdelay",
					   "type" => "text"
					  ),	  					  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_columnanimation",
				   "hiding" => "column",
				   "type" => "hidinggroupend"
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_columnanimation",
				   "hiding" => "row",
				   "type" => "hidinggroupstart"
				  ),
		
				array( "name" => __("Type of animation", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_rowanimationtype",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"Fade In", 
									"value" => "fade"),
							array(	"name" =>"From Top", 
									"value" => "fromtop"),
							array(	"name" =>"From Right", 
									"value" => "fromright"),
							array(	"name" =>"From Bottom", 
									"value" => "frombottom"),
							array(	"name" =>"From Left", 
									"value" => "fromleft"),
							array(	"name" =>"Zoom In", 
									"value" => "zoomin"),
							array(	"name" =>"Zoom Out", 
									"value" => "zoomout")
							)
					  ),
				  
				array( "name" => __("Delay (optional)", 'sr_xone_theme'),
				   	   "desc" => "Enter a delay value if wanted",
					   "id" => $sc."_rowanimationdelay",
					   "type" => "text"
					  ),	  					  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_columnanimation",
				   "hiding" => "row",
				   "type" => "hidinggroupend"
				  ),
	
	array( "name" => __("Columns", 'sr_xone_theme'),
		   	"id" => "columns",
		    "type" => "sectionend"),
			
			
	
	
	
	array( "name" => __("Contact Form", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "contact",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("Recipient Email", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_contactsendto",
				   "type" => "text"
				  ),
			
			array( "name" => __("Subject", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_contactsubject",
				   "type" => "text"
				  ),
			
			array( "name" => __("Submit Button", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_contactsubmit",
				   "type" => "text"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_contactgroup",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Fieltype", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_contacttype",
					   "type" => "selectbox",
					   "option" => array( 
						array(	"name" => __("Textfield", 'sr_xone_theme'), 
							  	"value" => "textfield"),
						array(	"name" => __("Textarea", 'sr_xone_theme'), 
							  	"value"=> "textarea")
						)
					  ),
				
				array( "name" => __("Fieldname / Label", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_contactname",
					   "type" => "text"
					  ),
				
				array( "name" => __("Slugname", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_contactslug",
					   "type" => "text"
					  ),
				
				array( "name" => __("Required field?", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_contactreq",
					   "type" => "selectbox",
					   "option" => array( 
						array(	"name" =>"Yes", 
							  	"value" => "yes"),
						array( 	"name"=>"No", 
							  	"value"=> "no")
						)
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_contactgroup",
				   "type" => "groupend"
				  ),
			
			array( "name" => __("Add FIeld", 'sr_xone_theme'),
				   "id" => $sc."_contactduplicater",
				   "group" => $sc."_contactgroup",
				   "type" => "grouduplicater"
				  ),

	array( "name" => __("Contact Form", 'sr_xone_theme'),
		   	"id" => "contact",
		    "type" => "sectionend"),
			
			
	
	
	array( "name" => __("Counter", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "counter",
		   "type" => "sectionstart"
		  ),
		  
		  	array( "name" => __("Count From", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_countfrom",
				   "type" => "text"
				  ),
			
			array( "name" => __("Count To", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_countto",
				   "type" => "text"
				  ),
				  
			array( "name" => __("Speed", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_countspeed",
				   "type" => "text"
				  ),
				  
			array( "name" => __("Subline", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_countsub",
				   "type" => "text"
				  ),
		  
	array( "name" => __("Counter", 'sr_xone_theme'),
		   	"id" => "counter",
		    "type" => "sectionend"),
			
			
	
	
	array( "name" => __("Google Map", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "map",
		   "type" => "sectionstart"
		  ),
						
			array( "name" => __("Latitude & Longitude", 'sr_xone_theme'),
				   "desc" => __("Enter the google map latitude & longitude using this tool:<br>http://itouchmap.com/latlong.html", 'sr_xone_theme'),
				   "id" => $sc."_maplatlong",
				   "type" => "text"
				  ),
			
			array( "name" => __("Infotext", 'sr_xone_theme'),
				   "desc" => __("This Text will be displayed on the Google Map", 'sr_xone_theme'),
				   "id" => $sc."_maptext",
				   "type" => "textarea"
				  ),
			
			array( "name" => __("Pin Icon", 'sr_xone_theme'),
				   "desc" => __("choose a custom pin icon", 'sr_xone_theme'),
				   "id" => $sc."_mapicon",
				   "type" => "image"
				  ),
			
			array( "name" => __("Height", 'sr_xone_theme'),
				   "desc" => __("Default is 400.  Width is 100% of parent container.", 'sr_xone_theme'),
				   "id" => $sc."_mapheight",
				   "type" => "text"
				  ),
			
			/*array( "name" => __("Map ID", 'sr_xone_theme'),
				   "desc" => __("This is important if you want to use more maps in the same page.", 'sr_xone_theme'),
				   "id" => $sc."_mapid",
				   "type" => "text"
				  ),*/
	
	array( "name" => __("Google map", 'sr_xone_theme'),
		   "id" => "map",
		    "type" => "sectionend"),
	
	
	
	
	array( "name" => __("Divider", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "devider",
		   "type" => "sectionstart"
		  ),
		  
		  array(  "name" => __("Size", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_devidersize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Fullwidth", 
								"value" => "full"),			 	
						array(	"name" =>"Medium (220px)", 
								"value" => "medium"),
						array(	"name" =>"Small (100px)", 
								"value" => "small"),					 	
						array(	"name" =>"Mini (40px)", 
								"value" => "mini")
						)
				  ),
				  
		  array(  "name" => __("Thickness", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_deviderthickness",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"1px", 
								"value" => "1px"),			 	
						array(	"name" =>"2px", 
								"value" => "2px"),			 	
						array(	"name" =>"3px", 
								"value" => "3px"),
						array(	"name" =>"4px", 
								"value" => "4px")
						)
				  ),
		  
	array( "name" => __("Divider", 'sr_xone_theme'),
		   "id" => "devider",
		   "type" => "sectionend"),
	
	
	
	array( "name" => __("Horizontal Section", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "horizontalsection",
		   "type" => "sectionstart"
		  ),	
		  
		array( "name" => __("Background", 'sr_xone_theme'),
			   "desc" => '',
			   "id" => $sc."_horizontalsectionbg",
			   "type" => "selectbox-hiding",
			   "option" => array( 
					array(	"name" =>__("Color", 'sr_xone_theme'), 
							"value" => "color"),			 	
					array(	"name" => __("Image", 'sr_xone_theme'), 
							"value"=> "image"),
					array(	"name" => __("Video", 'sr_xone_theme'), 
							"value"=> "video")
					)
			  ),  
	
		array( "name" => "Hidinggroup",
				   "id" => $sc."_horizontalsectionbg",
				   "hiding" => "color",
				   "type" => "hidinggroupstart"
				  ),
				  
				array( "name" => __("Background Color", 'sr_xone_theme'),
					   "desc" => 'Choose a background color for this section',
					   "id" => $sc."_horizontalsection_bgcolor_color",
					   "type" => "color"
					  ),		  
				  
		array( "name" => "Hidinggroup",
				   "id" => $sc."_horizontalsectiongroup",
				   "hiding" => "color",
				   "type" => "hidinggroupend"
				  ),
				  
		array( "name" => "Hidinggroup",
				   "id" => $sc."_horizontalsectionbg",
				   "hiding" => "image",
				   "type" => "hidinggroupstart"
				  ),
				  
				array( "name" => __("Background Image", 'sr_xone_theme'),
					   "desc" => 'Choose a background color for this section',
					   "id" => $sc."_horizontalsection_bgimage_image",
				   		"type" => "image"
					  ),	
					  
				array( "name" => __("Parallax Effect", 'sr_xone_theme'),
					   "desc" => '',
					   "id" => $sc."_horizontalsection_bgimage_parallax",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>__("Yes", 'sr_xone_theme'), 
									"value" => "true"),			 	
							array(	"name" => __("No", 'sr_xone_theme'), 
									"value"=> "false")
							)
					  ),
				
				array( "name" => __("Overlay Color", 'sr_xone_theme'),
					   "desc" => "Leave it empty if you don't want any overlay color",
					   "id" => $sc."_horizontalsection_bgimage_overlaycolor",
					   "type" => "color"
					  ),
					  
				array( "name" => __("Overlay Opacity", 'sr_xone_theme'),
					   "desc" => '',
					   "id" => $sc."_horizontalsection_bgimage_opacity",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>__("0.1", 'sr_xone_theme'), 
									"value" => "1"),			 	
							array(	"name" => __("0.2", 'sr_xone_theme'), 
									"value"=> "2"),
							array(	"name" => __("0.3", 'sr_xone_theme'), 
									"value"=> "3"),
							array(	"name" =>__("0.4", 'sr_xone_theme'), 
									"value" => "4"),			 	
							array(	"name" => __("0.5", 'sr_xone_theme'), 
									"value"=> "5"),
							array(	"name" => __("0.6", 'sr_xone_theme'), 
									"value"=> "6"),
							array(	"name" => __("0.7", 'sr_xone_theme'), 
									"value"=> "7"),
							array(	"name" => __("0.8", 'sr_xone_theme'), 
									"value"=> "8"),
							array(	"name" =>__("0.9", 'sr_xone_theme'), 
									"value" => "9")
							)
					  ),  
				  
		array( "name" => "Hidinggroup",
				   "id" => $sc."_horizontalsectiongroup",
				   "hiding" => "image",
				   "type" => "hidinggroupend"
				  ),
				  
		array( "name" => "Hidinggroup",
				   "id" => $sc."_horizontalsectionbg",
				   "hiding" => "video",
				   "type" => "hidinggroupstart"
				  ),
				  
				array( "name" => __("MP4 file url", 'sr_xone_theme'),
					   "desc" => 'The url to the MP4 file',
					   "id" => $sc."_horizontalsection_video_mp4",
				   		"type" => "text"
					  ),
					  
				array( "name" => __("WEBM file url", 'sr_xone_theme'),
					   "desc" => 'The url to the WEBM file',
					   "id" => $sc."_horizontalsection_video_webm",
				   		"type" => "text"
					  ),
					  
				array( "name" => __("OGV file url", 'sr_xone_theme'),
					   "desc" => 'The url to the OGV file',
					   "id" => $sc."_horizontalsection_video_ogv",
				   		"type" => "text"
					  ),
					  
				array( "name" => __("Video Width", 'sr_xone_theme'),
					   "desc" => 'Please enter the width of the video file',
					   "id" => $sc."_horizontalsection_video_width",
				   		"type" => "text"
					  ),
					  
				array( "name" => __("Video Height", 'sr_xone_theme'),
					   "desc" => 'Please enter the height of the video file',
					   "id" => $sc."_horizontalsection_video_height",
				   		"type" => "text"
					  ),
					  
				array( "name" => __("Poster", 'sr_xone_theme'),
					   "desc" => "This image will be shown for devices which don't support background video. Please make sure that this image has the same height than the video itself",
					   "id" => $sc."_horizontalsection_video_poster",
				   		"type" => "image"
					  ),	
					  
				array( "name" => __("Parallax Effect", 'sr_xone_theme'),
					   "desc" => '',
					   "id" => $sc."_horizontalsection_video_parallax",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>__("Yes", 'sr_xone_theme'), 
									"value" => "true"),			 	
							array(	"name" => __("No", 'sr_xone_theme'), 
									"value"=> "false")
							)
					  ),
				
				array( "name" => __("Overlay Color", 'sr_xone_theme'),
					   "desc" => "Leave it empty if you don't want any overlay color",
					   "id" => $sc."_horizontalsection_video_overlaycolor",
					   "type" => "color"
					  ),
					  
				array( "name" => __("Overlay Opacity", 'sr_xone_theme'),
					   "desc" => '',
					   "id" => $sc."_horizontalsection_video_opacity",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>__("0.1", 'sr_xone_theme'), 
									"value" => "1"),			 	
							array(	"name" => __("0.2", 'sr_xone_theme'), 
									"value"=> "2"),
							array(	"name" => __("0.3", 'sr_xone_theme'), 
									"value"=> "3"),
							array(	"name" =>__("0.4", 'sr_xone_theme'), 
									"value" => "4"),			 	
							array(	"name" => __("0.5", 'sr_xone_theme'), 
									"value"=> "5"),
							array(	"name" => __("0.6", 'sr_xone_theme'), 
									"value"=> "6"),
							array(	"name" => __("0.7", 'sr_xone_theme'), 
									"value"=> "7"),
							array(	"name" => __("0.8", 'sr_xone_theme'), 
									"value"=> "8"),
							array(	"name" =>__("0.9", 'sr_xone_theme'), 
									"value" => "9")
							)
					  ),  
				  
		array( "name" => "Hidinggroup",
				   "id" => $sc."_horizontalsectiongroup",
				   "hiding" => "video",
				   "type" => "hidinggroupend"
				  ),
		
				  
		array( "name" => __("Text Color", 'sr_xone_theme'),
			   "desc" => '',
			   "id" => $sc."_horizontalsectiontextcolor",
			   "type" => "selectbox",
			   "option" => array( 
					array(	"name" =>__("Light", 'sr_xone_theme'), 
							"value" => "text-light"),			 	
					array(	"name" => __("Dark", 'sr_xone_theme'), 
							"value"=> "text-dark")
					)
			  ),
				  
		array( "name" => __("Padding Top", 'sr_xone_theme'),
			   "desc" => 'Don\'nt write "px" Example = 100',
			   "id" => $sc."_horizontalsectionpdtop",
			   "type" => "text",
			  ),
				  
		array( "name" => __("Padding Bottom", 'sr_xone_theme'),
			   "desc" => 'Don\'nt write "px" Example = 100',
			   "id" => $sc."_horizontalsectionpdbottom",
			   "type" => "text",
			  ),				  
				
	array( "name" => __("Horizontal Section", 'sr_xone_theme'),
		   "id" => "horizontalsection",
		   "type" => "sectionend"
		  ),
	
	
	array( "name" => __("Icon", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "icon",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("Size", 'sr_xone_theme'),
				   "desc" => '',
				   "id" => $sc."_iconsize",
				   "type" => "selectbox",
				   "option" => array(			 	
						array(	"name" =>"Normal", 
								"value" => "normal"),
						array(	"name" =>"2x", 
								"value" => "2x"),
						array(	"name" =>"3x", 
								"value" => "3x"),
						array(	"name" =>"4x", 
								"value" => "4x")
						)
				  ),
			
			array( 	"name" => __("Color", 'sr_xone_theme'),
					"desc" => "",
					"id" => $sc."_iconcolor",
					"type" => "color"
				  	),
			
			array( "name" => __("Choose Icon", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_iconfont",
				   "type" => "icons"
				  ),
	
	array( "name" => __("Icon", 'sr_xone_theme'),
		   "id" => "icon",
		    "type" => "sectionend"),
			
			
	
	
	
	array( "name" => __("Icon Box", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "iconbox",
		   "type" => "sectionstart"
		  ),
		  
		  	array( 	"name" => __("Icon Color", 'sr_xone_theme'),
					"desc" => "",
					"id" => $sc."_iconboxcolor",
					"type" => "color"
				  	),
					
			array( "name" => __("Icon Position", 'sr_xone_theme'),
					"desc" => "",
					"id" => $sc."_iconboxposition",
					"type" => "selectbox",
					"option" => array(			 	
						array(	"name" =>"Left", 
								"value" => "left"),
						array(	"name" =>"Right", 
								"value" => "right")
						)
				  ),
			
			array( "name" => __("Choose Icon", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_iconboxfont",
				   "type" => "icons"
				  ),
			
			array( "name" => __("Headline", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_iconboxheadline",
				   "type" => "text"
				  ),
				  
			array( "name" => __("Content", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_iconboxtext",
				   "type" => "textarea"
				  ),
			
			array( "name" => __("Type of animation", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_iconboxanimation",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"No animation", 
							  	"value" => "false"),
						array(	"name" =>"Fade In", 
							  	"value" => "fade"),
						array(	"name" =>"From Top", 
							  	"value" => "fromtop"),
						array(	"name" =>"From Right", 
							  	"value" => "fromright"),
						array(	"name" =>"From Bottom", 
							  	"value" => "frombottom"),
						array(	"name" =>"From Left", 
							  	"value" => "fromleft"),
						array(	"name" =>"Zoom In", 
							  	"value" => "zoomin"),
						array(	"name" =>"Zoom Out", 
							  	"value" => "zoomout")
						)
				  ),
				  
			array( "name" => __("Delay (optional)", 'sr_xone_theme'),
				   "desc" => "Enter a delay value if wanted",
				   "id" => $sc."_iconboxanimationdelay",
				   "type" => "text"
				  ),
				  
			array( "name" => "",
				   "desc" => __("Make sure to add this iconbox into a column shortcode!", 'sr_xone_theme'),
				   "id" => $sc."_iconboxinfotext",
				   "type" => "infotext"
				  ),
		  
	array( "name" => __("Icon Box", 'sr_xone_theme'),
		   "id" => "iconbox",
		    "type" => "sectionend"),
			
	
	array( "name" => __("Latest News", 'sr_mova_theme'),
		   "desc" => "",
		   "id" => "latestnews",
		   "type" => "sectionstart"
		  ),
		  
		  	array( "name" => __("Type", 'sr_xone_theme'),
				   "desc" => "Masonry OR Carousel",
				   "id" => $sc."_latestnewstype",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Masonry", 
							  	"value" => "masonry"),
						array(	"name" =>"Carousel", 
							  	"value" => "carousel")
						)
				  ),
			
			array( "name" => __("Number of Posts", 'sr_mova_theme'),
				   "desc" => __("Enter a valid number", 'sr_mova_theme'),
				   "id" => $sc."_latestnewsnumber",
				   "type" => "text"
				  ),
			
			array( 	"name" => __("Category", 'sr_mova_theme'),
					"desc" => __("Choose a category", 'sr_mova_theme'),
					"id" => $sc."_latestnewscategory",
					"type" => "blogcategory"
				 ),
	
	array( "name" => __("Latest News", 'sr_mova_theme'),
		   "id" => "latestnews",
		   "type" => "sectionend"),
			
	
	array( "name" => __("Pricing Table", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "pricing",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Pricing Layout", 'sr_xone_theme'),
				   "desc" => __("Choose a layout", 'sr_xone_theme'),
				   "id" => $sc."_pricinglayout",
				   "type" => "radiocustom",
				   "option" => array( 
						array(	"name" =>"Layout 2 x one_half", 
							  	"value" => "layout_onehalf-onehalf"),
						array(	"name" =>"Layout 3 x one_third", 
							  	"value"=> "layout_onethird-onethird-onethird"),
						array(	"name" =>"Layout 4 x one_fourth", 
							  	"value"=> "layout_onefourth-onefourth-onefourth-onefourth")
						)
				  ),
	
			array( "name" => "Group",
				   "id" => $sc."_pricinggroup_one",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Name", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingname_one",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Price", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingprice_one",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Time Period", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtime_one",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Options", 'sr_xone_theme'),
					   "desc" => __("Enter the options seperated by double slash<br><strong>//</strong>", 'sr_xone_theme'),
					   "id" => $sc."_pricingoptions_one",
					   "type" => "textarea"
					  ),
					  
				array( "name" => __("Button url", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingurl_one",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Accent", 'sr_xone_theme'),
					   "desc" => __("Should this table be highlighted", 'sr_xone_theme'),
					   "id" => $sc."_pricingaccent_one",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"No", 
									"value" => "false"),
							array(	"name" =>"Yes", 
									"value" => "true")
							)
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_pricinggroup_one",
				   "type" => "groupend"
				  ),
				  
			array( "name" => "Group",
				   "id" => $sc."_pricinggroup_two",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Name", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingname_two",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Price", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingprice_two",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Time Period", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtime_two",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Options", 'sr_xone_theme'),
					   "desc" => __("Enter the options seperated by double slash<br><strong>//</strong>", 'sr_xone_theme'),
					   "id" => $sc."_pricingoptions_two",
					   "type" => "textarea"
					  ),
					  
				array( "name" => __("Button url", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingurl_two",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Accent", 'sr_xone_theme'),
					   "desc" => __("Should this table be highlighted", 'sr_xone_theme'),
					   "id" => $sc."_pricingaccent_two",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"No", 
									"value" => "false"),
							array(	"name" =>"Yes", 
									"value" => "true")
							)
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_pricinggroup_two",
				   "type" => "groupend"
				  ),
				  
			array( "name" => "Group",
				   "id" => $sc."_pricinggroup_three",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Name", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingname_three",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Price", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingprice_three",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Time Period", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtime_three",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Options", 'sr_xone_theme'),
					   "desc" => __("Enter the options seperated by double slash<br><strong>//</strong>", 'sr_xone_theme'),
					   "id" => $sc."_pricingoptions_three",
					   "type" => "textarea"
					  ),
					  
				array( "name" => __("Button url", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingurl_three",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Accent", 'sr_xone_theme'),
					   "desc" => __("Should this table be highlighted", 'sr_xone_theme'),
					   "id" => $sc."_pricingaccent_three",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"No", 
									"value" => "false"),
							array(	"name" =>"Yes", 
									"value" => "true")
							)
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_pricinggroup_three",
				   "type" => "groupend"
				  ),
				  
			array( "name" => "Group",
				   "id" => $sc."_pricinggroup_four",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Name", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingname_four",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Price", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingprice_four",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Time Period", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingtime_four",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Options", 'sr_xone_theme'),
					   "desc" => __("Enter the options seperated by double slash<br><strong>//</strong>", 'sr_xone_theme'),
					   "id" => $sc."_pricingoptions_four",
					   "type" => "textarea"
					  ),
					  
				array( "name" => __("Button url", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingurl_four",
					   "type" => "text"
					  ),
					  
				array( "name" => __("Accent", 'sr_xone_theme'),
					   "desc" => __("Should this table be highlighted", 'sr_xone_theme'),
					   "id" => $sc."_pricingaccent_four",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"No", 
									"value" => "false"),
							array(	"name" =>"Yes", 
									"value" => "true")
							)
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_pricinggroup_four",
				   "type" => "groupend"
				  ),	  
				  
			array( "name" => __("Animation", 'sr_xone_theme'),
				   "desc" => "Do you want to add an animation effect?",
				   "id" => $sc."_pricinganimation",
				   "type" => "selectbox-hiding",
				   "option" => array( 
						array(	"name" => __("No animation", 'sr_xone_theme'), 
							  	"value" => "false"),
						array(	"name" => __("Add animation for each Pricing Table", 'sr_xone_theme'), 
							  	"value" => "column"),
						array(	"name" => __("Add animation for whole Pricing row", 'sr_xone_theme'), 
							  	"value"=> "row")		
						)
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_pricinganimation",
				   "hiding" => "column",
				   "type" => "hidinggroupstart"
				  ),
		
				array( "name" => __("Type of animation", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricinganimationtype",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"Fade In", 
									"value" => "fade"),
							array(	"name" =>"From Top", 
									"value" => "fromtop"),
							array(	"name" =>"From Right", 
									"value" => "fromright"),
							array(	"name" =>"From Bottom", 
									"value" => "frombottom"),
							array(	"name" =>"From Left", 
									"value" => "fromleft"),
							array(	"name" =>"Zoom In", 
									"value" => "zoomin"),
							array(	"name" =>"Zoom Out", 
									"value" => "zoomout")
							)
					  ),
				  
				array( "name" => __("Delay (optional)", 'sr_xone_theme'),
				   	   "desc" => "Enter a delay value if wanted",
					   "id" => $sc."_pricinganimationdelay",
					   "type" => "text"
					  ),	  					  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_pricinganimation",
				   "hiding" => "column",
				   "type" => "hidinggroupend"
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_pricinganimation",
				   "hiding" => "row",
				   "type" => "hidinggroupstart"
				  ),
		
				array( "name" => __("Type of animation", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_pricingrowanimationtype",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"Fade In", 
									"value" => "fade"),
							array(	"name" =>"From Top", 
									"value" => "fromtop"),
							array(	"name" =>"From Right", 
									"value" => "fromright"),
							array(	"name" =>"From Bottom", 
									"value" => "frombottom"),
							array(	"name" =>"From Left", 
									"value" => "fromleft"),
							array(	"name" =>"Zoom In", 
									"value" => "zoomin"),
							array(	"name" =>"Zoom Out", 
									"value" => "zoomout")
							)
					  ),
				  
				array( "name" => __("Delay (optional)", 'sr_xone_theme'),
				   	   "desc" => "Enter a delay value if wanted",
					   "id" => $sc."_pricingrowanimationdelay",
					   "type" => "text"
					  ),	  					  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_pricinganimation",
				   "hiding" => "row",
				   "type" => "hidinggroupend"
				  ),
	
	array( "name" => __("Pricing Table", 'sr_xone_theme'),
		   "id" => "pricing",
		    "type" => "sectionend"),
			
			
			
	
	array( "name" => __("Quote Slider", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "quote",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => "Group",
				   "id" => $sc."_quotegroup",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Quote Name", 'sr_xone_theme'),
				   	   "desc" => "",
					   "id" => $sc."_quotename",
					   "type" => "text"
					  ),
				
				array( "name" => __("Quote Text", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_quotetext",
					   "type" => "textarea"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_testimonialgroup",
				   "type" => "groupend"
				  ),
			
			array( "name" => __("Add Testimonial", 'sr_xone_theme'),
				   "id" => $sc."_quoteduplicater",
				   "group" => $sc."_quotegroup",
				   "type" => "grouduplicater"
				  ),

	array ( "name" => __("Quote Slider", 'sr_xone_theme'),
		   	"id" => "quote",
		    "type" => "sectionend"),
	
	
	
	
	array( "name" => __("Section Title", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "sectiontitle",
		   "type" => "sectionstart"
		  ),
		  
		  	array( "name" => __("Main Title", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_sectiontitle_main",
				   "type" => "text"
				  ),
				  
			array( "name" => __("Subtitle", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_sectiontitle_sub",
				   "type" => "text"
				  ),
		  
	array( "name" => __("Section Title", 'sr_xone_theme'),
		   "id" => "sectiontitle",
		   "type" => "sectionend"),
		   
	
	
	
	array( "name" => __("Selfhosted Audio", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "selhostedaudio",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("MP3 File URL", 'sr_xone_theme'),
				   "desc" => __("The url to the mp3 file", 'sr_xone_theme'),
				   "id" => $sc."_selhostedaudiomp3",
				   "type" => "text"
				  ),
			
			array( "name" => __("OGA/OGG File URL", 'sr_xone_theme'),
				   "desc" => __("The url to the oga/ogg file", 'sr_xone_theme'),
				   "id" => $sc."_selhostedaudiooga",
				   "type" => "text"
				  ),
			
			array( "name" => __("Image (Optional)", 'sr_xone_theme'),
				   "desc" => __("Enter the url of one of your media image", 'sr_xone_theme'),
				   "id" => $sc."_selhostedaudiopic",
				   "type" => "text"
				  ),
			
			array( "name" => __("ID", 'sr_xone_theme'),
				   "desc" => __("This is important if you want to add multiple audios/videos. Use a unique value.", 'sr_xone_theme'),
				   "id" => $sc."_selhostedaudioid",
				   "type" => "text"
				  ),
	
	array( "name" => __("Selhosted Audio", 'sr_xone_theme'),
		   "id" => "selhostedaudio",
		   "type" => "sectionend"),
	
	
	
	array( "name" => __("Selfhosted Video", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "selhostedvideo",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("M4V File URL", 'sr_xone_theme'),
				   "desc" => __("The url to the m4v file", 'sr_xone_theme'),
				   "id" => $sc."_selhostedvideom4v",
				   "type" => "text"
				  ),
			
			array( "name" => __("OGA/OGG File URL", 'sr_xone_theme'),
				   "desc" => __("The url to the oga/ogg file", 'sr_xone_theme'),
				   "id" => $sc."_selhostedvideooga",
				   "type" => "text"
				  ),
			
			array( "name" => __("WEBMV File URL", 'sr_xone_theme'),
				   "desc" => __("The url to the webmv file", 'sr_xone_theme'),
				   "id" => $sc."_selhostedvideowebmv",
				   "type" => "text"
				  ),
			
			array( "name" => __("Image (Optional)", 'sr_xone_theme'),
				   "desc" => __("Choose an image", 'sr_xone_theme'),
				   "id" => $sc."_selhostedvideopic",
				   "type" => "image"
				  ),
			
			array( "name" => __("ID", 'sr_xone_theme'),
				   "desc" => __("This is important if you want to add multiple audios/videos. Use a unique value.", 'sr_xone_theme'),
				   "id" => $sc."_selhostedvideoid",
				   "type" => "text"
				  ),
	
	array( "name" => __("Selhosted Video", 'sr_xone_theme'),
		   "id" => "selhostedvideo",
		   "type" => "sectionend"),
	
	
	
	array( "name" => __("Skills", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "skills",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => "Group",
				   "id" => $sc."_skillgroup",
				   "type" => "groupstart"
				  ),
				
				array( "name" => __("Percent Amount", 'sr_xone_theme'),
				   	   "desc" => "",
					   "id" => $sc."_skillpercent",
					   "type" => "text"
					  ),
				
				array( "name" => __("Name", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_skillname",
					   "type" => "text"
					  ),
				
				array( "name" => __("Color", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_skillcolor",
					   "type" => "color"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_skillgroup",
				   "type" => "groupend"
				  ),
			
			array( "name" => __("Add Skill", 'sr_xone_theme'),
				   "id" => $sc."_skillduplicater",
				   "group" => $sc."_skillgroup",
				   "type" => "grouduplicater"
				  ),

	array ( "name" => __("Skills", 'sr_xone_theme'),
		   	"id" => "skills",
		    "type" => "sectionend"),
	
	
	array( "name" => __("Spacer / Margin", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "spacer",
		   "type" => "sectionstart"
		  ),
	
		array( "name" => __("Size", 'sr_xone_theme'),
				   "desc" => '',
				   "id" => $sc."_spacersize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Mini (15px)", 
								"value" => "mini"),
						array(	"name" =>"Small (40px)", 
								"value" => "small"),	
						array(	"name" =>"Medium (60px)", 
								"value" => "medium"),
						array(	"name" =>"Big (100px)", 
								"value" => "big")
						)
				  ),
	
	array( "name" => __("Spacer", 'sr_xone_theme'),
		   "id" => "spacer",
		   "type" => "sectionend"
		  ),	
	
	
	array( "name" => __("Tabs", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "tab",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => "Group",
				   "id" => $sc."_tabgroup",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Tab Name", 'sr_xone_theme'),
				   	   "desc" => "",
					   "id" => $sc."_tabname",
					   "type" => "text"
					  ),
				
				array( "name" => __("Tab Text", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_tabtext",
					   "type" => "textarea"
					  ),
			
			array( "name" => "Groupend",
				   "id" => $sc."_tabgroup",
				   "type" => "groupend"
				  ),
			
			array( "name" => __("Add Tab", 'sr_xone_theme'),
				   "id" => $sc."_tabduplicater",
				   "group" => $sc."_tabgroup",
				   "type" => "grouduplicater"
				  ),

	array ( "name" => __("Tabs", 'sr_xone_theme'),
		   	"id" => "tab",
		    "type" => "sectionend"),
			
	
	
	array( "name" => __("Team Member", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "team",
		   "type" => "sectionstart"
		  ),
			
			array( "name" => __("Team Layout", 'sr_xone_theme'),
				   "desc" => __("Choose a layout", 'sr_xone_theme'),
				   "id" => $sc."_teamlayout",
				   "type" => "radiocustom",
				   "option" => array( 
						array(	"name" =>"Layout 2 x one_half", 
							  	"value" => "layout_onehalf-onehalf"),
						array(	"name" =>"Layout 3 x one_third", 
							  	"value"=> "layout_onethird-onethird-onethird"),
						array(	"name" =>"Layout 4 x one_fourth", 
							  	"value"=> "layout_onefourth-onefourth-onefourth-onefourth")
						)
				  ),
	
			array( "name" => "Group",
				   "id" => $sc."_teamgroup_one",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Image", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamimage_one",
					   "type" => "image"
					  ),
				
				array( "name" => __("Name", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamname_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtitle_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtext_one",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Facebook Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamfacebook_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Twitter Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtwitter_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Google Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamgoogle_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("LinkedIn Link", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamlinkedin_one",
					   "type" => "text"
					  ),
				
				array( "name" => __("Mail Adress", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teammail_one",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_teamgroup_one",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_teamgroup_two",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Image", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamimage_two",
					   "type" => "image"
					  ),
				
				array( "name" => __("Name", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamname_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtitle_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtext_two",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Facebook Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamfacebook_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Twitter Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtwitter_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Google Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamgoogle_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("LinkedIn Link", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamlinkedin_two",
					   "type" => "text"
					  ),
				
				array( "name" => __("Mail Adress", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teammail_two",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_teamgroup_two",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_teamgroup_three",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Image", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamimage_three",
					   "type" => "image"
					  ),
			
				array( "name" => __("Name", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamname_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtitle_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtext_three",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Facebook Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamfacebook_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Twitter Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtwitter_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Google Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamgoogle_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("LinkedIn Link", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamlinkedin_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Mail Adress", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teammail_three",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_teamgroup_three",
				   "type" => "groupend"
				  ),
			
			array( "name" => "Group",
				   "id" => $sc."_teamgroup_four",
				   "type" => "groupstart"
				  ),
			
				array( "name" => __("Image", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamimage_four",
					   "type" => "image"
					  ),
			
				array( "name" => __("Name", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamname_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Title", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtitle_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Text", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtext_four",
					   "type" => "textarea"
					  ),
				
				array( "name" => __("Facebook Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamfacebook_three",
					   "type" => "text"
					  ),
				
				array( "name" => __("Twitter Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamtwitter_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Google Profile", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamgoogle_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("LinkedIn Link", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamlinkedin_four",
					   "type" => "text"
					  ),
				
				array( "name" => __("Mail Adress", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teammail_four",
					   "type" => "text"
					  ),
				
			array( "name" => "Groupend",
				   "id" => $sc."_teamgroup_four",
				   "type" => "groupend"
				  ),
				  
			array( "name" => __("Animation", 'sr_xone_theme'),
				   "desc" => "Do you want to add an animation effect?",
				   "id" => $sc."_teamanimation",
				   "type" => "selectbox-hiding",
				   "option" => array( 
						array(	"name" => __("No animation", 'sr_xone_theme'), 
							  	"value" => "false"),
						array(	"name" => __("Add animation for each Team Meber", 'sr_xone_theme'), 
							  	"value" => "column"),
						array(	"name" => __("Add animation for whole Team row", 'sr_xone_theme'), 
							  	"value"=> "row")		
						)
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_teamanimation",
				   "hiding" => "column",
				   "type" => "hidinggroupstart"
				  ),
		
				array( "name" => __("Type of animation", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamanimationtype",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"Fade In", 
									"value" => "fade"),
							array(	"name" =>"From Top", 
									"value" => "fromtop"),
							array(	"name" =>"From Right", 
									"value" => "fromright"),
							array(	"name" =>"From Bottom", 
									"value" => "frombottom"),
							array(	"name" =>"From Left", 
									"value" => "fromleft"),
							array(	"name" =>"Zoom In", 
									"value" => "zoomin"),
							array(	"name" =>"Zoom Out", 
									"value" => "zoomout")
							)
					  ),
				  
				array( "name" => __("Delay (optional)", 'sr_xone_theme'),
				   	   "desc" => "Enter a delay value if wanted",
					   "id" => $sc."_teamanimationdelay",
					   "type" => "text"
					  ),	  					  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_teamanimation",
				   "hiding" => "column",
				   "type" => "hidinggroupend"
				  ),
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_teamanimation",
				   "hiding" => "row",
				   "type" => "hidinggroupstart"
				  ),
		
				array( "name" => __("Type of animation", 'sr_xone_theme'),
					   "desc" => "",
					   "id" => $sc."_teamrowanimationtype",
					   "type" => "selectbox",
					   "option" => array( 
							array(	"name" =>"Fade In", 
									"value" => "fade"),
							array(	"name" =>"From Top", 
									"value" => "fromtop"),
							array(	"name" =>"From Right", 
									"value" => "fromright"),
							array(	"name" =>"From Bottom", 
									"value" => "frombottom"),
							array(	"name" =>"From Left", 
									"value" => "fromleft"),
							array(	"name" =>"Zoom In", 
									"value" => "zoomin"),
							array(	"name" =>"Zoom Out", 
									"value" => "zoomout")
							)
					  ),
				  
				array( "name" => __("Delay (optional)", 'sr_xone_theme'),
				   	   "desc" => "Enter a delay value if wanted",
					   "id" => $sc."_teamrowanimationdelay",
					   "type" => "text"
					  ),	  					  
				  
			array( "name" => "Hidinggroup",
				   "id" => $sc."_teamanimation",
				   "hiding" => "row",
				   "type" => "hidinggroupend"
				  ),
			
	array( "name" => __("Team Member", 'sr_xone_theme'),
		   "id" => "team",
		    "type" => "sectionend"),
	
		
	
	array( "name" => __("Toggle", 'sr_xone_theme'),
		   "desc" => "",
		   "id" => "toggle",
		   "type" => "sectionstart"
		  ),
	
			array( "name" => __("Toggle Size", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_togglesize",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"Small", 
							  	"value" => "small"),
						array(	"name" =>"Big", 
							  	"value" => "big")
						)
				  ),
			
			array( "name" => __("Toggle Open", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_toggleopen",
				   "type" => "selectbox",
				   "option" => array( 
						array(	"name" =>"No", 
							  	"value" => "no"),			 	
						array(	"name" =>"Yes", 
							  	"value" => "yes")
						)
				  ),
	
			array( "name" => __("Toggle Title", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_toggletitle",
				   "type" => "text"
				  ),
			
			array( "name" => __("Toggle Text", 'sr_xone_theme'),
				   "desc" => "",
				   "id" => $sc."_toggletext",
				   "type" => "textarea"
				  ),
						
	
	array( "name" => __("Toggle", 'sr_xone_theme'),
		   "id" => "toggle",
		    "type" => "sectionend")
	
	
);
?>
<!DOCTYPE html>
<html>
<head>
<title>Shortcodes</title>

<!--style-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/theme-admin/'; ?>shortcodes/css/shortcodes-popup-style.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/files/'; ?>css/font-awesome.min.css" />

<!--scripts-->
<script src="<?php echo get_template_directory_uri() . '/theme-admin/'; ?>shortcodes/js/shortcode-functions.js"></script>


</head>

<body>	

<div id="shortcodes">

	<div class="sc_option_panel">
    	<ul class="sc_list">
		<?php 
        
        foreach ($options as $opt) {
            if ($opt['type'] == 'sectionstart') {
                echo '<li class="'.$opt['id'].'"><a href="'.$opt['id'].'"><b>'.$opt['name'].'</b></a></li>';	 
            }
        }
        
        ?>
		</ul>
	</div> <!-- END .sc_option_panel -->

	
    <div class="sc_option">
    	<?php 
        
        foreach ($options as $option) {
            switch ( $option['type'] ) {
		
			//sectionstart
			case "sectionstart":
				echo '	<div id="'.$option['id'].'" class="sc-option-content">
						<div class="sc-option-title"><b>'.$option['name'].'</b><br /><span><i>'.$option['desc'].'</i></span></div>
						<form id="form_'.$option['id'].'" action="" method="get" accept-charset="utf-8">
						';
			break;
			
			//sectionend
			case "sectionend":
				echo '	<a href="" id="insert_'.$option['id'].'" class="submit">'.__("Insert", 'sr_xone_theme').'</a> 
						</form>
						</div>';
			break;
			
			//groupstart
			case "groupstart":
				echo '	<div id="'.$option['id'].'" class="group">';
			break;
			
			//groupend
			case "groupend":
				echo '	</div>';
			break;
			
			//groupstart
			case "hidinggroupstart":
				echo '	<div id="'.$option['id'].'" class="group hidinggroup hide'.$option['id'].' '.$option['id'].'_'.$option['hiding'].'">';
			break;
			
			//groupend
			case "hidinggroupend":
				echo '	</div>';
			break;
			
			//grouduplicater
			case "grouduplicater";
				echo '	<a href="'.$option['group'].'" id="'.$option['id'].'" class="groupduplicater">&raquo; '.$option['name'].'</a><br>';
			break;
			
			//infotext
			case "infotext":
				echo '<div id="'.$option['id'].'" class="sc-option sc-infotext clear">';
					echo '<p>'.$option['desc'].'</p>';
				echo '</div>';
			break;
			
			//text
			case "text":
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value">
								<input type="text" name="'.$option['id'].'" id="'.$option['id'].'" value="" size="30" />
							</div>';
				echo '</div>';
			break;
			
			// selectbox  
			case 'selectbox':  
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value">
								<select name="'.$option['id'].'" id="'.$option['id'].'">';
								$i = 0;
								foreach ($option['option'] as $var) {
									echo '<option value="'.$var['value'].'"> '.$var['name'].'</option>';
								$i++;	
								}			  
					echo '		</select> 
							</div>';
				echo '</div>';
			break;
			
			
			// selectbox -hiding 
			case 'selectbox-hiding':  
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value select-hiding">
								<select name="'.$option['id'].'" id="'.$option['id'].'">';
								$i = 0;
								foreach ($option['option'] as $var) {
									echo '<option value="'.$var['value'].'"> '.$var['name'].'</option>';
								$i++;	
								}			  
					echo '		</select> 
							</div>';
				echo '</div>';
			break;
			
			//textarea
			case "textarea":
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value">
								<textarea name="'.$option['id'].'" id="'.$option['id'].'"></textarea>
							</div>';
				echo '</div>';
			break;
			
			//color
			case "color":
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value">
								<input type="text" name="'.$option['id'].'" id="'.$option['id'].'" value="" class="sr-color-field" />
							</div>';
				echo '</div>';
			break;
			
			//radiocustom
			case "radiocustom":
				echo '<div id="'.$option['id'].'" class="sc-option clear radiocustom">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value">';
					
					$i = 0;
					foreach ($option['option'] as $var) {
						echo '<input type="radio" name="'.$option['id'].'" id="'.$var['value'].'" value="'.$var['value'].'" />
						<a class="customradio '.$var['value'].'" href="'.$var['value'].'"><span>'.$var['name'].'</span></a>';
					$i++;	
					}
	
					echo '	</div>';		
				echo '</div>';
			break;
			
			//image
			case "image":
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value single-image">
								<span class="preview-image"><img src="test" /></span>
								<input type="text" name="'.$option['id'].'" id="'.$option['id'].'" value="" style="display:none;" />
								<a href="#" class="upload-sc-image">'.__('Add Image', 'sr_xone_theme').'</a>
								<a href="#" class="remove-sc-image" style="display: none;">' . __('Remove Image', 'sr_xone_theme') . '</a>
							</div>';
				echo '</div>';
			break;
			
			// selectbox  
			case 'scrolltosection':  
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value">
								<select name="'.$option['id'].'" id="'.$option['id'].'">';
								$pages = get_pages();
								  foreach ( $pages as $p ) {
									if ($p->ID == $value) { $active = 'selected="selected"'; }  else { $active = ''; } 
									$option = '<option value="' . $p->post_name . '" '.$active.'>';
									$option .= $p->post_title;
									$option .= '</option>';
									echo $option;
								  }			  
					echo '		</select> 
							</div>';
				echo '</div>';
			break;
			
			//gallery
			case "gallery":
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value">
								<select name="'.$option['id'].'" id="'.$option['id'].'">';
								  $gal = get_posts( array('post_type' => 'gallery') );
								  foreach ( $gal as $g ) {
									if ($g->ID == $value) { $active = 'selected="selected"'; }  else { $active = ''; } 
									$option = '<option value="' . $g->ID . '" '.$active.'>';
									$option .= $g->post_title;
									$option .= '</option>';
									echo $option;
								  }
					echo '		</select> 
							</div>';
				echo '</div>';
			break;
			
			
			//blogcategory
			case "blogcategory":
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value">
								<select name="'.$option['id'].'" id="'.$option['id'].'">';
								  echo '<option value="">All</option>';
								  $categories = get_terms( 'category');
								  foreach ( $categories as $cat ) {
									echo '<option value="'.$cat->slug.'" '.$selected.'>'.$cat->name.'</option>';
								  }
					echo '		</select> 
							</div>';
				echo '</div>';
			break;
			
			
			//portfoliocategory
			case "portfoliocategory":
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '	<div class="sc-option-name">
								<label for="'.$option['id'].'">'.$option['name'].'</label><br /><span class="sc-description">'.$option['desc'].'</span>
							</div>';
					echo '	<div class="sc-option-value">
								<select name="'.$option['id'].'" id="'.$option['id'].'">';
								  echo '<option value="">All</option>';
								  $categories = get_terms( 'portfolio_category');
								  foreach ( $categories as $cat ) {
									echo '<option value="'.$cat->slug.'" '.$selected.'>'.$cat->name.'</option>';
								  }
					echo '		</select> 
							</div>';
				echo '</div>';
			break;
			
			
			
			//icons
			case "icons":
			
				$icons = array('fa-glass','fa-music','fa-search','fa-envelope-o','fa-heart','fa-star','fa-star-o','fa-user','fa-film','fa-th-large','fa-th','fa-th-list','fa-check','fa-times','fa-search-plus','fa-search-minus','fa-power-off','fa-signal','fa-cog','fa-trash-o','fa-home','fa-file-o','fa-clock-o','fa-road','fa-download','fa-arrow-circle-o-down','fa-arrow-circle-o-up','fa-inbox','fa-play-circle-o','fa-repeat','fa-refresh','fa-list-alt','fa-lock','fa-flag','fa-headphones','fa-volume-off','fa-volume-down','fa-volume-up','fa-qrcode','fa-barcode','fa-tag','fa-tags','fa-book','fa-bookmark','fa-print','fa-camera','fa-font','fa-bold','fa-italic','fa-text-height','fa-text-width','fa-align-left','fa-align-center','fa-align-right','fa-align-justify','fa-list','fa-outdent','fa-indent','fa-video-camera','fa-picture-o','fa-pencil','fa-map-marker','fa-adjust','fa-tint','fa-pencil-square-o','fa-share-square-o','fa-check-square-o','fa-arrows','fa-step-backward','fa-fast-backward','fa-backward','fa-play','fa-pause','fa-stop','fa-forward','fa-fast-forward','fa-step-forward','fa-eject','fa-chevron-left','fa-chevron-right','fa-plus-circle','fa-minus-circle','fa-times-circle','fa-check-circle','fa-question-circle','fa-info-circle','fa-crosshairs','fa-times-circle-o','fa-check-circle-o','fa-ban','fa-arrow-left','fa-arrow-right','fa-arrow-up','fa-arrow-down','fa-share','fa-expand','fa-compress','fa-plus','fa-minus','fa-asterisk','fa-exclamation-circle','fa-gift','fa-leaf','fa-fire','fa-eye','fa-eye-slash','fa-exclamation-triangle','fa-plane','fa-calendar','fa-random','fa-comment','fa-magnet','fa-chevron-up','fa-chevron-down','fa-retweet','fa-shopping-cart','fa-folder','fa-folder-open','fa-arrows-v','fa-arrows-h','fa-bar-chart-o','fa-twitter-square','fa-facebook-square','fa-camera-retro','fa-key','fa-cogs','fa-comments','fa-thumbs-o-up','fa-thumbs-o-down','fa-star-half','fa-heart-o','fa-sign-out','fa-linkedin-square','fa-thumb-tack','fa-external-link','fa-sign-in','fa-trophy','fa-github-square','fa-upload','fa-lemon-o','fa-phone','fa-square-o','fa-bookmark-o','fa-phone-square','fa-twitter','fa-facebook','fa-github','fa-unlock','fa-credit-card','fa-rss','fa-hdd-o','fa-bullhorn','fa-bell','fa-certificate','fa-hand-o-right','fa-hand-o-left','fa-hand-o-up','fa-hand-o-down','fa-arrow-circle-left','fa-arrow-circle-right','fa-arrow-circle-up','fa-arrow-circle-down','fa-globe','fa-wrench','fa-tasks','fa-filter','fa-briefcase','fa-arrows-alt','fa-users','fa-link','fa-cloud','fa-flask','fa-scissors','fa-files-o','fa-paperclip','fa-floppy-o','fa-square','fa-bars','fa-list-ul','fa-list-ol','fa-strikethrough','fa-underline','fa-table','fa-magic','fa-truck','fa-pinterest','fa-pinterest-square','fa-google-plus-square','fa-google-plus','fa-money','fa-caret-down','fa-caret-up','fa-caret-left','fa-caret-right','fa-columns','fa-sort','fa-sort-asc','fa-sort-desc','fa-envelope','fa-linkedin','fa-undo','fa-gavel','fa-tachometer','fa-comment-o','fa-comments-o','fa-bolt','fa-sitemap','fa-umbrella','fa-clipboard','fa-lightbulb-o','fa-exchange','fa-cloud-download','fa-cloud-upload','fa-user-md','fa-stethoscope','fa-suitcase','fa-bell-o','fa-coffee','fa-cutlery','fa-file-text-o','fa-building-o','fa-hospital-o','fa-ambulance','fa-medkit','fa-fighter-jet','fa-beer','fa-h-square','fa-plus-square','fa-angle-double-left','fa-angle-double-right','fa-angle-double-up','fa-angle-double-down','fa-angle-left','fa-angle-right','fa-angle-up','fa-angle-down','fa-desktop','fa-laptop','fa-tablet','fa-mobile','fa-circle-o','fa-quote-left','fa-quote-right','fa-spinner','fa-circle','fa-reply','fa-github-alt','fa-folder-o','fa-folder-open-o','fa-smile-o','fa-frown-o','fa-meh-o','fa-gamepad','fa-keyboard-o','fa-flag-o','fa-flag-checkered','fa-terminal','fa-code','fa-reply-all','fa-mail-reply-all','fa-star-half-o','fa-location-arrow','fa-crop','fa-code-fork','fa-chain-broken','fa-question','fa-info','fa-exclamation','fa-superscript','fa-subscript','fa-eraser','fa-puzzle-piece','fa-microphone','fa-microphone-slash','fa-shield','fa-calendar-o','fa-fire-extinguisher','fa-rocket','fa-maxcdn','fa-chevron-circle-left','fa-chevron-circle-right','fa-chevron-circle-up','fa-chevron-circle-down','fa-html5','fa-css3','fa-anchor','fa-unlock-alt','fa-bullseye','fa-ellipsis-h','fa-ellipsis-v','fa-rss-square','fa-play-circle','fa-ticket','fa-minus-square','fa-minus-square-o','fa-level-up','fa-level-down','fa-check-square','fa-pencil-square','fa-external-link-square','fa-share-square','fa-compass','fa-caret-square-o-down','fa-caret-square-o-up','fa-caret-square-o-right','fa-eur','fa-gbp','fa-usd','fa-inr','fa-jpy','fa-rub','fa-krw','fa-btc','fa-file','fa-file-text','fa-sort-alpha-asc','fa-sort-alpha-desc','fa-sort-amount-asc','fa-sort-amount-desc','fa-sort-numeric-asc','fa-sort-numeric-desc','fa-thumbs-up','fa-thumbs-down','fa-youtube-square','fa-youtube','fa-xing','fa-xing-square','fa-youtube-play','fa-dropbox','fa-stack-overflow','fa-instagram','fa-flickr','fa-adn','fa-bitbucket','fa-bitbucket-square','fa-tumblr','fa-tumblr-square','fa-long-arrow-down','fa-long-arrow-up','fa-long-arrow-left','fa-long-arrow-right','fa-apple','fa-windows','fa-android','fa-linux','fa-dribbble','fa-skype','fa-foursquare','fa-trello','fa-female','fa-male','fa-gittip','fa-sun-o','fa-moon-o','fa-archive','fa-bug','fa-vk','fa-weibo','fa-renren','fa-pagelines','fa-stack-exchange','fa-arrow-circle-o-right','fa-arrow-circle-o-left','fa-caret-square-o-left','fa-dot-circle-o','fa-wheelchair','fa-vimeo-square','fa-try','fa-plus-square-o');
			
				echo '<div id="'.$option['id'].'" class="sc-option clear">';
					echo '<ul class="iconfonts">';		
					foreach ($icons as $ic) {
						echo '<li><input type="radio" name="'.$option['id'].'" value="'.$ic.'"><i class="iconcheck fa '.$ic.'"></i></li>';
					}
					echo '</ul>';
				echo '</div>';
				
				
			break;
			
			}
			
        }
        
        ?>
    </div> <!-- END .sc_sc-option-->
	
</div>

</div>
</body>
</html>