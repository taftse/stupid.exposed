<template>
    <div>
        <post :post="post"></post>
    </div>
</template>


<script>
    export default {
        props:['postId'],

        data:()=>({
            post:[]
        }),

        methods:{
        getInitialPosts(){
            axios.get('posts/'+this.postId)
                .then(response =>{
                    this.post = response.data.data;
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
