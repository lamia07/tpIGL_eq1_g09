/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
//import 'node_modules/vuetify/dist/css/vuetify.js';
import Vue from 'vue';
import '@fortawesome/fontawesome-free/css/all.css';
import '@mdi/js'
import store from './store'
import * as actions from './store/action-types'
import * as mutations from './store/mutation-types'
import { mapGetters } from 'vuex'
import withSnackbar from './components/mixins/withSnackbar'
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('ajout-comp', require('./components/Ajout.vue').default);
Vue.component('app-comp', require('./components/Ap.vue').default);
Vue.component('authent-comp', require('./components/Authent.vue').default);
Vue.component('hello-comp', require('./components/HelloWorld.vue').default);


window.Vuetify = require('vuetify');
Vue.use(Vuetify)
Vue.use(VueRouter);

if (window.user) {
    store.commit(mutations.USER, user)
    store.commit(mutations.LOGGED, true)
}

const app = new Vue({
    el: '#app',
    store,
    vuetify: new Vuetify(),
    mixins: [withSnackbar],

});
/*let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
Vue.use(Vuetify, {
    theme: {
        primary: "#1464bf",
    }
})*/
