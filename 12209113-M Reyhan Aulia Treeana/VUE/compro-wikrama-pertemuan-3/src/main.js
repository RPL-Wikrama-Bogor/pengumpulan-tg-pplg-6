import "@/assets/style.css"
import { createRouter, createWebHistory } from "vue-router"
import { createApp } from 'vue'
import App from './App.vue'


import Home from "@/pages/Home.vue"

const routes = [
    
    {
        path: "/",
        component: Home,
        name: "home"
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')
