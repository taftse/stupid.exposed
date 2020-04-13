<template>
    <div>
        <img :src="component.media[0].url" alt="" class="post-image">
    </div>
</template>

<script>
    export default {
        props:['component']
    }
</script>

<style scoped>

</style>
