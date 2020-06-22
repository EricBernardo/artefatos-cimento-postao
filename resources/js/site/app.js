window.$ = window.jQuery = require("jquery");

require("./map");
require("./lead");
require("./owl.carousel");

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 4,
            },
            1000: {
                items: 6,
            },
            1400: {
                items: 8,
            },
        },
    });
});
