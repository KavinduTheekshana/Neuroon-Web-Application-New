(function ($) {
    'use strict';

    /*------------- preloader js --------------*/
	function loader() {
		$(window).on('load', function () {
			$('#ctn-preloader').addClass('loaded');
			$("#loading").fadeOut(500000);
			// Una vez haya terminado el preloader aparezca el scroll

			if ($('#ctn-preloader').hasClass('loaded')) {
				// Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
				$('#preloader').delay(900).queue(function () {
					$(this).remove();
				});
			}
		});
	}
	loader();

	$(window).on("load", function () {
		background();
	});

    // background image js
	function background() {
			var img=$('.bg_img');
			img.css('background-image', function () {
			var bg = ('url(' + $(this).data('background') + ')');
			return bg;
		});
	}
	
	// active mobile-menu
	jQuery('#mobile-menu').meanmenu({
		meanScreenWidth: '991',
		meanMenuContainer: '.mobile-menu'
	});

	// testimonial carousel
	$('.testimonials').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 800,
		nav: false,
		dots: true,
		responsiveClass: true,
	});

	$('.testimonials__2').owlCarousel({
		items: 3,
		loop: true,
		smartSpeed: 800,
		nav: false,
		dots: true,
		responsiveClass: true,
		center: true,
		responsive: {
			0: {
				items: 1,
				margin: 0,
				center: false,
			},
			576: {
				items: 1,
				margin: 0,
				center: false,
			},
			992: {
				items: 2,
				margin: 30,
			},
			1200: {
				margin: 30,
			},
			1500: {
				margin: 40
			}
		}
	});

	$('.testimonials__3').owlCarousel({
		items: 3,
		loop: true,
		smartSpeed: 800,
		nav: false,
		dots: true,
		responsiveClass: true,
		center: true,
		responsive: {
			0: {
				items: 1,
				margin: 0,
				center: false,
			},
			576: {
				items: 1,
				margin: 0,
				center: false,
			},
			992: {
				items: 2,
				margin: 30,
			},
			1500: {
				margin: 30
			}
		}
	});

	// team carousel
	$('.team-carousel').owlCarousel({
		items: 4,
		loop: true,
		smartSpeed: 800,
		nav: true,
		navText: ["<i class='fal fa-arrow-left'></i>", "<i class='fal fa-arrow-right'></i>"],
		dots: false,
		responsiveClass: true,
		margin: 30,
		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 2,
			},
			992: {
				items: 3,
			},
			1200: {
				items: 4,
			},
			
		}
	});

	// brand carousel
	$('.brand__carousel').owlCarousel({
		loop: true,
		smartSpeed: 800,
		nav: false,
		dots: false,
		responsiveClass: true,
		margin: 30,
		items: 5,
		responsive: {
			0: {
				items: 1,
				margin: 0
			},
			768: {
				items: 2,
				margin: 0
			},
			992: {
				items: 3,
			},
			1200: {
				items: 4,
			},
			1500: {
				items: 5,
			},
		}
	});

	// bannerSlide 
	var slider = $('.bannerSlide');
	slider.owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		smartSpeed: 800,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		loop: true,
		slideSpeed: 3000,
		nav: true,
		dots: false,
		navText: ["<i class='fal fa-arrow-left'></i>", "<i class='fal fa-arrow-right'></i>"],
		//autoplay: true,
	});

	slider.on('translate.owl.carousel', function () {
		var layer = $("[data-animation]");
		layer.each(function () {
			var s_animation = $(this).data('animation');
			$(this).removeClass('animated ' + s_animation).css('opacity', '0');
		});
	});

	$("[data-delay]").each(function () {
		var animation_del = $(this).data('delay');
		$(this).css('animation-delay', animation_del);
	});

	$("[data-duration]").each(function () {
		var animation_dur = $(this).data('duration');
		$(this).css('animation-duration', animation_dur);
	});

	slider.on('translated.owl.carousel', function () {
		var layer = slider.find('.owl-item.active').find("[data-animation]");
		layer.each(function () {
			var s_animation = $(this).data('animation');
			$(this).addClass('animated ' + s_animation).css("opacity", "1");
		});
	});


	// Activate scroll to top
	$("#scroll-top").on('click', function () {
		$('html , body').animate({
			scrollTop: 0
		}, 1000);
	});

	// Nice select
	$('select').niceSelect();

	// offcanvas menu
	$(".menu-tigger").on("click", function () {
		$(".extra-info,.offcanvas-overly").addClass("active");
		return false;
	});
	$(".menu-close,.offcanvas-overly").on("click", function () {
		$(".extra-info,.offcanvas-overly").removeClass("active");
	});

	// circle-progress
	if (typeof ($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
			var $this = $(this),
				knobVal = $this.attr('data-rel');

			$this.knob({
				'draw': function () {
					$(this.i).val(this.cv + '%')
				}
			});

			$this.appear(function () {
				$({
					value: 0
				}).animate({
					value: knobVal
				}, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.val(Math.ceil(this.value)).trigger('change');
					}
				});
			}, {
				accX: 0,
				accY: -150
			});
		});
	}

	// Search Js
	var $searchWrap = $('.search-wrap');
	var $navSearch = $('.search-trigger');
	var $searchClose = $('#search-close');

	$('.search-trigger').on('click', function (e) {
		e.preventDefault();
		$searchWrap.animate({ opacity: 'toggle' }, 500);
		$navSearch.add($searchClose).addClass("open");
	});

	$('.search-close').on('click', function (e) {
		e.preventDefault();
		$searchWrap.animate({ opacity: 'toggle' }, 500);
		$navSearch.add($searchClose).removeClass("open");
	});

	function closeSearch() {
		$searchWrap.fadeOut(200);
		$navSearch.add($searchClose).removeClass("open");
	}

	$(document.body).on('click', function (e) {
		closeSearch();
	});

	$(".search-trigger, .main-search-input").on('click', function (e) {
		e.stopPropagation();
	});

	// Activate lightcase
	$('a[data-rel^=lightcase]').lightcase();
	
	// js - tilt
	if ($(".js-tilt").length) {
		$('.js-tilt').tilt();
	}

	// InHover Active 
	$('.pricing').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.pricing').removeClass('active');
	});

	// Active Odometer Counter 
	$('.odometer').appear(function (e) {
		var odo = $(".odometer");
		odo.each(function () {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	});

	// Activate counter 
	$('.counter').countUp({
		'time': 1000,
		'delay': 10
	});

	// postbox_gallery active
	$('.post_gallery').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 800,
		nav: false,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		dots: false,
		nav: true,
		navText: ["<i class='fal fa-arrow-left'></i>", "<i class='fal fa-arrow-right'></i>"],
		dots: false,
	});

	// map active
	function basicmap() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 13,
			scrollwheel: false,
			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(23.7031006, 90.4596732), // New York
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{
				"stylers": [{
					"hue": "#AADAFF"
				}]
			}, {
				"featureType": "road",
				"elementType": "labels",
				"stylers": [{
					"visibility": "off"
				}]
			}, {
				"featureType": "road",
				"elementType": "geometry",
				"stylers": [{
					"lightness": 100
				}, {
					"visibility": "simplified"
				}]
			}]
		};
		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('contact-map');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(23.7031006, 90.4596732),
			map: map,
			title: 'Cryptox'
		});
	}
	if ($('#contact-map').length != 0) {
		google.maps.event.addDomListener(window, 'load', basicmap);
	}

})(jQuery);

