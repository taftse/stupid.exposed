<template>
    <article class="-ml-16">
        <div class="pt-4 pr-4 pl-4 float-none">
            <router-link :to="{name:'author.show', params:{authorId:post.author.id}}">{{post.author.username}}</router-link>
            {{__('posted')}}
            <small class="text-muted">{{post.created_at}}</small>
        </div>
        <div class="ml-16 border border-gray-400 mb-4 bg-white">

            <div v-for="component in post.components">

                <component :is="component.type+'-component'" :component="component"></component>
            </div>
        </div>
    </article>
</template>

<script>
    export default {
        props: ['post']

    }
</script>

<style scoped>

</style>
