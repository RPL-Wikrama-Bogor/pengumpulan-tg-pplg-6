// import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
// import Btn from '@/components/my components/Button.vue';

const app = createApp(App)
createApp(App).mount('#app')

app.component('MyBtn', Btn);
app.mount('#app');

