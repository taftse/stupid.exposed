<template>
    <card>
        <card-body>
            <div class="pb-6">
                <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
                    <div class="ml-4 mt-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                            </div>
                            <div class="ml-4">
                                <h3 class="text-md leading-6 text-gray-900">
                                    <router-link :to="{name:'author.show',props:{authorId:post.author.id}}">{{post.author.name}}</router-link>
                                </h3>
                                <p class="text-sm leading-5 text-gray-500">
                                    {{moment(post.created_at)}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="ml-4 mt-4 flex-shrink-0 flex">

                    </div>
                </div>

            </div>

            <component :is="post.components[0].type+'-component'" :component="post.components[0]"></component>
        </card-body>
        <card-footer>
            <a class="inline-block text-sm leading-5 text-gray-500">
                <span class="font-bold">123</span> Likes
            </a>
            <a class="inline-block text-sm leading-5 text-gray-500 ml-3">
                <span class="font-bold">123</span> Comments
            </a>
            <a class="inline-block text-sm leading-5 text-gray-500 ml-3">
                Share
            </a>
        </card-footer>
    </card>
</template>

<script>
 import moment from 'moment';

 export default {

     props: ['post'],

     methods:{
         moment:function(date){
             return moment(date).fromNow();
         }
     }
 }
</script>

<style scoped>

</style>
