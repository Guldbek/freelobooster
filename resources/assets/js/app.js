/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const Parallax = require('./parallax.min.js');
const ScrollReveal = require('ScrollReveal');
window.sr = ScrollReveal();

sr.reveal('.reviewcontainer', {
  duration: 900,
  origin: 'top'
});
sr.reveal('.dimmer-btn', {
  duration: 900,
  origin: 'bottom'
});
sr.reveal('.list-item', {
  duration: 900,
  origin: 'bottom'
});



var path = window.location.pathname;
$('.navigation-menu').find('a').each(function() {
  $(this).toggleClass('active', $(this).attr('href') == path);
});

//tjek om .anyClass eksisterer og fjern den (også selve tagget f.eks <p></p>).
function removeDiv(nameOfClass) {
  var className = "." + nameOfClass;
  if ($(className)[0]) {
    // hvis className exist
    console.log(true)
    $(className).remove(className);
  } else {
    // hvis classname ikke exist
    console.log(false)
  }
}
