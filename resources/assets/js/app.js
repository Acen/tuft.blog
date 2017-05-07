
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('articles', require('./components/Articles.vue'));
Vue.component('sidebar', require('./components/Sidebar.vue'));
Vue.component('paginate', require('./components/Paginate.vue'));
Vue.component('article-table', require('./components/ArticleTable.vue'));
Vue.component('modal', require('./components/Modal.vue'));

const app = new Vue({
    el: '#app'
});
