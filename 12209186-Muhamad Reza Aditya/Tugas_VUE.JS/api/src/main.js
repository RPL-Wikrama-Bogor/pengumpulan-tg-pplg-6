import './assets/style.css'
import '@/assets/base.css'

import { createRouter, createWebHistory } from "vue-router";
import { createApp } from 'vue'

import Home from "@/pages/Home.vue"
import App from '@/App.vue'
import Portofolio from "@/Pages/Portofolio.vue"

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/portofolio",
        component: Portofolio,
      },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});




createApp(App).use(router).mount('#app');
