// import './assets/main.css'
import '@/assets/base.css'; 
import '@/assets/style.css';

import { createApp } from 'vue';
import App from './App.vue';
import { createRouter, createWebHistory } from "vue-router";


import Home from "@/pages/Home.vue";
import Portofolio from "@/pages/Portofolio.vue";
import Blog from "@/pages/Blog.vue";

const routes = [
    {
        path: "/",
        component: Home,
    },
    {
        path: "/portofolio",
        component: Portofolio,
    },
    {
        path: "/blog",
        component: Blog,
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});
createApp(App).use(router).mount("#app");