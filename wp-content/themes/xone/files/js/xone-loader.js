/*-----------------------------------------------------------------------------------

 	Loader - Loads the ajax content
 
-----------------------------------------------------------------------------------*/

jQuery(window).load(function($) {	
		
	jQuery("body").on("click", 'a.load-content', function() {
		var scrolltop = jQuery('header').height() - 1;
		var url = jQuery(this).attr('href');
		var type = jQuery(this).data('type');
		var id = jQuery(this).data('id');
		var slug = jQuery(this).data('slug');
		var relatedAjaxSection = jQuery(this).closest('.portfolio-entries').data('ajax');
		if(!relatedAjaxSection) { relatedAjaxSection = "#"+jQuery(this).closest('.ajax-section').attr('id'); } 
		else { relatedAjaxSection = "#"+relatedAjaxSection; }
		var activeProject = jQuery( relatedAjaxSection ).css('display');
		if (activeProject == "block") { activeProject = true; } else { activeProject = false;}
				
		if (!activeProject) { 
			jQuery( relatedAjaxSection ).slideDown(500);
			var i = 0; // Bug Fix Safari when scrolling + callback 
			jQuery('html,body').animate({ scrollTop: jQuery( relatedAjaxSection ).offset().top-scrolltop}, 700, 'easeOutQuart', function() {
				if (i == 0) { // Bug Fix Safari when scrolling + callback 
				jQuery( relatedAjaxSection+" #ajax-loader" ).fadeIn(500);
				loadcontent(url,type,id,slug,activeProject,relatedAjaxSection); 
				}
				i++;
			});
		} else if (activeProject == url) {
			jQuery('html,body').animate({ scrollTop: jQuery( relatedAjaxSection ).offset().top-scrolltop}, 700, 'easeOutQuart');
		} else {
			var i = 0; // Bug Fix Safari when scrolling + callback 
			jQuery('html,body').animate({ scrollTop: jQuery( relatedAjaxSection ).offset().top-scrolltop}, 500, 'easeOutQuart', function() {
				if (i == 0) { // Bug Fix Safari when scrolling + callback 
				var currentheight = jQuery( relatedAjaxSection ).height();
				jQuery( relatedAjaxSection ).css({ 'min-height' : currentheight+'px' });
				jQuery( relatedAjaxSection+' .close-project' ).fadeOut(500);
				
				jQuery( relatedAjaxSection+" #portfolio-single .project-title" ).animate({ 'top': '-60px'}, 600, 'easeOutQuart');
				jQuery( relatedAjaxSection+" #portfolio-single .social-share li" ).animate({ top: '-30px'}, 600, 'easeOutQuart');
				jQuery( relatedAjaxSection+" #portfolio-single .entry-media" ).animate({ 'top': '60px'}, 600, 'easeOutQuart');
				jQuery( relatedAjaxSection+" #portfolio-single .entry-content" ).animate({ 'top': '60px'}, 600, 'easeOutQuart');
				jQuery( relatedAjaxSection+" .ajax-content" ).fadeOut(600, function(){
					jQuery( relatedAjaxSection+" #ajax-loader" ).fadeIn(500);
					loadcontent(url,type,id,slug,activeProject,relatedAjaxSection); 
				});
				} // END i == 0
				i++;
			});
		}
						
		return false;
	});
	
	function loadcontent(url,type,id,slug,activeProject,ajaxSection){
		
		var scrolltop = jQuery('header').height() - 1;
		jQuery.ajax({type:'POST', url:srvars.ajaxurl, data: { action:'sr_get_content', id:id, type:type }, success: function(response,status) {
			jQuery(ajaxSection+' .ajax-content').html(response);
			jQuery( ajaxSection+" .ajax-content" ).css({opacity: 1});
			if (status == 'success') {
			
				if (!activeProject) { 
					jQuery( ajaxSection+" #ajax-loader" ).delay(1000).fadeOut(500,function() {
						if(jQuery().fitVids) { jQuery(ajaxSection).fitVids(); }
						portfolioPreviewHide();
						jQuery( ajaxSection+" .ajax-content" ).slideDown(700, 'easeInQuart', function() { flexInit(ajaxSection); setTimeout(portfolioShow, 600); });
					});
				} else {
					jQuery( ajaxSection+" #ajax-loader" ).css({ top: '70px'});
					jQuery( ajaxSection+" #ajax-loader" ).delay(1000).fadeOut(500,function() {
						if(jQuery().fitVids) { jQuery(ajaxSection).fitVids(); }
						portfolioPreviewHide();
						jQuery( ajaxSection+" .ajax-content" ).fadeIn(400, 'easeOutQuart', function() { flexInit(ajaxSection); setTimeout(portfolioShow, 600); 
							jQuery( ajaxSection ).animate({ 'min-height' : '0'}, 700, 'easeOutQuart');
						});
					});
				}
				/*if (history.pushState) {
					history.pushState({page:url}, url, url);
				}*/
				
			}
		}}); // END .ajax
		
	}
	
	
	jQuery("body").on("click", '.close-project a', function() {
		var url = jQuery(this).attr('href');
		var parent = jQuery(this).parents('section').attr('id');
		var scrolltop = jQuery('header').height() - 1;
		jQuery( '.close-project' ).fadeOut(500);
		jQuery( ".ajax-content" ).animate({ opacity: 0}, 500, function() {
			jQuery( this ).slideUp(700, 'easeOutQuart', function() {  /*jQuery( ".ajax-content" ).empty(); jQuery( this ).html('');*/ });
			jQuery( ".ajax-section" ).slideUp(700, function(){jQuery('.ajax-content').html('');});
			jQuery('html,body').animate({ scrollTop: jQuery( "#"+parent ).offset().top-scrolltop}, 700, 'easeOutQuart');
		});
		/*if (history.pushState) {
			history.pushState({page:url}, url, url);
		}*/
			
		return false;
	});
	
});



function portfolioPreviewHide(){ 
	
	// Hide Content Areas
	jQuery( "#portfolio-single .project-title" ).css({ 'top': '-60px', opacity: 0 });
	jQuery( "#portfolio-single .social-share li" ).css({ top: '-30px', opacity: 0 });
	jQuery( "#portfolio-single .entry-media" ).css({ 'top': '60px', opacity: 0 });
	jQuery( "#portfolio-single .entry-content" ).css({ 'top': '60px', opacity: 0 });
	jQuery( "#portfolio-single .project-title .single-pagination .next").css({ 'left': '60%', opacity: 0 });
	jQuery( "#portfolio-single .project-title .single-pagination .prev").css({ 'left': '40%', opacity: 0 });
			
}
	
function portfolioShow(){
			
	// Show Title
	jQuery( "#portfolio-single .project-title" ).animate({ 'top': '0', opacity: 1 }, 500, 'easeOutQuart');
		
	// Show Social Share
	jQuery( ".social-share li" ).delay(400).each(function(index, element) {
		var delay = index*80;
		jQuery( this ).delay(delay).animate({ 'top': '0', opacity: 1 }, 500, 'easeOutBack');
	});
	
	// Show Slider
	jQuery( ".entry-media" ).delay(600).animate({ 'top': '0', opacity: 1 }, 500, 'easeOutQuart');
	
	// Show Content
	jQuery( ".entry-content" ).delay(1000).animate({ 'top': '0', opacity: 1 }, 500, 'easeOutQuart');
	
	// Show + reposition Next/Prev
	var projectwidth = parseInt(jQuery(".project-title").width()/2);
	var titlewidth = parseInt(jQuery(".project-title .project-name").width()/2);
	var prevposition = projectwidth - titlewidth - 90;
	var nextposition = jQuery(".project-title").width() - prevposition - jQuery('.project-title .single-pagination .next a').width();
	if (jQuery(window).width() < 760) {
		var prevposition = -10;
		var nextposition = 280;
	}
	jQuery('.project-title .single-pagination .next').delay(200).animate({ left: nextposition+'px', opacity: 1}, 600, 'easeOutBack');
	jQuery('.project-title .single-pagination .prev').delay(200).animate({ left: prevposition+'px', opacity: 1}, 600, 'easeOutBack');
	
	// Show Close Icon
	jQuery( ".close-project" ).delay(1200).fadeIn(500);
					
}