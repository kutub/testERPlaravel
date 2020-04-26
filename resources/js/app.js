require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';

import Vue from 'vue'
import Buefy from 'buefy'
Vue.use(Buefy)

Vue.component('slugWidget', require('./components/slugWidget.vue').default);
Vue.component('sideNav', require('./components/sideNav.vue').default);
Vue.component('createItemForm', require('./components/createItemForm.vue').default);
Vue.component('salesModule', require('./components/sales/SalesModule.vue').default);

// var app = new Vue({
//   el: '#app',
//   data: {
//     rolesSelected: [],
//   }
// });

require('./manage')
