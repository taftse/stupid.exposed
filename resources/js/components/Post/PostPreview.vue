<template>
    <router-link :to="{name:'post.show',params:{postId:post.id,slug:post.slug}}">
        <card class="sm:rounded-lg">
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
                                        <router-link :to="{name:'author.show',params:{authorId:post.author.id}}">{{post.author.username}}</router-link>
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
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-1 h-1">
                        <path d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                    </svg>
                    Share
                </a>
            </card-footer>
        </card>
    </router-link>
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
