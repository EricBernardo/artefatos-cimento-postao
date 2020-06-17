require('./../bootstrap');
require('./map');
require('./lead')
require('./owl.carousel')

const simpleParallax = require('simple-parallax-js');

const image = document.getElementsByClassName('banner__img');

new simpleParallax(image, {
    scale: 1.3
});

$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
		loop: true,
	    margin:10,
	    nav: false,
	    autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    responsive:{
	        0:{
	            items: 2
	        },
	        600:{
	            items: 4
	        },
	        1000:{
	            items: 6
	        },
	        1400:{
	            items: 8
	        }
	    }
	});
})