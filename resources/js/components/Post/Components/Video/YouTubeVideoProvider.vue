<template>
    <div class="embed-responsive aspect-ratio-16/9">
        <iframe class="embed-responsive-item" :src="'https://www.youtube-nocookie.com/embed/'+video.url" frameborder="0" allowfullscreen></iframe>
    </div>
</template>

<script>
    export default {
        props: ['video']
    }
</script>

<style scoped>

</style>
