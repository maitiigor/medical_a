/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueApexCharts from 'vue-apexcharts';
require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.use(VueApexCharts);

Vue.component('apexchart', VueApexCharts)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('filter-table',require('./components/filterTable').default);
Vue.component('chart',require('./components/Chart').default);
Vue.component('patience-registration',require('./components/PatienceRegistration').default);
Vue.component('bmi-compute',require('./components/BMICompute').default);
Vue.component('chat-component',require('./components/ChatComponent').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
