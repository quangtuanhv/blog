import Vue from 'vue'
import VueRouter from 'vue-router'
import HomePage from '../components/home/HomePage.vue'

const router = [
    { path: '/', component: HomePage, name: 'homepage' },
];

Vue.use(VueRouter)

export default router