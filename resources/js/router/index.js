import { createRouter, createWebHistory } from "vue-router";

import App from '@/App.vue';
import Login from '@/components/Login.vue';

const routes = [
    { 
        path: '/TestProject/public/',
        name: 'App',
        component: App
    },
    {
        path: '/TestProject/public/login',
        name: 'Login',
        component: Login
    },
]

const router = createRouter({ 
    history: createWebHistory(),
    routes
})

export default router;