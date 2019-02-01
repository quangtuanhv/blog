import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/home/HomePage.vue'
import Contact from '../components/contact/Contact.vue'
import DetailPost from '../components/post/DetailPost.vue'
import ListPost from '../components/post/ListPost.vue'
const router = [
    { path: '/', component: Home, name: 'home_page' },
    { path: '/contact', component: Contact, name: 'contact_page' }, 
    { path: '/category/1', component: ListPost, name: 'detail_category_page' },
    { path: '/post-detail/1', component: DetailPost, name: 'detail_post_page' },
];

Vue.use(VueRouter)

export default router