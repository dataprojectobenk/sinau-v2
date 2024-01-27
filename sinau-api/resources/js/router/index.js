import { createRouter,createWebHistory } from "vue-router";

import HomeView from '@/views/HomeView.vue'
import GroupView from '@/views/GroupView.vue'


const router = createRouter({
    history:createWebHistory(),
    routes:[
        {
            path:'/',
            name:'home',
            component: HomeView
        },
        {
            path:'/group',
            name:'group',
            component: GroupView
        },
    ]
})


export default router