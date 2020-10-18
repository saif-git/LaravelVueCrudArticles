require('./bootstrap');


// window.Vue = require('vue');

// Vue.component(
// 	'example-component',
// 	require('./components/ExampleComponent.vue')
// 	);

// const app = new Vue({
// el:'#app'
// });


 window.Vue = require('vue');

Vue.component('articles',require('./components/Articles.vue').default);
Vue.component('navbar',require('./components/Navbar.vue').default);

const app = new Vue({
  el: '#app'
});
