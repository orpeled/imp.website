/*-----------------------------------------------------------------------------------

 	Script - All Custom frontend jQuery scripts & functions
 
-----------------------------------------------------------------------------------*/

jQuery(window).load(function($) {	
	
	
	/*---------------------------------------------- 
			H I D E   P A G E   L O A D E R
	------------------------------------------------*/
	jQuery("#page-loader .page-loader-inner").delay(1000).fadeOut(500, function(){
		jQuery("#page-loader").fadeOut(500);
	});
	
	
	/*---------------------------------------------- 
		  H O R I Z O N T A L   S E C T I O N   
	------------------------------------------------*/
	function horizontaladapt() {
		if(jQuery('.horizontalsection').length){ 
			var leftpos = jQuery('.horizontalsection').position().left + 1;
			var fullwidth = jQuery(window).width() + 2;
			jQuery('.horizontalsection').find('.horizontalinner').css({'left':'-'+leftpos+'px', 'width': fullwidth+'px'});
		}
	}
	horizontaladapt();
	jQuery(window).resize(function() { horizontaladapt(); });
	
	
	flexInit('body');
	
	if( jQuery().isotope ) {
		
		/*---------------------------------------------- 
					  C A L L   I S O T O P E   
		------------------------------------------------*/	
		jQuery('.masonry').each(function(){
			var $container = jQuery(this);
			
			$container.imagesLoaded( function(){
				$container.isotope({
					itemSelector : '.masonry-item',
					transformsEnabled: true			// Important for videos
				});	
			});
		});
		
		
		/*---------------------------------------------- 
					 I S O T O P E : Filter
		------------------------------------------------*/
		jQuery('.filter li a').click(function(){
			
			var parentul = jQuery(this).parents('ul.filter').data('related-grid');
			jQuery(this).parents('ul.filter').find('li a').removeClass('active');
			jQuery(this).addClass('active');
			
			var selector = jQuery(this).attr('data-option-value');
			jQuery('#'+parentul).isotope({ filter: selector }, function(){ });
			
			return(false);
		});
		
		/*---------------------------------------------- 
				 I S O T O P E : Load More
		------------------------------------------------*/	
		var load_more = jQuery('#load-more a'),
						origtext = load_more.text(),
						maxnumpage = jQuery('#load-more a').data('maxnumpage'),
						type = jQuery('#load-more a').data('type'),
						tax = jQuery('#load-more a').data('tax'),
						related = jQuery('#load-more a').data('related'),
						page = 1;

		load_more.click(function(){
			page++;
			//jQuery('#load-more a').find('.icon').fadeOut(300);
			jQuery('#load-more').find('.loader-icon').fadeIn(300);
			
			jQuery.ajax({type:'POST', url:srvars.ajaxurl, data: { action:'sr_load_more', page:page, type:type, tax:tax }, success: function(response) {
				$content = jQuery(response);
				$content.hide();
								
				jQuery($content).imagesLoaded(function() {
					jQuery('.'+related).append( $content );
					jQuery('#load-more').find('.loader-icon').delay(800).fadeOut(300, function () {
						$content.show();
						reorganizeIsotope();
						jQuery('.'+related).isotope( 'appended', $content, function() {
							if(page >= maxnumpage) jQuery('#load-more').slideUp(500);
						});									  
					});
				});
	
			}});
			return false;
		});
		
		
		/*---------------------------------------------- 
					 I S O T O P E : reorganize
		------------------------------------------------*/
		function reorganizeIsotope() {
			jQuery('.masonry').each(function(){
				$container = jQuery(this);
				var maxitemwidth = $container.data('maxitemwidth');
				if (!maxitemwidth) { maxitemwidth = 370; }
				var containerwidth = $container.width();
				var containerwidth = (containerwidth / 110) * 100;
				var itemrightmargin = parseInt($container.children('div').css('marginRight'));
				var rows = Math.ceil(containerwidth/maxitemwidth);
				var marginperrow = (rows-1)*itemrightmargin;
				var newitemmargin = marginperrow / rows;
				var itemwidth = Math.floor((containerwidth/rows)-newitemmargin+1);
				$container.css({ 'width': '110%' });
				$container.children('div').css({ 'width': itemwidth+'px' });
				if ($container.children('div').hasClass('isotope-item')) { $container.isotope( 'reLayout' ); }
			});
		}
		reorganizeIsotope();
			
		jQuery(window).resize(function() {
			reorganizeIsotope();
		});
		
		
	} /* END if isotope */
	
	
	
	/*---------------------------------------------- 
			 D R O P   D O W N   N A  V I
	------------------------------------------------*/
	var timer = [];
   	var timerout= [];
	jQuery("nav#main-nav li").each(function(index) {  
        if (jQuery(this).find("ul").length > 0) {  
            var element = jQuery(this);
            //show subnav on hover  
            jQuery(this).mouseenter(function() {
				if(timer[index]) {
                	clearTimeout(timer[index]);
                	timer[index] = null;
                }
                timer[index] = setTimeout(function() {
                	jQuery(element).children('ul').fadeIn(200); 
                }, 150)
            });  
            //hide submenus on exit  
            jQuery(this).mouseleave(function() {  
				if(timer[index]) {
                	clearTimeout(timer[index]);
                	timer[index] = null;
              }
              timer[index] = setTimeout(function() {
                	jQuery(element).children('ul').fadeOut(200); 
              }, 150) 
            });  
        }  
    });
	
	jQuery('nav#main-nav').on("click", "li", function() {
		if (jQuery(window).width() < 1025) {
			if (jQuery(this).find("ul").length > 0) {
				if (jQuery(this).find("ul").css('display') !== 'block') {
					jQuery(this).children("ul").fadeIn(200);
					return false;	
				}
			}
		}
	});
	
	
	/*---------------------------------------------- 
				R E S P ON S I V E   N A V 
	------------------------------------------------*/
	jQuery('<a class="open-responsive-nav" href=""><span></span></a>').appendTo(".header-inner .menu");
	jQuery("body #page-content").prepend('<div id="menu-responsive" class="scrollbar"><div id="menu-responsive-inner"><a href="" class="close-responsive-nav"><span></span></a><nav id="responsive-nav"><ul></ul></nav></div></div>');
	jQuery("nav#responsive-nav > ul").html(jQuery("nav#main-nav > ul").html());
	
	jQuery('header').on("click", ".open-responsive-nav", function() { 
		var topPos = jQuery('header').height();
		var fullheight = jQuery(window).height()-topPos;
		jQuery("#menu-responsive").css({'height':fullheight+'px','top':topPos+'px'});
		if (jQuery('#menu-responsive').css('right') == 0 || jQuery('#menu-responsive').css('right') == '0px') {
			hideResponsiveNav();
		} else {
			jQuery('#menu-responsive').animate({'right': '0'}, 800, 'easeInOutQuart');
			//jQuery('html, body').animate({scrollTop: 0}, 1000, 'easeInOutQuart');
		}
		return false;
	});
	
	jQuery('#page-content').on("click", "#menu-responsive", function() { 
		hideResponsiveNav();
	});
	
	function hideResponsiveNav(){
		var right = jQuery('#menu-responsive').width()+10;
		jQuery('#menu-responsive').animate({'right': '-'+right+'px'}, 800, 'easeInOutQuart');
	}
	
	
	
	/*---------------------------------------------- 
				        T A B S 
	------------------------------------------------*/	
	jQuery(".tabs").each(function(i) {
		jQuery(this).find('.tab-content').removeClass('active');
		var rel = jQuery(this).find('.active').attr('href');
		jQuery(this).find('.'+rel).addClass('active');
	});
	
	jQuery("body").on("click", ".tab-nav a", function() { 
		
		var parentdiv = jQuery(this).parent('li').parent('ul').parent('div');
		var rel = jQuery(this).attr('href');
		
		jQuery(parentdiv).find(".tab-nav a").removeClass("active");
		jQuery(this).addClass("active");
		
		jQuery(parentdiv).find(".tab-container .tab-content").hide().removeClass('active');
		jQuery(parentdiv).find(".tab-container ."+rel).fadeIn(500).addClass('active');
		
		return(false);
		
	});
	
	
	
	
	/*---------------------------------------------- 
			T O G G L E  &  A C C O R D I O N
	------------------------------------------------*/		
	jQuery(".toggle-item").each(function(i) {
		jQuery(this).find('.toggle-active').siblings('.toggle-inner').slideDown(300);							
	});
	
	jQuery("body").on("click", ".toggle-title", function() { 
						
		var parentdiv = jQuery(this).parent('div').parent('div');
		var active = jQuery(this).parent('div').find('.toggle-inner').css('display');
		
		if (jQuery(parentdiv).attr('class') == 'accordion') {
			if (active !== 'none' ) { 
				jQuery(parentdiv).find('.toggle-item .toggle-inner').slideUp(300);
				jQuery(this).toggleClass('toggle-active');
			} else {
				jQuery(parentdiv).find('.toggle-item .toggle-inner').slideUp(300);
				jQuery(parentdiv).find('.toggle-item .toggle-title').removeClass('toggle-active');
				
				jQuery(this).toggleClass('toggle-active');
				jQuery(this).siblings('.toggle-inner').slideDown(300);
			}
		} else {
			jQuery(this).toggleClass('toggle-active');
			jQuery(this).siblings('.toggle-inner').slideToggle(300);
		}
		
		return(false);
	});
	
	
	
	
	/*---------------------------------------------- 
				 B A C K   T O P   T O P
	------------------------------------------------*/
	jQuery('#backtotop').click(function(){
		jQuery('html, body').animate({scrollTop: 0}, 1000, 'easeInOutQuart');
		return false;						   
	});
	
	
	
	/*---------------------------------------------- 
			O V E R L A Y I N F O   C E N T E R
	------------------------------------------------*/
	jQuery('body').on("mouseenter", ".imgoverlay", function(){
		var infoHeight = parseInt(jQuery(this).find('.overlayinfo').height() / 2);	
		jQuery(this).find('.overlayinfo').css({'marginTop': '-'+infoHeight+'px'});
	});
	
	
	
	/*---------------------------------------------- 
				   F I T   V I D E O S
	------------------------------------------------*/
	if(jQuery().fitVids) { 
		jQuery("body").fitVids();
	}
	
	
			
	/*---------------------------------------------- 
				   	 P A R A L L A X
	------------------------------------------------*/
	if(jQuery().parallax) { 
		jQuery('.parallax-section').parallax();
	}
	
		
	
	/*---------------------------------------------- 
		R E S P O N S I V E   J P L A Y E R
	------------------------------------------------*/
	if(jQuery().jPlayer && jQuery('.jp-interface').length){
		jQuery('.jp-interface').each(function(){ 
			var playerwidth = jQuery(this).width();	
			var newwidth = playerwidth - 175;
			jQuery(this).find('.jp-progress-container').css({ width: newwidth+'px' });
		});
	}
	
	
	
	/*---------------------------------------------- 
				   	 V I D E O   B G
	------------------------------------------------*/
	if(jQuery().bgVideo) { 
		setTimeout(function() {
			jQuery('.videobg-section').bgVideo();
		}, 1000);
	}
	
	
	
	/*---------------------------------------------- 
				  O W L   C A R O U S E L
	------------------------------------------------*/
	if(jQuery().owlCarousel) { 
		jQuery(".portfolio-carousel").owlCarousel({
    		navigation : false,
			items : 4,
			itemsCustom : false,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [980,3],
			itemsTablet: [768,2],
			itemsTabletSmall: false,
			itemsMobile : [479,1],
		});
		
		jQuery("#blog-carousel").owlCarousel({
    		navigation : false,
			items : 3,
			itemsCustom : false,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [980,2],
			itemsTablet: [768,2],
			itemsTabletSmall: false,
			itemsMobile : [479,1],
		});
	}
	
	
	/*---------------------------------------------- 
				   F A N C Y B O X
	------------------------------------------------*/
	if(jQuery().fancybox) {
		jQuery('.openfancybox').fancybox();
	}
	
	
	/*---------------------------------------------- 
				  S C R O L L B A R 
	------------------------------------------------*/
	if(jQuery().perfectScrollbar) { 
		jQuery('.scrollbar').perfectScrollbar({suppressScrollX: true});
	}

	
	
	smoothShow();
		
});


jQuery( window ).scroll(function() {
	
	smoothShow();

});



// SMOOTH SHOW FUNCION FOR ELEMENTS THAT TAKE ACTION WHEN VISIBLE (counter & animations & skills)
function smoothShow() {
	
	
	/*---------------------------------------------- 
				   	 C O U N T E R
	------------------------------------------------*/
	jQuery('.counter-value').each(function() {
		if (jQuery(window).width() > 700) {
			var visible = jQuery(this).visible(false);
			if (jQuery(this).hasClass( "anim" )) {} 
			else if (visible) {
				jQuery(this).addClass("anim");
				var from = parseInt(jQuery(this).attr('data-from'));
				var to = parseInt(jQuery(this).attr('data-to'));
				var speed = parseInt(jQuery(this).attr('data-speed'));
				jQuery(this).count(from, to, speed);
			}
		} else {
			var to = parseInt(jQuery(this).attr('data-to'));
			jQuery(this).html(to);
		}
	});
	
	
	
	/*---------------------------------------------- 
		 	G E N E R A L   A N I M A T I O N S
	------------------------------------------------*/
	jQuery('.sr-animation').each(function() {
		if (jQuery(window).width() > 700) {
			var visible = jQuery(this).visible(true);
			var delay = jQuery(this).attr("data-delay");
			if (!delay) { delay = 0; }
			if (jQuery(this).hasClass( "animated" )) {} 
			else if (visible) {
				jQuery(this).delay(delay).queue(function(){jQuery(this).addClass('animated')});
			}
		} else {
			jQuery(this).addClass('animated');	
		}
	});
	
	
	/*---------------------------------------------- 
		 	S K I L L   A N I M A T I O N
	------------------------------------------------*/
	jQuery('.skill').each(function() {
		var visible = jQuery(this).visible(true);
		var percent = jQuery(this).find('.skill-bar .skill-active ').attr('data-perc');
		if (jQuery(this).hasClass( "anim" )) {} 
		else if (visible) {
			var randomval = Math.floor(Math.random() * (300 - 50 + 1)) + 50;
			jQuery(this).addClass("anim");
			jQuery(this).find('.skill-bar .skill-active ').animate({'width': percent+'%',}, 2000, 'easeInOutQuart', function(){
				jQuery(this).find('.tooltip').delay(randomval).animate({'top':'-28px','opacity':1}, 500);	
			}).css('overflow', 'visible');
		}
	});
	
		
}



// FLEXSLIDER INIT FUNCTION BECAUSE IT ALSO HAS TO BE REINITIALISED AFTER A PORTFOLIO ITEM IS LOADED
function flexInit(el) { 

	/*---------------------------------------------- 
				   F L E X S L I D E R
	------------------------------------------------*/
	if(jQuery().flexslider) { 
		jQuery(el+" .flexslider").flexslider({
			animation: "slide",
			slideshowSpeed: 7000,
			animationDuration: 1000,
			slideshow: false,
			directionNav: false,
			controlNav: true,
			smoothHeight: true,
			touch: true,
			video: true,
			randomize: false
		}); 
	}
	
}

/*----------------------------------------------
        F A D E  O U T  M A I L C H I M P
 ------------------------------------------------*/
setTimeout(fade_out, 4000);

function fade_out() {
    jQuery('.mc4wp-alert').fadeOut().empty();
}