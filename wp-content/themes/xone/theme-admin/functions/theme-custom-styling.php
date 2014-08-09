<?php

/*-----------------------------------------------------------------------------------

	CUSTOM STYLING OPTIONS

-----------------------------------------------------------------------------------*/
global $sr_prefix;



/*-----------------------------------------------------------------------------------*/
/*	Logo Height Styling
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_custom_style_logo' ) ) {
	function sr_custom_style_logo() {
		global $sr_prefix;
		
		$return='';
		if (get_option($sr_prefix.'_logo')) {
			$logoId =  sr_get_attachment_id_from_src(get_option($sr_prefix.'_logo'));
			$logodata = wp_get_attachment_image_src( $logoId, "full" );
			$logoHeight = $logodata[2];
			
			$return .= '#logo {	height: '.$logoHeight.'px; }';
			if (get_option($sr_prefix.'_headerlayout') !== 'logo-top'){
			$return .= 'nav#main-nav > ul > li > a  { line-height: '.$logoHeight.'px; } nav#main-nav ul li .sub-menu { top: '.($logoHeight+40).'px; }';  
			}
		} else {
			$return .= 'nav#main-nav > ul > li > a  { line-height: 60px; } nav#main-nav ul li .sub-menu { top: 100px; }';
		}
		
		if (get_option($sr_prefix.'_footerlogo')) {
			$footerLogoId =  sr_get_attachment_id_from_src(get_option($sr_prefix.'_footerlogo'));
			$footerLogoData = wp_get_attachment_image_src( $footerLogoId, "full" );
			$footerLogoHeight = $footerLogoData[2];
			$return .= ' .footer-logo { height: '.$footerLogoHeight.'px; }';  
		}
		
		if (get_option($sr_prefix.'_overlaylogo')) {
			$overlayLogoId =  sr_get_attachment_id_from_src(get_option($sr_prefix.'_overlaylogo'));
			$overlayLogoData = wp_get_attachment_image_src( $overlayLogoId, "full" );
			$overlayLogoHeight = $overlayLogoData[2];
			$return .= '#overlay-logo { height: '.$overlayLogoHeight.'px; }';  
		}
		
		return $return;
	}
}
		
		
		
		
/*-----------------------------------------------------------------------------------*/
/*	Color Styling
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_custom_style_color' ) ) {
	function sr_custom_style_color() {
		global $sr_prefix;
		
		/*
		GENERAL COLOR
		*/
		$main_color = '#4da5f5';
		if (get_option($sr_prefix.'_customcolor')){ $main_color = get_option($sr_prefix.'_customcolor'); } 
		
		$return = '
input[type=submit]:hover { background-color: '.$main_color.'; }
a { color: '.$main_color.'; }
nav#main-nav > ul > li:hover > a { color: '.$main_color.'; }
nav#main-nav > ul > li.current-menu-item > a, nav#main-nav > ul > li.current-menu-ancestor > a { color: '.$main_color.'; }
nav#menu-controls > ul > li.current-menu-item > a { border-color: '.$main_color.'; }
nav#menu-controls > ul > li a:hover span.c-dot  { background-color: '.$main_color.'; }
.portfolio-name a:hover { color: '.$main_color.'; }
.filter li a.active, .filter li a:hover { border-color: '.$main_color.'; }
.blog-headline .post-name a:hover { color: '.$main_color.'; }
.readmore-button:hover { border-color: '.$main_color.'; }
a.sr-button3 { border-color: '.$main_color.'; color: '.$main_color.'; }
a.sr-button3:hover { background: '.$main_color.'; }	
a.sr-button5 {	border-color: '.$main_color.'; background: '.$main_color.'; }
a.sr-button5:hover { border-color: '.$main_color.'; background: '.$main_color.'; }
.iconbox .fa { color: '.$main_color.'; }
.pricing-accent .price { color: '.$main_color.'; }
.tabs ul.tab-nav li a:hover, .tabs ul.tab-nav li a.active { border-color: '.$main_color.'; }
.toggle-item .toggle-title:hover .toggle-icon .fa, .toggle-item .toggle-active .toggle-icon .fa { color: '.$main_color.' !important; }
.skill .skill-bar .skill-active { background-color: '.$main_color.'; }
.widget ul li a:hover { color: '.$main_color.'; }
.colored { color: '.$main_color.'; }

.tp-caption.xone-title-big-colored, .tp-caption.xone-title-medium-colored, .tp-caption.xone-title-small-colored, .tp-caption.xone-title-mini-colored, .tp-caption.xone-text-colored { color: '.$main_color.';	}

';

		/*
		HEADER COLOR
		*/
		if (get_option($sr_prefix.'_headerbackground') == 'custom' && get_option($sr_prefix.'_headerbackgroundcolor')){ 
			$header_color = get_option($sr_prefix.'_headerbackgroundcolor'); 
			$return .= 'header { background: '.$header_color.'; } ';
			if (get_option($sr_prefix.'_headerbackgroundhovercolor')){  
				$return .= 'nav#main-nav > ul > li:hover > a, nav#main-nav > ul > li.current-menu-item > a, nav#main-nav > ul > li.current-menu-ancestor > a { color: '.get_option($sr_prefix.'_headerbackgroundhovercolor').' !important; }
				nav#menu-controls > ul > li.current-menu-item > a { border-color: '.get_option($sr_prefix.'_headerbackgroundhovercolor').' !important; }
				nav#menu-controls > ul > li:hover a span.c-dot  { background: '.get_option($sr_prefix.'_headerbackgroundhovercolor').' !important; }';
			}
		} 

	return $return;
		
	}
}




/*-----------------------------------------------------------------------------------*/
/*	Typorgraphy Styling
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_custom_style_typography' ) ) {
	function sr_custom_style_typography() {
		global $sr_prefix;
		
		$headerfonts = array('body','h1','h2','h3','h4','h5','h6');
		
		// DEFAULT FONTS
		$return = '';
		foreach($headerfonts as $font) {
			$family = get_option($sr_prefix.'_'.$font.'font-font');
			$weight = get_option($sr_prefix.'_'.$font.'font-weight');
			$boldweight = get_option($sr_prefix.'_'.$font.'font-boldweight');
			$size = get_option($sr_prefix.'_'.$font.'font-size');
			$lineheight = get_option($sr_prefix.'_'.$font.'font-height');
			if (!$lineheight) $lineheight = intval(intval($size)*1.5).'px';
			$spacing = get_option($sr_prefix.'_'.$font.'font-spacing');
			$transform = get_option($sr_prefix.'_'.$font.'font-transform');
			
			$return .= $font.', .section-title '.$font.' {';
				if ($family) { $return .= 'font-family: '.$family.';'; }
				if ($weight) { $return .= 'font-weight: '.$weight.';'; }
				if ($size) { $return .= 'font-size: '.$size.';line-height: '.$lineheight.';'; }
				if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
				if ($transform) { $return .= 'text-transform: '.$transform.';'; }
			$return .= '}';
			if ($boldweight) { $return .= $font.' strong,'.$font.' b { font-weight: '.$boldweight.'; }'; }
			
			if ($font == 'body') {
			$return .= 'input[type=text], input[type=password], input[type=email], textarea { font-family: '.$family.'; font-weight: '.$weight.'; }';	
			}
			
			if ($font == 'h4') {
				$return .= '#reply-title { ';
					if ($family) { $return .= 'font-family: '.$family.';'; }
					if ($weight) { $return .= 'font-weight: '.$weight.';'; }
					if ($size) { $return .= 'font-size: '.$size.';line-height: '.$lineheight.';'; }
					if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
					if ($transform) { $return .= 'text-transform: '.$transform.';'; }
				$return .= '}';	
			}
			
			if ($font == 'h6') {
				$return .= '.filter li a, .readmore-button, .tabs ul.tab-nav li a { ';
					if ($family) { $return .= 'font-family: '.$family.';'; }
					if ($boldweight) { $return .= 'font-weight: '.$boldweight.';'; }
				$return .= '}';	
			}
			
			// Rev Slider Captions
			if ($font == 'h1') {
				$return .= '.tp-caption.xone-title-big-dark, .tp-caption.xone-title-big-white, .tp-caption.xone-title-big-colored { ';
					if ($family) { $return .= 'font-family: '.$family.';'; }
					if ($weight) { $return .= 'font-weight: '.$weight.';'; }
					if ($size) { $return .= 'font-size: '.$size.';line-height: '.$lineheight.';'; }
					if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
					if ($transform) { $return .= 'text-transform: '.$transform.';'; }
				$return .= '}';
				if ($boldweight) { $return .= '.tp-caption.xone-title-big-dark strong, .tp-caption.xone-title-big-white strong, .tp-caption.xone-title-big-colored strong, .tp-caption.xone-title-big-dark b, .tp-caption.xone-title-big-white b, .tp-caption.xone-title-big-colored b { font-weight: '.$boldweight.'; }'; }	
			} else if ($font == 'h2') {
				$return .= '.tp-caption.xone-title-medium-dark, .tp-caption.xone-title-medium-white, .tp-caption.xone-title-medium-colored { ';
					if ($family) { $return .= 'font-family: '.$family.';'; }
					if ($weight) { $return .= 'font-weight: '.$weight.';'; }
					if ($size) { $return .= 'font-size: '.$size.';line-height: '.$lineheight.';'; }
					if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
					if ($transform) { $return .= 'text-transform: '.$transform.';'; }
				$return .= '}';
				if ($boldweight) { $return .= '.tp-caption.xone-title-medium-dark strong, .tp-caption.xone-title-medium-white strong, .tp-caption.xone-title-medium-colored strong, .tp-caption.xone-title-medium-dark b, .tp-caption.xone-title-medium-white b, .tp-caption.xone-title-medium-colored b { font-weight: '.$boldweight.'; }'; }
			} else if ($font == 'h3') {
				$return .= '.tp-caption.xone-title-small-dark, .tp-caption.xone-title-small-white, .tp-caption.xone-title-small-colored { ';
					if ($family) { $return .= 'font-family: '.$family.';'; }
					if ($weight) { $return .= 'font-weight: '.$weight.';'; }
					if ($size) { $return .= 'font-size: '.$size.';line-height: '.$lineheight.';'; }
					if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
					if ($transform) { $return .= 'text-transform: '.$transform.';'; }
				$return .= '}';
				if ($boldweight) { $return .= '.tp-caption.xone-title-small-dark strong, .tp-caption.xone-title-small-white strong, .tp-caption.xone-title-small-colored strong, .tp-caption.xone-title-small-dark b, .tp-caption.xone-title-small-white b, .tp-caption.xone-title-small-colored b { font-weight: '.$boldweight.'; }'; }
			} else if ($font == 'h5') {
				$return .= '.tp-caption.xone-title-mini-dark, .tp-caption.xone-title-mini-white, .tp-caption.xone-title-mini-colored { ';
					if ($family) { $return .= 'font-family: '.$family.';'; }
					if ($weight) { $return .= 'font-weight: '.$weight.';'; }
					if ($size) { $return .= 'font-size: '.$size.';line-height: '.$lineheight.';'; }
					if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
					if ($transform) { $return .= 'text-transform: '.$transform.';'; }
				$return .= '}';
				if ($boldweight) { $return .= '.tp-caption.xone-title-mini-dark strong, .tp-caption.xone-title-mini-white strong, .tp-caption.xone-title-mini-colored strong, .tp-caption.xone-title-mini-dark b, .tp-caption.xone-title-mini-white b, .tp-caption.xone-title-mini-colored b { font-weight: '.$boldweight.'; }'; }
			}
			
		}
		// DEFAULT FONTS
		
		// MAIN SECTION TITLE
			$family = get_option($sr_prefix.'_mainsectionfont-font');
			$weight = get_option($sr_prefix.'_mainsectionfont-weight');
			$boldweight = get_option($sr_prefix.'_mainsectionfont-boldweight');
			$size = get_option($sr_prefix.'_mainsectionfont-size');
			$lineheight = intval(intval($size)*1.3).'px';
			$spacing = get_option($sr_prefix.'_mainsectionfont-spacing');
			$transform = get_option($sr_prefix.'_mainsectionfont-transform');
			
			$return .= '.section-title h2 {';
				if ($family) { $return .= 'font-family: '.$family.';'; }
				if ($weight) { $return .= 'font-weight: '.$weight.';'; }
				if ($size) { $return .= 'font-size: '.$size.';line-height: '.$lineheight.';'; }
				if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
				if ($transform) { $return .= 'text-transform: '.$transform.';'; }
			$return .= '}';
			if ($boldweight) { $return .= '.section-title h2 { font-weight: '.$boldweight.'; }'; }
			
			$return .= '.section-title h1 {';
				if ($family) { $return .= 'font-family: '.$family.';'; }
				if ($weight) { $return .= 'font-weight: '.$weight.';'; }
				if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
				if ($transform) { $return .= 'text-transform: '.$transform.';'; }
			$return .= '}';
		// MAIN SECTION TITLE
		
		// SUB SECTION TITLE
			$family = get_option($sr_prefix.'_subsectionfont-font');
			$weight = get_option($sr_prefix.'_subsectionfont-weight');
			$boldweight = get_option($sr_prefix.'_subsectionfont-boldweight');
			$size = get_option($sr_prefix.'_subsectionfont-size');
			$lineheight = intval(intval($size)*1.3).'px';
			$spacing = get_option($sr_prefix.'_subsectionfont-spacing');
			$transform = get_option($sr_prefix.'_subsectionfont-transform');
			
			$return .= '.subtitle {';
				if ($family) { $return .= 'font-family: '.$family.';'; }
				if ($weight) { $return .= 'font-weight: '.$weight.';'; }
				if ($size) { $return .= 'font-size: '.$size.';line-height: '.$lineheight.';'; }
				if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
				if ($transform) { $return .= 'text-transform: '.$transform.';'; }
			$return .= '}';
			if ($boldweight) { $return .= '.subtitle h2 { font-weight: '.$boldweight.'; }'; }
			
			$return .= 'blockquote, #blog-comments .comment-date { ';
				if ($family) { $return .= 'font-family: '.$family.';'; }
				if ($weight) { $return .= 'font-weight: '.$weight.';'; }
			$return .= '}';
		// SUB SECTION TITLE
		
		// NAVIGATION
			$family = get_option($sr_prefix.'_navigationfont-font');
			$weight = get_option($sr_prefix.'_navigationfont-weight');
			$boldweight = get_option($sr_prefix.'_navigationfont-boldweight');
			$size = get_option($sr_prefix.'_navigationfont-size');
			$spacing = get_option($sr_prefix.'_navigationfont-spacing');
			$transform = get_option($sr_prefix.'_navigationfont-transform');
			
			$return .= 'nav#main-nav > ul > li > a, nav#responsive-nav > ul li > a {';
				if ($family) { $return .= 'font-family: '.$family.';'; }
				if ($weight) { $return .= 'font-weight: '.$weight.';'; }
				if ($size) { $return .= 'font-size: '.$size.';'; }
				if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
				if ($transform) { $return .= 'text-transform: '.$transform.';'; }
			$return .= '}';
			
			$return .= 'nav#menu-controls > ul > li a span.c-name {';
				if ($family) { $return .= 'font-family: '.$family.';'; }
				if ($boldweight) { $return .= 'font-weight: '.$boldweight.';'; }
				if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
				if ($transform) { $return .= 'text-transform: '.$transform.';'; }
			$return .= '}';
			if ($boldweight) { $return .= 'nav#main-nav ul .sub-menu li a, nav#responsive-nav .sub-menu li a { font-weight: '.$boldweight.'; }'; }
		// NAVIGATION
		
		// BUTTON
			$family = get_option($sr_prefix.'_buttonfont-font');
			$weight = get_option($sr_prefix.'_buttonfont-weight');
			$spacing = get_option($sr_prefix.'_buttonfont-spacing');
			$transform = get_option($sr_prefix.'_buttonfont-transform');
			
			$return .= 'input[type=submit], a.sr-button {';
				if ($family) { $return .= 'font-family: '.$family.';'; }
				if ($weight) { $return .= 'font-weight: '.$weight.';'; }
				if ($spacing && $spacing !== '0') { $return .= 'letter-spacing: '.$spacing.'em;'; }
				if ($transform) { $return .= 'text-transform: '.$transform.';'; }
			$return .= '}';
		// BUTTON
		
		// MISC
			$family = get_option($sr_prefix.'_miscfont-font');
			$weight = get_option($sr_prefix.'_miscfont-weight');
			
			$return .= '.blog-date .date-day, .counter-value {';
				if ($family) { $return .= 'font-family: '.$family.';'; }
				if ($weight) { $return .= 'font-weight: '.$weight.';'; }
			$return .= '}';
		// MISC
		
		return $return;
		
	}
}




/*-----------------------------------------------------------------------------------*/
/*	Portfolio Styling
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_custom_style_portfolio' ) ) {
	function sr_custom_style_portfolio() {
		global $sr_prefix;
		
		$spacing = get_option($sr_prefix.'_portfoliospacing');
		$hovercolor = get_option($sr_prefix.'_portfoliohovercolor');
		
		$return='';
		if ($spacing && $spacing !== '0') {
			$return .= '#portfolio-grid .masonry-item {margin-right: '.$spacing.'px;margin-bottom: '.$spacing.'px;}'	;
			$return .= '#portfolio-carousel .carousel-item {margin: 0 '.$spacing.'px;}';
		}
		if ($hovercolor && $hovercolor !== '#000000') {
			$return .= '.portfolio-thumb .imgoverlay .overlaycolor {background: '.$hovercolor.';}'	;
		}		
		return $return;
		
	}
}



/*-----------------------------------------------------------------------------------*/
/*	Page/Section Styling
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'sr_custom_pagesettings' ) ) {
	function sr_custom_pagesettings() {
		global $sr_prefix;
		$return = '';
		
		$pages = get_pages();
		foreach($pages as $p) {
			
			$slug = $p->post_name;
			$paddingTop = get_post_meta($p->ID, $sr_prefix.'_paddingtop', true);
			$paddingBottom = get_post_meta($p->ID, $sr_prefix.'_paddingbottom', true);
						
			$bgoption = get_post_meta($p->ID, $sr_prefix.'_sectionbackground', true);
			
			// Spacing
			$topreturn = '';
			$bottomreturn = '';
			$topreturnmquery = '';
			$bottomreturnmquery = '';
			if (!empty($paddingTop) && $paddingTop !=='100' || ($paddingTop =='0')) { 
				$topreturn = 'padding-top:'.$paddingTop.'px;';
				$topreturnmquery = 'padding-top:'.intval(intval($paddingTop)*0.6).'px';
				}
			
			if (!empty($paddingBottom) && $paddingBottom !=='0') { 
				$bottomreturn = 'padding-bottom:'.$paddingBottom.'px;'; 
				$bottomreturnmquery = 'padding-bottom:'.intval(intval($paddingBottom)*0.6).'px';
				}
			
			if ($topreturn || $bottomreturn) { $return .= '#section-'.$slug.' > .section-inner {'.$topreturn.$bottomreturn.'}';   }
			if ($topreturnmquery || $bottomreturnmquery) { $return .= '@media only screen and (max-width: 760px) { #section-'.$slug.' > .section-inner {'.$topreturnmquery.$bottomreturnmquery.'} }';   }
			
			// Background
			if ($bgoption == 'color') {
				$color = get_post_meta($p->ID, $sr_prefix.'_color_bgcolor', true);
				$return .= '#section-'.$slug.' {background:'.$color.';}'; 
			} else if ($bgoption == 'image') {
				$bgimage = get_post_meta($p->ID, $sr_prefix.'_image_bgimage', true);
				$overlaycolor = get_post_meta($p->ID, $sr_prefix.'_image_overlaycolor', true);
				$overlayopacity = get_post_meta($p->ID, $sr_prefix.'_image_overlayopacity', true);
				$return .= '#section-'.$slug.' {background:url('.$bgimage.') center center repeat; background-size: cover; }'; 
				if ($overlaycolor) { $return .= '#section-'.$slug.' .section-overlay {position: absolute; width: 100%; height: 100%; left: 0; top:0;z-index: 0;background-color:'.$overlaycolor.';opacity: 0.'.$overlayopacity.'; filter: alpha(opacity='.$overlayopacity.'0); -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity='.$overlayopacity.'0)";}'; }
			}
		}
		
		return $return;
		
	}
}

?>