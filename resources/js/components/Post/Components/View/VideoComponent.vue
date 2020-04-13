<template>
        <component :is="component.provider+'-video-provider'" :video="component"></component>
</template>

<script>
    export default {
        props:['component']
    }
</script>

<style scoped>

</style>
