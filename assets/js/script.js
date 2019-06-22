(function($, window) {
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: false,
        dots: false,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.nav li > .sub-menu').parent().hover(function() {
        var submenu = $(this).children('.sub-menu');
        if ( $(submenu).is(':hidden') ) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });
})(jQuery, window);