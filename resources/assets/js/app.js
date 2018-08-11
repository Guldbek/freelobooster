
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const Parallax = require('./parallax.min.js');
const ScrollReveal = require('ScrollReveal');
window.sr = ScrollReveal();

sr.reveal('#scene', { duration: 600, origin: 'bottom' });
sr.reveal('#listContainer ul li', { duration: 600, origin: 'bottom' });
sr.reveal('.review-text, .review-info', { duration: 600, origin: 'bottom' });


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
$('.test').on('change', function() {
  var rn = $(this).find("option:selected").text();
  $('.rankdisplay').html(rn);
  console.log(rn);
});
$('.level').on('change', function() {
  var lv = $(this).find("option:selected").text();
  $('.leveldisplay').html(lv);
  console.log(lv);
});


console.clear();

var el = {};
//Tryk på placeholder for at toggle ul med options
$('.placeholder').on('click', function (ev) {
  $('.placeholder2').addClass('noshow');
  $('.placeholder').css('opacity', '0');
  $('.list__ul').toggle();


});

//Tryk på placeholder2 for at toggle ul med options
$('.placeholder2').on('click', function (ev) {
  $('.placeholder2').css('opacity', '0');
  $('.list__ul2').toggle();
});


 $('.list__ul a').on('click', function (ev) {
   ev.preventDefault();
   var index = $(this).parent().index();
   $('.placeholder').text( $(this).text() ).css('opacity', '1');
   console.log($('.list__ul').find('li').eq(index).html());
   $('.list__ul').find('li').eq(index).prependTo('.list__ul');
   $('.list__ul').toggle();
   $('.placeholder2').removeClass('noshow');
 });

 $('.list__ul2 a').on('click', function (ev) {
   ev.preventDefault();
   var index = $(this).parent().index();
   $('.placeholder2').text( $(this).text() ).css('opacity', '1');
   console.log($('.list__ul2').find('li').eq(index).html());
   $('.list__ul2').find('li').eq(index).prependTo('.list__ul2');
   $('.list__ul2').toggle();
 });

$('select').on('change', function (e) {
  // Set text on placeholder hidden element
  $('.placeholder').text(this.value);
  // Animate select width as placeholder
  $(this).animate({width: $('.placeholder').width() + 'px' });
});

$('select').on('change', function (e) {
  // Set text on placeholder hidden element
  $('.placeholder2').text(this.value);
  // Animate select width as placeholder
  $(this).animate({width: $('.placeholder2').width() + 'px' });
});
