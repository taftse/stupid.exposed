<template>
    <div ref="dropzone" class="dropzone">
        <div class="dz-message">
            <div  class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md ">

                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="mt-1 text-sm text-gray-600">
                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                            Upload a file
                        </button>
                        or drag and drop
                    </p>
                    <p class="mt-1 text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Dropzone from 'dropzone'
    Dropzone.autoDiscover = false;
    export default {
        props: ['component'],

        mounted() {
            if(this.$isServer && this.hasBeenMounted)
            {
                return;
            }
            this.hasBeenMounted = true;

           this.dropzone = new Dropzone(
            this.$refs.dropzone,
                {
                    url:"some/url" ,
                    addRemoveLinks: true,
                }
           );

            this.dropzone.uploadFiles = async files=>
                files.forEach(this.uploadFile);

            let vm = this;
            this.dropzone.on("thumbnail", function(file, dataUrl) {
                this.thumbnail(file,dataUrl)

            });
        },

        methods:{
            async uploadFile(file){
                const s3response = await window.Vapor.store(file,{
                    progress: progress=>{
                        const percentage = Math.round(progress * 100);
                        this.dropzone.emit("uploadprogress", file, percentage);
                    }
                });
            },
        }
    }
</script>

<style scoped>

</style>
