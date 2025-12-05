/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	// global vars
	var navHeight = $('#menu-main-menu > .menu').outerHeight();

	// In-content accordions
	// Clicking on the accordion header title
	$(".accordions").on("click", ".accordions_title", function() {
		// will (slide) toggle the related panel.
		$(this).toggleClass("active").next().slideToggle();
	});


	// SCRIPTS FOR NEW MOBILE NAVIGATION

	//Hamburger animation
	$('#menu-icon').click(function() {
		$(this).toggleClass('active');
		return false;
	});

	//Toggle mobile menu & search
	$('.toggle-nav').click(function() {
		$('#menu-main-menu').slideToggle(500,"swing");
	});
	 
	//Close navigation on anchor tap
	$('.toggle-nav.active').click(function() {	
		$('#menu-main-menu').animate(500,"swing");
	});	

	//Mobile menu accordion toggle for sub pages
	$('#menu-main-menu > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="icon-drw-chevron-down"></span></div>');

	  $('#menu-main-menu .accordion-toggle').click(function() {
		$(this).parent().find('> ul').slideToggle(500,"swing");
		$(this).toggleClass('toggle-background');
		$(this).find('.icon-arrow-down').toggleClass('toggle-rotate');
	});

    
    //keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
    $(document).ready(function() {
        $('.menu-item-has-children').on('focusin', function() {
            var subMenu = $(this).find('.sub-menu');
            subMenu.css('display', 'block');
            $(this).find('.sub-menu > li:last-child').on('focusout', function() {
                console.log('blur!');
                subMenu.css('display', 'none');
            });
        });
        
        $('.menu-item-has-children').on('mouseover', function() {
            var subMenu = $(this).find('.sub-menu');
            subMenu.css('display', 'block');

            $(this).on('mouseout', function() {
                console.log('blur!');
                subMenu.css('display', 'none');
            });
        });
    });
	
});