
$(document).ready(function() {

	// Morning smooch scroll effect
	$("html").easeScroll({
	  frameRate: 90,
	  animationTime: 2000,
	  stepSize: 10,
	  pulseAlgorithm: 1,
	  pulseScale: 8,
	  pulseNormalize: 1,
	  accelerationDelta: 20,
	  accelerationMax: 1,
	  keyboardSupport:true,
	  arrowScroll: 50,
	  touchpadSupport:true,
	  fixedBackground:true
	});

	// responsive slider check
	var current_width = $(window).width();
	var slideCount = $('.slider-wrapper .slide').length;
	$slideWp = $('.slider-wrapper');
	$signatureTitle = $('.signature-title');

	if(current_width < 481) {
    $($slideWp).addClass("slick-mobile-activated").removeClass("slick-tablet-activated").removeClass("slick-slide-activated");
    $($signatureTitle).addClass("mobile-scroll-effect").removeClass("tablet-scroll-effect").removeClass("normal-scroll-effect");
  } 
  else if(current_width < 739) {
    $($slideWp).addClass("slick-mobile-activated").removeClass("slick-tablet-activated").removeClass("slick-slide-activated");
    $($signatureTitle).addClass("mobile-scroll-effect").removeClass("tablet-scroll-effect").removeClass("normal-scroll-effect");
  }
  else if (current_width < 970)
    $($slideWp).addClass("slick-tablet-activated").removeClass("slick-mobile-activated").removeClass("slick-slide-activated");

  else if (current_width > 971 && slideCount > 3) {
    $($slideWp).addClass("slick-slide-activated").removeClass("slick-mobile-activated").removeClass("slick-tablet-activated");
    $($signatureTitle).addClass("normal-scroll-effect").removeClass("mobile-scroll-effect").removeClass("tablet-scroll-effect");
  }

	// Parallax effect
	$(window).scroll(function(e){
  	parallaxScroll();
	});
	function parallaxScroll(){
		var scrolled = $(window).scrollTop();
		$('.section-header').css('top',(0-(scrolled*.1))+'px');

		// - - - @ Section 1 - - -
		$('.section-1 .accent').css('top', 'calc(55% - '+((scrolled*.095))+'px)');
		$('.section-1 .title-1 .signature-title').css('top', 'calc(50% - '+((scrolled*.1))+'px)');


		// - - - @ Section 2 - - -
		$('.section-2 .accent').css('top', 'calc(45% - '+((scrolled*.095))+'px)');
		$('.section-2 .accent.accent-2').css('top', 'calc(60% - '+((scrolled*.05))+'px)');
		$('.section-2 .title-1 .signature-title.normal-scroll-effect').css('top', 'calc(100% - '+((scrolled*.1))+'px)');
		$('.section-2 .title-1 .signature-title.mobile-scroll-effect').css('top', 'calc(120% - '+((scrolled*.1))+'px)');


		// - - - @ Section 3 - - -
		$('.section-3 .title-1 .signature-title.normal-scroll-effect').css('top', 'calc(250% - '+((scrolled*.1))+'px)');
		$('.section-3 .title-1 .signature-title.mobile-scroll-effect').css('top', 'calc(310% - '+((scrolled*.1))+'px)');
		// $('.section-3 .accent').css('left', 'calc(70% - '+((scrolled*.095))+'px)');


		// - - - @ Section 4 - - -
		$('.section-4 .title-1 .signature-title.normal-scroll-effect').css('top', 'calc(350% - '+((scrolled*.1))+'px)');
		$('.section-4 .title-1 .signature-title.mobile-scroll-effect').css('top', 'calc(450% - '+((scrolled*.1))+'px)');
		$('.section-4 .accent.accent-2').css('top', 'calc(85% - '+((scrolled*.05))+'px)');


		// - - - @ Section 5 - - -
		$('.section-5 .title-1 .signature-title.normal-scroll-effect').css('top', 'calc(450% - '+((scrolled*.1))+'px)');
		$('.section-5 .title-1 .signature-title.mobile-scroll-effect').css('top', 'calc(400% - '+((scrolled*.1))+'px)');
		$('.section-5 .accent.accent-2').css('top', 'calc(50% - '+((scrolled*.05))+'px)');


		// - - - SUBMENU 1 @ Section 2 - - -
		$('.section-2 .accent').css('top', 'calc(45% - '+((scrolled*.095))+'px)');
		$('.section-2 .accent.accent-2').css('top', 'calc(60% - '+((scrolled*.05))+'px)');
		$('.submenu-1 .section-1 .title-1 .signature-title').css('top', 'calc(75% - '+((scrolled*.1))+'px)');
	}

	// Header Slider
	$('.master-body .section-header.slider-init').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});

	// menu trigger click
	$('.fullmenu-toggle').click(function() {
		$('.nav').toggleClass('active')
		$('.fullmenu').toggleClass('active');
	})

	// fullmenu item has submenu
	$('.fullmenu-item.has-submenu').click(function() {
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
	})

	// book now trigger click
// 	$('#ibooking-widget-toggle').click(function() {
// 		$('#ibooking-widget').toggleClass('active')
// 	});
// 	$('.nav-booking').click(function() {
// 		$('#ibooking-widget').toggleClass('active')
// 	})

	// book now trigger click
// 	$('.frame-master').click(function() {
// 		$('#ibooking-widget').removeClass('active')
// 	})
// 	$('.fullwidth-master').click(function() {
// 		$('#ibooking-widget').removeClass('active')
// 	})

	// form inquiry trigger click
	$('.form-inquiry').click(function() {
		$('.event-form').addClass('active')
	});

	$('.event-form .master-form .close-btn').click(function() {
		$('.event-form').removeClass('active')
	});

	// scroll and add class
	$(function() {
	    
    var nav = $(".nav");
    var bookNow = $("#ibooking-widget");
    var bookNowTg = $("#ibooking-widget-toggle");
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 500) {
        nav.addClass("scroll-active");
        bookNow.addClass("scroll-active");
        bookNowTg.addClass("scroll-active");
      } else {
        nav.removeClass("scroll-active");
        bookNow.removeClass("scroll-active");
        bookNowTg.removeClass("scroll-active");
      }
    });
	});

	// index .section-1 .inner-slide
	$('.section-1 .slick-slide-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 3,
    centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});
	// mobile activated 
	$('.section-1 .slick-mobile-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 1,
    centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});
	// tablet activated 
	$('.section-1 .slick-tablet-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 3,
    centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});

	// index .section-2 .inner-slide
	$('.section-2 .slick-slide-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 3,
    centerMode: true,
		dots: false,
    nextArrow: '<div class="slide-next"></div>',
		prevArrow: '<div class="slide-prev"></div>',
	});
	// mobile activated 
	$('.section-2 .slick-mobile-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 1,
    centerMode: true,
		dots: false,
    nextArrow: '<div class="slide-next"></div>',
		prevArrow: '<div class="slide-prev"></div>',
	});
	// tablet activated 
	$('.section-2 .slick-tablet-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 3,
    centerMode: true,
		dots: false,
    nextArrow: '<div class="slide-next"></div>',
		prevArrow: '<div class="slide-prev"></div>',
	});

	// index .section-3 .inner-slide
	$('.section-3 .slick-slide-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 3,
    // centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});
	// mobile activated 
	$('.section-3 .slick-mobile-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 1,
    // centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});
	// tablet activated 
	$('.section-3 .slick-tablet-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 2,
    // centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});

	// index .section-4 .inner-slide
	$('.section-4 .slick-slide-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 5,
    centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});
	// mobile activated 
	$('.section-4 .slick-mobile-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 1,
    centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});
	// tablet activated 
	$('.section-4 .slick-tablet-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 3,
    centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});

	// index .section-5 .inner-slide
	$('.section-5 .slick-slide-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 3,
    // centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});
	// mobile activated 
	$('.section-5 .slick-mobile-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 1,
    // centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});
	// tablet activated 
	$('.section-5 .slick-tablet-activated').slick({
    infinite: true,
    autoplay: true,
		autoplaySpeed: 4000,
    slidesToShow: 3,
    centerMode: true,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});

	// submenu header 
	$('.master-body.submenu-1 .section-header.slider-init').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		dots: false,
    prevArrow: false,
    nextArrow: false,
	});

	// accordion
	$('.accordion-group').on('click', '.accordion .accordion-header', function(e) {
    e.preventDefault();
    console.log('clicked');
    $(this).next('.collapse').not(':animated').slideToggle();
    $(this).children('.fas').toggleClass('expanded');

    if ($(this).children('.fas').hasClass('expanded')) {
      $(this).children('.fas').removeClass('fa-plus').addClass('fa-minus');
    } else {
      $(this).children('.fas').removeClass('fa-minus').addClass('fa-plus');
    }
	});

	// -=-=-=-=-=-=-=-=-=-=-=- P P P P F F F F T T T T ! ! -=-=-=-=-=-=-=-=-=-=-=-

	// scroll to top
	$(function(){$(".back-top .icon").click(function(){$("html,body").animate({scrollTop:$(".main").offset().top},"3200");return false})})

	// open fullscreen menu 
	$('.nav-menu').click(function() {

		TweenMax.staggerFrom('.fs-item', .3, {
			delay: .8,
			x: 20,
			opacity: 0,
			ease: Power0.easeNone
		}, 0.1);

		TweenMax.staggerFrom('.socmed-icon', .3, {
			delay: 1.2,
			y: 20,
			opacity: 0,
			ease: Power0.easeNone
		}, 0.1);

		TweenMax.from('.quote-wp', .6, {
			delay: .6,
			y: 20,
			opacity: 0,
			ease: Power0.easeNone
		});

		// $('.fullscreen-menu').toggleClass('active');
		// $('.nav').toggleClass('menu-open');
		// $('.nav').removeClass('scroll-active');
		var $el = $('.menu-text');
    	$el.text($el.text() == "MENU" ? "CLOSE": "MENU");
	});

	// accordion fullscreen menu
	

	// Tweenmax animate the fullscreen 
	// TweenMax.from('.nav', 1, {
	// 	delay: 1,
	// 	y: -20,
	// 	opacity: 0,
	// 	ease: Power0.easeNone
	// })

	// TweenMax.from('.header-text', 1, {
	// 	delay: 1.2,
	// 	y: 20,
	// 	opacity: 0,
	// 	ease: Power0.easeNone
	// })

	TweenMax.from('.header-mouse', 1, {
		delay: 1.2,
		y: 20,
		opacity: 0,
		ease: Power0.easeNone
	})

})