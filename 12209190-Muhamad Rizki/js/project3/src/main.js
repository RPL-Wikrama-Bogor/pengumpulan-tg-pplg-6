//import './assets/main.css'
import {createRouter, createWebhistory } from 'vue-router';
import { createApp } from 'vue'
import App from './App.vue'
import Home from '@/components/pages/home.vue';
const routes=[
    {
        path: '/',
        component: Home
    },
    {
        path: 'about',
        component: Home
    }
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use (router).mount('#app')
