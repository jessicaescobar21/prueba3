require('./bootstrap');

import * as Vue from 'vue';
import * as VueRouter from 'vue-router';
import App from './components/App.vue';
import {routes} from './routes.js';

window.Vue = Vue;

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes: routes
})

Vue.createApp(App).use(router).mount('#app');