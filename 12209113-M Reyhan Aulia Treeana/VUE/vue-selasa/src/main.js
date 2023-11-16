
import Btn from "./components/myComponent/Button.vue"
import { createApp } from 'vue'
import App from './App.vue'

const app = createApp(App)
app.component('MyBtn', Btn)

app.mount('#app')

