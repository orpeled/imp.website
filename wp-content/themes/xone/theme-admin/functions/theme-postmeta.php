<?php

/*-----------------------------------------------------------------------------------

	Custom Post/Portfolio Meta boxes

-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/*	Add metaboxes
/*-----------------------------------------------------------------------------------*/

function add_meta_subtitle() {  
    add_meta_box(  
        'meta_subtitle', // $id  
        __('Pagetitle', 'sr_xone_theme'), // $title  
        'show_meta_subtitle', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority		
}  
add_action('add_meta_boxes', 'add_meta_subtitle');

function add_meta_pagesettings() {  
    add_meta_box(  
        'meta_pagesettings', // $id  
        __('Page / Section settings', 'sr_xone_theme'), // $title  
        'show_meta_pagesettings', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority		
}  
add_action('add_meta_boxes', 'add_meta_pagesettings');

function add_meta_medias() {  
    add_meta_box(  
        'meta_medias', // $id  
        __('Medias', 'sr_xone_theme'), // $title  
        'show_meta_medias', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority	
	
	add_meta_box(  
        'meta_medias', // $id  
        __('Medias', 'sr_xone_theme'), // $title  
        'show_meta_medias', // $callback  
        'portfolio', // $page  
        'normal', // $context  
        'high'); // $priority	
}  
add_action('add_meta_boxes', 'add_meta_medias');

function add_meta_gallery() {  
    add_meta_box(  
        'meta_gallery', // $id  
        __('Gallery', 'sr_xone_theme'), // $title  
        'show_meta_gallery', // $callback  
        'gallery', // $page  
        'normal', // $context  
        'high'); // $priority	
}  
add_action('add_meta_boxes', 'add_meta_gallery');

function add_meta_video() {  
    add_meta_box(  
        'meta_video', // $id  
        __('Video', 'sr_xone_theme'), // $title  
        'show_meta_video', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority	
}  
add_action('add_meta_boxes', 'add_meta_video');

function add_meta_audio() {  
    add_meta_box(  
        'meta_audio', // $id  
        __('Selfhosted Audio', 'sr_xone_theme'), // $title  
        'show_meta_audio', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority	
}  
add_action('add_meta_boxes', 'add_meta_audio');

function add_meta_quote() {  
    add_meta_box(  
        'meta_quote', // $id  
        __('Quote', 'sr_xone_theme'), // $title  
        'show_meta_quote', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority
	
}  
add_action('add_meta_boxes', 'add_meta_quote');

function add_meta_link() {  
    add_meta_box(  
        'meta_link', // $id  
        __('Link', 'sr_xone_theme'), // $title  
        'show_meta_link', // $callback  
        'post', // $page  
        'normal', // $context  
        'high'); // $priority
	
}  
add_action('add_meta_boxes', 'add_meta_link');

function add_meta_portfoliosingle() {  
    add_meta_box(  
        'meta_portfoliosingle', // $id  
        __('Portfolio Option', 'sr_xone_theme'), // $title  
        'show_meta_portfoliosingle', // $callback  
        'portfolio', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_portfoliosingle');

function add_meta_portfoliocategories() {  
    add_meta_box(  
        'meta_portfoliocategories', // $id  
        __('Portfolio Categories', 'sr_xone_theme'), // $title  
        'show_meta_portfoliocategories', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_portfoliocategories');

function add_meta_portfoliofrontpage() {  
    add_meta_box(  
        'meta_portfoliofrontpage', // $id  
        __('Portfolio?', 'sr_xone_theme'), // $title  
        'show_meta_portfoliofrontpage', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_portfoliofrontpage');

function add_meta_slides() {  
    add_meta_box(  
        'meta_slides', // $id  
        __('Slides', 'sr_xone_theme'), // $title  
        'show_meta_slides', // $callback  
        'slider', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_slides');

function add_meta_sliderpagesettings() {  
    add_meta_box(  
        'meta_sliderpagesettings', // $id  
        __('Slider Settings', 'sr_xone_theme'), // $title  
        'show_meta_sliderpagesettings', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_sliderpagesettings');

function add_meta_contact() {  
    add_meta_box(  
        'meta_contact', // $id  
        __('Contact Settings', 'sr_xone_theme'), // $title  
        'show_meta_contact', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority */
}  
add_action('add_meta_boxes', 'add_meta_contact');



/*-----------------------------------------------------------------------------------*/
/*	Define fields
/*-----------------------------------------------------------------------------------*/


/*  REVSLIDER */
$revolutionslider = array();
$revolutionslider[0] = array( "name" => __("No Slider", 'sr_xone_theme'), "value" => "false");

if(class_exists('RevSlider')){
	
	$slider = new RevSlider();
	$arrSliders = $slider->getArrSliders();
	foreach($arrSliders as $revSlider) { 
		$revolutionslider[] = array( "name" => $revSlider->getTitle(), "value" => $revSlider->getAlias());
	}
}
/*  REVSLIDER */


$sr_prefix = '_sr';  

$sr_meta_subtitle = array(  
	array(  
	    'label' => __("Subtitle", 'sr_xone_theme'),  
	    'desc'  => __("Enter your subtitle for this page.  Leave it empty if you son't want do show any subtitle.", 'sr_xone_theme'),  
	    'id'    => $sr_prefix.'_subtitle',  
	    'type'  => 'text'  
	),
	array(  
	    'label' => __("Alternativ Main Title", 'sr_xone_theme'),  
	    'desc'  => __("If empty, it will take the page name.", 'sr_xone_theme'),  
	    'id'    => $sr_prefix.'_alttitle',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("Show Page Title", 'sr_xone_theme'),
	   	"desc" => __("Do you want to show the Page Title for this page?", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_showpagetitle',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("Yes", 'sr_xone_theme'), 
							  	"value"=> "true"),
						array(	"name" => __("No", 'sr_xone_theme'), 
							  	"value" => "false")
						)
	),
	array(  
		'label' => __("Title Color (optional)", 'sr_xone_theme'),  
		'desc'  => __("leave empty if you want to default color.", 'sr_xone_theme'),  
		'id'    => $sr_prefix.'_titlecolor',  
		'type'  => 'color', 
	),
	/*array(  
		"label" => __("Slider", 'sr_xone_theme'),
	   	"desc" => __("The slider will be displayed below the Page Title if this is active.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_slider',  
	    'type'  => 'select'  ,
		'option' => $revolutionslider
	),*/
 );


$sr_meta_pagesettings = array( 
	array(  
	    'label' => __("Padding Top", 'sr_xone_theme'),  
	    'desc'  => __("Enter a top padding. Default is 100.  Choose 0 for the First Section / Front Page", 'sr_xone_theme'),  
	    'id'    => $sr_prefix.'_paddingtop',  
	    'type'  => 'text',
		'default' => '100'  
	),
	array(  
	    'label' => __("Padding Bottom", 'sr_xone_theme'),  
	    'desc'  => __("Enter a top padding. Default is 0.", 'sr_xone_theme'),  
	    'id'    => $sr_prefix.'_paddingbottom',  
	    'type'  => 'text', 
		'default' => '100'  
	),
	array( 
		'label' => __("Background", 'sr_xone_theme'), 
		'desc'  => "",  
	 	'id'    => $sr_prefix.'_sectionbackground',  
	 	'type'  => 'select-hiding',
		'option' => array( 
			array(	"name" => __("None", 'sr_xone_theme'), 
					"value" => "none"),
			array(	"name" => __("Color", 'sr_xone_theme'), 
					"value"=> "color"),
			array(	"name" => __("Image", 'sr_xone_theme'), 
					"value"=> "image"),
			array(	"name" => __("Video", 'sr_xone_theme'), 
					"value"=> "video"),
			array(	"name" => __("Slider", 'sr_xone_theme'), 
					"value"=> "slider")
			)
	),
		array( 
			"id" => $sr_prefix."_sectionbackground",
		   	"hiding" => "color",	
		   	"type" => "hidinggroupstart"
		),
			
			array(  
				'label' => __("Background Color", 'sr_xone_theme'),  
				'desc'  => __("Choose a background for your page/section", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_color_bgcolor',  
				'type'  => 'color', 
			),
			array(  
				'label' => __("Text Color", 'sr_xone_theme'),  
				'desc'  => __("Choose Text color", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_color_textcolor', 
				'type'  => 'select', 
				'option' => array( 
					array(	"name" => __("Light", 'sr_xone_theme'), 
							"value" => "light"),
					array(	"name" => __("Dark", 'sr_xone_theme'), 
							"value" => "dark")
					)
			),
		
		array( 
			"id" => $sr_prefix."_sectionbackground",
		   	"type" => "hidinggroupend"
		),
		
		array( 
			"id" => $sr_prefix."_sectionbackground",
		   	"hiding" => "image",	
		   	"type" => "hidinggroupstart"
		),
			
			array(  
				'label' => __("Background Image", 'sr_xone_theme'),  
				'desc'  => __("Add a background image for the section", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_image_bgimage',  
				'type'  => 'image', 
			),
			array(  
				'label' => __("Text Color", 'sr_xone_theme'),  
				'desc'  => __("Choose Text color", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_image_textcolor', 
				'type'  => 'select', 
				'option' => array( 
					array(	"name" => __("Light", 'sr_xone_theme'), 
							"value" => "light"),
					array(	"name" => __("Dark", 'sr_xone_theme'), 
							"value" => "dark")
					)
			),
			array(  
				'label' => __("Parallax Effect", 'sr_xone_theme'),  
				'desc'  => __("Do you want to have a parallax effect?", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_image_parallax', 
				'type'  => 'select', 
				'option' => array( 
					array(	"name" => __("Yes", 'sr_xone_theme'), 
							"value" => "true"),
					array(	"name" => __("No", 'sr_xone_theme'), 
							"value" => "false")
					)
			),
			array(  
				'label' => __("Overlay Color", 'sr_xone_theme'),  
				'desc'  => __("Leave it empty if you don't want any overlay color", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_image_overlaycolor',  
				'type'  => 'color', 
			),
			array(  
				'label' => __("Overlay opacity", 'sr_xone_theme'),  
				'desc'  => __("Choose the opacity for the overlay color", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_image_overlayopacity', 
				'type'  => 'select', 
				'option' => array( 
					array(	"name" => "0.1", 
							"value" => "1"),
					array(	"name" => "0.2", 
							"value" => "2"),
					array(	"name" => "0.3", 
							"value" => "3"),
					array(	"name" => "0.4", 
							"value" => "4"),
					array(	"name" => "0.5", 
							"value" => "5"),
					array(	"name" => "0.6", 
							"value" => "6"),
					array(	"name" => "0.7", 
							"value" => "7"),
					array(	"name" => "0.8", 
							"value" => "8"),
					array(	"name" => "0.9", 
							"value" => "9")	
					)
			),
			array(  
				'label' => __("Overlay Slider", 'sr_xone_theme'),
				'desc' => __("The slider will overlay your bg image & replace the content! <b>Make sure to add transparent background to the slides</b>.", 'sr_xone_theme'),
				'id'    => $sr_prefix.'_image_slider',  
				'type'  => 'select'  ,
				'option' => $revolutionslider
			),
			
		array( 
			"id" => $sr_prefix."_sectionbackground",
		   	"type" => "hidinggroupend"
		),
		
		array( 
			"id" => $sr_prefix."_sectionbackground",
		   	"hiding" => "video",	
		   	"type" => "hidinggroupstart"
		),
			
			array(  
				'label' => __("MP4 file url", 'sr_xone_theme'),  
				'desc'  => __("The url to the M4V file", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_mp4',  
				'type'  => 'text', 
			),
			array(  
				'label' => __("WEBM file url", 'sr_xone_theme'),  
				'desc'  => __("The url to the WEBM file", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_webm',  
				'type'  => 'text', 
			),
			array(  
				'label' => __("OGV file url", 'sr_xone_theme'),  
				'desc'  => __("The url to the OGV file", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_oga',  
				'type'  => 'text', 
			),
			array(  
				'label' => __("Video Width", 'sr_xone_theme'),  
				'desc'  => __("Please enter the width of the video file", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_width',  
				'type'  => 'text', 
			),
			array(  
				'label' => __("Video Height", 'sr_xone_theme'),  
				'desc'  => __("Please enter the height of the video file", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_height',  
				'type'  => 'text', 
			),
			array(  
				'label' => __("Poster", 'sr_xone_theme'),  
				'desc'  => __("This image will be shown for devices which don't support background video. Please make sure that this image has the same height than the video itself", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_poster',  
				'type'  => 'image', 
			),
			array(  
				'label' => __("Text Color", 'sr_xone_theme'),  
				'desc'  => __("Choose Text color", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_textcolor', 
				'type'  => 'select', 
				'option' => array( 
					array(	"name" => __("Light", 'sr_xone_theme'), 
							"value" => "light"),
					array(	"name" => __("Dark", 'sr_xone_theme'), 
							"value" => "dark")
					)
			),
			array(  
				'label' => __("Parallax Effect", 'sr_xone_theme'),  
				'desc'  => __("Do you want to have a parallax effect?", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_parallax', 
				'type'  => 'select', 
				'option' => array( 
					array(	"name" => __("Yes", 'sr_xone_theme'), 
							"value" => "true"),
					array(	"name" => __("No", 'sr_xone_theme'), 
							"value" => "false")
					)
			),
			array(  
				'label' => __("Overlay Color", 'sr_xone_theme'),  
				'desc'  => __("Leave it empty if you don't want any overlay color", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_overlaycolor',  
				'type'  => 'color', 
			),
			array(  
				'label' => __("Overlay opacity", 'sr_xone_theme'),  
				'desc'  => __("Choose the opacity for the overlay color", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_overlayopacity', 
				'type'  => 'select', 
				'option' => array( 
					array(	"name" => "0.1", 
							"value" => "1"),
					array(	"name" => "0.2", 
							"value" => "2"),
					array(	"name" => "0.3", 
							"value" => "3"),
					array(	"name" => "0.4", 
							"value" => "4"),
					array(	"name" => "0.5", 
							"value" => "5"),
					array(	"name" => "0.6", 
							"value" => "6"),
					array(	"name" => "0.7", 
							"value" => "7"),
					array(	"name" => "0.8", 
							"value" => "8"),
					array(	"name" => "0.9", 
							"value" => "9")	
					)
			),
			array(  
				'label' => __("Sound", 'sr_xone_theme'),  
				'desc'  => __("Do you want to activate the sound of the video?", 'sr_xone_theme'),  
				'id'    => $sr_prefix.'_video_sound', 
				'type'  => 'select', 
				'option' => array( 
					array(	"name" => __("No", 'sr_xone_theme'), 
							"value" => "false"),
					array(	"name" => __("Yes", 'sr_xone_theme'), 
							"value" => "true")
					)
			),
			array(  
				'label' => __("Overlay Slider", 'sr_xone_theme'),
				'desc' => __("The slider will overlay your video & replace the content! <b>Make sure to add transparent background to the slides</b>.", 'sr_xone_theme'),
				'id'    => $sr_prefix.'_video_slider',  
				'type'  => 'select'  ,
				'option' => $revolutionslider
			),
			
		array( 
			"id" => $sr_prefix."_sectionbackground",
		   	"type" => "hidinggroupend"
		),
		
		array( 
			"id" => $sr_prefix."_sectionbackground",
		   	"hiding" => "slider",	
		   	"type" => "hidinggroupstart"
		),
		
			array(  
				'label' => __("Slider", 'sr_xone_theme'),
				'desc' => __("Choose a Slider. The Slider will replace the content.", 'sr_xone_theme'),
				'id'    => $sr_prefix.'_slider_slider',  
				'type'  => 'select'  ,
				'option' => $revolutionslider
			),
		
		array( 
			"id" => $sr_prefix."_sectionbackground",
		   	"type" => "hidinggroupend"
		)
		  
);


$sr_meta_medias = array(  
	array(  
	    'label' => __("Medias / Gallery", 'sr_xone_theme'),  
	    'desc'  => __("Add images or embedded videos, then drag and drop to arrange them.", 'sr_xone_theme'),  
	    'id'    => $sr_prefix.'_medias',  
	    'type'  => 'medias'  
	),
	
	array(  
		"label" => __("Gallery Layout (Single View)", 'sr_xone_theme'),
	   	"desc" => __("If you choose 'List' the images will be displayed below each other instead of a slider.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_mediaslayout',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("Slider", 'sr_xone_theme'), 
								"value" => "slider"),
						array(	"name" => __("List", 'sr_xone_theme'), 
								"value"=> "list")
						) 
	)
 );


$sr_meta_gallery = array(  
	array(  
	    'label' => __("Gallery", 'sr_xone_theme'),  
	    'desc'  => __("Add the gallery images, then drag and drop to arrange them.", 'sr_xone_theme'),  
	    'id'    => $sr_prefix.'_gallery',  
	    'type'  => 'gallery'  
	)
 );


$sr_meta_audio = array(  
	array(  
		"label" => __("Embedded Audio", 'sr_xone_theme'),
	   	"desc" => __("Include the embedded iframe.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_audio',  
	    'type'  => 'textarea'  
	),
	array(  
		"label" => "",
	   	"desc" => __("Or self hosted audio.  Please leave these fields empty if you don't want to show an self hosted audio.", 'sr_xone_theme'),
	    'type'  => 'info'  
	),
	array(  
		"label" => __("MP3 File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the mp3 file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_audio_mp3',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("OGA/OGG File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the oga/ogg file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_audio_oga',  
	    'type'  => 'text'  
	)
 );


$sr_meta_audio_portfolio = array(  
	array(  
		"label" => __("MP3 File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the mp3 file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_audio_mp3',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("OGA/OGG File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the oga/ogg file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_audio_oga',  
	    'type'  => 'text'  
	)
 );


$sr_meta_video = array(  
	array(  
		"label" => __("Embedded Video", 'sr_xone_theme'),
	   	"desc" => __("Include the embedded iframe.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_video',  
	    'type'  => 'textarea'  
	),
	array(  
		"label" => "",
	   	"desc" => __("Or self hosted video.  Please leave these fields empty if you don't want to show an self hosted video.", 'sr_xone_theme'),
	    'type'  => 'info'  
	),
	array(  
		"label" => __("M4V File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the M4V file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_video_m4v',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("OGA/OGG File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the oga/ogg file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_video_oga',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("WEBMV File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the webmv file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_video_webmv',  
	    'type'  => 'text'  
	)
 );


$sr_meta_video_portfolio = array(  
	array(  
		"label" => __("M4V File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the M4V file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_video_m4v',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("OGA/OGG File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the oga/ogg file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_video_oga',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("WEBMV File URL", 'sr_xone_theme'),
	   	"desc" => __("The url to the webmv file", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_video_webmv',  
	    'type'  => 'text'  
	)
 );


$sr_meta_quote = array(  
	array(  
		"label" => __("Quote", 'sr_xone_theme'),
	   	"desc" => __("Enter the quote.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_quote',  
	    'type'  => 'textarea'  
	)
 );


$sr_meta_link = array(  
	array(  
		"label" => __("Link", 'sr_xone_theme'),
	   	"desc" => __("Link url", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_link',  
	    'type'  => 'text'  
	)
 );


$sr_meta_portfoliosingle = array(  
	array(  
		"label" => __("Where to go", 'sr_xone_theme'),
	   	"desc" => __("You can link your portfolio item to a lightbox or extarnal page.  'Default' will open the the item via ajax.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_portfoliolightbox',  
	    'type'  => 'select-hiding',
		'option' => array( 
				array(	"name" => __("default (Ajax)", 'sr_xone_theme'), 
						"value"=> "no"),
				array(	"name" => __("Lightbox", 'sr_xone_theme'), 
						"value" => "yes"),
				array(	"name" => __("External Page", 'sr_xone_theme'), 
						"value" => "external")
				)
	),
		array( 
			"id" => $sr_prefix."_portfoliolightbox",
		   	"hiding" => "no",	
		   	"type" => "hidinggroupstart"
		),
		
			array(  
				"label" => __("Layout", 'sr_xone_theme'),
				"desc" => __("What Layout mode do you want to show for this project in single view?", 'sr_xone_theme'),
				'id'    => $sr_prefix.'_portfolio_singlelayout',  
				'type'  => 'select'  ,
				'option' => array( 
								array(	"name" => __("Contentwidth Gallery & text below", 'sr_xone_theme'), 
										"value"=> "contentwidth"),
								array(	"name" => __("Gallery left & text right", 'sr_xone_theme'), 
										"value"=> "leftright")
								) 
			),
		
		array( 
			"id" => $sr_prefix."_portfoliolightbox",
		   	"type" => "hidinggroupend"
		),
		
		array( 
			"id" => $sr_prefix."_portfoliolightbox",
		   	"hiding" => "yes",	
		   	"type" => "hidinggroupstart"
		),
		
			array(  
				"label" => __("Lightbox Option", 'sr_xone_theme'),
				"desc" => __("Do you want to show the whole media / gallery (see above) OR just the featured image?", 'sr_xone_theme'),
				'id'    => $sr_prefix.'_portfolio_lightboxoption',  
				'type'  => 'select'  ,
				'option' => array( 
								array(	"name" => __("Media / Gallery", 'sr_xone_theme'), 
										"value"=> "media"),
								array(	"name" => __("Featured Image", 'sr_xone_theme'), 
										"value"=> "featured")
								) 
			),
		
		array( 
			"id" => $sr_prefix."_portfoliolightbox",
		   	"type" => "hidinggroupend"
		),
		
		array( 
			"id" => $sr_prefix."_portfoliolightbox",
		   	"hiding" => "external",	
		   	"type" => "hidinggroupstart"
		),
		
			array(  
				"label" => __("External URL", 'sr_xone_theme'),
				"desc" => __("Enter your url starting with http://", 'sr_xone_theme'),
				'id'    => $sr_prefix.'_portfolio_externalurl',  
				'type'  => 'text',
			),
			
			array(  
				"label" => __("Target", 'sr_xone_theme'),
				"desc" => "",
				'id'    => $sr_prefix.'_portfolio_externaltarget',  
				'type'  => 'select'  ,
				'option' => array( 
								array(	"name" => __("Same Page", 'sr_xone_theme'), 
										"value"=> "_self"),
								array(	"name" => __("New Page/Tab", 'sr_xone_theme'), 
										"value"=> "_blank")
								) 
			),
		
		array( 
			"id" => $sr_prefix."_portfoliolightbox",
		   	"type" => "hidinggroupend"
		)
 );
 
 
 
 $sr_meta_portfoliocategories = array(  
	array(  
		"label" => __("Category", 'sr_xone_theme'),
	   	"desc" => __("Choose the portfolio category you want to show for this page", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_portfoliocategories',  
	    'type'  => 'portfoliocategories'  
	),
	array(  
		"label" => __("Show Filter", 'sr_xone_theme'),
	   	"desc" => __("Do you want to show the Filter? If YES, please don't select 'All' for 'Category' above.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_portfoliofilter',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("Yes", 'sr_xone_theme'), 
							  	"value" => "yes"),
						array(	"name" => __("No", 'sr_xone_theme'), 
							  	"value"=> "no")
						)
	)
 );
 
 
  $sr_meta_portfoliofrontpage = array(  
	array(  
		"label" => __("Show Portfolio?", 'sr_xone_theme'),
	   	"desc" => __("If YES the portfolio items will be shown on start page dependingly the styling settings from theme options.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_portfoliofrontpage',  
	    'type'  => 'select-hiding',
		'option' => array( 
				array(	"name" => __("No", 'sr_xone_theme'), 
						"value"=> "no"),
				array(	"name" => __("Yes", 'sr_xone_theme'), 
						"value" => "yes")
				)
	),
		array( 
			"id" => $sr_prefix."_portfoliofrontpage",
		   	"hiding" => "yes",	
		   	"type" => "hidinggroupstart"
		),
		
			array(  
				"label" => "",
				"desc" => __("The above Background settings have no impact. <br>Make sure to choose the right Top/Bottom Padding (Recommendation = 0/0)<br>Also recommended to hide the page title.", 'sr_xone_theme'),
				'type'  => 'info'  
			),
			
			array(  
				"label" => __("Category", 'sr_xone_theme'),
				"desc" => __("Choose the portfolio category you want to show for this page", 'sr_xone_theme'),
				'id'    => $sr_prefix.'_portfoliofrontpagecategories',  
				'type'  => 'portfoliocategories'  
			),
			array(  
				"label" => __("Show Filter", 'sr_xone_theme'),
				"desc" => __("Do you want to show the Filter? If YES, please don't select 'All' for 'Category' above.", 'sr_xone_theme'),
				'id'    => $sr_prefix.'_portfoliofrontpagefilter',  
				'type'  => 'select'  ,
				'option' => array( 
								array(	"name" => __("No", 'sr_xone_theme'), 
										"value"=> "no"),
								array(	"name" => __("Yes", 'sr_xone_theme'), 
										"value" => "yes"),
								)
			),
		
		array( 
			"id" => $sr_prefix."_portfoliofrontpage",
		   	"type" => "hidinggroupend"
		)
 );
 


$sr_meta_slides = array(  
	array(  
		 "label" => __("Slides", 'sr_xone_theme'),
	   	 "desc"  => __("Upload as many slides you want, then drag and drop to arrange them.", 'sr_xone_theme'),
         'id'    => $sr_prefix.'_slides',  
         'type'  => 'sortable',
		 'options' => array( 
							array( "element" => "slide", "name" => __('Slide', 'sr_xone_theme'), "fields" => array(
								array(	"name" 	=> __('Title', 'sr_xone_theme'),
										"id"	=> 'title',
										"type"	=> 'text' ),
								array(	"name" 	=> __('Image', 'sr_xone_theme'),
										"id"	=> 'image',
										"type"	=> 'singleimage' ),
								array(	"name" 	=> __('Caption', 'sr_xone_theme'),
										"id"	=> 'caption',
										"type"	=> 'textarea' ),
								array(	"name" 	=> __('Placing Caption', 'sr_xone_theme'),
										"id"	=> 'placingcaption',
										"type"	=> 'select',
										"options" => array( 
														array(	"name" => __("Top Left", 'sr_xone_theme'), 
																"value" => "caption-top-left"),
														array(	"name" => __("Top Center", 'sr_xone_theme'), 
																"value" => "caption-top-center"),
														array(	"name" => __("Top Right", 'sr_xone_theme'), 
																"value" => "caption-top-right"),
														array(	"name" => __("Center Center", 'sr_xone_theme'), 
																"value" => "caption-center-center"),
														array(	"name" => __("Bottom Left", 'sr_xone_theme'), 
																"value" => "caption-bottom-left"),
														array(	"name" => __("Bottom Center", 'sr_xone_theme'), 
																"value" => "caption-bottom-center"),
														array(	"name" => __("Bottom Right", 'sr_xone_theme'), 
																"value" => "caption-bottom-right")
														)
										),
								array(	"name" 	=> __('Align Caption', 'sr_xone_theme'),
										"id"	=> 'aligncaption',
										"type"	=> 'select',
										"options" => array( 
														array(	"name" => __("Left", 'sr_xone_theme'), 
																"value" => "caption-align-left"),
														array(	"name" => __("Right", 'sr_xone_theme'), 
																"value" => "caption-align-right"),
														array(	"name" => __("Center", 'sr_xone_theme'), 
																"value" => "caption-align-center"),
														)
										),
								array(	"name" 	=> __('Link', 'sr_xone_theme'),
										"id"	=> 'link',
										"type"	=> 'text' )
								)
							),
		 
		 					array( "element" => "video", "name" => __('Video', 'sr_xone_theme'), "fields" => array(
								array(	"name" 	=> __('Title', 'sr_xone_theme'),
										"id"	=> 'title',
										"type"	=> 'text' ),
								array(	"name" 	=> __('Video code', 'sr_xone_theme'),
										"id"	=> 'videocode',
										"type"	=> 'textarea' )
								)
							))
     )
 );

$sr_meta_slidersettings = array(  
	array(  
		"label" => __("Adapt Slides", 'sr_xone_theme'),
	   	"desc" => __("Do you want the slides to adapt automatically to the slider height/width?", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_slideradapt',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("True", 'sr_xone_theme'), 
							  	"value" => "true"),
						array(	"name" => __("False", 'sr_xone_theme'), 
							  	"value"=> "false")
						)
	),
	array(  
		"label" => __("Auto Start", 'sr_xone_theme'),
	   	"desc" => __("Select true if you want the slider to start automatically on page loading.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_slideraustostart',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("True", 'sr_xone_theme'), 
							  	"value" => "true"),
						array(	"name" => __("False", 'sr_xone_theme'), 
							  	"value"=> "false")
						)
	),
	array(  
		"label" => __("Direction Nav", 'sr_xone_theme'),
	   	"desc" => __("Select true to enable the next/previous arrows.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_sliderdirectionnav',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("True", 'sr_xone_theme'), 
							  	"value" => "true"),
						array(	"name" => __("False", 'sr_xone_theme'), 
							  	"value"=> "false")
						)
	),
	array(  
		"label" => __("Control Nav", 'sr_xone_theme'),
	   	"desc" => __("Select true to enable the control navigation.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_slidercontrolnav',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("False", 'sr_xone_theme'), 
							  	"value"=> "false"),
						array(	"name" => __("True", 'sr_xone_theme'), 
							  	"value" => "true")
						)
	),
	array(  
		"label" => __("Smooth Height", 'sr_xone_theme'),
	   	"desc" => __("Select true to enable the smooth transition between slides of different heights.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_slidersmoothheight',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("False", 'sr_xone_theme'), 
							  	"value"=> "false"),
						array(	"name" => __("True", 'sr_xone_theme'), 
							  	"value" => "true")
						)
	),
	array(  
		"label" => __("Randomize", 'sr_xone_theme'),
	   	"desc" => __("Enable the random display of the different slides", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_sliderrandomize',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("False", 'sr_xone_theme'), 
							  	"value"=> "false"),
						array(	"name" => __("True", 'sr_xone_theme'), 
							  	"value" => "true")
						)
	),
	array(  
		"label" => __("Slideshow Speed", 'sr_xone_theme'),
	   	"desc" => __("Set the interval time between the slides, in milliseconds.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_sliderspeed',  
	    'type'  => 'text'
	),
	array(  
		"label" => __("Animation Duration", 'sr_xone_theme'),
	   	"desc" => __("Set the animation speed, in milliseconds.", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_slideranimationspeed',  
	    'type'  => 'text'
	)
 );


$sr_meta_sliderpagesettings = array(  
	array(  
		"label" => __("Display Content", 'sr_xone_theme'),
	   	"desc" => __("Do youw ant to display the content of the editor below the slider?", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_sliderpagesettings_content',  
	    'type'  => 'select'  ,
		'option' => array( 
						array(	"name" => __("No", 'sr_xone_theme'), 
							  	"value" => "0"),
						array(	"name" => __("Yes", 'sr_xone_theme'), 
							  	"value"=> "1")
						)
	),
	array(  
		"label" => __("Slider", 'sr_xone_theme'),
	   	"desc" => __("Choose the slider you want to show for this page", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_sliderpagesettings_slider',  
	    'type'  => 'slider_post'  
	)
 );

$sr_meta_contact = array(  
	array(  
		"label" => "",
	   	"desc" => __("Please choose this template only if you want to show a google map in fullwidth.", 'sr_xone_theme'),
	    'id'    => "",  
	    'type'  => 'info'  
	),
	array(  
		"label" => __("Google Map Latitude & Longitude", 'sr_xone_theme'),
	   	"desc" => __("Enter the google map latitude & longitude using this tool:<br>http://itouchmap.com/latlong.html", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_contact_latlong',  
	    'type'  => 'text'  
	),
	array(  
		"label" => __("Google Map Infotext", 'sr_xone_theme'),
	   	"desc" => __("This Text will be displayed on the Google Map", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_contact_info',  
	    'type'  => 'textarea'  
	),
	array(  
		"label" => __("Google Map Pin Icon", 'sr_xone_theme'),
	   	"desc" => __("", 'sr_xone_theme'),
	    'id'    => $sr_prefix.'_contact_icon',  
	    'type'  => 'image'  
	),
 );



/*-----------------------------------------------------------------------------------*/
/*	Callback Show fields
/*-----------------------------------------------------------------------------------*/

function show_meta_subtitle() {  
 	global $sr_meta_subtitle, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_subtitle_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_subtitle);  
}


function show_meta_pagesettings() {  
 	global $sr_meta_pagesettings, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_pagesettings_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_pagesettings);  
}


function show_meta_medias() {  
 	global $sr_meta_medias, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_medias_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_medias);  
}


function show_meta_gallery() {  
 	global $sr_meta_gallery, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_gallery_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_gallery);  
}


function show_meta_audio() {  
 	global $sr_meta_audio, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_audio_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
	show_fields($sr_meta_audio);  
}


function show_meta_audio_portfolio() {  
 	global $sr_meta_audio_portfolio, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_audio_portfolio_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
	show_fields($sr_meta_audio_portfolio);  
}


function show_meta_video() {  
 	global $sr_meta_video, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_video_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_video);  
}

function show_meta_video_portfolio() {  
 	global $sr_meta_video_portfolio, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_video_portfolio_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_video_portfolio);  
}


function show_meta_quote() {  
 	global $sr_meta_quote, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_quote_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_quote);  
}


function show_meta_link() {  
 	global $sr_meta_link, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_link_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_link);  
}


function show_meta_portfoliosingle() {  
 	global $sr_meta_portfoliosingle, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_portfoliosingle_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_portfoliosingle);  
}


function show_meta_portfoliocategories() {  
 	global $sr_meta_portfoliocategories, $post;
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_portfoliocategories_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_portfoliocategories);  
}

function show_meta_portfoliofrontpage() {  
 	global $sr_meta_portfoliofrontpage, $post;
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_portfoliofrontpage_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_portfoliofrontpage);  
}

function show_meta_slides() {  
 	global $sr_meta_slides, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_slides_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_slides);  
}

function show_meta_slidersettings() {  
 	global $sr_meta_slidersettings, $post;  
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_slidersettings_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    show_fields($sr_meta_slidersettings);  
}

function show_meta_sliderpagesettings() {  
 	global $sr_meta_sliderpagesettings, $post;
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_sliderpagesettings_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_sliderpagesettings);  
}

function show_meta_contact() {  
 	global $sr_meta_contact, $post;
 	// Use nonce for verification  
 	echo '<input type="hidden" name="meta_contact_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
   	show_fields($sr_meta_contact);  
}



/*-----------------------------------------------------------------------------------*/
/*	Show fields
/*-----------------------------------------------------------------------------------*/
function show_fields($a) {
 	global $post; 
	
	// Begin the field table and loop  
    echo '<table class="form-table">';  
    foreach ($a as $field) {  
		
		if ($field['type'] == 'info') {
			echo '<tr><th></th><td><br>------------------------<br><b>'.$field['desc'].'</b><br>------------------------</td></tr>';
		} else if ($field['type'] == 'hidinggroupstart') {
			echo '<tbody class="hidinggroup hide'.$field['id'].' '.$field['id'].'_'.$field['hiding'].'">';
		} else if ($field['type'] !== 'hidinggroupend') {
			
    	// get value of this field if it exists for this post  
    	$meta = get_post_meta($post->ID, $field['id'], true);  
		if ($meta == '' && (isset($field['default']) && $field['default'] !== '')) { $meta = $field['default']; }
    	// begin a table row with  
    	echo '<tr> 
    			<th><label for="'.$field['id'].'"><b>'.$field['label'].'</b></label><br /><span class="sr_description">'.$field['desc'].'</span></th> 
    			<td>';  
    			switch($field['type']) {  
                    					
					// text
    				case 'text':  
						echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />';  
					break;
					
					// textarea
					case 'textarea':  
					    echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>';  
					break;
										
					// select
					case 'select':  
					    echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
						$i = 0;
						foreach ($field['option'] as $var) {
							if ($meta == $var['value']) { $selected = 'selected="selected"'; } else { if ($meta == '' && $i == 0) { $selected = 'selected="selected"'; } else { $selected = '';  } }
							echo '<option value="'.$var['value'].'" '.$selected.' /> '.$var['name'].'</option>';
						$i++;	
						}			  
						echo '</select>';   
					break;
					
					// select-hiding
					case 'select-hiding':  
					    echo '<div class="select-hiding">
								<select name="'.$field['id'].'" id="'.$field['id'].'">';
						$i = 0;
						foreach ($field['option'] as $var) {
							if ($meta == $var['value']) { $selected = 'selected="selected"'; } else { if ($meta == '' && $i == 0) { $selected = 'selected="selected"'; } else { $selected = '';  } }
							echo '<option value="'.$var['value'].'" '.$selected.' /> '.$var['name'].'</option>';
						$i++;	
						}			  
						echo '</select></div>';   
					break;
					
					//color
					case "color":
						echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" class="sr-color-field" />';
					break;
					
					// image  
					case 'image':  
						echo '	<div class="single-image">
								<input class="upload_image" type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
								<input class="add_singleimage sr-button" type="button" value="Add Image" /><br />
								<span class="preview_image"><img class="'.$field['id'].'"  src="'.$meta.'" alt="" /></span>
						</div>';		
					break;
					
					// portfoliocategories
					case 'portfoliocategories':  
						$categories = get_terms( 'portfolio_category');
						 
					    echo '<select name="'.$field['id'].'[]" id="'.$field['id'].'" size="5" multiple>';
					    if ($meta[0] == 'all' || $meta[0] == '') { echo '<option value="" selected="selected">All</option>'; } 
						else { echo '<option value="">All</option>'; }
						$i = 0;
						foreach ($categories as $cat) {
							$selected = '';
							foreach ($meta as $m) { if (term_exists( $m , 'portfolio_category' ) && $m == $cat->slug) { $selected = 'selected="selected"'; } } 
							echo '<option value="'.$cat->slug.'" '.$selected.'>'.$cat->name.'</option>';
						$i++;	
						}			  
						echo '</select>';   
					break;
					
					//gallery_post
					case "gallery_post":
						echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
							  $gal = get_posts( array('post_type' => 'gallery') );
							  foreach ( $gal as $g ) {
								if ($g->ID == $value) { $active = 'selected="selected"'; }  else { $active = ''; } 
								$option = '<option value="' . $g->ID . '" '.$active.'>';
								$option .= $g->post_title;
								$option .= '</option>';
								echo $option;
							  }
						echo '</select>';
					break;
					
					//slider_post
					case "slider_post":
						echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
							  $gal = get_posts( array('post_type' => 'slider') );
							  foreach ( $gal as $g ) {
								if ($g->ID == $value) { $active = 'selected="selected"'; }  else { $active = ''; } 
								$option = '<option value="' . $g->ID . '" '.$active.'>';
								$option .= $g->post_title;
								$option .= '</option>';
								echo $option;
							  }
						echo '</select>';
					break;
					
					// gallery  
					case 'gallery':  
						echo '<div id="sortable'.$field['id'].'" class="sortable-medias">';
						echo '	<input class="add_image button" type="button" value="'.__("Add Images", 'sr_xone_theme').'" />
								<textarea name="'.$field['id'].'" style="display: none;" class="media-value">'.$meta.'</textarea>';
						echo '<ul id="sortable" class="media-elements">';		
					    if ($meta) {
							$meta = explode('|||', $meta);
					        foreach($meta as $row) {
								$object = explode('~~', $row);
								$type = $object[0];
								$val = $object[1];
								if ($type == 'image') {
									$image = wp_get_attachment_image_src($val, 'thumbnail'); $image = $image[0];
									echo '<li class="ui-state-default" title="image"><img src="'.$image.'" class="'.$val.'"><div class="delete"><span></span></div></li>';
								} else if ($type == 'video') {
									echo '<li class="ui-state-default" title="video"><div class="move">move</div><textarea name="videovalue">'.$val.'</textarea><div class="delete"><span></span></div></li>';
								}
					        }  
					    }  
					    echo '</ul>';
						echo '</div>';				
					break;
					
					// medias  
					case 'medias':
						echo '<div id="sortable'.$field['id'].'" class="sortable-medias">';
						echo '	<input class="add_image button" type="button" value="'.__("Add Images", 'sr_xone_theme').'" /> 
								<input class="add_video button" type="button" value="'.__("Add Video", 'sr_xone_theme').'" />
								<textarea name="'.$field['id'].'" style="display: none;" class="media-value">'.$meta.'</textarea>';
						echo '<ul id="sortable" class="media-elements">';		
					    if ($meta) {
							$meta = explode('|||', $meta);
					        foreach($meta as $row) {
								$object = explode('~~', $row);
								$type = $object[0];
								$val = $object[1];
								if ($type == 'image') {
									$image = wp_get_attachment_image_src($val, 'thumbnail'); $image = $image[0];
									echo '<li class="ui-state-default" title="image"><img src="'.$image.'" class="'.$val.'"><div class="delete"><span></span></div></li>';
								} else if ($type == 'video') {
									echo '<li class="ui-state-default" title="video"><div class="move">move</div><textarea name="videovalue">'.$val.'</textarea><div class="delete"><span></span></div></li>';
								}
					        }  
					    }  
					    echo '</ul>';
						echo '</div>';
					break;
					
					// sortable
    				case 'sortable':
						echo '<div id="sortable-elements">';
						
						// Create the selectbox + Count + Hiddenfield
						$hiddenfields = '';
						$elements = '';
						$count = 0;
						foreach ($field['options'] as $option) {
							$hiddenfields .= '<div class="'.$option['element'].'">
												<li class="ui-state-default" title="'.$option['element'].'">
												<div class="edit"><span></span></div><div class="move">'.$option['name'].' ()</div><div class="delete"><span></span></div>
												<div class="editcontent">';
							foreach ($option['fields'] as $f) {
								switch($f['type']) { 
									case 'text':
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
											<div class="rowvalue"><input type="text" name="'.$f['id'].'" class="'.$f['id'].'" value=""></div>
										</div>';
									break;
									case 'textarea':
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
											<div class="rowvalue"><textarea name="'.$f['id'].'" class="'.$f['id'].'"></textarea></div>
										</div>';
									break;
									case 'singleimage':
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
											<div class="rowvalue"><input type="text" name="'.$f['id'].'" class="'.$f['id'].'" value="">
												<input type="button" name="add-singleimage" class="add_singleimage" value="'.__('Add Image', 'sr_xone_theme').'"></div>
										</div>';
									break;
									case 'select':
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>';
										$hiddenfields .= '<div class="rowvalue"><select name="'.$f['id'].'" class="'.$f['id'].'">';	
										$y = 0;
										foreach ($f['options'] as $var) {
											$hiddenfields .= '<option value="'.$var['value'].'" /> '.$var['name'].'</div>';
										$y++;	
										}			  
										$hiddenfields .= '</select></div></div>';   
									break;
									case 'sliderselect':  
										$hiddenfields .= '<div class="row">
											<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>';
										$hiddenfields .= '<div class="rowvalue"><select name="'.$f['id'].'" class="'.$f['id'].'">
												<option value="no">'.__("Select Slider", 'sr_xone_theme').' ...</option>';
										  $pages = get_posts( array( 'post_type' => 'slider' ) ); 
										  foreach ( $pages as $page ) {
											$hiddenfields .= '<option value="' . $page->ID . '">'.$page->post_title.'</option>';
										  }
										$hiddenfields .= '</select></div></div>';   
									break;
								} # END switch $f
							}					
							$hiddenfields .= '</div>
												</li>
											</div>';
							
							$elements .= '<option value="'.$option['element'].'">'.$option['name'].'</option>';
							$count++;
							}
						if ($count > 1) { $elements = '<select name="element-sortable" class="element-sortable">'.$elements.'</select>'; }
						else { $elements = '<select name="element-sortable" class="element-sortable" style="display:none;">'.$elements.'</select>'; }
						// END	
						
						// display the saved values
						$values = explode('|||', $meta);
						echo '<ul id="sortable" class="visual-elements visual-slides">';
						foreach ($values as $v) {
							$item = explode('|', $v);
							
							foreach ($field['options'] as $option) {
								if ($option['element'] == $item[0]) {
									$value = explode('~~', $item[1]);
									
									echo '<li class="ui-state-default" title="'.$option['element'].'"><div class="edit"><span></span></div><div class="move">'.$option['name'].' ('.$value[0].')</div><div class="delete"><span></span></div>';
									echo '<div class="editcontent">';
									
									$i = 0;
									foreach ($option['fields'] as $f) {
										switch($f['type']) { 
											case 'text':
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
													<div class="rowvalue"><input type="text" name="'.$f['id'].'" class="'.$f['id'].'" value="'.$value[$i].'"></div>
												</div>';
											break;
											case 'textarea':
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
													<div class="rowvalue"><textarea name="'.$f['id'].'" class="'.$f['id'].'">'.$value[$i].'</textarea></div>
												</div>';
											break;
											case 'singleimage':
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>
													<div class="rowvalue"><input type="text" name="'.$f['id'].'" class="'.$f['id'].'" value="'.$value[$i].'">
														<input type="button" name="add-singleimage" class="add_singleimage" value="'.__('Add Image', 'sr_xone_theme').'"></div>
												</div>';
											break;
											case 'select':
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>';
												echo '<div class="rowvalue"><select name="'.$f['id'].'" class="'.$f['id'].'">';	
												$y = 0;
												foreach ($f['options'] as $var) {
													if ($value[$i] == $var['value']) { $selected = 'selected="selected"'; 
													} else { if ($value[$i] == '' && $y == 0) { $selected = 'selected="selected"'; } else { $selected = '';  } }
													echo '<option value="'.$var['value'].'" '.$selected.' /> '.$var['name'].'</div>';
												$y++;	
												}			  
												echo '</select></div></div>';   
											break;
											case 'sliderselect':  
												echo '<div class="row">
													<div class="rowtitle"><label for="'.$f['id'].'">'.$f['name'].'</label></div>';
												echo '<div class="rowvalue"><select name="'.$f['id'].'" class="'.$f['id'].'">
														<option value="no">'.__("Select Slider", 'sr_xone_theme').' ...</option>';
												  $pages = get_posts( array( 'post_type' => 'slider' ) ); 
												  foreach ( $pages as $page ) {
													if ($page->ID == $value[$i]) { $active = 'selected="selected"'; }  else { $active = ''; } 
													$option = '<option value="' . $page->ID . '" '.$active.'>';
													$option .= $page->post_title;
													$option .= '</option>';
													echo $option;
												  }
												echo '</select></div></div>';   
											break;
										} # END switch $f
										$i++;	
									}
									echo '</div></li>';
								}	
							}
						}
						echo '</ul>';
						// END
						
						echo '	<input type="button" name="add-element" class="add-element add-slide" value="'.__('Add Item', 'sr_xone_theme').'"/>
								'.$elements.'
								<textarea name="'.$field['id'].'" id="'.$field['id'].'" class="value-elements value-slides">'.$meta.'</textarea>';
						
						// HIDDEN ELEMENTS FOR JS
						echo '<div id="hiddenelements" style="display: none;">'.$hiddenfields.'</div>';
						
						echo '</div>';
					break;
					
					
					 
                 } //end switch  
    	 echo '</td></tr>';  
		} // END if info
		
		if ($field['type'] == 'hidinggroupend') {
			echo '</tbody>';
		}
		
	} // end foreach  
	echo '</table>'; // end table
}



/*-----------------------------------------------------------------------------------*/
/*	Save Datas
/*-----------------------------------------------------------------------------------*/

function save_meta_subtitle($post_id) {  
    global $sr_meta_subtitle;  
  
    // verify nonce  
    if (!isset($_POST['meta_subtitle_nonce']) || !wp_verify_nonce($_POST['meta_subtitle_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_subtitle as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_subtitle');


function save_meta_pagesettings($post_id) {  
    global $sr_meta_pagesettings;  
  
    // verify nonce  
    if (!isset($_POST['meta_pagesettings_nonce']) || !wp_verify_nonce($_POST['meta_pagesettings_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_pagesettings as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_pagesettings');


function save_meta_medias($post_id) {  
    global $sr_meta_medias;  
  
    // verify nonce  
    if (!isset($_POST['meta_medias_nonce']) || !wp_verify_nonce($_POST['meta_medias_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_medias as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_medias');


function save_meta_gallery($post_id) {  
    global $sr_meta_gallery;  
  
    // verify nonce  
    if (!isset($_POST['meta_gallery_nonce']) || !wp_verify_nonce($_POST['meta_gallery_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_gallery as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_gallery');



function save_meta_audio($post_id) {  
    global $sr_meta_audio;  
  
    // verify nonce  
    if (!isset($_POST['meta_audio_nonce']) || !wp_verify_nonce($_POST['meta_audio_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_audio as $field) {  
        if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
		}  
    } // end foreach  
}  
add_action('save_post', 'save_meta_audio');



function save_meta_audio_portfolio($post_id) {  
    global $sr_meta_audio_portfolio;  
  
    // verify nonce  
    if (!isset($_POST['meta_audio_portfolio_nonce']) || !wp_verify_nonce($_POST['meta_audio_portfolio_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_audio_portfolio as $field) {  
        if ($field['type'] !== 'info') {
		$old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        } 
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_audio_portfolio');



function save_meta_video($post_id) {  
    global $sr_meta_video;  
  
    // verify nonce  
    if (!isset($_POST['meta_video_nonce']) || !wp_verify_nonce($_POST['meta_video_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_video as $field) {
		if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_video');



function save_meta_video_portfolio($post_id) {  
    global $sr_meta_video_portfolio;  
  
    // verify nonce  
    if (!isset($_POST['meta_video_portfolio_nonce']) || !wp_verify_nonce($_POST['meta_video_portfolio_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_video_portfolio as $field) {
		if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_video_portfolio');



function save_meta_quote($post_id) {  
    global $sr_meta_quote;  
  
    // verify nonce  
    if (!isset($_POST['meta_quote_nonce']) || !wp_verify_nonce($_POST['meta_quote_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_quote as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_quote');



function save_meta_link($post_id) {  
    global $sr_meta_link;  
  
    // verify nonce  
    if (!isset($_POST['meta_link_nonce']) || !wp_verify_nonce($_POST['meta_link_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_link as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_meta_link');


function save_meta_portfoliosingle($post_id) {  
    global $sr_meta_portfoliosingle;  
  
    // verify nonce  
    if (!isset($_POST['meta_portfoliosingle_nonce']) || !wp_verify_nonce($_POST['meta_portfoliosingle_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_portfoliosingle as $field) {  
		if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
		}
    } // end foreach 
}  
add_action('save_post', 'save_meta_portfoliosingle');


function save_meta_portfoliocategories($post_id) {  
    global $sr_meta_portfoliocategories;  
  
    // verify nonce  
    if (!isset($_POST['meta_portfoliocategories_nonce']) || !wp_verify_nonce($_POST['meta_portfoliocategories_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_portfoliocategories as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
		if (isset($_POST[$field['id']])) {
			$new = $_POST[$field['id']];  
			if ($new !== '' && $new != $old) {  
				update_post_meta($post_id, $field['id'], $new);  
			} elseif ('' == $new && $old) {  
				delete_post_meta($post_id, $field['id'], $old);  
			} 
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_portfoliocategories');

function save_meta_portfoliofrontpage($post_id) {  
    global $sr_meta_portfoliofrontpage;  
  
    // verify nonce  
    if (!isset($_POST['meta_portfoliofrontpage_nonce']) || !wp_verify_nonce($_POST['meta_portfoliofrontpage_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_portfoliofrontpage as $field) {  
        if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
		} 
    } // end foreach  
}  
add_action('save_post', 'save_meta_portfoliofrontpage');


function save_meta_slides($post_id) {  
    global $sr_meta_slides;  
  
    // verify nonce  
    if (!isset($_POST['meta_slides_nonce']) || !wp_verify_nonce($_POST['meta_slides_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_slides as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
		if (isset($_POST[$field['id']])) {
			$new = $_POST[$field['id']];  
			if ($new !== '' && $new != $old) {  
				update_post_meta($post_id, $field['id'], $new);  
			} elseif ('' == $new && $old) {  
				delete_post_meta($post_id, $field['id'], $old);  
			} 
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_slides');

function save_meta_slidersettings($post_id) {  
    global $sr_meta_slidersettings;  
  
    // verify nonce  
    if (!isset($_POST['meta_slidersettings_nonce']) || !wp_verify_nonce($_POST['meta_slidersettings_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($sr_meta_slidersettings as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
		if (isset($_POST[$field['id']])) {
			$new = $_POST[$field['id']];  
			if ($new !== '' && $new != $old) {  
				update_post_meta($post_id, $field['id'], $new);  
			} elseif ('' == $new && $old) {  
				delete_post_meta($post_id, $field['id'], $old);  
			} 
		}
    } // end foreach  
}  
add_action('save_post', 'save_meta_slidersettings');


function save_meta_sliderpagesettings($post_id) {  
    global $sr_meta_sliderpagesettings;  
  
    // verify nonce  
    if (!isset($_POST['meta_sliderpagesettings_nonce']) || !wp_verify_nonce($_POST['meta_sliderpagesettings_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
   // loop through fields and save the data  
    foreach ($sr_meta_sliderpagesettings as $field) {
		if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        if (isset($_POST[$field['id']])) {
			$new = $_POST[$field['id']];  
			if ($new !== '' && $new != $old) {  
				update_post_meta($post_id, $field['id'], $new);  
			} elseif ('' == $new && $old) {  
				delete_post_meta($post_id, $field['id'], $old);  
			} 
		}  
		}
    } // end foreach   
}  
add_action('save_post', 'save_meta_sliderpagesettings');


function save_meta_contact($post_id) {  
    global $sr_meta_contact;  
  
    // verify nonce  
    if (!isset($_POST['meta_contact_nonce']) || !wp_verify_nonce($_POST['meta_contact_nonce'], basename(__FILE__))) 
        return $post_id; 
		
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;
		
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
   // loop through fields and save the data  
    foreach ($sr_meta_contact as $field) {
		if ($field['type'] !== 'info') {
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new !== '' && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
		}
    } // end foreach   
}  
add_action('save_post', 'save_meta_contact');



/*-----------------------------------------------------------------------------------*/
/*	Register and load function javascript
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_admin_meta_js' ) ) {
    function sr_admin_meta_js($hook) {
		global $pagenow;

		wp_register_script('functions-script', get_template_directory_uri() . '/theme-admin/functions/js/functions_script.js', 'jquery');
		wp_enqueue_script('functions-script');
		
		if ( 
			(isset($_GET['post']) && (isset($_GET['action']) && $_GET['action'] == 'edit') && (get_post_type( $_GET['post'] )  == 'post' || get_post_type( $_GET['post'] )  == 'page') )
			|| ($pagenow == 'post-new.php' && (!isset($_GET['post_type']) || $_GET['post_type'] == 'page')) ) {
			wp_register_script('customfields-script', get_template_directory_uri() . '/theme-admin/functions/js/customfields_script.js', 'jquery');
			wp_enqueue_script('customfields-script');
		}
		
		wp_register_style('functions-style', get_template_directory_uri() . '/theme-admin/functions/css/functions.css');
		wp_enqueue_style('functions-style');
    }
    
    add_action('admin_enqueue_scripts','sr_admin_meta_js',10,1);
}


?>