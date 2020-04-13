<template>
    <div class="max-w-7x1 mx-auto py6 sm:px-6 lg:px-8">
        <div class="max-w-none mx-auto">
            <card class="sm:rounded-lg">
                <card-body>
                    <form>
                        <div>
                            <label for="title" class="block text-sm font-medium leading-5 text-gray-700">Title</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input id="title" class="form-input block w-full sm:text-sm sm:leading-5" :placeholder="__('Some Stupid Title') " />
                            </div>
                            <p class="mt-2 text-sm text-gray-500">{{__('Are you really that stupid that I need to explain this ?')}}</p>
                        </div>
                        <component v-if="components" v-for="component in components" v-bind:key="component.id" :is="'add-'+component.type+'-component'" :component="component"></component>
                        <component-selections @add-component="addComponent"></component-selections>
                    </form>
                </card-body>

            </card>
        </div>
    </div>
</template>

<script>
    import ComponentSelections from "../../components/Post/Components/Create/ComponentSelections";
    import AddTextComponent from "../../components/Post/Components/Create/AddTextComponent";
    import AddMediaComponent from "../../components/Post/Components/Create/AddMediaComponent";
    export default {
        components: {ComponentSelections,AddTextComponent,AddMediaComponent},
        data:()=>({
            components:[{
                type:'media'
            }]
        }),
        methods:{
            addComponent(component){
                this.components.push(component)
            }
        }
    }
</script>

<style scoped>

</style>
