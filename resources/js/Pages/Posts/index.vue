<template>
    <div>

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
                    this.posts.push(response.data.posts);
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
