require('./../bootstrap');
require('./map');
require('./lead')

const simpleParallax = require('simple-parallax-js');

const image = document.getElementsByClassName('banner__img');

new simpleParallax(image, {
    scale: 1.3
});
