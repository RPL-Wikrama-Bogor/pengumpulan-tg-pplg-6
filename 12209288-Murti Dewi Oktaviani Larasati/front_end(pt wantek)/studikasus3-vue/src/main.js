import '@/assets/style.css' 

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue'

import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue';
import Portofolio from '@/components/Beranda/Portofolio.vue'; 
import Blog from '@/components/Beranda/Blog.vue';
import Contact from '@/components/Beranda/Contact.vue';

const routes = [
    {
        path: "/",
        component: Beranda
    },
    {
        path: "/portofolio",
        component: Portofolio
    },
    {
        path: "/service",
        component: Service
    },
    {
        path: "/blog",
        component: Blog
    },
    {
        path: "/contact",
        component: Contact
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
})

createApp(App).use(router).mount('#app')