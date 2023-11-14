import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'

import App from './App.vue'
import Home from '@/components/pages/Home.vue'
import About from '@/components/pages/About.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: Home },
        { path: '/about', component: About },
    ]
});

const app = createApp(App)

app.use(router);
app.component('Home', Home);
app.component('About', About);

app.mount('#app')
