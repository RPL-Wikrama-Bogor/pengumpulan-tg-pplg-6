import { createRouter, createWebHistory } from "vue-router";
import { createApp } from 'vue';
import App from './App.vue';
import Home from "@/pages/Home.vue";
import About from "@/pages/About.vue";
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap/dist/js/bootstrap.js';


const routes = [
    {
        path: "/",
        component: Home,
    },
    {
        path: "/about",
        component: About,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app');
