<template>
    <div class="max-w-7x1 mx-auto py6 sm:px-6 lg:px-8">
        <div class="max-w-none mx-auto">
            <card class="sm:rounded-lg">
                <card-body>
                    <form @submit.prevent="savePost">
                        <div>
                            <label for="title" class="block text-sm font-medium leading-5 text-gray-700">Title</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="title" class="form-input block w-full sm:text-sm sm:leading-5" :placeholder="__('Some Stupid Title') " />
                            </div>
                            <p class="mt-2 text-sm text-gray-500">{{__('Are you really that stupid that I need to explain this ?')}}</p>
                        </div>
                        <component
                            v-if="value.components"
                            v-for="(component, index) in value.components"
                            v-bind:key="component.id"
                            :is="'add-'+component.type+'-component'"
                            @remove-component="value.components.splice(index,1)"
                            v-model="value.components[index]"
                        />
                        <component-selections @add-component="addComponent"></component-selections>
                        <div class="mt-8 flex justify-end">

                            <span class="ml-3 inline-flex rounded-md shadow-sm">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Save
              </button>
            </span>
                        </div>
                    </form>
                </card-body>

            </card>
        </div>
    </div>
</template>

<script>
    import ComponentSelections from "../../components/Post/Components/Create/ComponentSelections";
    import AddTextComponent from "../../components/Post/Components/Create/AddTextComponent";
    import AddImageComponent from "../../components/Post/Components/Create/AddImageComponent";
    import AddVideoComponent from "../../components/Post/Components/Create/AddVideoComponent";
    export default {
        components: {
            ComponentSelections,
            AddTextComponent,
            AddImageComponent,
            AddVideoComponent,
        },
        data:()=>({
            value:{
                title:'',
                components:[{
                    type:'Text'
                }],
                tags:[],
            },

        }),
        methods:{
            addComponent(component){
                this.value.components.push(component)
            },
            savePost(){
                axios.post('/posts/',this.value)
                    .then(response =>{
                        console.log('redirect to new post')
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            }
        }
    }
</script>

<style scoped>

</style>
