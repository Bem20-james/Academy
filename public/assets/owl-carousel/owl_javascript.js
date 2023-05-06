$(document).ready(function () {
    $('.owl-one').owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        navspeed: 0.1,
        nav:false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                loop: true,

            },
            600: {
                items: 3,
                loop: true,
            },
            1000: {
                items: 4,
                loop: true,
            }
        }
    });
    // second owl-carousel
    $('.owl-two').owlCarousel({
        items: 3,
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        navspeed: 0.1,
        nav:false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                loop: true,

            },
            600: {
                items: 1,
                loop: true,
            },
            1000: {
                items: 3,
                loop: true,
            }
        }
    });
    // third carousel
    $('.owl-three').owlCarousel({
        items: 2,
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        navspeed: 0.1,
        nav:false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                loop: true,

            },
            600: {
                items: 1,
                loop: true,
            },
            1000: {
                items: 2,
                loop: true,
            }
        }
    });

});

