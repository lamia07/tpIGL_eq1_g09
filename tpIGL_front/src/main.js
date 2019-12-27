import '@mdi/font/css/materialdesignicons.css'
import Vue from 'vue'
import App from './App.vue'
import 'bootstrap'
import './assets/app.scss'
import vuetify from './plugins/vuetify';
import Vuetify from 'vuetify/lib'
Vue.config.productionTip = false
Vue.use(Vuetify);
new Vue({
    icons: {
        iconfont: 'mdiSvg', // default - only for display purposes
    },
    vuetify,
    render: h => h(App)
}).$mount('#app')