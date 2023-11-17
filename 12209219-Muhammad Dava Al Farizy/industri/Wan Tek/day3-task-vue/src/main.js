// import "@/assets/style.css"
// import { createRouter, createWebHistory } from "vue-router"
// import { createApp } from 'vue'
// import App from './App.vue'
// import Beranda from "@/components/Beranda/Beranda.vue"
// import Portfolio from "@/components/Beranda/Portfolio.vue"
// import Service from "@/components/Beranda/Service.vue"
// import Blog from "@/components/Beranda/Blog.vue"

// const routes = [
//     {
//         path: "/",
//         component: Beranda
//     },
//     {
//         path: "/portfolio",
//         component: Portfolio
//     },
//     {
//         path: "/service",
//         component: Service
//     },
//     {
//         path: "/blog",
//         component: Blog
//     },
// ];

// const router = createRouter({
//     history: createWebHistory(),
//     routes,
// });

// createApp(App).use(router).mount('#app')


import '@/assets/style.css';
import { createRouter, createWebHistory } from "vue-router";
import { createApp } from 'vue'
import App from './App.vue'
import Home from "@/pages/Home.vue";
import Portfolio from "@/pages/Portfolio.vue";

const routes = [
    {
        path: "/",
        component: Home,
    },
    {
        path: "/portfolio",
        component: Portfolio,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app');
