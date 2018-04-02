jQuery.noConflict()(function($){

/* ===============================================
   Comments
   =============================================== */

	$(".comments-container a.comment-reply-link").click(function() {
		
		$('#respond').next().find('.post-article').css({'padding-top':'40px'});
		$('#respond').parents('.children').next('.post-article').css({'padding-top':'40px'});
		
	});

/* ===============================================
   Footer
   =============================================== */

	function jaxlite_footer() {
	
		var footer_h = $('#footer').innerHeight();
		$('#wrapper').css({'padding-bottom':footer_h});
	
	}
	
	$( document ).ready(jaxlite_footer);
	$( window ).resize(jaxlite_footer);

/* ===============================================
   Scroll sidebar
   =============================================== */

	$(window).load(function() {

		$("#scroll-sidebar").niceScroll({smoothscroll: false});
		$("#scroll-sidebar").getNiceScroll().hide();

		var pw = $(window).width();
		
		$("#header .navigation").click(function() {

			$('#overlay-body').fadeIn(600).addClass('visible');
			$('body').addClass('overlay-active');
			$('#wrapper').addClass('open-sidebar');

		});

		if ( pw < 992 ) {

			$("#sidebar-wrapper .navigation").click(function() {
	
				$('#overlay-body').fadeOut(600);
				$('body').removeClass('overlay-active');
				$('#wrapper').removeClass('open-sidebar');
		
			});

			$("#overlay-body").swipe({
	
				swipeRight:function(event, direction, distance, duration, fingerCount) {
	
					$('#overlay-body').fadeOut(600);
					$('body').removeClass('overlay-active');
					$('#wrapper').removeClass('open-sidebar');
	
				},
	
				threshold:0
		
			});
		
		} else if ( pw > 992 ) {

			$("#sidebar-wrapper .navigation, #overlay-body").click(function() {
	
				$('#overlay-body').fadeOut(600);
				$('body').removeClass('overlay-active');
				$('#wrapper').removeClass('open-sidebar');
		
			});

		}
		
	});
	
/* ===============================================
   MAIN MENU
   =============================================== */

	$('nav.custommenu ul > li').each(function(){
	
		if( $('ul', this).length > 0 ) {
        
			$(this).children('a').addClass('parent-item').append('<span class="sf-sub-indicator"> <i class="fa fa-plus"></i> </span>').removeAttr("href");
		
		}
	
	}); 

	$('nav.custommenu a.parent-item').click(function(){
		
		var selfClick = $(this).next('ul.sub-menu').is(':visible');
		
		if( selfClick === false ) {
			
		  $('nav.custommenu .sub-menu').slideUp('low');
		
		} 
		
		$(this).next('ul').stop(true, true).slideToggle();
		
	});

/* ===============================================
   Scroll to Top Plugin
   =============================================== */

	$(window).scroll(function() {
		
		if( $(window).scrollTop() > 400 ) {
			
			$('#back-to-top').fadeIn(500);
			
			} else {
			
			$('#back-to-top').fadeOut(500);
		}
		
	});

	$('#back-to-top').click(function(){
		$.scrollTo(0,'slow');
		return false;
	});

/* ===============================================
   Overlay code
   =============================================== */
	
	$('.blog-grid div.pin-article').hover(function() {
			
		var imgw = $('.overlay',this).prev().width(); 
		var imgh = $('.overlay',this).prev().height();

		$('.overlay',this).css({'width':imgw,'height':imgh});	
		$('.overlay',this).animate({ opacity : 0.8 },{queue:false});
	
		$('img',this).addClass('hoverimage');
		
	}, function() {
			
		$('.overlay',this).animate({ opacity: 0.0 },{queue:false});

		$('img',this).removeClass('hoverimage');

	});

	$('.gallery img').hover(function(){
		$(this).animate({ opacity: 0.50 },{queue:false});
	}, 
	function() {
		$(this).animate({ opacity: 1.00 },{queue:false});
	});
	
/* ===============================================
   Prettyphoto code
   =============================================== */

	$("a[rel^='prettyPhoto']").prettyPhoto({
	
		animationSpeed:'fast',
		slideshow:5000,
		theme:'pp_default',
		show_title:false,
		overlay_gallery: false,
		social_tools: false
		
	});
	
	$('.swipebox').swipebox();

	
/* ===============================================
   Comments
   =============================================== */

	$(".comments-container a.comment-reply-link").click(function() {
		
		$('#respond').next().find('.post-article').css({'padding-top':'40px'});
		$('#respond').parents('.children').next('.post-article').css({'padding-top':'40px'});
		
	});

/* ===============================================
   Blast animation
   =============================================== */

	function wip_blast_animation() {
	
		$("body.animatedtitles-active .blast-on")
			.blast({ delimiter: "character" })
			.css("opacity", 0 )
			.velocity("transition.fadeIn", { 
			display: null,
			duration: 1e3,
            stagger: 80,
            delay: 600,
            complete: function() {
				$(this).css("opacity", 1);
            }
		});
	
	}

/* ===============================================
   Animsition
   =============================================== */

	$(document).ready(function() {
		
		if ( !$( "body" ).hasClass( "animsition-active" )) {
			wip_blast_animation();
		}
		
		$('#wrap.animsition').animsition({
			inClass : 'fade-in',
			outClass : 'fade-out',
			inDuration : 1500,
			outDuration : 800,
			loading : true,
			touchSupport: true,
			onLoadEvent: true,
			loadingClass: 'animsition-loading',
			linkElement: '.animsition-link,  a[href]:not([target="_blank"]):not([href^="#"]):not([href*="javascript"]):not([href*=".jpg"]):not([href*=".jpeg"]):not([href*=".gif"]):not([href*=".png"]):not([href*=".mov"]):not([href*=".swf"]):not([href*=".mp4"]):not([href*=".flv"]):not([href*=".avi"]):not([href*=".mp3"]):not([href^="mailto:"]):not([class="no-animation"]):not([class="comment-reply-link"])'
		
		});

		$('#wrap.animsition').on('animsition.inStart', function(){
			wip_blast_animation();
		});

	});

});          