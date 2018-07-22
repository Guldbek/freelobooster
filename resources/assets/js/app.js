
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
