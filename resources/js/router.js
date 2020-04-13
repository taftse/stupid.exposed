import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from './Pages/Home'

import Posts from './Pages/Posts'
import ShowPost from './Pages/Posts/Show'
import EditPost from './Pages/Posts/Edit'
import CreatePost from './Pages/Posts/Create'

import ShowAuthor from './Pages/Author/Show'

import IndexTags from './Pages/Tags'

export default  new VueRouter(
    {
        mode:'history',
        routes:[
            {
                path:'/',
                name: 'home',
                component: Posts
            },
            {
                path:'/posts/add',
                name: 'post.create',
                component: CreatePost
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
            {
                path:'/tags/:filter?',
                name: 'tags.index',
                component: IndexTags,
                props: true
            }
        ]
    }
)
