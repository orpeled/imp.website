jQuery(document).ready(function($){
   
    //init Thickbox
    
    ////stop the flash from happening
	$('#TB_window').css('opacity',0);
	
	function calcTB_Pos() {
		$('#TB_window').css({
	   	   'height': ($('#TB_ajaxContent').outerHeight() + 30) + 'px',
	   	   'top' : (($(window).height() + $(window).scrollTop())/2 - (($('#TB_ajaxContent').outerHeight()-$(window).scrollTop()) + 30)/2) + 'px',
	   	   'opacity' : 1
		});
	}
	
	setTimeout(calcTB_Pos,10);
	
	//just incase..
	setTimeout(calcTB_Pos,100);
	
	$(window).resize(calcTB_Pos);
	
	
	
	/*	**********************************
		SHOW FIRST SHORTCODE
	/*	**********************************/
	$('.sc_list li:first-child a').addClass('active');
	
	$('.sc_list li a').click(function() {
		$('.sc_list li a').removeClass('active');
		$(this).addClass('active');
		var showoption = $(this).attr('href');
		$('.sc_option .sc-option-content').hide();
		$('.sc_option #'+showoption).show();
		return (false);
	});
	
	
	
	/*	**********************************
		ICON CLICK
	/*	**********************************/
	$('.iconcheck').click(function() { 
		value = $(this).siblings('input').val();
		parent = $(this).parent();
		
		$(parent).siblings('li').removeClass('iconactive');
		$(parent).addClass('iconactive');
		
		$(parent).siblings('li').find("input").removeAttr("checked");
		$(this).siblings('input').attr("checked", "checked");
		
		var form = $(parent).parents('form').attr('id');
	});	
	
	
	/*	**********************************
		ADD SINGLE IMAGE
	/*	**********************************/
  	$('.upload-sc-image').on('click',function( event ) {	 
		
		var preview = jQuery(this).siblings('.preview-image').find('img');
		var value = jQuery(this).siblings('input');
		var uploadbutton = jQuery(this);
		var removebutton = jQuery(this).siblings('.remove-sc-image');
		
		mediaframe = wp.media.frames.customHeader = wp.media({
			title: 'Choose Image',
			library: { type: 'image' },
			button: { text: 'Select Image' }
		});
		mediaframe.on( "select", function() {
				// Grab the selected attachment.
				var imagefile = mediaframe.state().get("selection").first();
				var imagesrc = imagefile.attributes.url;

				$(preview).attr('src',imagesrc);
				$(value).val(imagesrc);
				$(removebutton).css({'display':'inline-block'});
				$(uploadbutton).css({'display':'none'});
				
		});
	    mediaframe.open();
		
		return false;
	});	
	
	/* Remove Image */
  	$('.remove-sc-image').on('click',function( event ) {	 
		
		var preview = jQuery(this).siblings('.preview-image').find('img');
		var value = jQuery(this).siblings('input');
		var uploadbutton = jQuery(this).siblings('.upload-sc-image');
				
		$(preview).attr('src','');
		$(value).val('');
		$(uploadbutton).css({'display':'inline-block'});
		$(this).css({'display':'none'});
		
		return false;
	});	
  
  
  	$('.sr-color-field').wpColorPicker();
  
  
  	/*	**********************************
		CUSTOM RADIO
	/*	**********************************/
	$('.customradio').click(function() { 
		
		value = $(this).attr('href');
		parent = $(this).parent();
		
		$(parent).find(".customradio").removeClass('active');
		$(this).addClass('active');
		
		$(parent).find("input").removeAttr("checked");
		$(parent).find("#"+value).attr("checked", "checked");
		
		var form = $(parent).parents('form').attr('id');
		
		
		
		/* custom columns show/hide */
		if (form == 'form_columns') {
			$(parent).parents(".sc-option-content").find('#sc_group_column_one').hide();
			$(parent).parents(".sc-option-content").find('#sc_group_column_two').hide();
			$(parent).parents(".sc-option-content").find('#sc_group_column_three').hide();
			$(parent).parents(".sc-option-content").find('#sc_group_column_four').hide();
			$(parent).parents(".sc-option-content").find('#sc_group_column_five').hide();
			
			if (value == 'layout_onehalf-onehalf' || value == 'layout_onethird-twothird' || value == 'layout_twothird-onethird') {
				$(parent).parents(".sc-option-content").find('#sc_group_column_one').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_two').show();
			} else if (value == 'layout_onethird-onethird-onethird' || value == 'layout_onehalf-onefourth-onefourth') {
				$(parent).parents(".sc-option-content").find('#sc_group_column_one').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_two').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_three').show();
			} else if (value == 'layout_onefourth-onefourth-onefourth-onefourth') {
				$(parent).parents(".sc-option-content").find('#sc_group_column_one').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_two').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_three').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_four').show();
			} else if (value == 'layout_onefifth-onefifth-onefifth-onefifth-onefifth') {
				$(parent).parents(".sc-option-content").find('#sc_group_column_one').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_two').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_three').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_four').show();
				$(parent).parents(".sc-option-content").find('#sc_group_column_five').show();
			}
		}

		
		/* team member show/hide */
		if (form == 'form_team') {
			$(parent).parents(".sc-option-content").find('#sc_teamgroup_one').hide();
			$(parent).parents(".sc-option-content").find('#sc_teamgroup_two').hide();
			$(parent).parents(".sc-option-content").find('#sc_teamgroup_three').hide();
			$(parent).parents(".sc-option-content").find('#sc_teamgroup_four').hide();
			
			if (value == 'layout_onehalf-onehalf') {
				$(parent).parents(".sc-option-content").find('#sc_teamgroup_one').show();
				$(parent).parents(".sc-option-content").find('#sc_teamgroup_two').show();
			} else if (value == 'layout_onethird-onethird-onethird') {
				$(parent).parents(".sc-option-content").find('#sc_teamgroup_one').show();
				$(parent).parents(".sc-option-content").find('#sc_teamgroup_two').show();
				$(parent).parents(".sc-option-content").find('#sc_teamgroup_three').show();
			} else if (value == 'layout_onefourth-onefourth-onefourth-onefourth') {
				$(parent).parents(".sc-option-content").find('#sc_teamgroup_one').show();
				$(parent).parents(".sc-option-content").find('#sc_teamgroup_two').show();
				$(parent).parents(".sc-option-content").find('#sc_teamgroup_three').show();
				$(parent).parents(".sc-option-content").find('#sc_teamgroup_four').show();
			}
		}
		
		
		/* pricing table show/hide */
		if (form == 'form_pricing') {
			$(parent).parents(".sc-option-content").find('#sc_pricinggroup_one').hide();
			$(parent).parents(".sc-option-content").find('#sc_pricinggroup_two').hide();
			$(parent).parents(".sc-option-content").find('#sc_pricinggroup_three').hide();
			$(parent).parents(".sc-option-content").find('#sc_pricinggroup_four').hide();
			
			if (value == 'layout_onehalf-onehalf') {
				$(parent).parents(".sc-option-content").find('#sc_pricinggroup_one').show();
				$(parent).parents(".sc-option-content").find('#sc_pricinggroup_two').show();
			} else if (value == 'layout_onethird-onethird-onethird') {
				$(parent).parents(".sc-option-content").find('#sc_pricinggroup_one').show();
				$(parent).parents(".sc-option-content").find('#sc_pricinggroup_two').show();
				$(parent).parents(".sc-option-content").find('#sc_pricinggroup_three').show();
			} else if (value == 'layout_onefourth-onefourth-onefourth-onefourth') {
				$(parent).parents(".sc-option-content").find('#sc_pricinggroup_one').show();
				$(parent).parents(".sc-option-content").find('#sc_pricinggroup_two').show();
				$(parent).parents(".sc-option-content").find('#sc_pricinggroup_three').show();
				$(parent).parents(".sc-option-content").find('#sc_pricinggroup_four').show();
			}
		}
		
		
		return false;
	});
	
	
	
	/*	**********************************
		DUPLICATE GROUP
	/*	**********************************/
	$('.groupduplicater').click(function() {
		
		var group = $(this).attr('href');
		var parent = $(this).parent('form');
		var groupcontent = $(this).parent('form').find('.group:first').html();
		
		$(this).before('<div id="'+group+'" class="group">'+groupcontent+'</div>');
		
		return false;
	});
	
	
	
	/*	**********************************
		HIDING
	/*	**********************************/
	jQuery('.select-hiding select').change(function() {
		var val = jQuery(this).val();
		var name = jQuery(this).attr('id');
		//alert(name);
		jQuery('.hide'+name).hide();
		jQuery('.'+name+'_'+val).show();
	});
	
	
	jQuery('.select-hiding select').each(function(index) {
		var val = jQuery(this).val();
		var name = jQuery(this).attr('id');
		jQuery('.hide'+name).hide();
		jQuery('.'+name+'_'+val).show();
	});
	
	
	
	
	/*	**********************************
		CLICK INSERT SHORTCODE
	/*	**********************************/
	$('.submit').click(function() {
		var check = true;
		
		// ---------------------- CONTROL COLUMNS
		if ($(this).attr('id') == 'insert_columns') {
			var layout = $(this).parent('form').find('input[name="sc_columnlayout"]:checked').val();
			if (layout) {   } else { alert('Please Choose a column layout'); check = false; } 
		}
		// ---------------------- CONTROL COLUMNS
		
		
		// ---------------------- CONTROL TEAM
		if ($(this).attr('id') == 'insert_team') {
			var layout = $(this).parent('form').find('input[name="sc_teamlayout"]:checked').val();
			if (layout) {   } else { alert('Please Choose a Team layout'); check = false; } 
		}
		// ---------------------- CONTROL TEAM
		
		
		// ---------------------- CONTROL PRICING
		if ($(this).attr('id') == 'insert_pricing') {
			var layout = $(this).parent('form').find('input[name="sc_pricinglayout"]:checked').val();
			if (layout) {   } else { alert('Please Choose a Pricing layout'); check = false; } 
		}
		// ---------------------- CONTROL PRICING
		
			
		// ---------------------- CONTROL CONTACT
		if ($(this).attr('id') == 'insert_contact') {
			var mail = $(this).parent('form').find('input#sc_contactsendto').val();
			if (mail) {   } else { alert('Please enter a recipient email'); check = false; } 
		}
		// ---------------------- CONTROL CONTACT
		
		
		var theShortcode = getshortcode($(this).attr('id'));
		var ed = tinyMCE.activeEditor;
		ed.selection.setContent(theShortcode);
		tb_remove();
		
		return false;
	});
	
	
	
	
	/*	**********************************
		FUNCTION TO GET THE RIGHT SHORTCODE
	/*	**********************************/
	function getshortcode(id) {
		
		var outputbefore = ''; 
		var output = ''; 
		
		// ---------------------- COLUMNS
		if (id == 'insert_columns') {
			
			var animation = $('#'+id).parent('form').find('select#sc_columnanimation').val();
			
			columnoption = '';
			rowoption = '';
			if (animation == 'column') {
				var type = $('#'+id).parent('form').find('select#sc_columnanimationtype').val();
				var delay = $('#'+id).parent('form').find('input#sc_columnanimationdelay').val();
				columnoption = ' animation="'+type+'" delay="'+delay+'"';
			} else if (animation == 'row') {
				var type = $('#'+id).parent('form').find('select#sc_rowanimationtype').val();
				var delay = $('#'+id).parent('form').find('input#sc_rowanimationdelay').val();
				rowoption = ' animation="'+type+'" delay="'+delay+'"';
			}
			
			var layout = $('#'+id).parent('form').find('input[name="sc_columnlayout"]:checked').val();
			var text_one = $('#'+id).parent('form').find('textarea#sc_column_one').val();
			var bg_one = $('#'+id).parent('form').find('input#sc_column_one_bg').val();
			var text_two = $('#'+id).parent('form').find('textarea#sc_column_two').val();
			var bg_two = $('#'+id).parent('form').find('input#sc_column_two_bg').val();
			var text_three = $('#'+id).parent('form').find('textarea#sc_column_three').val();
			var bg_three = $('#'+id).parent('form').find('input#sc_column_three_bg').val();
			var text_four = $('#'+id).parent('form').find('textarea#sc_column_four').val();
			var bg_four = $('#'+id).parent('form').find('input#sc_column_four_bg').val();
			var text_five = $('#'+id).parent('form').find('textarea#sc_column_five').val();
			var bg_five = $('#'+id).parent('form').find('input#sc_column_five_bg').val();
						
			if (layout == 'layout_onehalf-onehalf') {
				output = '[one_half'+columnoption+' bg='+bg_one+']'+text_one+'[/one_half]';	
				output += '[one_half_last'+columnoption+' bg='+bg_two+']'+text_two+'[/one_half_last]';	
			} else if (layout == 'layout_twothird-onethird') {
				output = '[two_third'+columnoption+' bg='+bg_one+']'+text_one+'[/two_third]';	
				output += '[one_third_last'+columnoption+' bg='+bg_two+']'+text_two+'[/one_third_last]';	
			} else if (layout == 'layout_onethird-twothird') {
				output = '[one_third'+columnoption+' bg='+bg_one+']'+text_one+'[/one_third]';	
				output += '[two_third_last'+columnoption+' bg='+bg_two+']'+text_two+'[/two_third_last]';	
			} else if (layout == 'layout_onethird-onethird-onethird') {
				output = '[one_third'+columnoption+' bg='+bg_one+']'+text_one+'[/one_third]';	
				output += '[one_third'+columnoption+' bg='+bg_two+']'+text_two+'[/one_third]';	
				output += '[one_third_last'+columnoption+' bg='+bg_three+']'+text_three+'[/one_third_last]';	
			} else if (layout == 'layout_onehalf-onefourth-onefourth') {
				output = '[one_half'+columnoption+' bg='+bg_one+']'+text_one+'[/one_half]';	
				output += '[one_fourth'+columnoption+' bg='+bg_two+']'+text_two+'[/one_fourth]';	
				output += '[one_fourth_last'+columnoption+' bg='+bg_three+']'+text_three+'[/one_fourth_last]';	
			} else if (layout == 'layout_onefourth-onefourth-onefourth-onefourth') {
				output = '[one_fourth'+columnoption+' bg='+bg_one+']'+text_one+'[/one_fourth]';	
				output += '[one_fourth'+columnoption+' bg='+bg_two+']'+text_two+'[/one_fourth]';	
				output += '[one_fourth'+columnoption+' bg='+bg_three+']'+text_three+'[/one_fourth]';	
				output += '[one_fourth_last'+columnoption+' bg='+bg_four+']'+text_four+'[/one_fourth_last]';	
			} else if (layout == 'layout_onefifth-onefifth-onefifth-onefifth-onefifth') {
				output = '[one_fifth'+columnoption+' bg='+bg_one+']'+text_one+'[/one_fifth]';	
				output += '[one_fifth'+columnoption+' bg='+bg_two+']'+text_two+'[/one_fifth]';	
				output += '[one_fifth'+columnoption+' bg='+bg_three+']'+text_three+'[/one_fifth]';	
				output += '[one_fifth'+columnoption+' bg='+bg_four+']'+text_four+'[/one_fifth]';	
				output += '[one_fifth_last'+columnoption+' bg='+bg_five+']'+text_five+'[/one_fifth_last]';	
			}
			
			output = '[column_row'+rowoption+']'+output+'[/column_row]';
			
		}
		// ---------------------- COLUMNS
		
		
		
		
		// ---------------------- SKILLS
		if (id == 'insert_skills') {
			
			$('#'+id).parent('form').find('.group').each(function(index) {					
					var skill_percent = jQuery(this).find('input#sc_skillpercent').val();
					var skill_name = jQuery(this).find('input#sc_skillname').val();
					var skill_color = jQuery(this).find('input#sc_skillcolor').val();
					output += '[skill amount="'+skill_percent+'" name="'+skill_name+'" color="'+skill_color+'"]';
			});
			
		}
		// ---------------------- SKILLS
		
		
		
		// ---------------------- SELHOSTEDT AUDIO
		if (id == 'insert_selhostedaudio') {
			
			var mp3 = $('#'+id).parent('form').find('input#sc_selhostedaudiomp3').val();
			var oga = $('#'+id).parent('form').find('input#sc_selhostedaudiooga').val();
			var pic = $('#'+id).parent('form').find('input#sc_selhostedaudiopic').val();
			var id = $('#'+id).parent('form').find('input#sc_selhostedaudioid').val();
			output += '[selhostedtaudio mp3="'+mp3+'" oga="'+oga+'" pic="'+pic+'" id="'+id+'"]';
	
		}
		// ---------------------- SELHOSTEDT AUDIO
		
		
		
		// ---------------------- SELHOSTEDT VIDEO
		if (id == 'insert_selhostedvideo') {
			
			var m4v = $('#'+id).parent('form').find('input#sc_selhostedvideom4v').val();
			var oga = $('#'+id).parent('form').find('input#sc_selhostedvideooga').val();
			var webmv = $('#'+id).parent('form').find('input#sc_selhostedvideowebmv').val();
			var pic = $('#'+id).parent('form').find('input#sc_selhostedvideopic').val();
			var id = $('#'+id).parent('form').find('input#sc_selhostedvideoid').val();
			output += '[selhostedtvideo m4v="'+m4v+'" oga="'+oga+'" webmv="'+webmv+'" pic="'+pic+'" id="'+id+'"]';
	
		}
		// ---------------------- SELHOSTEDT VIDEO
		
		
		
		
		// ---------------------- CONTACT
		if (id == 'insert_contact') {
			
			var fields = '';
			
			$('#'+id).parent('form').find('.group').each(function(index) {					
					
					var fieldtype = $(this).find('select#sc_contacttype').val();
					var fieldname = $(this).find('input#sc_contactname').val();
					var slugname = $(this).find('input#sc_contactslug').val();
					if (slugname == '') { slugname = fieldname.toLowerCase(); slugname = slugname.replace(' ',''); } 
					var required = $(this).find('select#sc_contactreq').val();
					
					output += '[field type='+fieldtype+' name="'+fieldname+'" slug='+slugname+' required='+required+']';
					if (fieldtype !== 'submitbutton') { fields += slugname+','; }
					
			});
			
			var email =  $('#'+id).parent('form').find('input#sc_contactsendto').val();
			var subject =  $('#'+id).parent('form').find('input#sc_contactsubject').val();
			var submitname = $('#'+id).parent('form').find('input#sc_contactsubmit').val();
			
			output = '[contactgroup fields='+fields+' email='+email+' subject="'+subject+'" submit="'+submitname+'"]'+output+'[/contactgroup]';
		}
		// ---------------------- CONTACT
		
		
		
		// ---------------------- BUTTONS
		if (id == 'insert_buttons') {
			
			var color = $('#'+id).parent('form').find('select#sc_buttoncolor').val();
			var size = $('#'+id).parent('form').find('select#sc_buttonsize').val();
			var text = $('#'+id).parent('form').find('input#sc_buttontext').val();
			
			var type = $('#'+id).parent('form').find('select#sc_buttontype').val();
			if (type == 'text') {
				var text = $('#'+id).parent('form').find('input#sc_button_text_text').val();
				var sc_type = '';
			} else if (type == 'icon') {
				var text = '';
				var icon = $('#'+id).parent('form').find('input[name="sc_button_icon_icon"]:checked').val();
				var sc_type = 'icon="'+icon+'"';
			}
			
			var goto = $('#'+id).parent('form').find('select#sc_buttongoto').val();
			if (goto == 'url') {
				var url = $('#'+id).parent('form').find('input#sc_button_url_url').val();
				var target = $('#'+id).parent('form').find('select#sc_button_url_target').val();
				var sc_options = 'url="'+url+'" target="'+target+'"';
			} else if (goto == 'scrollto') {
				var scrollto = $('#'+id).parent('form').find('select#sc_button_scroll_section').val();
				var sc_options = 'scrollto="'+scrollto+'"';
			} else if (goto == 'video') {
				var video = $('#'+id).parent('form').find('input#sc_button_video_video').val();
				var width = $('#'+id).parent('form').find('input#sc_button_video_width').val();
				var height = $('#'+id).parent('form').find('input#sc_button_video_height').val();
				var sc_options = 'video="'+video+'" width="'+width+'" height="'+height+'"';
			}
			
			output = '[button color='+color+' size="'+size+'" '+sc_options+' '+sc_type+']'+text+'[/button]';
			
		}
		// ---------------------- BUTTONS
		
		
		
		
		// ---------------------- ANIMATION
		if (id == 'insert_animation') {
			
			var type = $('#'+id).parent('form').find('select#sc_animationtype').val();
			var delay = $('#'+id).parent('form').find('input#sc_animationdelay').val();
			
			output = '[sr-animation type='+type+' delay='+delay+'][/sr-animation]';
			
		}
		// ---------------------- ANIMATION
		
		
		
		// ---------------------- ICONS
		if (id == 'insert_icon') {
			
			var type = $('#'+id).parent('form').find('input[name="sc_iconfont"]:checked').val();
			var size = $('#'+id).parent('form').find('select#sc_iconsize').val();
			var color = $('#'+id).parent('form').find('input#sc_iconcolor').val();
			
			output = '[iconfont type="'+type+'" size="'+size+'" color="'+color+'"]';
			
		}
		// ---------------------- ICONS
		
		
		
		// ---------------------- ICONBOX
		if (id == 'insert_iconbox') {
			
			var type = $('#'+id).parent('form').find('input[name="sc_iconboxfont"]:checked').val();
			var color = $('#'+id).parent('form').find('input#sc_iconboxcolor').val();
			var position = $('#'+id).parent('form').find('select#sc_iconboxposition').val();
			var headline = $('#'+id).parent('form').find('input#sc_iconboxheadline').val();
			var text = $('#'+id).parent('form').find('textarea#sc_iconboxtext').val();
			
			var animation = $('#'+id).parent('form').find('select#sc_iconboxanimation').val();
			
			animationoption = '';
			if (animation !== 'false') {
				var animtype = $('#'+id).parent('form').find('select#sc_iconboxanimation').val();
				var delay = $('#'+id).parent('form').find('input#sc_iconboxanimationdelay').val();
				animationoption = 'animation="'+animtype+'" delay="'+delay+'"';
			} 
			
			output = '[iconbox icon="'+type+'" color="'+color+'" position="'+position+'" '+animationoption+']<h5><strong>'+headline+'</strong></h5><p>'+text+'</p>[/iconbox]';
			
		}
		// ---------------------- ICONBOX
		
		
		
		// ---------------------- ALERT
		if (id == 'insert_alert') {
			
			var color = $('#'+id).parent('form').find('select#sc_alertcolor').val();
			var text = $('#'+id).parent('form').find('textarea#sc_alerttext').val();
			
			output = '[alert color='+color+']'+text+'[/alert]';
			
		}
		// ---------------------- ALERT
		
		
		
		// ---------------------- TOGGLE
		if (id == 'insert_toggle') {
			
			var title = $('#'+id).parent('form').find('input#sc_toggletitle').val();
			var size = $('#'+id).parent('form').find('select#sc_togglesize').val();
			var aopen = $('#'+id).parent('form').find('select#sc_toggleopen').val();
			var text = $('#'+id).parent('form').find('textarea#sc_toggletext').val();
			output = '[toggle title="'+title+'" size='+size+' open='+aopen+']'+text+'[/toggle]';
			
		}
		// ---------------------- TOGGLE
		
		
		
		// ---------------------- COUNTER
		if (id == 'insert_counter') {
			
			var from = $('#'+id).parent('form').find('input#sc_countfrom').val();
			var to = $('#'+id).parent('form').find('input#sc_countto').val();
			var speed = $('#'+id).parent('form').find('input#sc_countspeed').val();
			var name = $('#'+id).parent('form').find('input#sc_countsub').val();
			output = '[counter from="'+from+'" to='+to+' speed='+speed+' sub="'+name+'"]';
			
		}
		// ---------------------- COUNTER
		
		
		
		// ---------------------- TABS
		if (id == 'insert_tab') {
			
			$('#'+id).parent('form').find('.group').each(function(index) {					
					var tab_name = jQuery(this).find('input#sc_tabname').val();
					var tab_text = jQuery(this).find('textarea#sc_tabtext').val();
					outputbefore += tab_name+',';
					output += '[tab id="'+(index+1)+'"]'+tab_text+'[/tab]';
			});
			
			output = '[tabs title="'+outputbefore+'"]'+output+'[/tabs]';
		}
		// ---------------------- TABS
		
		
		
		// ---------------------- QUOTE SLIDER
		if (id == 'insert_quote') {
			
			$('#'+id).parent('form').find('.group').each(function(index) {					
					var quote_name = jQuery(this).find('input#sc_quotename').val();
					var quote_text = jQuery(this).find('textarea#sc_quotetext').val();
					output += '[quote name="'+quote_name+'"]'+quote_text+'[/quote]';
			});
			
			output = '[quoteslider]'+output+'[/quoteslider]';
		}
		// ---------------------- QUOTE SLIDER
		
		
		// ---------------------- ACCORDION
		if (id == 'insert_accordion') {
			
			$('#'+id).parent('form').find('.group').each(function(index) {					
					var accordion_open = jQuery(this).find('select#sc_accordionopen').val();
					var accordion_name = jQuery(this).find('input#sc_accordiontitle').val();
					var accordion_text = jQuery(this).find('textarea#sc_accordiontext').val();
					output += '[accordion title="'+accordion_name+'" open="'+accordion_open+'"]'+accordion_text+'[/accordion]';
			});
			
			output = '[accordiongroup]'+output+'[/accordiongroup]';
		}
		// ---------------------- ACCORDION
		
		
		
		// ---------------------- GALLERY
		if (id == 'insert_gallery') {
			
			var gal_id = $('#'+id).parent('form').find('select#sc_galleryid').val();
			var cols = $('#'+id).parent('form').find('select#sc_gallerycolumns').val();
			var carousel = $('#'+id).parent('form').find('select#sc_gallerycarousel').val();
			
			output = '[sr_customgallery id="'+gal_id+'" columns="'+cols+'" carousel="'+carousel+'"]';
			
		}
		// ---------------------- GALLERY
		
		
		
		// ---------------------- VIDEO
		if (id == 'insert_video') {
			
			var iframe = $('#'+id).parent('form').find('textarea#sc_video').val();
			
			output = '[sr_video]'+iframe+'[/sr_video]';
			
		}
		// ---------------------- VIDEO
		
		
		
		// ---------------------- SPACER
		if (id == 'insert_spacer') {
			
			var size = $('#'+id).parent('form').find('select#sc_spacersize').val();
			
			output = '[spacer size="'+size+'"]';
			
		}
		// ---------------------- SPACER
		
				
		
		// ---------------------- LATEST NEWS
		if (id == 'insert_latestnews') {
			
			var type = $('#'+id).parent('form').find('select#sc_latestnewstype').val();
			var number = $('#'+id).parent('form').find('input#sc_latestnewsnumber').val();
			var category = $('#'+id).parent('form').find('select#sc_latestnewscategory').val();
			
			output = '[latestnews type="'+type+'" number="'+number+'" category="'+category+'"]';
			
		}
		// ---------------------- LATEST NEWS
		
		
		
		// ---------------------- RECENT WORKS
		if (id == 'insert_recentworks') {
			
			var layout = $('#'+id).parent('form').find('select#sc_recentworkslayout').val();
			var columns = $('#'+id).parent('form').find('select#sc_recentworkscolumns').val();
			var number = $('#'+id).parent('form').find('input#sc_recentworksnumber').val();
			var category = $('#'+id).parent('form').find('select#sc_recentworkscategory').val();
			
			if (layout == 'grid') { cols = columns; } else { cols = ''; }
			output = '[recentworks layout="'+layout+'" cols="'+cols+'" number="'+number+'" category="'+category+'"]';
			
		}
		// ---------------------- RECENT WORKS
		
		
		
		// ---------------------- HORIZONTAL SECTION
		if (id == 'insert_horizontalsection') {
			
			var bg = $('#'+id).parent('form').find('select#sc_horizontalsectionbg').val();

			if (bg == 'color') {
				var color = $('#'+id).parent('form').find('input#sc_horizontalsection_bgcolor_color').val();
				var sc_name = 'horizontalsection';
				var sc_options = 'color="'+color+'"';
			} else if (bg == 'image') {
				var image = $('#'+id).parent('form').find('input#sc_horizontalsection_bgimage_image').val();
				var parallax = $('#'+id).parent('form').find('select#sc_horizontalsection_bgimage_parallax').val();
				var overlay = $('#'+id).parent('form').find('input#sc_horizontalsection_bgimage_overlaycolor').val();
				var overlayopacity = $('#'+id).parent('form').find('select#sc_horizontalsection_bgimage_opacity').val();
				var sc_name = 'horizontalsection-image';
				var sc_options = 'image="'+image+'" parallax="'+parallax+'" overlay="'+overlay+'" overlayopacity="'+overlayopacity+'"';
			} else if (bg == 'video') {
				var mp4 = $('#'+id).parent('form').find('input#sc_horizontalsection_video_mp4').val();
				var webm = $('#'+id).parent('form').find('input#sc_horizontalsection_video_webm').val();
				var ogv = $('#'+id).parent('form').find('input#sc_horizontalsection_video_ogv').val();
				var width = $('#'+id).parent('form').find('input#sc_horizontalsection_video_width').val();
				var height = $('#'+id).parent('form').find('input#sc_horizontalsection_video_height').val();
				var poster = $('#'+id).parent('form').find('input#sc_horizontalsection_video_poster').val();
				var parallax = $('#'+id).parent('form').find('select#sc_horizontalsection_video_parallax').val();
				var overlay = $('#'+id).parent('form').find('input#sc_horizontalsection_video_overlaycolor').val();
				var overlayopacity = $('#'+id).parent('form').find('select#sc_horizontalsection_video_opacity').val();
				var sc_name = 'horizontalsection-video';
				var sc_options = 'mp4="'+mp4+'" webm="'+webm+'" ogv="'+ogv+'" width="'+width+'" height="'+height+'" poster="'+poster+'" parallax="'+parallax+'" overlay="'+overlay+'" overlayopacity="'+overlayopacity+'"';
			}
			
			var textcolor = $('#'+id).parent('form').find('select#sc_horizontalsectiontextcolor').val();
			var pdtop = $('#'+id).parent('form').find('input#sc_horizontalsectionpdtop').val();
			var pdbottom = $('#'+id).parent('form').find('input#sc_horizontalsectionpdbottom').val();
			
			output = '['+sc_name+' '+sc_options+' textcolor="'+textcolor+'" pdtop="'+pdtop+'" pdbottom="'+pdbottom+'"][/'+sc_name+']';
			
		}
		// ---------------------- HORIZONTAL SECTION
		
		
		
		// ---------------------- MAP
		if (id == 'insert_map') {
			
			var latlong = $('#'+id).parent('form').find('input#sc_maplatlong').val();
			var text = $('#'+id).parent('form').find('textarea#sc_maptext').val();
			var icon = $('#'+id).parent('form').find('input#sc_mapicon').val();
			var height = $('#'+id).parent('form').find('input#sc_mapheight').val();
			var id = $('#'+id).parent('form').find('input#sc_mapid').val();

			output = '[googlemap latlong="'+latlong+'" icon="'+icon+'" height="'+height+'"]'+text+'[/googlemap]';
			
		}
		// ---------------------- MAP
		
		
		
		// ---------------------- DEVIDER
		if (id == 'insert_devider') {
			
			var size = $('#'+id).parent('form').find('select#sc_devidersize').val();
			var thickness = $('#'+id).parent('form').find('select#sc_deviderthickness').val();

			output = '[devider size="'+size+'" thickness="'+thickness+'" ]';
			
		}
		// ---------------------- DEVIDER
		
		
		
		
		// ---------------------- SECTION TITLE
		if (id == 'insert_sectiontitle') {
			
			var main = $('#'+id).parent('form').find('input#sc_sectiontitle_main').val();
			var subt = $('#'+id).parent('form').find('input#sc_sectiontitle_sub').val();

			output = '[sectiontitle title="'+main+'"]'+subt+'[/sectiontitle]';
			
		}
		// ---------------------- SECTION TITLE
		

		
		
		// ---------------------- TEAM
		if (id == 'insert_team') {
			
			var animation = $('#'+id).parent('form').find('select#sc_teamanimation').val();
			
			teamoption = '';
			rowoption = '';
			if (animation == 'column') {
				var type = $('#'+id).parent('form').find('select#sc_teamanimationtype').val();
				var delay = $('#'+id).parent('form').find('input#sc_teamanimationdelay').val();
				teamoption = ' animation="'+type+'" delay="'+delay+'"';
			} else if (animation == 'row') {
				var type = $('#'+id).parent('form').find('select#sc_teamrowanimationtype').val();
				var delay = $('#'+id).parent('form').find('input#sc_teamrowanimationdelay').val();
				rowoption = ' animation="'+type+'" delay="'+delay+'"';
			}
			
			var layout = $('#'+id).parent('form').find('input[name="sc_teamlayout"]:checked').val();
			
			var img_one = $('#'+id).parent('form').find('input#sc_teamimage_one').val();
			var name_one = $('#'+id).parent('form').find('input#sc_teamname_one').val();
			var title_one = $('#'+id).parent('form').find('input#sc_teamtitle_one').val();
			var text_one = $('#'+id).parent('form').find('textarea#sc_teamtext_one').val();
			var facebook_one = $('#'+id).parent('form').find('input#sc_teamfacebook_one').val();
			var twitter_one = $('#'+id).parent('form').find('input#sc_teamtwitter_one').val();
			var google_one = $('#'+id).parent('form').find('input#sc_teamgoogle_one').val();
			var linkedin_one = $('#'+id).parent('form').find('input#sc_teamlinkedin_one').val();
			var mail_one = $('#'+id).parent('form').find('input#sc_teammail_one').val();
			
			var img_two = $('#'+id).parent('form').find('input#sc_teamimage_two').val();
			var name_two = $('#'+id).parent('form').find('input#sc_teamname_two').val();
			var title_two = $('#'+id).parent('form').find('input#sc_teamtitle_two').val();
			var text_two = $('#'+id).parent('form').find('textarea#sc_teamtext_two').val();
			var facebook_two = $('#'+id).parent('form').find('input#sc_teamfacebook_two').val();
			var twitter_two = $('#'+id).parent('form').find('input#sc_teamtwitter_two').val();
			var google_two = $('#'+id).parent('form').find('input#sc_teamgoogle_two').val();
			var linkedin_two = $('#'+id).parent('form').find('input#sc_teamlinkedin_two').val();
			var mail_two = $('#'+id).parent('form').find('input#sc_teammail_two').val();
			
			var img_three = $('#'+id).parent('form').find('input#sc_teamimage_three').val();
			var name_three = $('#'+id).parent('form').find('input#sc_teamname_three').val();
			var title_three = $('#'+id).parent('form').find('input#sc_teamtitle_three').val();
			var text_three = $('#'+id).parent('form').find('textarea#sc_teamtext_three').val();
			var facebook_three = $('#'+id).parent('form').find('input#sc_teamfacebook_three').val();
			var twitter_three = $('#'+id).parent('form').find('input#sc_teamtwitter_three').val();
			var google_three = $('#'+id).parent('form').find('input#sc_teamgoogle_three').val();
			var linkedin_three = $('#'+id).parent('form').find('input#sc_teamlinkedin_three').val();
			var mail_three = $('#'+id).parent('form').find('input#sc_teammail_three').val();
			
			var img_four = $('#'+id).parent('form').find('input#sc_teamimage_four').val();
			var name_four = $('#'+id).parent('form').find('input#sc_teamname_four').val();
			var title_four = $('#'+id).parent('form').find('input#sc_teamtitle_four').val();
			var text_four = $('#'+id).parent('form').find('textarea#sc_teamtext_four').val();
			var facebook_four = $('#'+id).parent('form').find('input#sc_teamfacebook_four').val();
			var twitter_four = $('#'+id).parent('form').find('input#sc_teamtwitter_four').val();
			var google_four = $('#'+id).parent('form').find('input#sc_teamgoogle_four').val();
			var linkedin_four = $('#'+id).parent('form').find('input#sc_teamlinkedin_four').val();
			var mail_four = $('#'+id).parent('form').find('input#sc_teammail_four').val();
			
						
			if (layout == 'layout_onehalf-onehalf') {
				output = '[team_one_half name="'+name_one+'" title="'+title_one+'" img="'+img_one+'" fb="'+facebook_one+'" tw="'+twitter_one+'" gl="'+google_one+'" li="'+linkedin_one+'" mail="'+mail_one+'" '+teamoption+']'+text_one+'[/team_one_half]';	
				output += '[team_one_half_last name="'+name_two+'" title="'+title_two+'" img="'+img_two+'" fb="'+facebook_two+'" tw="'+twitter_two+'" gl="'+google_two+'" li="'+linkedin_two+'" mail="'+mail_two+'" '+teamoption+']'+text_two+'[/team_one_half_last]';	
			} else if (layout == 'layout_onethird-onethird-onethird') {
				output = '[team_one_third name="'+name_one+'" title="'+title_one+'" img="'+img_one+'" fb="'+facebook_one+'" tw="'+twitter_one+'" gl="'+google_one+'" li="'+linkedin_one+'" mail="'+mail_one+'" '+teamoption+']'+text_one+'[/team_one_third]';	
				output += '[team_one_third name="'+name_two+'" title="'+title_two+'" img="'+img_two+'" fb="'+facebook_two+'" tw="'+twitter_two+'" gl="'+google_two+'" li="'+linkedin_two+'" mail="'+mail_two+'" '+teamoption+']'+text_two+'[/team_one_third]';	
				output += '[team_one_third_last name="'+name_three+'" title="'+title_three+'" img="'+img_three+'" fb="'+facebook_three+'" tw="'+twitter_three+'" gl="'+google_three+'" li="'+linkedin_three+'" mail="'+mail_three+'" '+teamoption+']'+text_three+'[/team_one_third_last]';	
			} else if (layout == 'layout_onefourth-onefourth-onefourth-onefourth') {
				output = '[team_one_fourth name="'+name_one+'" title="'+title_one+'" img="'+img_one+'" fb="'+facebook_one+'" tw="'+twitter_one+'" gl="'+google_one+'" li="'+linkedin_one+'" mail="'+mail_one+'" '+teamoption+']'+text_one+'[/team_one_fourth]';	
				output += '[team_one_fourth name="'+name_two+'" title="'+title_two+'" img="'+img_two+'" fb="'+facebook_two+'" tw="'+twitter_two+'" gl="'+google_two+'" li="'+linkedin_two+'" mail="'+mail_two+'" '+teamoption+']'+text_two+'[/team_one_fourth]';	
				output += '[team_one_fourth name="'+name_three+'" title="'+title_three+'" img="'+img_three+'" fb="'+facebook_three+'" tw="'+twitter_three+'" gl="'+google_three+'" li="'+linkedin_three+'" mail="'+mail_three+'" '+teamoption+']'+text_three+'[/team_one_fourth]';	
				output += '[team_one_fourth_last name="'+name_four+'" title="'+title_four+'" img="'+img_four+'" fb="'+facebook_four+'" tw="'+twitter_four+'" gl="'+google_four+'" li="'+linkedin_four+'" mail="'+mail_four+'" '+teamoption+']'+text_four+'[/team_one_fourth_last]';	
			}
			
			output = '[column_row '+rowoption+']'+output+'[/column_row]';
			
		}
		// ---------------------- TEAM
		
		
		
		
		// ---------------------- PRICING
		if (id == 'insert_pricing') {
			
			var animation = $('#'+id).parent('form').find('select#sc_pricinganimation').val();
			
			pricingoption = '';
			rowoption = '';
			if (animation == 'column') {
				var type = $('#'+id).parent('form').find('select#sc_pricinganimationtype').val();
				var delay = $('#'+id).parent('form').find('input#sc_pricinganimationdelay').val();
				pricingoption = ' animation="'+type+'" delay="'+delay+'"';
			} else if (animation == 'row') {
				var type = $('#'+id).parent('form').find('select#sc_pricingrowanimationtype').val();
				var delay = $('#'+id).parent('form').find('input#sc_pricingrowanimationdelay').val();
				rowoption = ' animation="'+type+'" delay="'+delay+'"';
			}
			
			
			var layout = $('#'+id).parent('form').find('input[name="sc_pricinglayout"]:checked').val();
			
			var name_one = $('#'+id).parent('form').find('input#sc_pricingname_one').val();
			var price_one = $('#'+id).parent('form').find('input#sc_pricingprice_one').val();
			var time_one = $('#'+id).parent('form').find('input#sc_pricingtime_one').val();
			var options_one = $('#'+id).parent('form').find('textarea#sc_pricingoptions_one').val();
			var url_one = $('#'+id).parent('form').find('input#sc_pricingurl_one').val();
			var accent_one = $('#'+id).parent('form').find('select#sc_pricingaccent_one').val();
			
			var name_two = $('#'+id).parent('form').find('input#sc_pricingname_two').val();
			var price_two = $('#'+id).parent('form').find('input#sc_pricingprice_two').val();
			var time_two = $('#'+id).parent('form').find('input#sc_pricingtime_two').val();
			var options_two = $('#'+id).parent('form').find('textarea#sc_pricingoptions_two').val();
			var url_two = $('#'+id).parent('form').find('input#sc_pricingurl_two').val();
			var accent_two = $('#'+id).parent('form').find('select#sc_pricingaccent_two').val();
			
			var name_three = $('#'+id).parent('form').find('input#sc_pricingname_three').val();
			var price_three = $('#'+id).parent('form').find('input#sc_pricingprice_three').val();
			var time_three = $('#'+id).parent('form').find('input#sc_pricingtime_three').val();
			var options_three = $('#'+id).parent('form').find('textarea#sc_pricingoptions_three').val();
			var url_three = $('#'+id).parent('form').find('input#sc_pricingurl_three').val();
			var accent_three = $('#'+id).parent('form').find('select#sc_pricingaccent_three').val();
			
			var name_four = $('#'+id).parent('form').find('input#sc_pricingname_four').val();
			var price_four = $('#'+id).parent('form').find('input#sc_pricingprice_four').val();
			var time_four = $('#'+id).parent('form').find('input#sc_pricingtime_four').val();
			var options_four = $('#'+id).parent('form').find('textarea#sc_pricingoptions_four').val();
			var url_four = $('#'+id).parent('form').find('input#sc_pricingurl_four').val();
			var accent_four = $('#'+id).parent('form').find('select#sc_pricingaccent_four').val();
			
					
			if (layout == 'layout_onehalf-onehalf') {
				output = '[one_half '+pricingoption+'][pricing name="'+name_one+'" price="'+price_one+'" time="'+time_one+'" options="'+options_one+'" url="'+url_one+'" accent="'+accent_one+'"][/one_half]';	
				output += '[one_half_last '+pricingoption+'][pricing name="'+name_two+'" price="'+price_two+'" time="'+time_two+'" options="'+options_two+'" url="'+url_two+'" accent="'+accent_two+'"][/one_half_last]';	
			} else if (layout == 'layout_onethird-onethird-onethird') {
				output = '[one_third '+pricingoption+'][pricing name="'+name_one+'" price="'+price_one+'" time="'+time_one+'" options="'+options_one+'" url="'+url_one+'" accent="'+accent_one+'"][/one_third]';	
				output += '[one_third '+pricingoption+'][pricing name="'+name_two+'" price="'+price_two+'" time="'+time_two+'" options="'+options_two+'" url="'+url_two+'" accent="'+accent_two+'"][/one_third]';	
				output += '[one_third_last '+pricingoption+'][pricing name="'+name_three+'" price="'+price_three+'" time="'+time_three+'" options="'+options_three+'" url="'+url_three+'" accent="'+accent_three+'"][/one_third_last]';	
			} else if (layout == 'layout_onefourth-onefourth-onefourth-onefourth') {
				output = '[one_fourth '+pricingoption+'][pricing name="'+name_one+'" price="'+price_one+'" time="'+time_one+'" options="'+options_one+'" url="'+url_one+'" accent="'+accent_one+'"][/one_fourth]';	
				output += '[one_fourth '+pricingoption+'][pricing name="'+name_two+'" price="'+price_two+'" time="'+time_two+'" options="'+options_two+'" url="'+url_two+'" accent="'+accent_two+'"][/one_fourth]';	
				output += '[one_fourth '+pricingoption+'][pricing name="'+name_three+'" price="'+price_three+'" time="'+time_three+'" options="'+options_three+'" url="'+url_three+'" accent="'+accent_three+'"][/one_fourth]';
				output += '[one_fourth_last '+pricingoption+'][pricing name="'+name_four+'" price="'+price_four+'" time="'+time_four+'" options="'+options_four+'" url="'+url_four+'" accent="'+accent_four+'"][/one_fourth_last]';	
			}
			
			output = '[column_row '+rowoption+']'+output+'[/column_row]';
			
		}
		// ---------------------- PRICING
		
				
		return output;
		
	}
	
    
});


