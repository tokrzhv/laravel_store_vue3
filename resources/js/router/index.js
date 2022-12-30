import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes: [

        {
            path: '/',
            name: 'main',
            component: () => import('../views/main/Index.vue')
        },
        {
            path: '/product',
            name: 'products.index',
            component: () => import('../views/product/Index.vue')
        },
        {
            path: '/product/:id',
            name: 'products.show',
            component: () => import('../views/product/Show.vue')
        },
        {
            path: '/cart',
            name: 'cart',
            component: () => import('../views/cart/Cart.vue')
        }
    ]
})

export default router
