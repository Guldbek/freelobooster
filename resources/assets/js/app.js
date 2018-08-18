/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const Parallax = require('./parallax.min.js');
const ScrollReveal = require('ScrollReveal');
window.sr = ScrollReveal();

sr.reveal('#scene', {
  duration: 600,
  origin: 'bottom'
});
sr.reveal('#listContainer ul li', {
  duration: 600,
  origin: 'bottom'
});
sr.reveal('.review-text, .review-info', {
  duration: 600,
  origin: 'bottom'
});


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
console.clear();
var el = {};


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

var userRank = [];

//Tryk på currentrank for at toggle ul med options
$('.currentrank').on('click', function(ev) {
  $('.currentrank2').addClass('noshow'); //skul Divison
  $('.currentlp').addClass('noshow'); // skul lp selector
  $('.lp-typo').addClass('noshow'); // skjul lp tekst
  $('.currentrank').css('opacity', '0');
  $('.list__ul').toggle();
});
//Tryk på currentrank2 for at toggle ul med options
$('.currentrank2').on('click', function(ev) {
  $('.currentrank2').css('opacity', '0');
  $('.currentlp').addClass('noshow'); // Skjul lp selector
  $('.lp-typo').addClass('noshow'); // skjul lp tekst
  $('.list__ul2').toggle();
});
//Tryk på currentlp for at toggle ul med options
$('.currentlp').on('click', function(ev) {
  $('.lp-additive').css("display", "none"); // skjuler LP additive fra html
  $('.list li').css("width", "100px"); // Juster bredden for li option
  $('.currentlp').css('opacity', '0'); // skjul den forrige 'placeholder' mens du vælger
  $('.lp__ul').toggle(); // åbner den givne ul
});




//Tryk på desiredrank for at toggle ul med options
$('.desiredrank').on('click', function(ev) {
  $('.desiredrank2').addClass('noshow');
  $('.desiredrank').css('opacity', '0');
  $('.desiredlp').addClass('noshow'); // Fjern lp selector
  $('.desiredlp-typo').addClass('noshow'); // Fjern lp tekst
  $('.list__ul3').toggle();
});
//Tryk på desiredrank2 for at toggle ul med options
$('.desiredrank2').on('click', function(ev) {
  $('.desiredrank2').css('opacity', '0');
  $('.desiredlp').addClass('noshow'); // Fjern lp selector
  $('.desiredlp-typo').addClass('noshow'); // Fjern lp tekst
  $('.list__ul4').toggle();
});

//Tryk på desiredlp for at toggle ul med options
$('.desiredlp').on('click', function(ev) {
  $('.lp-additive').css("display", "none"); // skjuler LP additive fra html
  $('.list li').css("width", "100px"); // Juster bredden for li option
  $('.desiredlp').css('opacity', '0'); // skjul den forrige 'placeholder' mens du vælger
  $('.lp__ul2').toggle(); // åbner den givne ul
});


$('.list__ul a').on('click', function(ev) { //current rank
  ev.preventDefault();
  var index = $(this).parent().index();
  $('.currentrank').text($(this).text()).css('opacity', '1');
  console.log($('.list__ul').find('li').eq(index).html());
  $('.list__ul').find('li').eq(index).prependTo('.list__ul');
  $('.list__ul').toggle();
  var getUserRank = $(this).data("rank"); // get users current rank
  userRank.push(getUserRank); // push users current rank into userRank array
  removeDiv('placeholder-rank-text');
  $('.currentrank2').removeClass('noshow');
  // $('.currentlp').removeClass('noshow'); // Vis lp selector
  // $('.lp-typo').removeClass('noshow'); // Vis lp tekst
  // $('.lp-typo').removeClass('noshow'); // Vis lp tekst
  $('.additive').html('to');
  // getUserRank = $(this).data("id");

});

$('.list__ul2 a').on('click', function(ev) { // current divison
  ev.preventDefault();
  var index = $(this).parent().index();
  $('.currentrank2').text($(this).text()).css('opacity', '1');
  console.log($('.list__ul2').find('li').eq(index).html());
  $('.list__ul2').find('li').eq(index).prependTo('.list__ul2');
  $('.list__ul2').toggle();
  var getUserDiv = $(this).data("div"); // Get users current division
  userRank.push(getUserDiv); // push users current division into userRank array
  removeDiv('placeholder-rank-text');
  $('.currentlp').removeClass('noshow'); // Vis lp selector
  $('.lp-typo').removeClass('noshow'); // Vis lp tekst
});
$('.lp__ul a').on('click', function(ev) { // current lp
  console.log("test");
  ev.preventDefault();
  var index = $(this).parent().index();
  $('.currentlp').text($(this).text() + " LP").css('opacity', '1');
  $('.show-currentlp').text("(" + $(this).text() + " lp)").css('opacity', '1');
  console.log($('.lp__ul').find('li').eq(index).html());
  $('.lp__ul').find('li').eq(index).prependTo('.lp__ul');
  $('.lp__ul').toggle();
  getUserLp = $(this).data("lp"); // Get users current lp
  userRank.push(getUserLp); // push users current lp into userRank array
  removeDiv('placeholder-rank-text');


});
$('.list__ul3 a').on('click', function(ev) { // desired rank
  ev.preventDefault();
  var index = $(this).parent().index();
  $('.desiredrank').text($(this).text()).css('opacity', '1');
  console.log($('.list__ul3').find('li').eq(index).html());
  $('.list__ul3').find('li').eq(index).prependTo('.list__ul3');
  $('.list__ul3').toggle();
  removeDiv('placeholder-rank-text');
  $('.desiredrank2').removeClass('noshow');
});

$('.list__ul4 a').on('click', function(ev) { //desired divison
  ev.preventDefault();
  var index = $(this).parent().index();
  $('.desiredrank2').text($(this).text()).css('opacity', '1');
  console.log($('.list__ul4').find('li').eq(index).html());
  $('.list__ul4').find('li').eq(index).prependTo('.list__ul4');
  $('.list__ul4').toggle();
  removeDiv('placeholder-rank-text');
  $('.desiredlp-typo').removeClass('noshow'); // vis lp tekst
  $('.desiredlp').removeClass('noshow'); // Vis lp selector
});


$('.lp__ul2 a').on('click', function(ev) { // desired lp
  ev.preventDefault();
  $('.lp-additive').css("display", "none");
  var index = $(this).parent().index();
  $('.desiredlp').text($(this).text() + " LP").css('opacity', '1');
  $('.show-desiredlp').text("(" + $(this).text() + " lp)").css('opacity', '1');
  console.log($('.lp__ul2').find('li').eq(index).html());
  $('.lp__ul2').find('li').eq(index).prependTo('.lp__ul2');
  $('.lp__ul2').toggle();
  removeDiv('placeholder-rank-text');

});



$('select').on('change', function(e) {
  // Set text on currentrank hidden element
  $('.currentrank').text("this.value");
  // Animate select width as currentrank
  $(this).animate({
    width: $('.currentrank').width() + 'px'
  });
});

$('select').on('change', function(e) {
  // Set text on currentrank hidden element
  $('.selected-rank').text(this.value);
  // Animate select width as currentrank
  $(this).animate({
    width: $('.currentrank2').width() + 'px'
  });
});

$('select').on('change', function(e) {
  // Set text on desiredrank hidden element
  $('.selected-rank').text(this.value);
  // Animate select width as desiredrank
  $(this).animate({
    width: $('.desiredrank').width() + 'px'
  });
});
$('select').on('change', function(e) {
  // Set text on desiredrank2 hidden element
  $('.selected-rank').text(this.value);
  // Animate select width as desiredrank2
  $(this).animate({
    width: $('.desiredrank2').width() + 'px'
  });
});
$('select').on('change', function(e) {
  // Set text on desiredrank2 hidden element
  $('.selected-rank').text(this.value);
  // Animate select width as desiredrank2
  $(this).animate({
    width: $('.currentlp').width() + 'px'
  });
});
$('select').on('change', function(e) {
  // Set text on currentlp hidden element
  $('.selected-rank').text(this.value);
  // Animate select width as desiredlp
  $(this).animate({
    width: $('.desiredlp').width() + 'px'
  });
});
