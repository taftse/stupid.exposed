<template>
    <div class="relative mt-6 flex flex-col mb-4">
        <div class="absolute top-0 right-0 pt-4 pr-4">
            <button @click="$emit('remove-component')" type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 bg-white rounded-full border">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="border-2 border-b-0 rounded-t p2 bg-gray-100">
            <ul>
                <li >
                    <button v-for="(button,name) in buttons"
                            class="text-gray-600 mr-4 cursor-pointer"
                            @click.prevent="handleClick(button)"
                    >
                        {{name}}
                        <i class="fa" :class="button.icon"></i>
                    </button>
                </li>
            </ul>

        </div>
        <textarea
            name="value"
            id="value"
            ref="editor"
            class="rounded-t-none resize-none h-40 w-full border-2 border-t-0 rounded-b "
            @input="onInputChange"
            :value="value.text"
        ></textarea>
    </div>
</template>

<script>
    export default {
        props: ['value'],

        data:()=>({
            buttons:{
                header:{
                    before: "###",
                    icon:'fa-header',
                },
                bold:{
                    before: "**",
                    after: "**",
                    icon:'fa-bold',
                },
                italic:{
                    before: "_",
                    after: "_",
                    icon:'fa-italic',
                },
                quote:{
                    before: "> ",
                    icon:'fa-quote-left',
                },
            },
        }),
        mounted() {
            if(this.value.text === undefined)
            {
                console.log('mounted');
                this.updateText("");
            }
        },
        methods:{
            handleClick(button){

                const selectionStart = this.$refs.editor.selectionStart;
                const selectionEnd = this.$refs.editor.selectionEnd;


                const prefix = button.before ? button.before: "";
                const suffix = button.after ? button.after: "";
                let text = this.value.text;

                text = this.insertCharacterAtPosition(
                    text,
                    prefix,
                    selectionStart
                );

               text =  this.insertCharacterAtPosition(
                    text,
                    suffix,
                    selectionEnd + prefix.length
                );
                this.updateText(text);

                //this.$emit('input',{'type':'Text','text':{text:""}});
            },
            insertCharacterAtPosition(string,character,position){
                return [
                    string.slice(0,position),
                    character,
                    string.slice(position)
                ].join("");
            },

            updateText(text)
            {
                this.$emit('input',{'type':'Text','text': text});
            },

            onInputChange(event){
                this.$emit('input',{'type':'Text','text': event.target.value});
            }
        },
    }
</script>

<style scoped>

</style>
