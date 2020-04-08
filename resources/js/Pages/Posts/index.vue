<template>
    <div class="max-w-7x1 mx-auto py6 sm:px-6 lg:px-8">
        <div class="max-w-none mx-auto">
            <post-preview v-for="post in posts" v-bind:key="post.id" :post="post"></post-preview>
        </div>
    </div>
</template>

<script>
    export default {
        data:()=>({
            posts:[]
        }),

        methods:{
            getInitialPosts(){
                axios.get('posts')
                .then(response =>{
                    this.posts.push(...response.data.data);
                });
            }
        },

        beforeMount() {
            this.getInitialPosts();
        }
    }
</script>

<style scoped>

</style>
