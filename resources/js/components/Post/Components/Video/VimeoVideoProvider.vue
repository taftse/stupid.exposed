<template>
    <div>
        <div v-if="video.embed_html">{{video.embed_html}}</div>
        <iframe v-if="video.url" class="post-video" :src="'https://player.vimeo.com/video/'+video.url" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
</template>

<script>
    export default {
        props: ['video']
    }
</script>

<style scoped>

</style>
