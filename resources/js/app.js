
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue');

import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('login-form', require('./components/LoginForm.vue').default);
Vue.component('register-form', require('./components/RegisterForm.vue').default);
Vue.component('carousel-section', require('./components/Carousel.vue').default);
Vue.component('jumbotron-section', require('./components/Jumbotron.vue').default);
Vue.component('footer-section', require('./components/Footer.vue').default);
Vue.component('drawers-section', require('./components/Drawers.vue').default);
Vue.component('table-users', require('./components/users/TableUsers.vue').default);
Vue.component('table-landings', require('./components/landings/TableLandings.vue').default);
Vue.component('drag-panel', require('./components/editor/DragPanel.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(Vuetify, {
    theme: {
        primary: '#019587',
    }
});

const app = new Vue({
    el: 'v-app'
});