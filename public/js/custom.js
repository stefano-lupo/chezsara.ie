/*jslint browser: true*/
/*global $, jQuery, alert*/

$(document).ready(function() {
	if ($('#bgvid').length) {
		if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {

			$('#desktop-header').hide();

		} else {
			$('#mobile-header').hide();
			document.getElementById("bgvid").innerHTML = ' <source src="video/ChezSaraHeader.webm" type="video/webm"><source src = "video/ChezSaraHeader.mp4" type = "video/mp4" > ';

		}
	}

	//Swap images based on mobile device/ desktop
	$(document).ready(function() {
		var device = ($(window).innerWidth() / $(window).innerHeight()) > 1 ? "landscape" : "portrait";
		$("img").each(function() {
			$(this).attr("src", $(this).data(device));
		});
	});

	//initialise things
	var offset = 50;
	//px
	if ($('#page-content').length) {
		if ($(window).width() > 767) {
			var pageContent = $('#page-content').offset().top;
			if ($(this).scrollTop() + offset >= pageContent) {
				$('#bs-menu.navbar-default').css("background-color", "rgba(138, 28, 38, 1)");
			} else {
				$('#bs-menu.navbar-default').css("background-color", "transparent");
			}
		} else {
			$('#bs-menu.navbar-default').css("background-color", "rgba(138, 28, 38, 1)");
			$('body').css("padding-top", "50px");
		}
	}

	$(document).scroll(function() {
		if ($('#page-content').length) {
			if ($(window).width() > 767) {
				if ($(this).scrollTop() + offset >= pageContent) {
					$('#bs-menu.navbar-default').css("background-color", "rgba(138, 28, 38, 1)");
				} else {
					$('#bs-menu.navbar-default').css("background-color", "transparent");
				}
			} else {
				$('#bs-menu.navbar-default').css("background-color", "rgba(138, 28, 38, 1)");
			}
		}
	});

	//  Loads Events based on day of week
	$(document).ready(function() {
		'use strict';
		var day = new Date().getUTCDay();
		if ((day === 2) || (day === 3) || (day === 4) || (day === 7)) {
			$('#early-bird-event').show();
		} else {
			$('#early-bird-event').hide();
		}

		if (day === 1) {
			$('#early-bord-event').hide();
			$('#a-la-carte-event').hide();
			$('#monday-closed').show();
		}
	});

	$(document).ready(function() {
		$('.continue').click(function() {
			var fullid = "#full" + $(this).attr('id');
			$(fullid).show('350');
			$(this).hide();
		});
	});

// My equal code
	$(document).ready(function() {
	if ($(window).width() > 991) {
		var maxHeight = 0;
		var i = 0;
		$('.text').each(function() {
			if ($(this).height() > maxHeight) {
				maxHeight = $(this).height();
			}
		});
		$('.text').each(function() {
			$(this).css("height", maxHeight);
		});
	}
	});

	// Equal Heights Code
	$(document).ready(function() {
		'use strict';
		var heights = $(".equal-height").map(function() {
			return $(this).height();
		}).get(),

		    maxHeight = Math.max.apply(null, heights);

		$(".equal-height").height(maxHeight);
	});

	$(document).ready(function() {
		$('.enlarge').click(function() {
			$('#modal-image').attr('src', 'img/gallery/food/' + $(this).attr('id') + '.jpg');
			$('.modal-title').text($(this).find(".overlay-text").text());
			//            $('#modal-title').text($(this).find(".overlay-text").text);
		});
	});

	$(document).ready(function() {
		'use strict';
		var heights = $(".equal-height-testimonial").map(function() {
			return $(this).height();
		}).get(),

		    maxHeight = Math.max.apply(null, heights);

		$(".equal-height-testimonial").height(maxHeight);
	});
});
