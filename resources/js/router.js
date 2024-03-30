import { createRouter, createWebHistory } from 'vue-router';
import AppPage from './App.vue';
import mainApp from './components/pages/mainApp.vue';
import ElementComponent from './components/pages/ExampleComponent.vue';
import hooks from './components/basic/hooks.vue';

const routes = [
    // { path: '/', component: AppPage},

    { path: '/', component: mainApp },
    { path: '/example-component', component: ElementComponent },
    { path: '/hooks', component: hooks },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
