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
                path:'/login',
                name: 'login',
                component: Home
            },
            {
                path:'/register',
                name: 'register',
                component: Home
            },
            {
                path:'/posts/:filter?',
                name: 'posts.index',
                component: Posts,
                props: true
            },
            {
                path:'/post/:postId/:slug?',
                name: 'post.show',
                component: ShowPost,
                props: true
            },
            {
                path:'/post/:postId/edit',
                name: 'post.edit',
                component: EditPost,
                props: true
            },
            {
                path:'/author/:authorId/',
                name: 'author.show',
                component: ShowAuthor,
                props: true
            },
        ]
    }
)
