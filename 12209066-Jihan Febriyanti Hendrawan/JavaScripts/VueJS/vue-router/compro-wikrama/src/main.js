import '@/assets/style.css';
import { createRouter, createWebHistory} from "vue-router";
import { createApp } from "vue";

import App from "./App.vue";
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue';
import Portofolio from '@/components/Beranda/Portofolio.vue';
import Blog from '@/components/Beranda/Blog.vue';

const routes = [
    {
        path: "/",
        component: Beranda,
    },
    {
        path: "/Service",
        component: Service,
    },
    {
        path: "/Portofolio",
        component: Portofolio,
    },
    {
        path: "/Blog",
        component: Blog,
    }
];
const router = createRouter({
    history:createWebHistory(),
    routes,
});
createApp(App).use(router).mount('#app');

