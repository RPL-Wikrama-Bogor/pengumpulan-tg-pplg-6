import "@/assets/style.css";
import { createApp } from "vue";
import App from "./App.vue";
import { createRouter, createWebHistory } from "vue-router";
import Home from "@/pages/Home.vue";
import portfolio from "@/pages/Portofolio.vue";

const routes = [
  {
    path: "/",
    component: Home,
  },
  {
    path: "/Portfolio",
    component: portfolio,
  }
];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");