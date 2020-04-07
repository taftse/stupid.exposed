import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from './Pages/Home'

export default  new VueRouter(
    {
        mode:'history',
        routes:[
            {
                path:'/',
                name: 'home',
                component: Home
            }
        ]
    }
)
