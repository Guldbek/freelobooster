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
  duration: 500,
  origin: 'top right'
});
sr.reveal('.reviewcontainer', {
  duration: 900,
  origin: 'top'
});
sr.reveal('.dimmer-btn', {
  duration: 900,
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
  el:'',
  data:{},
  methods:{}
})
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
