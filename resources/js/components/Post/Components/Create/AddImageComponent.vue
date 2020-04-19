<template>
    <div class="relative mt-6">
        <div class="absolute top-0 right-0 pt-4 pr-4">
            <button @click="$emit('remove-component')" type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 bg-white rounded-full border">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
            <div v-if="!file"
                class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md "
                @dragover="dragover"
                @dragleave="dragleave"
                @drop="drop"
                @click="$refs.file.click()"
            >
                <input
                    type="file"
                    multiple
                    name="fields[assetsFieldHandle][]"
                    id="assetsFieldHandle"
                    class="w-px h-px opacity-0 overflow-hidden absolute"
                    @change="onChange"
                    ref="file"
                    accept=".pdf,.jpg,.jpeg,.png"
                />
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="mt-1 text-sm text-gray-600">
                        <button @click="$refs.file.click()" type="button" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                            Upload a file
                        </button>
                        or drag and drop
                    </p>
                    <p class="mt-1 text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                    </p>
                </div>
            </div>
            <div v-else>
                <img v-bind:src="preview.url" v-bind:type="file.type" class="">
            </div>
    </div>
</template>

<script>

    export default {
        props: ['value'],

        data:()=>({
            file:null,
            preview:null
        }),

        mounted() {
        },

        methods:{
            async uploadFile(file){
                const s3response =await window.Vapor.store(file,{
                    progress: progress=>{
                        const percentage = Math.round(progress * 100);
                        //this.dropzone.emit("uploadprogress", file, percentage);
                    }
                });
                console.log(this.$refs.file.files[0])
                this.preview = {url:URL.createObjectURL(this.$refs.file.files[0])};
                this.file= s3response;
                this.$emit('input',{'type':'Image','value':this.file});
            },
            onChange(){
                this.uploadFile(this.$refs.file.files[0])
            },
            dragover(event){
                event.preventDefault();
                if(!event.currentTarget.classList.contains('bg-blue-50'))
                {
                    event.currentTarget.classList.add('bg-blue-50');
                }
            },
            dragleave(event){
                event.currentTarget.classList.remove('bg-blue-50');
            },
            drop(event){
                event.preventDefault();
                this.$refs.file.files = event.dataTransfer.files;
                this.uploadFile(this.$refs.file.files[0])
                event.currentTarget.classList.remove('bg-blue-50');
            },
        }
    }
</script>

<style scoped>

</style>
