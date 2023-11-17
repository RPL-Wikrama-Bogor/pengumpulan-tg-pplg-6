import "./assets/style.css";
import { createRouter, createWebHistory } from "vue-router";

import Home from "@/pages/Home.vue";
import Portofolio from "@/pages/Portofolio.vue";
import Blog from "@/pages/Blog.vue";
import Contact from "@/pages/Contact.vue";

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
    path: "/blog",
    name: "blog",
    component: Blog,
  },
  {
    path: "/contact",
    name: "contact",
    component: Contact,
  },
];

const router = createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: createWebHistory(),
  routes, // short for `routes: routes`
});

import { createApp } from "vue";
import App from "./App.vue";

createApp(App).use(router).mount("#app");
