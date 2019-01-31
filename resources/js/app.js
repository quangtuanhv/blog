import Vue from 'vue'
import routes from './router/index'
import Master from './components/Master'
import VueProgressBar from 'vue-progressbar'
import makeRouter from './router/middleware'

Vue.use(VueProgressBar);

const router = makeRouter(routes)
const app = new Vue({
    el: '#app',
    router,
    ...Master
});
