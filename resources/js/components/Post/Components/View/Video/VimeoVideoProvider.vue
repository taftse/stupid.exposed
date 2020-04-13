<template>
    <div class="embed-responsive aspect-ratio-16/9">
        <div v-if="video.embed_html" class="embed-responsive-item">{{video.embed_html}}</div>
        <iframe v-if="video.url" class="embed-responsive-item" :src="'https://player.vimeo.com/video/'+video.url" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
</template>

<script>
    export default {
        props: ['video']
    }
</script>

<style scoped>

</style>
