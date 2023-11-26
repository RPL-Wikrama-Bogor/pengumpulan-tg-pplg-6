import { createRouter, createWebhistory } from "vue-project";
import { createApp } from 'vue'

import App from './App.vue'
import Home from '@/pages/Home.vue'
import about from '@/pages/about.vue'

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
    history: createWebhistory(),
    routes,
});

createApp(App).use(router).mount('#app')

