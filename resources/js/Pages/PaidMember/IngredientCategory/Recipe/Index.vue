<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import NavLink from '@/Components/NavLink.vue';
import { Inertia } from '@inertiajs/inertia'

defineProps({
    recipes: Array
})

</script>

<template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div v-for="recipe in recipes" :key="recipe.id">
                    {{ recipe.title }}
                </div>
dd
                </div>
            </div>
        </div>


</template>