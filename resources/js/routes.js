const Agent = () => import('./components/Agent.vue');
const Customer = () => import('./components/Customer.vue');
const Order = () => import('./components/Order.vue');
const Home = () => import('./components/Home.vue');

export const routes = [
    {
        name: 'agent',
        path: '/agent',
        component: Agent
    },
    {
        name: 'customer',
        path: '/customer',
        component: Customer
    },
    {
        name: 'order',
        path: '/order',
        component: Order
    },
    {
        name: 'home',
        path: '/',
        component: Home
    },
];

