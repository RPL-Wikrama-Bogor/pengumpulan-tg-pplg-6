import "@/assets/style.css";
import { createApp } from "vue";
import App from "./App.vue";
import { createRouter, createWebHistory } from "vue-router";
import Home from "@/pages/Home.vue";
import Blog from "@/pages/Blog.vue";
import Contact from "@/pages/Contact.vue";


import Portfolio from "@/pages/Portfolio.vue";
const routes = [
  {
    path: "/",
    name: Home,
    component: Home,
  },
  {
    path:'/Portfolio',
    name: "Portfolio",
    component: Portfolio
  },
  {
    path: '/Blog',
    component: Blog,
  },
  {
    path: '/Contact',
    component: Contact,
  }

];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
