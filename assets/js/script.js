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
    var perfil = $("#perfil").position();
    $('.perfil').click(function() {
        $('html, body').animate({
            scrollTop: perfil.top
        }, 500);
        return false;
    });
})(jQuery, window);