<?php

/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Columns
/*-----------------------------------------------------------------------------------*/
function sr_one_half( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }	
   	return '<div class="column one-half '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div>';
}
add_shortcode('one_half', 'sr_one_half');

function sr_one_half_last( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column one-half last-col '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div><div class="clear"></div>';
}
add_shortcode('one_half_last', 'sr_one_half_last');

function sr_one_third( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column one-third '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div>';
}
add_shortcode('one_third', 'sr_one_third');

function sr_one_third_last( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column one-third last-col '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div><div class="clear"></div>';
}
add_shortcode('one_third_last', 'sr_one_third_last');

function sr_two_third( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }	
   return '<div class="column two-third '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div>';
}
add_shortcode('two_third', 'sr_two_third');

function sr_two_third_last( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column two-third last-col '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div><div class="clear"></div>';
}
add_shortcode('two_third_last', 'sr_two_third_last');

function sr_one_fourth( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column one-fourth '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div>';
}
add_shortcode('one_fourth', 'sr_one_fourth');

function sr_one_fourth_last( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column one-fourth last-col '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div><div class="clear"></div>';
}
add_shortcode('one_fourth_last', 'sr_one_fourth_last');

function sr_two_fourth( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column two-fourth '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div>';
}
add_shortcode('two_fourth', 'sr_two_fourth');

function sr_two_fourth_last( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }	
   return '<div class="column two-fourth last-col '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div><div class="clear"></div>';
}
add_shortcode('two_fourth_last', 'sr_two_fourth_last');

function sr_three_fourth( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }	
   return '<div class="column three-fourth '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div>';
}
add_shortcode('three_fourth', 'sr_three_fourth');

function sr_three_fourth_last( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column three-fourth last-col '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div><div class="clear"></div>';
}
add_shortcode('three_fourth_last', 'sr_three_fourth_last');

function sr_one_fifth( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column one-fifth '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div>';
}
add_shortcode('one_fifth', 'sr_one_fifth');

function sr_one_fifth_last( $atts, $content = null ) {
	extract( shortcode_atts( array('bg' => '','animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }
	$startbg = ''; $endbg = ''; $colbg = '';
	if ($bg && $bg !== '') { $startbg='<div class="bg-col-inner">'; $endbg='</div>'; $colbg = 'style="background:'.$bg.';"'; }
   return '<div class="column one-fifth last-col '.$addclass.'" '.$adddelay.' '.$colbg.'>'.$startbg.'' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . ''.$endbg.'</div><div class="clear"></div>';
}
add_shortcode('one_fifth_last', 'sr_one_fifth_last');



function sr_column_row( $atts, $content = null ) {
	extract( shortcode_atts( array('animation' => '','delay' => '0'), $atts ) ); $addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }	
   return '<div class="column-section '.$addclass.'" '.$adddelay.'>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';
}
add_shortcode('column_row', 'sr_column_row');


/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Team
/*-----------------------------------------------------------------------------------*/
function sr_team_one_half( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => '',
	  'animation' => '',
	  'delay' => '0'
      ), $atts ) );
	  
	$addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }	
	
   	/*$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');*/
   
   	$output = '<div class="column one-half align-center '.$addclass.'" '.$adddelay.'>';
	if ($img) { 
		$output .= '<div class="team-pic">';
		if ($fb || $tw || $gl || $li || $mail) { 
			$output .= '<div class="imgoverlay text-light"><img src="'.$img.'"><div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo"><ul class="socialmedia-widget">';
			if ($fb) { $output .= '<li class="facebook"><a href="'.$fb.'" target="_blank"></a></li>';  }
			if ($tw) { $output .= '<li class="twitter"><a href="'.$tw.'" target="_blank"></a></li>';  }
			if ($gl) { $output .= '<li class="googleplus"><a href="'.$gl.'" target="_blank"></a></li>';  }
			if ($li) { $output .= '<li class="linkedin"><a href="'.$li.'" target="_blank"></a></li>';  }
			if ($mail) { $output .= '<li class="mail"><a href="mailto:'.$mail.'" target="_blank"></a></li>';  }
			$output .= '</ul></div></div></div>';
		} else { $output .= '<img src="'.$img.'">'; }
		$output .= '</div>'; 
	}			
    $output .= '<h4 class="team-name"><strong>'.$name.'</strong></h4>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '<div class="seperator size-mini height-1px"><span></span></div> 
					<p class="team-info">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';			
    $output .= '</div>';
   
   return $output;
}
add_shortcode('team_one_half', 'sr_team_one_half');

function sr_team_one_half_last( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => '',
	  'animation' => '',
	  'delay' => '0'
      ), $atts ) );
	  
	$addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }	

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-half last-col align-center '.$addclass.'" '.$adddelay.'>';
	if ($img) { 
		$output .= '<div class="team-pic">';
		if ($fb || $tw || $gl || $li || $mail) { 
			$output .= '<div class="imgoverlay text-light"><img src="'.$img.'"><div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo"><ul class="socialmedia-widget">';
			if ($fb) { $output .= '<li class="facebook"><a href="'.$fb.'" target="_blank"></a></li>';  }
			if ($tw) { $output .= '<li class="twitter"><a href="'.$tw.'" target="_blank"></a></li>';  }
			if ($gl) { $output .= '<li class="googleplus"><a href="'.$gl.'" target="_blank"></a></li>';  }
			if ($li) { $output .= '<li class="linkedin"><a href="'.$li.'" target="_blank"></a></li>';  }
			if ($mail) { $output .= '<li class="mail"><a href="mailto:'.$mail.'" target="_blank"></a></li>';  }
			$output .= '</ul></div></div></div>';
		} else { $output .= '<img src="'.$img.'">'; }
		$output .= '</div>'; 
	}			
    $output .= '<h4 class="team-name"><strong>'.$name.'</strong></h4>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '<div class="seperator size-mini height-1px"><span></span></div> 
					<p class="team-info">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';			
    $output .= '</div><div class="clear"></div>';
   
   return $output;
}
add_shortcode('team_one_half_last', 'sr_team_one_half_last');

function sr_team_one_third( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => '',
	  'animation' => '',
	  'delay' => '0'
      ), $atts ) );
	  
	$addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }	

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   	
	
	
   	$output = '<div class="column one-third align-center '.$addclass.'" '.$adddelay.'>';
	if ($img) { 
		$output .= '<div class="team-pic">';
		if ($fb || $tw || $gl || $li || $mail) { 
			$output .= '<div class="imgoverlay text-light"><img src="'.$img.'"><div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo"><ul class="socialmedia-widget">';
			if ($fb) { $output .= '<li class="facebook"><a href="'.$fb.'" target="_blank"></a></li>';  }
			if ($tw) { $output .= '<li class="twitter"><a href="'.$tw.'" target="_blank"></a></li>';  }
			if ($gl) { $output .= '<li class="googleplus"><a href="'.$gl.'" target="_blank"></a></li>';  }
			if ($li) { $output .= '<li class="linkedin"><a href="'.$li.'" target="_blank"></a></li>';  }
			if ($mail) { $output .= '<li class="mail"><a href="mailto:'.$mail.'" target="_blank"></a></li>';  }
			$output .= '</ul></div></div></div>';
		} else { $output .= '<img src="'.$img.'">'; }
		$output .= '</div>'; 
	}			
    $output .= '<h4 class="team-name"><strong>'.$name.'</strong></h4>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '<div class="seperator size-mini height-1px"><span></span></div> 
					<p class="team-info">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';
    $output .= '</div>';
   
   return $output;
}
add_shortcode('team_one_third', 'sr_team_one_third');

function sr_team_one_third_last( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => '',
	  'animation' => '',
	  'delay' => '0'
      ), $atts ) );
	  
	$addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }	

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-third last-col align-center '.$addclass.'" '.$adddelay.'>';
	if ($img) { 
		$output .= '<div class="team-pic">';
		if ($fb || $tw || $gl || $li || $mail) { 
			$output .= '<div class="imgoverlay text-light"><img src="'.$img.'"><div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo"><ul class="socialmedia-widget">';
			if ($fb) { $output .= '<li class="facebook"><a href="'.$fb.'" target="_blank"></a></li>';  }
			if ($tw) { $output .= '<li class="twitter"><a href="'.$tw.'" target="_blank"></a></li>';  }
			if ($gl) { $output .= '<li class="googleplus"><a href="'.$gl.'" target="_blank"></a></li>';  }
			if ($li) { $output .= '<li class="linkedin"><a href="'.$li.'" target="_blank"></a></li>';  }
			if ($mail) { $output .= '<li class="mail"><a href="mailto:'.$mail.'" target="_blank"></a></li>';  }
			$output .= '</ul></div></div></div>';
		} else { $output .= '<img src="'.$img.'">'; }
		$output .= '</div>'; 
	}			
    $output .= '<h4 class="team-name"><strong>'.$name.'</strong></h4>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '<div class="seperator size-mini height-1px"><span></span></div> 
					<p class="team-info">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';			
    $output .= '</div><div class="clear"></div>';
   
   return $output;
}
add_shortcode('team_one_third_last', 'sr_team_one_third_last');

function sr_team_one_fourth( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => '',
	  'animation' => '',
	  'delay' => '0'
      ), $atts ) );
	  
	$addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }	

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-fourth align-center '.$addclass.'" '.$adddelay.'>';
	if ($img) { 
		$output .= '<div class="team-pic">';
		if ($fb || $tw || $gl || $li || $mail) { 
			$output .= '<div class="imgoverlay text-light"><img src="'.$img.'"><div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo"><ul class="socialmedia-widget">';
			if ($fb) { $output .= '<li class="facebook"><a href="'.$fb.'" target="_blank"></a></li>';  }
			if ($tw) { $output .= '<li class="twitter"><a href="'.$tw.'" target="_blank"></a></li>';  }
			if ($gl) { $output .= '<li class="googleplus"><a href="'.$gl.'" target="_blank"></a></li>';  }
			if ($li) { $output .= '<li class="linkedin"><a href="'.$li.'" target="_blank"></a></li>';  }
			if ($mail) { $output .= '<li class="mail"><a href="mailto:'.$mail.'" target="_blank"></a></li>';  }
			$output .= '</ul></div></div></div>';
		} else { $output .= '<img src="'.$img.'">'; }
		$output .= '</div>'; 
	}			
    $output .= '<h4 class="team-name"><strong>'.$name.'</strong></h4>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '<div class="seperator size-mini height-1px"><span></span></div> 
					<p class="team-info">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';			
    $output .= '</div>';
   
   return $output;
}
add_shortcode('team_one_fourth', 'sr_team_one_fourth');

function sr_team_one_fourth_last( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => 'MemberName',
	  'title' => 'MemberTitle',
	  'img' => '',
	  'fb' => '',
	  'tw' => '',
	  'gl' => '',
	  'li' => '',
	  'mail' => '',
	  'animation' => '',
	  'delay' => '0'
      ), $atts ) );
	  
	$addclass = ''; $adddelay = '';
	if ($animation && $animation !== '') { $addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; }	

   	$img_id = sr_get_attachment_id_from_src($img);
	$image = wp_get_attachment_image($img_id, '');
   
   	$output = '<div class="column one-fourth last-col align-center '.$addclass.'" '.$adddelay.'>';
	if ($img) { 
		$output .= '<div class="team-pic">';
		if ($fb || $tw || $gl || $li || $mail) { 
			$output .= '<div class="imgoverlay text-light"><img src="'.$img.'"><div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo"><ul class="socialmedia-widget">';
			if ($fb) { $output .= '<li class="facebook"><a href="'.$fb.'" target="_blank"></a></li>';  }
			if ($tw) { $output .= '<li class="twitter"><a href="'.$tw.'" target="_blank"></a></li>';  }
			if ($gl) { $output .= '<li class="googleplus"><a href="'.$gl.'" target="_blank"></a></li>';  }
			if ($li) { $output .= '<li class="linkedin"><a href="'.$li.'" target="_blank"></a></li>';  }
			if ($mail) { $output .= '<li class="mail"><a href="mailto:'.$mail.'" target="_blank"></a></li>';  }
			$output .= '</ul></div></div></div>';
		} else { $output .= '<img src="'.$img.'">'; }
		$output .= '</div>'; 
	}			
    $output .= '<h4 class="team-name"><strong>'.$name.'</strong></h4>';
	if ($img) { $output .= '<h6 class="team-role">'.$title.'</h6>'; }			
    $output .= '<div class="seperator size-mini height-1px"><span></span></div> 
					<p class="team-info">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</p>';			
    $output .= '</div><div class="clear"></div>';
   
   return $output;
}
add_shortcode('team_one_fourth_last', 'sr_team_one_fourth_last');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Pricing Tables
/*-----------------------------------------------------------------------------------*/
function sr_pricing( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'name' => '',
	  'price' => 'PRICE',
	  'time' => '',
	  'options' => '',
	  'url' => '#',
	  'accent' => ''
      ), $atts ) );
	  
	global $sr_prefix;
	  
	$addclass = ''; 
	$button = 'sr-button6'; 
	if (get_option($sr_prefix.'_colorscheme') == 'dark') { $button = 'sr-button7'; }	
	if ($accent == 'true') { $addclass='pricing-accent'; $button = 'sr-button5'; }	
	
	$optionList = '';
	if ($options && $options !== '') { 
		$getOptions = explode('//',$options);
		
		$optionList .= '<ul class="price-options list-nostyle">';
		foreach ($getOptions as $o) {
			$optionList .= '<li>'.$o.'</li>';		
		}
		$optionList .= '</ul>';
	}	
   
   	$output = '<div class="pricing-table align-center '.$addclass.'">
					<h5 class="price-name"><strong>'.$name.'</strong></h5>
					<div class="price">
						<span class="price-amount">'.$price.'</span>  
						<span class="price-time">'.$time.'</span>  
					</div>
					'.$optionList.'
					<div class="price-button">
						<a href="'.$url.'" class="sr-button '.$button.' medium-button">Sign Up</a>
					</div>
				</div>';
   
   return $output;
}
add_shortcode('pricing', 'sr_pricing');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Buttons
/*-----------------------------------------------------------------------------------*/
function sr_button( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'icon' => '',
      'color' => 'sr-button1',
      'size' => 'medium-button',
	  'url' => '',
      'target' => '_self',
	  'scrollto' => '',
	  'video' => '',
	  'width' => '',
	  'height' => ''
      ), $atts ) );
	
	
	if ($icon && $icon !== ''){ 
		$buttontext = '<i class="fa '.$icon.'"></i>';
		$addclass = 'sr-buttonicon';
	} else {
		$buttontext = preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content));
		$addclass = '';
	}
	
	if ($url && $target) { 
		return '<a href="'.$url.'" class="sr-button '.$color.' '.$size.' '.$addclass.'"  target="'.$target.'">' . $buttontext . '</a>';	
	} 
	
	if ($scrollto && $scrollto !== 'false') { 
		return '<a href="#section-'.$scrollto.'" class="sr-button '.$color.' '.$size.' '.$addclass.' scroll-to" >' . $buttontext . '</a>';	
	} 
	
	if ($video && $video !== 'false') { 
		return '<a href="'.$video.'" data-type="video" data-width="'.$width.'" data-height="'.$height.'" class="sr-button '.$color.' '.$size.' '.$addclass.' easy-opener" >' . $buttontext . '</a>';	
	} 
		
	
}
add_shortcode('button', 'sr_button');





/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Animations
/*-----------------------------------------------------------------------------------*/
function sr_animation( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'type' => 'fade',
      'delay' => '0'
      ), $atts ) );
	
	
	return '<div class="sr-animation sr-animation-'.$type.'" data-delay="'.$delay.'">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';	
	
}
add_shortcode('sr-animation', 'sr_animation');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Icons
/*-----------------------------------------------------------------------------------*/
function sr_iconfont( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'type' => 'fa-heart',
      'size' => 'normal',
      'color' => ''
      ), $atts ) );
	
	
	if ($color && $color !== '') { 
		$iconcolor = 'style="color:'.$color.';"';
	} else { $iconcolor = '';}
		
	return '<i class="fa '.$type.' fa-'.$size.'" '.$iconcolor.'></i>';	
}
add_shortcode('iconfont', 'sr_iconfont');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Iconbox
/*-----------------------------------------------------------------------------------*/
function sr_iconbox( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'icon' => 'fa-heart',
      'color' => '',
      'position' => 'left',
      'animation' => '',
      'delay' => '0'
      ), $atts ) );
	
	
	if ($color && $color !== '') { 
		$iconcolor = 'style="color:'.$color.';"';
	} else { $iconcolor = '';}
	
	$addclass ='';$adddelay='';
	if ($animation && $animation !== '') { 
		$addclass='sr-animation sr-animation-'.$animation; $adddelay='data-delay="'.$delay.'"'; 
	}	
		
	return '<div class="iconbox position-'.$position.' clearfix '.$addclass.'" '.$adddelay.'>
				<i class="fa '.$icon.' fa-2x fa-fw" '.$iconcolor.'></i>
					<div class="iconbox-content">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>
			  </div>';	
}
add_shortcode('iconbox', 'sr_iconbox');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Counter
/*-----------------------------------------------------------------------------------*/
function sr_counter( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'from' => '0',
      'to' => '1000',
      'speed' => '7',
      'sub' => 'Counter Name'
      ), $atts ) );
	
	
	
		
	return '<div class="counter">
				<div class="counter-value" data-from="'.$from.'" data-to="'.$to.'" data-speed="'.$speed.'">'.$from.'</div>
				<h6 class="counter-name"><strong>'.$sub.'</strong></h6>
			</div>';	
}
add_shortcode('counter', 'sr_counter');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Alerts
/*-----------------------------------------------------------------------------------*/
function sr_alert( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'color' => 'info'
      ), $atts ) );
	
		
	return '<div class="alert alert-'.$color.'">
           	<h6>' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</h6>
           </div>';
}
add_shortcode('alert', 'sr_alert');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Toggles
/*-----------------------------------------------------------------------------------*/
function sr_toggle( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => 'Toggle',
      'size' => 'small',
      'open' => 'no'
      ), $atts ) );
			
	if ($open == 'yes') { $toggleopen = 'toggle-active'; } else { $toggleopen = ''; }
	
	return '	<div class="toggle '.$size.'-toggle">
					<div class="toggle-title '.$toggleopen.' clearfix">
						<div class="toggle-icon"><span></span></div>
						<h5 class="toggle-name">' . $title . '</h5>
					</div>
					<div class="toggle-inner">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>
				</div>';
}
add_shortcode('toggle', 'sr_toggle');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Skills
/*-----------------------------------------------------------------------------------*/
function sr_skill( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'amount' => '55',
	  'name' => 'Skillname',
	  'size' => 'small',
	  'color' => false
      ), $atts ) );
	
	$skill_slug = preg_replace('/[^a-z]/', "", strtolower($name));
	
	if ($size == 'small') { $skillsize = 'skill-small'; } else { $skillsize = '';  }
	if ($color) { $skillcolor = 'background:'.$color; } else { $skillcolor = '';  }
		
	return '<div class="skill">
				<h6 class="skill-name"><strong>'.$name.'</strong></h6>
				<div class="skill-bar"><div class="skill-active '.$skill_slug.'" style="'.$skillcolor.'" data-perc="'.$amount.'">
				<span class="tooltip">'.$amount.'%</span></div></div>
			</div>';	
}
add_shortcode('skill', 'sr_skill');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Tabs
/*-----------------------------------------------------------------------------------*/
function sr_tabs( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => ''
      ), $atts ) );
	
	$return = '<div class="tabs"><ul class="tab-nav clearfix">';
	
	$title = substr($title, 0, -1);
	$title = explode(',', $title);
	$i = 1;
	foreach ($title as $t) {
		if ($i == 1) { $addclass = 'class="active"'; } else { $addclass = ''; }
		$return .= '<li><a href="tabid'.$i.'" '.$addclass.'>'.$t.'</a></li>';	
		$i++;
	}
	
	$return .= '</ul><div class="clear"></div><div class="tab-container">'.do_shortcode($content).'</div></div>';
	
	return $return;	
}
add_shortcode('tabs', 'sr_tabs');


function sr_tab( $atts, $content = null )
{	
	extract( shortcode_atts( array(
      'id' => ''
      ), $atts ) );
	
	if ($id == 1) { $addclass = 'active'; } else { $addclass = ''; }
	return '<div class="tab-content tabid'.$id.' '.$addclass.'">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';	
}
add_shortcode('tab', 'sr_tab');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Quotes
/*-----------------------------------------------------------------------------------*/
function sr_quotes( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => ''
      ), $atts ) );
	
	$return = '<div class="flexslider testimonial-slider"><ul class="slides">'.do_shortcode($content).'</ul></div>';
	
	return $return;	
}
add_shortcode('quoteslider', 'sr_quotes');


function sr_quote( $atts, $content = null )
{	
	extract( shortcode_atts( array(
      'name' => 'Quoter'
      ), $atts ) );
	
	return '<li>
				<div class="testimonial-item">
					<h3 class="testimonial-quote">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</h3>
					<h6 class="testimonial-name">- <strong>'.$name.'</strong> -</h6>
			</div>
		 </li>';	
}
add_shortcode('quote', 'sr_quote');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Accordion
/*-----------------------------------------------------------------------------------*/
function sr_accordion( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'title' => 'Toggle',
      'open' => 'no'
      ), $atts ) );
			
	if ($open == 'yes') { $toggleopen = 'toggle-active'; } else { $toggleopen = ''; }
	
	return '	<div class="toggle-item">
					<div class="toggle-title '.$toggleopen.' clearfix">
						<div class="toggle-icon"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></div>
						<h6 class="toggle-name"><strong>' . $title . '</strong></h6>
					</div>
					<div class="toggle-inner">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>
				</div>';		
}
add_shortcode('accordion', 'sr_accordion');


function sr_accordiongroup( $atts, $content = null )
{	
	return '<div class="accordion">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</div>';	
}
add_shortcode('accordiongroup', 'sr_accordiongroup');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Contact form
/*-----------------------------------------------------------------------------------*/
function sr_field( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'type' => 'textfield',
	  'name' => 'Fieldname',
	  'slug' => 'slugname',
	  'required' => 'yes'
      ), $atts ) );
		
	
	if ($required == 'yes') { $label_req = 'class="req"'; $req = "*"; } else { $label_req = ''; $req = ""; }
	$input_name = strtolower($slug);
	
	
	$output = '';
	if ($type == 'textfield') {
		$output .= '<div class="form-row clearfix">
					<label for="'.$input_name.'" '.$label_req.'>'.$name.' '.$req.'</label>
					<div class="form-value"><input type="text" name="'.$input_name.'" class="'.$input_name.'" id="'.$input_name.'" value="" /></div>
					</div>';
	} else if ($type == 'textarea') {
		$output .= '<div class="form-row clearfix textbox">
					<label for="'.$input_name.'" '.$label_req.'>'.$name.' '.$req.'</label>
					<div class="form-value"><textarea name="'.$input_name.'" class="'.$input_name.'" id="'.$input_name.'" rows="15" cols="50"></textarea></div>
					</div>';
	} 
	
	
	return $output;
	
}
add_shortcode('field', 'sr_field');

function sr_contactgroup( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
      'fields' => '',
      'email' => 'Testemail',
      'subject' => 'Subject',
      'submit' => 'Send'
      ), $atts ) );
	
	if ($fields == '') { 
		return '<p><span class="error_message">Please check your Contact form. Your shortcode [contactgroup] needs a "fields" attribute</span></p>';
	} else {
   		return '<form id="contact-form" class="checkform" action="'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"].'" target="'.get_template_directory_uri().'/contact-form.php" method="post" >' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
		<div id="form-note">
			<div class="alert alert-error">
				<h6><strong>'.__("Error", 'sr_xone_theme').'</strong>: '.__("Please check your entries", 'sr_xone_theme').'!</h6>
			</div>
		</div>
		<div class="form-row form-submit"><input type="submit" name="submit_form" class="submit" value="'.$submit.'" /></div>
		<input type="hidden" name="subject" value="'.$subject.'" />
		<input type="hidden" name="fields" value="'.$fields.'" />
		<input type="hidden" name="sendto" value="'.$email.'" />
		</form>';
	}
}
add_shortcode('contactgroup', 'sr_contactgroup');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Gallery
/*-----------------------------------------------------------------------------------*/
function sr_gallery( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'id' => '',
      'columns' => '5',
      'carousel' => 'no'
      ), $atts ) );
	
	global $sr_prefix;
	
	if ($id && $id !== '') {
		$gallery = get_post_meta($id, $sr_prefix.'_gallery', true);
		$pics = explode('|||',$gallery);
		
		$gallery_items = '';
		foreach ($pics as $p) {
			$image = explode('~~', $p);
			$attachement = sr_get_attachment_infos($image[1]);
			$img_big = wp_get_attachment_image_src($image[1], 'full');
			$img_thumb = wp_get_attachment_image_src($image[1], 'gallery-thumb'); 
			$alt = get_post_meta($image[1], '_wp_attachment_image_alt', true);
			$gallery_items .= '<li>';
			if ($carousel == 'yes') { $gallery_items .= '<div class="inner">'; }
			$gallery_items .= '<div class="imgoverlay">
							<a class="openfancybox" data-fancybox-group="gallery'.$id.'" href="'.$img_big[0].'" title="'.$attachement['caption'].'"><img src="'.$img_thumb[0].'" alt="'.$alt.'"/>
                        	<div class="overlay"><span class="overlaycolor"></span></div>
                        </a>
               		</div>';
			if ($carousel == 'yes') { $gallery_items .= '</div>'; }
			$gallery_items .= '</li>';
		}
	}
	
	if ($carousel == 'no') {
		return '<ul class="gallery-grid gallery-col-'.$columns.' clearfix">'.$gallery_items.'</ul>';
	} else {
		return '<div id="carousel-gallery-'.$id.'" class="carousel carousel-gallery"><a class="carousel_prev" href="" rel="carousel-gallery-'.$id.'">prev</a><div class="carousel_container"><ul>'.$gallery_items.'</ul></div><a class="carousel_next" href="" rel="carousel-gallery-'.$id.'">next</a></div>';
	}
	
	
}
add_shortcode('sr_customgallery', 'sr_gallery');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Testimonial
/*-----------------------------------------------------------------------------------*/
function sr_testimonial( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'name' => '',
      'nameaddition' => ''
      ), $atts ) );
	
	if ($nameaddition) { $nameadd = '('.$nameaddition.')'; } else { $nameadd = '';  }
	
	return '	<div class="testimonial">
                	<div class="testimonial-main clearfix">
                        <span class="testimonial-icon"></span>
                        <div class="testimonial-text">
                            ' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '
                        </div>
                    	<div class="testimonial-name">- <b>'.$name.'</b> '.$nameadd.'</div>
                	</div>
                </div>';
}
add_shortcode('testimonial', 'sr_testimonial');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Google Map
/*-----------------------------------------------------------------------------------*/
function sr_mapshortcode( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'latlong' => '-33.86938,151.204834',
      'icon' => get_template_directory_uri().'/files/images/map-pin.png',
      'height' => '400',
      'id' => '0'
      ), $atts ) );
	
	$text = preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content));
		
	return sr_googleMap($latlong, $text, $icon, $height, 1, '');
	
}
add_shortcode('googlemap', 'sr_mapshortcode');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Latest News
/*-----------------------------------------------------------------------------------*/
function sr_latestnews( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'type' => 'masonry',
      'number' => '6',
      'category' => ''
      ), $atts ) );
	
	$latest = new WP_Query(array(
		'post_type' => array('post'),
		'posts_per_page'=> $number,
		'category_name'=> $category,
	));
	
	global $sr_prefix;
	
	if ($type == 'carousel') {
		$typeClass = 'carousel-item';
	} else  {
		$typeClass = 'masonry-item';
	}
	
	$p = '';
	while ($latest->have_posts()) { $latest->the_post(); 
		$format = get_post_format(); 
		if( false === $format ) { $format = 'standard'; }
		
		$readmore = '';		
		if (!get_option($sr_prefix.'_blogentriesreadmore')) { 
		$readmore = '<p><a class="readmore-button" href="'.get_permalink().'">'.__("Read More", 'sr_xone_theme').'</a></p>'; }
		
		if ($format == 'video' && get_post_meta(get_the_ID(), $sr_prefix.'_video', true) !== '') {
			$thethumbnail = '<div class="entry-media blog-media">
							'.get_post_meta(get_the_ID(), $sr_prefix.'_video', true).'
						</div> <!-- END .entry-media -->';
		} else if ($format == 'gallery' && get_post_meta(get_the_ID(), $sr_prefix.'_medias', true) !== '' && get_post_meta(get_the_ID(), $sr_prefix.'_mediaslayout', true) !== "list") {
			$medias = explode('|||', get_post_meta(get_the_ID(), $sr_prefix.'_medias', true));

			$output_medias = '';
			foreach ($medias as $media) {
				$object = explode('~~', $media);
				$type_o = $object[0];
				$val = $object[1];
				
				$output_medias .= "<li>"; 
				if ($type_o == 'image') { 
					$image = wp_get_attachment_image_src($val, 'blog-thumb'); $image = $image[0];
					$thisimage = '<img src="'.$image.'" alt="'.get_the_title($image[1]).'"/>';
						$output_medias .= $thisimage;
				} else {
					$output_medias .= $val;
				}
				$output_medias .= "</li>";
			}
			
			$thethumbnail = '<div class="entry-media blog-media">
							<div id="slider-'.get_the_ID().'" class="flexslider-container post-slider">        
								<div class="flexslider">
									<ul class="slides">
										'.$output_medias.'
									</ul>
								</div>
							</div>
						</div> <!-- END .entry-media -->';
		} else if (get_the_post_thumbnail(get_the_ID())) {
			$thethumbnail = '<div class="entry-media blog-media">
							<div class="imgoverlay">
								<a href="'.get_permalink().'">
									'.get_the_post_thumbnail(get_the_ID(),'blog-thumb').'
									<div class="overlay"><span class="overlaycolor"></span><span class="overlayicon"></span></div>
								</a>
							</div>
						</div> <!-- END .entry-media -->';
		} else { $thethumbnail = ''; }
		
		
		if ($format !== 'quote' && $format !== 'link') {
		$p .= '
					<div class="blog-masonry-entry format-'.$format.' '.$typeClass.'">
                      '.$thethumbnail.'  						
						
						<div class="blog-headline">
							<h4 class="post-name"><a href="'.get_permalink().'"><strong>'.get_the_title().'</strong></a></h4>
							<h6 class="post-meta">'.get_the_time(get_option('date_format')).'</h6>
						</div>
						
					 	<div class="blog-intro">'.content('excerpt', 20, false).'</div>
						
						'.$readmore.'
                	</div> <!-- END .blog-masonry-entry -->
		'; 
		
		} else {
			if ($format == 'link') {
				$link = get_post_meta(get_the_ID(), $sr_prefix.'_link', true);
				$p .= '<div class="blog-entry format-'.$format.' '.$typeClass.'">
							<h4 class="link-text"><a href="'.$link.'" target="_blank">'.get_the_content().'</a></h4>
							<h6 class="link-author">- '.get_the_title().' -</h6>
						</div>';
			}
			if ($format == 'quote') {
				$quote = get_post_meta(get_the_ID(), $sr_prefix.'_quote', true);
				$p .= '<div class="blog-entry format-'.$format.' '.$typeClass.'">
							<h4 class="quote-text">'.$quote.'</h4>
							<h6 class="quote-author">- '.get_the_title().' -</h6>
						</div>';
			}
		}
	}
	
	if ($type == 'carousel') {
		return '<div id="blog-carousel" class="owl-carousel blog-entries">'.$p.'</div>';
	} else  {
		return '<div id="blog-grid" class="masonry blog-entries clearfix">'.$p.'</div>';
	}
				
	wp_reset_postdata();			
	
}
add_shortcode('latestnews', 'sr_latestnews');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Recent Works
/*-----------------------------------------------------------------------------------*/
function sr_recentworks( $atts, $content = null )
{
	
	
}
add_shortcode('recentworks', 'sr_recentworks');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Devider
/*-----------------------------------------------------------------------------------*/
function sr_devider( $atts, $content = null )
{		
	extract( shortcode_atts( array(
      'size' => 'full',
      'thickness' => 'small'
      ), $atts ) );
	  
	return '<div class="seperator size-'.$size.' height-'.$thickness.'"><span></span></div>';	
}
add_shortcode('devider', 'sr_devider');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Section Title
/*-----------------------------------------------------------------------------------*/
function sr_sectiontitle( $atts, $content = null )
{	
	extract( shortcode_atts( array(
      'title' => ''
      ), $atts ) );	
	  
	  
	$return =   '<div class="section-title"><h2>' . $title . '</h2>';
	if ($content && $content !== '') { $return .=   '<div class="seperator size-small"><span></span></div><h4 class="subtitle">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '</h4>';  }
	$return .=   '</div>';
	return $return;	
}
add_shortcode('sectiontitle', 'sr_sectiontitle');




/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Horizontal Section
/*-----------------------------------------------------------------------------------*/
function sr_horizontalsection( $atts, $content = null )
{		
	extract( shortcode_atts( array(
      'color' => '#f5f5f5',
      'textcolor' => 'text-light',
      'pdtop' => '80',
      'pdbottom' => '80'
      ), $atts ) );
		
	$style = 'padding-top:'.$pdtop.'px;';
	$style .= 'padding-bottom:'.$pdbottom.'px;';
	
	return '<div class="horizontalsection '.$textcolor.' clearfix" style="'.$style.'">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '<div class="horizontalinner" style="background:'.$color.';"></div></div>';	
}
add_shortcode('horizontalsection', 'sr_horizontalsection');


function sr_horizontalsection_image( $atts, $content = null )
{		
	extract( shortcode_atts( array(
      'image' => '',
      'parallax' => 'true',
      'overlay' => '',
      'overlayopacity' => '5',
      'textcolor' => 'text-light',
      'pdtop' => '100',
      'pdbottom' => '100'
      ), $atts ) );
		
	$padding = 'padding-top:'.$pdtop.'px;';
	$padding .= 'padding-bottom:'.$pdbottom.'px;';
	
	if ($parallax == 'true') { $bgoption='parallax-section'; } else { $bgoption=''; }
	$bgstyle = "background:url(".$image.") center center repeat; background-size: cover;";
	
	if ($overlay !== '') { $overlayoption = '<div class="section-overlay" style="position: absolute; width: 100%; height: 100%; left: 0; top:0;z-index: 0;background-color:'.$overlay.';opacity: 0.'.$overlayopacity.'; filter: alpha(opacity='.$overlayopacity.'0); -ms-filter:\'progid:DXImageTransform.Microsoft.Alpha(Opacity='.$overlayopacity.'0)\';"></div>'; } else { $overlayoption=''; }
	
	return '<div class="horizontalsection '.$textcolor.' clearfix" style="'.$padding.'">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '<div class="horizontalinner '.$bgoption.'" style="'.$bgstyle.'">'.$overlayoption.'</div></div>';	
}
add_shortcode('horizontalsection-image', 'sr_horizontalsection_image');


function sr_horizontalsection_video( $atts, $content = null )
{		
	extract( shortcode_atts( array(
      'mp4' => '',
      'webm' => '',
      'ogv' => '',
      'width' => '',
      'height' => '',
      'poster' => '',
      'parallax' => 'true',
      'overlay' => '',
      'overlayopacity' => '5',
      'textcolor' => 'text-light',
      'pdtop' => '100',
      'pdbottom' => '100'
      ), $atts ) );
		
	$padding = 'padding-top:'.$pdtop.'px;';
	$padding .= 'padding-bottom:'.$pdbottom.'px;';
		
	$videosettings = 'data-videomp4="'.$mp4.'" data-videowebm="'.$webm.'" data-videooga="'.$ogv.'" data-videowidth="'.$width.'" data-videoheight="'.$height.'" data-videoposter="'.$poster.'" data-videoparallax="'.$parallax.'" data-videooverlaycolor="'.$overlay.'" data-videooverlayopacity="0.'.$overlayopacity.'"';
	
	return '<div class="horizontalsection '.$textcolor.' clearfix" style="'.$padding.'">' . preg_replace('#^<\/p>|<p>$#', '', do_shortcode($content)) . '<div class="horizontalinner videobg-section" '.$videosettings.'></div></div>';	
}
add_shortcode('horizontalsection-video', 'sr_horizontalsection_video');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Selfhosted Audio
/*-----------------------------------------------------------------------------------*/
function sr_selhostedtaudio( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'mp3' => '',
      'oga' => '',
      'pic' => '',
      'id' => '0'
      ), $atts ) );
	
	$picid = sr_get_attachment_id_from_src($pic);
	$picimage = wp_get_attachment_image($picid, 'full');
	
	return $picimage.''.sr_selfaudio($mp3, $oga, $pic, $id);
	
}
add_shortcode('selhostedtaudio', 'sr_selhostedtaudio');



/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Selfhosted Video
/*-----------------------------------------------------------------------------------*/
function sr_selhostedtvideo( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'm4v' => '',
      'oga' => '',
      'webmv' => '',
      'pic' => '',
      'id' => '0'
      ), $atts ) );
	
	return sr_selfvideo($m4v, $oga, $webmv, $pic, $id);
	
}
add_shortcode('selhostedtvideo', 'sr_selhostedtvideo');





/*-----------------------------------------------------------------------------------*/
/*	Shortcodes for Spacer
/*-----------------------------------------------------------------------------------*/
function sr_spacer( $atts, $content = null )
{
	extract( shortcode_atts( array(
      'size' => 'big'
      ), $atts ) );
	
	return '<div class="spacer spacer-'.$size.'"></div>';
	
}
add_shortcode('spacer', 'sr_spacer');





/*-----------------------------------------------------------------------------------*/
/*	Register Buttons
/*-----------------------------------------------------------------------------------*/
function init_buttons() {
	// If user has permission
	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
		return;
	 
	// Add only in Rich Editor mode
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "add_buttons_plugin");
		add_filter('mce_buttons', 'register_buttons');
	}
}
add_action('init', 'init_buttons');

function add_buttons_plugin($plugin_array) {
   $plugin_array['popupbutton'] = get_template_directory_uri() . '/theme-admin/shortcodes/tinymcepopup.js';
	return $plugin_array;
}

function register_buttons($buttons) {
	array_push( $buttons, "popup" );
	return $buttons;
}



/*-----------------------------------------------------------------------------------*/
/*	Wordpress Bugfix for shortcodes (paragraph issue)
/*-----------------------------------------------------------------------------------*/
add_filter("the_content", "the_content_filter");
 
function the_content_filter($content) {
 
	// array of custom shortcodes requiring the fix
	$block = join("|",array(	"accordiongroup",
								"accordion",
								"alert",
								"column_row",
								"contactgroup",
								"counter",
								"devider",
								"field",
								"horizontalsection",
								"horizontalsection-image",
								"horizontalsection-video",
								"iconbox",
								"latestnews",
								"quoteslider",
								
								"one_half",
								"one_half_last",
								"one_third",
								"one_third_last",
								"two_third",
								"two_third_last",
								"one_fourth",
								"one_fourth_last",
								"two_fourth",
								"two_fourth_last",
								"three_fourth",
								"three_fourth_last",
								"one_fifth",
								"one_fifth_last",
								"team_one_half",
								"team_one_third",
								"team_one_fourth",
								"team_one_half_last",
								"team_one_third_last",
								"team_one_fourth_last",
								
								"tabs",
								"tab",
								"toggle",
								"sectiontitle",
								"skill",
								"spacer",
								"sr-animation"
								));
	 
	// opening tag
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	// closing tag
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
	return $rep;
 
}


?>