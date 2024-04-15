import './bootstrap';
import { createApp } from 'vue';
import {createRouter, createWebHistory} from 'vue-router';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: () => import('./components/Home.vue')
        },
        {
            path: '/example',
            component: () => import('./components/ExampleComponent.vue')
        }
    ],
})

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import HomeComponent from './components/Home.vue';

// Định nghĩa global cho component
app.component('example-component', ExampleComponent);
app.component('home-component', HomeComponent);

app.use(router);

app.mount('#app');
