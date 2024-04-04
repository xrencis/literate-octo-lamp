import { createApp } from 'vue';
import {createRouter, createWebHashHistory} from "vue-router";
import Home from './components/Home.vue';
import App from './components/App.vue';
import Design from './components/Design.vue';
import Functionality from './components/Functionality.vue';
import Availability from './components/Availability.vue';
import Registration from './components/Registration.vue';

const app = createApp(App);
const routes = [
    { path: '/:id/', component: Home },
    { path: '/:id/design', component: Design },
    { path: '/:id/functionality', component: Functionality },
    { path: '/:id/availability', component: Availability },
    { path: '/registration', component: Registration },
  ]
const router = createRouter({
// 4. Provide the history implementation to use. We
// are using the hash history for simplicity here.
history: createWebHashHistory(),
routes, // short for `routes: routes`
})
app.use(router)
app.mount('#app');
