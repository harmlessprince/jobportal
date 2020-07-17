import './bootstrap'
import Vue from "vue"
import router from "./router"
import App from './App'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'







// Set Vue globally
window.Vue = Vue
// Set Vue router
Vue.router = router
Vue.use(VueRouter)
// Set Vue authentication
Vue.use(VueAxios, axios)

axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api`


const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});


console.log("the boy is")