import "@/assets/style.css";
import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import Home from "@/pages/Home.vue";
import Portofolio from "@/pages/Portofolio.vue";
import Contact from "@/pages/Contact.vue";
import Blog from "@/pages/Blog.vue";

import App from "./App.vue";
const routes = [
  {
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/portofolio",
    name: "portofolio",
    component: Portofolio,
  },
  {
    path: "/contact",
    name: "Contact",
    component: Contact,
  },
  {
    path: "/blog",
    name: "Blog",
    component: Blog,
  }
];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
