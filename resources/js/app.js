require('./bootstrap');

const simpleParallax = require('simple-parallax-js');

const image = document.getElementsByClassName('banner__img');

new simpleParallax(image, {
    scale: 1.5
});
