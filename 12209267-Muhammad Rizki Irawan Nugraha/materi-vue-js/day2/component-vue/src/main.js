import { createApp } from 'vue'
import App from './App.vue'

import button from '@/components/my-components/Button.vue';


const app = createApp(App);

app.component("MyBtn", button);
app.mount("#app");