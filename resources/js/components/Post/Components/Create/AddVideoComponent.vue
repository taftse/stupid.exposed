<template>
    <div class="relative mt-6">
        <div class="absolute top-0 right-0 pt-4 pr-4">
            <button @click="$emit('remove-component')" type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 bg-white rounded-full border">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div v-if="!file" class="grid grid-cols-2 gap-2">
            <div
                 class="mt-2 flex justify-center content-center px-6 pt-5 pb-6 border-2 border-gray-300 rounded-md "
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
                    @change="onFileChange"
                    ref="file"
                    accept=".mp4,.mov,.avi,.webm"
                />
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M488 64h-8v20c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12V64H96v20c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12V64h-8C10.7 64 0 74.7 0 88v336c0 13.3 10.7 24 24 24h8v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h320v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h8c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24zM96 372c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm272 208c0 6.6-5.4 12-12 12H156c-6.6 0-12-5.4-12-12v-96c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v96zm0-168c0 6.6-5.4 12-12 12H156c-6.6 0-12-5.4-12-12v-96c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v96zm112 152c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40z" class=""></path>
                    </svg>
                    <p class="mt-1 text-sm text-gray-600">
                        <button @click="$refs.file.click()" type="button" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                            Upload a file
                        </button>
                        or drag and drop
                    </p>
                    <p class="mt-1 text-xs text-gray-500">
                        MP4, AVI, AVI, WEBM up to 100MB
                    </p>
                </div>
            </div>
            <div class="mt-2 flex justify-center px-2 pt-5 pb-2 border-2 border-gray-300 rounded-md ">
                <div class="text-center w-full">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 496 512">
                        <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm179.3 160h-67.2c-6.7-36.5-17.5-68.8-31.2-94.7 42.9 19 77.7 52.7 98.4 94.7zM248 56c18.6 0 48.6 41.2 63.2 112H184.8C199.4 97.2 229.4 56 248 56zM48 256c0-13.7 1.4-27.1 4-40h77.7c-1 13.1-1.7 26.3-1.7 40s.7 26.9 1.7 40H52c-2.6-12.9-4-26.3-4-40zm20.7 88h67.2c6.7 36.5 17.5 68.8 31.2 94.7-42.9-19-77.7-52.7-98.4-94.7zm67.2-176H68.7c20.7-42 55.5-75.7 98.4-94.7-13.7 25.9-24.5 58.2-31.2 94.7zM248 456c-18.6 0-48.6-41.2-63.2-112h126.5c-14.7 70.8-44.7 112-63.3 112zm70.1-160H177.9c-1.1-12.8-1.9-26-1.9-40s.8-27.2 1.9-40h140.3c1.1 12.8 1.9 26 1.9 40s-.9 27.2-2 40zm10.8 142.7c13.7-25.9 24.4-58.2 31.2-94.7h67.2c-20.7 42-55.5 75.7-98.4 94.7zM366.3 296c1-13.1 1.7-26.3 1.7-40s-.7-26.9-1.7-40H444c2.6 12.9 4 26.3 4 40s-1.4 27.1-4 40h-77.7z" class=""></path>
                    </svg>
                    <p class="mt-1 text-sm text-gray-600">
                        Paste a URL or Embed code
                    </p>
                    <p class="mt-1 text-xs text-gray-500">

                    </p>
                    <textarea @change="onInputChange" class="form-textarea mt-2block w-full sm:text-sm sm:leading-5"  ></textarea>
                </div>
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
                this.$emit('input',{'type':'Video','value':{...this.file,'provider':'StupidExposed'}});
            },
            onFileChange(){
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
            onInputChange(event){
                let value ={};
                if(event.target.value.startsWith('<'))
                {
                    // its an embed so return a embed html
                    value = {'embed_html': event.target.value};
                    this.$emit('input',{'type':'Video','value':value});
                }
                else if(event.target.value.startsWith('http'))
                {
                    // its an url
                    value = {'url':event.target.value};
                    this.$emit('input',{'type':'Video','value':value});
                }

            }
        }
    }
</script>

<style scoped>

</style>
