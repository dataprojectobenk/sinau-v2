import './bootstrap';
// css
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap-icons/font/bootstrap-icons.min.css'

import { createApp } from "vue";
import router from './router';
import App from './App.vue'


const app = createApp(App)

app.use(router)
app.mount('#app')


// global js
import 'bootstrap/dist/js/bootstrap.bundle'