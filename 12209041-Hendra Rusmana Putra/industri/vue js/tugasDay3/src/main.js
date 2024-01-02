// import './assets/main.css'
import '@/assets/base.css'   
import '@/assets/style.css'

import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from "vue-router";


import Beranda from "@/components/Beranda/Beranda.vue";
import Blog from "@/components/Beranda/Blog.vue";
import Portofolio from "@/components/Beranda/Portofolio.vue";
import Service from "@/components/Beranda/Service.vue";

const routes = [
    {
        path: "/",
        component: Beranda,
    },
    {
        path: "/Blog",
        component: Blog,
    },
    {
        path: "/Portofolio",
        component: Portofolio,
    },
    {
        path: "/Service",
        component: Service,
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});
createApp(App).use(router).mount("#app");