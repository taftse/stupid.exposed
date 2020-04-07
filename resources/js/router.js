import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from './Pages/Home'

import Posts from './Pages/Posts'
import ShowPost from './Pages/Posts/Show'
import EditPost from './Pages/Posts/Edit'

import ShowAuthor from './Pages/Author/Show'

export default  new VueRouter(
    {
        mode:'history',
        routes:[
            {
                path:'/',
                name: 'home',
                component: Home
            },
            {
                path:'/posts/',
                name: 'posts',
                component: Posts
            },
            {
                path:'/post/:id/:slug?',
                name: 'post.show',
                component: ShowPost
            },
            {
                path:'/post/:id/edit',
                name: 'post.edit',
                component: EditPost
            },
            {
                path:'/author/:id/',
                name: 'author.show',
                component: ShowAuthor
            },
        ]
    }
)
