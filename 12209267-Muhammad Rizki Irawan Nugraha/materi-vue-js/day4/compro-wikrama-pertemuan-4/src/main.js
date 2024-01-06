import "@/assets/style.css";
import { createRouter, createWebHistory } from "vue-router";

import { createApp } from 'vue'

import Home from '@/pages/Home.vue';
import Portofolio from '@/pages/Portofolio.vue';

import App from "./App.vue";
const routes = [
  {
    path: "/",
    name: 'home',
    component: Home,
  },
  {
    path: '/portfolio',
    name: 'portofolio',
    component: Portofolio,
  }
];
const router = createRouter({
  history: createWebHistory(),
  routes,
})

createApp(App).use(router).mount("#app")
