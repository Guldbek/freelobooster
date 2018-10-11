window.Vue = require('vue');

// Define a new component called <info-square>
Vue.component('info-square', {
  props: ['title','body'],

  template:
  `
  <div class="col-sm-4">
     <div class="info_square">
        <p class="header_title_style squaretitle">{{title}}</p>
        <div class="icon"><slot></slot></div>
        <p class="info_text">{{body}}</p>
     </div>
  </div>
  `
})
new Vue({ el: '#kompetencer' })

// Define a new component called <list-item>
Vue.component('list-item', {
  template:
  `
  <li class="listContainer-list">
     <i class="fas fa-angle-right"></i>
     <p><slot></slot></p>
  </li>
  `
})
new Vue({ el: '#listContainer' })

// Define a new component called <footer-list>
Vue.component('footer-list', {
  props:['title'],
  template:
  `
  <div class="col-sm-4 col-lg-4">
     <h6 class="footerTitle">{{title}}</h6>
     <hr>
     <slot></slot>
  </div>
  `
})

// Define a new component called <footer-list-item>
Vue.component('footer-list-item', {
  template:
  `
  <p class="footerList"><slot></slot></p>
  `
})
new Vue({ el: '#footerSection' })

// Define a new component called <header-text>
Vue.component('header-text', {
  props:['title', 'body'],
  template:
  `
  <div class="index-header">
  <h1 class="index-header-title">{{title}}</h1>
  <p>{{body}}</p>
  </div>
  `
})
new Vue({ el: '#index-container' })
