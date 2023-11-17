import "@/assets/style.css"
import { createRouter, createWebHistory } from "vue-router"
import { createApp } from 'vue'
import App from './App.vue'
import Home from '@/pages/Home.vue';
import Portofolio from "@/pages/Portofolio.vue";
import Blog from "@/pages/Blog.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: Home
    },
    {
        path: "/portofolio",
        component: Portofolio
    },
    {
        path: "/blog",
        component: Blog
    }

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')


// import '@/assets/style.css';
// import { createRouter, createWebHistory } from "vue-router";
// import { createApp } from 'vue'
// import App from './App.vue'
// import Home from "@/pages/Home.vue";
// import Portfolio from "@/pages/Portfolio.vue";

// const routes = [
//     {
//         path: "/",
//         component: Home,
//     },
//     {
//         path: "/portfolio",
//         component: Portfolio,
//     }
// ];

// const router = createRouter({
//     history: createWebHistory(),
//     routes,
// });

// createApp(App).use(router).mount('#app');
