import './bootstrap';

import { createApp } from 'vue';
import router from './router';
import App from './App.vue';
import Login from './components/Login.vue';

createApp({
    components: {
        App
    }
})
.use(router)
.mount('#app');