/*
 * Copyright (c) 2023 Marketify
 * Author: Marketify
 * This file is made for CURRENT TEMPLATE
*/

jQuery(document).ready(function(){

	"use strict";
	
	// here all ready functions
	
	elisc_tm_modalbox();
	elisc_tm_movingbox();
	elisc_tm_page_transition();
	elisc_tm_trigger_menu();
	elisc_tm_service_popup();
	elisc_tm_experience_popup();
	elisc_tm_modalbox_news();
	elisc_tm_modalbox_portfolio();
	elisc_tm_cursor();
	elisc_tm_imgtosvg();
	elisc_tm_popup();
	elisc_tm_data_images();
	elisc_tm_contact_form();
	elisc_tm_owl_carousel();
	elisc_tm_scrollable();
	elisc_tm_stickyy();
	elisc_tm_down();
	elisc_tm_location();
	
	jQuery(window).load('body', function(){
		elisc_tm_my_load();
	});
	jQuery(window).on('resize', function(){
		elisc_tm_menu_closer();
	});
	
});

// -----------------------------------------------------
// ---------------   FUNCTIONS    ----------------------
// -----------------------------------------------------

// -----------------------------------------------------
// --------------------   MODALBOX    ------------------
// -----------------------------------------------------

function elisc_tm_modalbox(){
	"use strict";
	
	jQuery('.elisc_tm_all_wrap').prepend('<div class="elisc_tm_modalbox"><div class="box_inner"><div class="close"><a href="#"><i class="icon-cancel"></i></a></div><div class="description_wrap"></div></div></div>');
}

// -----------------------------------------------------
// ---------------------   MOVINGBOX    ----------------
// -----------------------------------------------------

function elisc_tm_movingbox(){
	"use strict";
	var news		= jQuery('.elisc_tm_news');
	if(news.length){
		if(!$('.movingbox').length){
			$('body').append('<div class="movingbox"></div>');
		}
	}
	var movingbox 	= jQuery('.movingbox');
	var movingboxH 	= jQuery('.movingbox').height()/2;
	var list	  	= jQuery('.elisc_tm_news .list ul li');
	list.on('mouseenter',function(){
		var element = jQuery(this);
		var image	= element.find('.popup_image').attr('src');
		movingbox.addClass('opened');
		movingbox.css({backgroundImage:'url('+image+')'});
	}).on('mouseleave',function(){
		movingbox.removeClass('opened');
	}).on('mousemove',function(event){
		var ymove		= event.clientY-movingboxH;
		var xmove		= event.clientX+20;
		movingbox.css({top:ymove+'px',left:xmove+'px'});
	});
	
}

// -----------------------------------------------------
// ---------------   PAGE TRANSITION    ----------------
// -----------------------------------------------------

function elisc_tm_page_transition(){
	
	"use strict";
	
	var section 		= jQuery('.elisc_tm_section');
	var allLi 			= jQuery('.transition_link li');
	var button			= jQuery('.transition_link a');
	var wrapper 		= jQuery('.elisc_tm_all_wrap');
	var enter	 		= wrapper.data('enter');
	var exit		 	= wrapper.data('exit');
	
	button.on('click',function(){
		var element 	= jQuery(this);
		var href		= element.attr('href');
		if(element.parent().hasClass('elisc_tm_button')){
			jQuery('.menu .transition_link a[href="'+href+'"]').trigger('click');
			hashtag();
			return false;
		}
		var sectionID 	= jQuery(href);
		var parent	 	= element.closest('li');
			if(!parent.hasClass('active')) {
				allLi.removeClass('active');
				wrapper.find(section).removeClass('animated '+enter);
				if(wrapper.hasClass('opened')) {
					wrapper.find(section).addClass('animated '+exit);
				}
				parent.addClass('active');
				wrapper.addClass('opened');
				wrapper.find(sectionID).removeClass('animated '+exit).addClass('animated '+enter);
				jQuery(section).addClass('hidden');
				jQuery(sectionID).removeClass('hidden').addClass('active');
			}
		return false;
	});
}

// -----------------------------------------------------
// ---------------   TRIGGER MENU    -------------------
// -----------------------------------------------------

function elisc_tm_trigger_menu(){
	
	"use strict";
	
	var hamburger 		= jQuery('.elisc_tm_topbar .trigger .hamburger');
	var mobileMenu		= jQuery('.elisc_tm_mobile_menu');
	var mobileMenuList	= jQuery('.elisc_tm_mobile_menu .menu_list ul li a');

	hamburger.on('click',function(){
		var element 	= jQuery(this);

		if(element.hasClass('is-active')){
			element.removeClass('is-active');
			mobileMenu.removeClass('opened');
		}else{
			element.addClass('is-active');
			mobileMenu.addClass('opened');
		}
		return false;
	});
	
	mobileMenuList.on('click',function(){
		jQuery('.elisc_tm_topbar .trigger .hamburger').removeClass('is-active');
		mobileMenu.removeClass('opened');
		return false;
	});
	
}

function elisc_tm_menu_closer(){
	
	"use strict";
	
	var ww = jQuery(window).width();
	if(ww >= 1040){
		jQuery('.elisc_tm_mobile_menu').removeClass('opened');
		jQuery('.elisc_tm_topbar .trigger .hamburger').removeClass('is-active');
	}
}

// -------------------------------------------------
// -------------  EXPERIENCE POPUP  ----------------
// -------------------------------------------------

function elisc_tm_experience_popup(){
	
	"use strict";
	
	var modalBox		= jQuery('.elisc_tm_modalbox');
	var button			= jQuery('.elisc_tm_experience .elisc_tm_full_link');
	var closePopup		= modalBox.find('.close');
	
	button.on('click',function(){
		var element = jQuery(this);
		var parent	= element.closest('.elisc_tm_experience .list ul li');
		var elImage	= parent.find('.popup_image').attr('src');
		var year	= parent.find('.job span').text().slice(1);
		var job		= parent.find('.job h3').text();
		var place 	= parent.find('.place span').text().slice(1);
		var content = parent.find('.hidden_details').html();
		modalBox.addClass('opened');
		modalBox.find('.description_wrap').html(content);
		modalBox.find('.descriptions').prepend('<div class="top_image"><img src="img/thumbs/4-2.jpg" alt="" /><div class="main" data-img-url="'+elImage+'"></div></div>');
		elisc_tm_data_images();
		modalBox.find('.descriptions .top_image').after('<div class="infos"><div class="year"><span>'+year+'</span></div><div class="job"><span>'+place+'</span><h3>'+job+'</h3></div></div>');
		return false;
	});
	closePopup.on('click',function(){
		modalBox.removeClass('opened');
		modalBox.find('.description_wrap').html('');
		return false;
	});
}

// -------------------------------------------------
// -------------  SERVICE POPUP  -------------------
// -------------------------------------------------

function elisc_tm_service_popup(){
	
	"use strict";
	
	var modalBox		= jQuery('.elisc_tm_modalbox');
	var button			= jQuery('.elisc_tm_services .service_list .elisc_tm_full_link');
	var closePopup		= modalBox.find('.close');
	
	button.on('click',function(){
		var element = jQuery(this);
		var parent	= element.closest('.elisc_tm_services .service_list ul li');
		var elImage	= parent.find('.popup_image').attr('src');
		var title	= parent.find('.title h3').text();
		var content = parent.find('.hidden_details').html();
		modalBox.addClass('opened');
		modalBox.find('.description_wrap').html(content);
		modalBox.find('.descriptions').prepend('<div class="top_image"><img src="img/thumbs/4-2.jpg" alt="" /><div class="main" data-img-url="'+elImage+'"></div></div>');
		elisc_tm_data_images();
		modalBox.find('.descriptions .top_image').after('<div class="main_title"><h3>'+title+'</h3></div>');
		return false;
	});
	closePopup.on('click',function(){
		modalBox.removeClass('opened');
		modalBox.find('.description_wrap').html('');
		return false;
	});
}

// -------------------------------------------------
// -------------  MODALBOX NEWS  -------------------
// -------------------------------------------------

function elisc_tm_modalbox_news(){
	
	"use strict";
	
	var modalBox		= jQuery('.elisc_tm_modalbox');
	var button			= jQuery('.elisc_tm_news .list .title a,.elisc_tm_news .elisc_tm_read_more a');
	var closePopup		= modalBox.find('.close');
	
	button.on('click',function(){
		var element 	= jQuery(this);
		var parent 		= element.closest('li');
		var content 	= parent.find('.news_hidden_details').html();
		var image		= parent.find('.popup_image').attr('src');
		var meta		= parent.find('.meta').html();
		var title		= parent.find('.title h3 a').text();
		modalBox.addClass('opened');
		modalBox.find('.description_wrap').html(content);
		modalBox.find('.news_popup_informations').prepend('<div class="image"><img src="img/thumbs/4-2.jpg" alt="" /><div class="main" data-img-url="'+image+'"></div></div>');
		modalBox.find('.news_popup_informations .image').after('<div class="details"><div class="meta">'+meta+'</div><div class="title"><h3>'+title+'</h3></div></div>');
		elisc_tm_data_images();
		return false;
	});
	closePopup.on('click',function(){
		modalBox.removeClass('opened');
		modalBox.find('.description_wrap').html('');
		return false;
	});
}

// -------------------------------------------------
// -------------  MODALBOX PORTFOLIO  --------------
// -------------------------------------------------

function elisc_tm_modalbox_portfolio(){
	
	"use strict";
	
	var modalBox	= jQuery('.elisc_tm_modalbox');
	var button		= jQuery('.elisc_tm_portfolio .portfolio_popup');
	
	button.on('click',function(){
		var element 	= jQuery(this);
		var parent		= element.closest('li');
		var image		= parent.find('.image .main').data('img-url');
		var details 	= parent.find('.hidden_content_portfolio').html();
		var category 	= parent.find('.details .category').html();
		var title	 	= parent.find('.details .title a').text();
		
		modalBox.addClass('opened');
		modalBox.find('.description_wrap').html(details);
		modalBox.find('.popup_details').prepend('<div class="top_image"><img src="img/thumbs/4-2.jpg" alt="" /><div class="main" data-img-url="'+image+'"></div></div>');
		modalBox.find('.popup_details .top_image').after('<div class="portfolio_main_title"><span class="category">'+category+'</span><h3 class="title">'+title+'</h3></div>');	
		elisc_tm_data_images();
		return false;
	});
}

// -----------------------------------------------------
// ---------------   PRELOADER   -----------------------
// -----------------------------------------------------

function elisc_tm_preloader(){
	
	"use strict";
	
	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
	var preloader = $('#preloader');
	
	if (!isMobile) {
		setTimeout(function() {
			preloader.addClass('preloaded');
		}, 800);
		setTimeout(function() {
			preloader.remove();
		}, 2000);

	} else {
		preloader.remove();
	}
}

// -----------------------------------------------------
// -----------------   MY LOAD    ----------------------
// -----------------------------------------------------

function elisc_tm_my_load(){
	
	"use strict";
	
	var speed	= 500;
	setTimeout(function(){elisc_tm_preloader();},speed);
}

// -----------------------------------------------------
// ------------------   CURSOR    ----------------------
// -----------------------------------------------------

function elisc_tm_cursor(){
    "use strict";
	
	var myCursor	= jQuery('.mouse-cursor');
	
	if(myCursor.length){
		if ($("body")) {
        const e = document.querySelector(".cursor-inner"),
            t = document.querySelector(".cursor-outer");
        let n, i = 0,
            o = !1;
        window.onmousemove = function (s) {
            o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
        }, $("body").on("mouseenter", "a, .cursor-pointer", function () {
            e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
        }), $("body").on("mouseleave", "a, .cursor-pointer", function () {
            $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
        }), e.style.visibility = "visible", t.style.visibility = "visible"
    }
	}
};

// -----------------------------------------------------
// ---------------    IMAGE TO SVG    ------------------
// -----------------------------------------------------

function elisc_tm_imgtosvg(){
	
	"use strict";
	
	jQuery('img.svg').each(function(){
		
		var jQueryimg 		= jQuery(this);
		var imgClass		= jQueryimg.attr('class');
		var imgURL			= jQueryimg.attr('src');

		jQuery.get(imgURL, function(data) {
			// Get the SVG tag, ignore the rest
			var jQuerysvg = jQuery(data).find('svg');

			// Add replaced image's classes to the new SVG
			if(typeof imgClass !== 'undefined') {
				jQuerysvg = jQuerysvg.attr('class', imgClass+' replaced-svg');
			}

			// Remove any invalid XML tags as per http://validator.w3.org
			jQuerysvg = jQuerysvg.removeAttr('xmlns:a');

			// Replace image with new SVG
			jQueryimg.replaceWith(jQuerysvg);

		}, 'xml');

	});
}

// -----------------------------------------------------
// --------------------   POPUP    ---------------------
// -----------------------------------------------------

function elisc_tm_popup(){
	
	"use strict";

	jQuery('.gallery_zoom').each(function() { // the containers for all your galleries
		jQuery(this).magnificPopup({
			delegate: 'a.zoom', // the selector for gallery item
			type: 'image',
			gallery: {
			  enabled:true
			},
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});

	});
	jQuery('.popup-youtube, .popup-vimeo').each(function() { // the containers for all your galleries
		jQuery(this).magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: true
		});
	});
	
	jQuery('.soundcloude_link').magnificPopup({
	  type : 'image',
	   gallery: {
		   enabled: true, 
	   },
	});
}

// -----------------------------------------------------
// ---------------   DATA IMAGES    --------------------
// -----------------------------------------------------

function elisc_tm_data_images(){
	
	"use strict";
	
	var data			= jQuery('*[data-img-url]');
	
	data.each(function(){
		var element			= jQuery(this);
		var url				= element.data('img-url');
		element.css({backgroundImage: 'url('+url+')'});
	});
}

// -----------------------------------------------------
// ----------------    CONTACT FORM    -----------------
// -----------------------------------------------------

function elisc_tm_contact_form(){
	
	"use strict";
	
	jQuery(".contact_form #send_message").on('click', function(){
		
		var name 		= jQuery(".contact_form #name").val();
		var email 		= jQuery(".contact_form #email").val();
		var message 	= jQuery(".contact_form #message").val();
		var subject 	= jQuery(".contact_form #subject").val();
		var success     = jQuery(".contact_form .returnmessage").data('success');
	
		jQuery(".contact_form .returnmessage").empty(); //To empty previous error/success message.
		//checking for blank fields	
		if(name===''||email===''||message===''){
			
			jQuery('div.empty_notice').slideDown(500).delay(2000).slideUp(500);
		}
		else{
			// Returns successful data submission message when the entered information is stored in database.
			jQuery.post("modal/contact.php",{ ajax_name: name, ajax_email: email, ajax_message:message, ajax_subject: subject}, function(data) {
				
				jQuery(".contact_form .returnmessage").append(data);//Append returned message to message paragraph
				
				
				if(jQuery(".contact_form .returnmessage span.contact_error").length){
					jQuery(".contact_form .returnmessage").slideDown(500).delay(2000).slideUp(500);		
				}else{
					jQuery(".contact_form .returnmessage").append("<span class='contact_success'>"+ success +"</span>");
					jQuery(".contact_form .returnmessage").slideDown(500).delay(4000).slideUp(500);
				}
				
				if(data===""){
					jQuery("#contact_form")[0].reset();//To reset form fields on success
				}
				
			});
		}
		return false; 
	});
}

// -----------------------------------------------------
// ----------------    OWL CAROUSEL    -----------------
// -----------------------------------------------------

function elisc_tm_owl_carousel(){

	"use strict";
	
	var carousel			= jQuery('.elisc_tm_testimonials .owl-carousel');

	carousel.owlCarousel({
		loop: true,
		items: 1,
		lazyLoad: false,
		margin: 0,
		autoplay: true,
		autoplayTimeout: 7000,
		rtl: false,
		dots: true,
		nav: false,
		navSpeed: false
	});
	
	var carousel2			= jQuery('.elisc_tm_partners .owl-carousel');

	carousel2.owlCarousel({
		loop: true,
		items: 4,
		lazyLoad: false,
		margin: 50,
		autoplay: true,
		autoplayTimeout: 7000,
		dots: true,
		nav: false,
		navSpeed: true,
		responsive:{
			0:{items:1},
			480:{items:2},
			768:{items:3},
			1040:{items:4},
			1200:{items:4},
			1600:{items:4},
			1920:{items:4}
		}
	});
	elisc_tm_imgtosvg();
	
	var carousel3			= jQuery('.elisc_tm_portfolio .owl-carousel');
	
	var rtlMode	= false;

	if(jQuery('body').hasClass('rtl')){
		rtlMode = 'true';
	}
	
	carousel3.each(function(){
		var element = jQuery(this);		
		
		element.owlCarousel({
			loop: false,
			items: 3,
			lazyLoad: false,
			margin: 30,
			autoplay: true,
			autoplayTimeout: 7000,
			rtl: rtlMode,
			dots: true,
			nav: false,
			navSpeed: false,
			responsive : {
				0 : {
					items: 1
				},
				768 : {
					items: 2
				},
				1040 : {
					items: 3
				}
			}
		});

		element.closest('.elisc_tm_portfolio').find('.next_button').click(function() {
			element.trigger('next.owl.carousel');
			return false;
		});
		// Go to the previous item
		element.closest('.elisc_tm_portfolio').find('.prev_button').click(function() {
			// With optional speed parameter
			// Parameters has to be in square bracket '[]'
			element.trigger('prev.owl.carousel');
			return false;
		});
		
	});
}

// -------------------------------------------------
// --------------   MENU SCROLL  -------------------
// -------------------------------------------------

function elisc_tm_scrollable(){
	
	"use strict";
	
	var w				= jQuery(window).width();
	var H				= jQuery(window).height();
	var spacing			= 50;
	if(w <= 1600){
		spacing = 30;
	}
	var avatarHeight	= jQuery('.elisc_tm_sidebar .author').outerHeight();
	var scrollable		= jQuery('.elisc_tm_sidebar .menu.scrollable');
	var verMenu			= jQuery('.elisc_tm_sidebar .menu');
	var copyright		= jQuery('.elisc_tm_sidebar .copyright').outerHeight()+spacing;
	
	verMenu.css({height:H-avatarHeight-copyright});
	
	scrollable.each(function(){
		var element		= jQuery(this);
		
		element.css({height: H-avatarHeight-copyright}).niceScroll({
			touchbehavior:false,
			cursorwidth:0,
			autohidemode:true,
			cursorborder:"0px solid #eee"
		});
	});
}

// -----------------------------------------------------
// --------------------- STICKY   ----------------------
// -----------------------------------------------------

function elisc_tm_stickyy(){
	 
	"use strict";

	var el 		= jQuery('.fn_w_sminiboxes');

	if(el.length){
		el.each(function(index, element) {
			var child	= jQuery(element).find('.fn_w_sminibox');
			child.css({height:'auto'});
			var W 		= jQuery(window).width();
			if(W > 1200){
				var elementHeights = child.map(function() {return jQuery(this).outerHeight();}).get();
				var maxHeight 		= Math.max.apply(null, elementHeights);
				child.css({height:maxHeight+'px'}); 
			}
		}); 
	}

}

// ------------------------------------------------
// -------------------  ANCHOR --------------------
// ------------------------------------------------

jQuery('.anchor_nav').onePageNav();

// -----------------------------------------------------
// -----------------    DOWN    ------------------------
// -----------------------------------------------------

function elisc_tm_down(){
	
	"use strict";
		
	jQuery('.anchor').on('click',function(){
		
		if($.attr(this, 'href') !== '#'){
			$('html, body').animate({
				scrollTop: $($.attr(this, 'href')).offset().top
			}, 800);
		}
		
		return false;
	});
}

// -----------------------------------------------------
// ----------------    PLACEHOLDER    ------------------
// -----------------------------------------------------

function elisc_tm_location(){
	"use strict";
	var button		= jQuery('.href_location');
	button.on('click',function(){
		var element		= jQuery(this);
		var address		= element.text();
		address			= address.replace(/\ /g,'+');
		var text		= 'https://maps.google.com?q=';
		window.open(text+address);
		return false;
	});
}