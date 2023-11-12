import '@/assets/style.css'
import { createRouter, createWebHistory } from "vue-router";

import Beranda from './components/Beranda/Beranda.vue';
import Blog from './components/Beranda/Blog.vue';
import Portofolio from './components/Beranda/Portofolio.vue';
import Contact from './components/Beranda/Contact.vue';

const routes = [
    {
        path: "/",
        component: Beranda,
    },
    {
        path: "/portofolio",
        component: Portofolio,
    },
    {
        path: "/blog",
        component: Blog,
    },
    {
        path: "/contact",
        component: Contact,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
})

import { createApp } from 'vue'
import App from './App.vue'

createApp(App).use(router).mount('#app')
