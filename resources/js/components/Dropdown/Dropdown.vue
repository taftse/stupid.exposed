<template>
    <div   v-on-clickaway="closeDropdown" class="ml-3 relative">
        <div @click="toggleDropdown">
            <slot name="trigger">trigger</slot>
        </div>
        <transition
            enter-active-class="transition ease-out duration-100"
            enter-class="transform opacity-0 scale-95"
            enter-to-class="transform opacity-100 scale-100"
            leave-active-class="transition ease-in duration-75"
            leave-class="transform opacity-100 scale-100"
            leave-to-class="transform opacity-0 scale-95"
        >
            <div v-show="open"   class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                <slot name="menu">

                </slot>
            </div>
        </transition>
    </div>
</template>

<script>
    import { mixin as clickaway } from 'vue-clickaway'
    export default {
        mixins:[clickaway],

        data:()=>({
            open: false
        }),
        methods:{
            toggleDropdown()
            {
                this.open = !this.open;
            },
            closeDropdown()
            {
               this.open = false;
            }
        }
    }
</script>

<style scoped>

</style>
