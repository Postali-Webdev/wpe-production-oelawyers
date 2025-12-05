/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('#what-we-do').slick({
		dots: false,
		infinite: false,
		fade: false,
		autoplay: false,
  		autoplaySpeed: 5000,
  		speed: 700,
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows:true,
		prevArrow: $('.prev-slide'),
    	nextArrow: $('.next-slide'),
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        accessibility:false,
		responsive: [
			{
			  breakpoint: 1200,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			  }
			}
		  ]
	});

	$('#result-slider').slick({
		dots: true,
		infinite: true,
		fade: false,
		autoplay: false,
  		autoplaySpeed: 5000,
  		speed: 700,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows:false,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        accessibility:false,
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
				autoplay: true
			  }
			}
		]
	});

	$('#result-slider-header').slick({
		dots: true,
		infinite: true,
		fade: true,
		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 700,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows:false,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        accessibility:false,
	});

	$('#testimonial-slider').slick({
		dots: true,
		infinite: true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 4000,
  		speed: 1000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows:false,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        accessibility:false,
	});
	

	$('#awards-slider').slick({
		dots: true,
        accessibility:false,
		infinite: true,
		fade: false,
		autoplay: false,
  		autoplaySpeed: 4000,
  		speed: 1000,
		slidesToShow: 7,
		slidesToScroll: 1,
		arrows:false,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 6,
				}
            },
            {
				breakpoint: 667,
				settings: {
					slidesToShow: 3,
				}
            },
            {
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					autoplay: true
				}
			}
		]
	});
});