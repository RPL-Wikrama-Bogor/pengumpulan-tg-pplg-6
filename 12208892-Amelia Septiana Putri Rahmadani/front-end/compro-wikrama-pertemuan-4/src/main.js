import "@/assets/style.css";
import { createApp } from "vue";
import App from "./App.vue";
import { createRouter, createWebHistory } from "vue-router";
import Home from "@/pages/Home.vue";
import Portfolio from "@/pages/Portfolio.vue";
import Contact from "@/pages/Contact.vue";
import Blog from "@/pages/Blog.vue";

const routes = [
  {
    path: "/",
    component: Home,
  },
  {
    path: "/portfolio",
    component: Portfolio,
  },
  {
    path: "/contact",
    component: Contact,
  },
  {
    path: "/blog",
    component: Blog,
  }
];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
