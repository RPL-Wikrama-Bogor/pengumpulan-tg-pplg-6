// import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import Btn from  '@/components/my_components/button.vue';


// createApp(App).mount('#app')


const app = createApp(App);

app.component("MyBtn", Btn);
app.mount("#app");