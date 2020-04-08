<template>
    <iframe class="post-video" :src="'https://www.youtube-nocookie.com/embed/'+video.url" frameborder="0" allowfullscreen></iframe>
</template>

<script>
    export default {
        props: ['video']
    }
</script>

<style scoped>

</style>
