import './assets/style.css'
import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue'
import Home from '@/pages/Home.vue'
import Portfolio from '@/components/Beranda/Portfolio.vue'
import Service from "@/components/Beranda/Service.vue";
import Blog from "@/components/Beranda/Blog.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/portfolio",
    // name: "Portfolio",
    component: Portfolio,
  },
  {
    path: "/service",
    // name: "Service",
    component: Service,
  },
  {
    path: "/blog",
    // name: "Blog",
    component: Blog,
  },
];
const router = createRouter({
  history: createWebHistory(),
  routes,
})

createApp(App).use(router).mount("#app");