<template>
    <div class="mt-6">
        <span class="relative z-0 inline-flex shadow-sm w-full">
              <button @click="addComponent('image')" type="button" class="w-1/3 relative  items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                 <svg class="h-8 w-8 mx-auto" fill="currentColor" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z" class=""></path>
                  </svg>
                  Images
              </button>
              <button @click="addComponent('video')" type="button" class="-ml-px w-1/3 relative  items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                 <svg class="h-8 w-8 mx-auto" fill="currentColor" viewBox="0 0 576 512">
                    <path fill="currentColor" d="M535.68 260.59L448 321.05V447l87.66 60.39c17 11.68 40.32-.23 40.32-20.63V281.22c.02-20.32-23.25-32.32-40.3-20.63zM368.2 288H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h48v112.2a47.81 47.81 0 0 0 47.8 47.8h256.4a47.81 47.81 0 0 0 47.8-47.8V335.8a47.81 47.81 0 0 0-47.8-47.8zM352 0c-48.57 0-90.31 27.37-112 67.23C218.31 27.37 176.57 0 128 0a128 128 0 0 0 0 256h224a128 128 0 0 0 0-256zM128 192a64 64 0 1 1 64-64 64.07 64.07 0 0 1-64 64zm224 0a64 64 0 1 1 64-64 64.07 64.07 0 0 1-64 64z" class=""></path>
                  </svg>
                  Video
              </button>
              <button @click="addComponent('text')" type="button" class="-ml-px w-1/3 relative items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                  <svg class="h-8 w-8 mx-auto" fill="currentColor" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M480 192h-32V77.26a32 32 0 0 0-9.38-22.64L393.38 9.38A32 32 0 0 0 370.73 0H96a32 32 0 0 0-32 32v160H32a32 32 0 0 0-32 32v32a32 32 0 0 0 32 32v160a64 64 0 0 0 64 64h320a64 64 0 0 0 64-64V288a32 32 0 0 0 32-32v-32a32 32 0 0 0-32-32zM128 64h192v48a16 16 0 0 0 16 16h48v64h-18.75a32 32 0 0 0-22.62 9.37l-13.26 13.26a32 32 0 0 1-22.62 9.37h-101.5a32 32 0 0 1-22.62-9.37l-13.26-13.26a32 32 0 0 0-22.62-9.37H128zm240 232v16a8 8 0 0 1-8 8h-16a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8zm-64 64a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8h-16a8 8 0 0 1-8-8zm-8-40h-16a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8zm-56 40a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8h-16a8 8 0 0 1-8-8zm-8-40h-16a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8zm-56 40a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8h-16a8 8 0 0 1-8-8zm-8-40h-16a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8zm-64 0H88a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8zm32 64h-16a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v16a8 8 0 0 1-8 8zm232 56a8 8 0 0 1-8 8H152a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h208a8 8 0 0 1 8 8zm32-64a8 8 0 0 1-8 8h-16a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8zm32-64a8 8 0 0 1-8 8h-16a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8z" class=""></path>
                  </svg>
                  Stories
              </button>
        </span>
    </div>
</template>

<script>
    export default {
        methods:{
            addComponent(type) {
                this.$emit('add-component', {'type':type})
            }
        }
    }
</script>

<style scoped>

</style>
