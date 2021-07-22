(function ($) {
    "use strict"

    ///////////////////////////
    // Preloader
    $(window).on('load', function () {
        $("#preloader").delay(600).fadeOut();
    });



    $('#back-to-top').on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 600);
    });

    ////////////////
    // Mobile dropdown
    $('.has-dropdown a').on('click', function () {
        $(this).parent().toggleClass('open-drop');
    });

    ///////////////////////////
    // On Scroll
    $(window).on('scroll', function () {
        var wScroll = $(this).scrollTop();

        // Back To Top Appear
        wScroll > 150 ? $('#back-to-top').fadeIn() : $('#back-to-top').fadeOut();
    });

    ///////////////////////////
    // magnificPopup
//	$('.work').magnificPopup({
//		delegate: '.lightbox',
//		type: 'image'
//	});

    ///////////////////////////
    // Owl Carousel
//	$('#about-slider').owlCarousel({
//		items:1,
//		loop:true,
//		margin:15,
//		nav: true,
//		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
//		dots : true,
//		autoplay : true,
//		animateOut: 'fadeOut'
//	});
//
//	$('#testimonial-slider').owlCarousel({
//		loop:true,
//		margin:15,
//		dots : true,
//		nav: false,
//		autoplay : true,
//		responsive:{
//			0: {
//				items:1
//			},
//			992:{
//				items:2
//			}
//		}
//	});

})(jQuery);