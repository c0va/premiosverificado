(function($){

	"use strict";

	$(function(){


		console.log('hello from functions.js');


		/**
		 * Validación de emails
		 */
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};



		/**
		 * Regresa todos los valores de un formulario como un associative array 
		 */
		window.getFormData = function (selector) {
			var result = [],
				data   = $(selector).serializeArray();

			$.map(data, function (attr) {
				result[attr.name] = attr.value;
			});
			return result;
		}

		/*** VIDEO ***/

		var ventana = $(window).height();
		var topVid = $('#video_landing').offset().top;
		var heightVid = $('#landing_vid').height();

		if ($(window).width() > 601){
			$('.play_pause').css('top', ventana-60+'px');
			$('#video_landing').css('min-height', ventana+'px');
			$("#landing_vid").hover(function() {
				$(this).prop("controls", true);
			}, function() {
				$(this).prop("controls", false);
			});
		}

		$('#pause').hide();
		$('#play').on('click', function(){
			$('#landing_vid').get(0).play();
			$(this).hide();
			$('#pause').show();
		});

		$('#pause').on('click', function(){
			$('#landing_vid').get(0).pause();
			$(this).hide();
			$('#play').show();
		});

		$('#landing_vid').on('ended',function(){
			$('#pause').hide();
			$('#play').show();
			$('html, body').animate({
		        scrollTop: $("#about").offset().top
		    }, 1000);
		});

		if (navigator.userAgent.indexOf('Android') >=0) {
		   document.getElementById('landing_vid').controls = true;
		}
		if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
		   document.getElementById('landing_vid').controls = true;
		}

		/*** ABOUT ***/ 

		$('#about').css('min-height', ventana+'px');

		/*** HEADER ***/

		if ($(window).width() > 601){
			$('nav').hide();
			$(window).scroll(function(){
			    if ($(document).scrollTop() > (topVid + heightVid)){
			        $('header').addClass('top');
			    }
			    else
			        $('header').removeClass('top');
			});
		} else {
			$('nav').hide();
			$(window).scroll(function(){
			    if ($(document).scrollTop() >= 10){
			        $('header').addClass('top');
			    }
			    else
			        $('header').removeClass('top');
			});
		}



		// $(window).on('scroll', function () {
		//     if ($(window).scrollTop() >= $(window).height())
		//         $('.header_movil').addClass('fixed');
		//     else
		//         $('.header_movil').removeClass('fixed');
		// });

	});

})(jQuery);
