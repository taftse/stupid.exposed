<template>
    <div>
        <post v-for="post in posts" v-bind:key="post.id" :post="post"></post>
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
