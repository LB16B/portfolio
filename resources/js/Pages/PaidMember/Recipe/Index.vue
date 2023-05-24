<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavLink from '@/Components/NavLink.vue';
import Category from '../Category/Ingredient/Index.vue';
import { Inertia } from '@inertiajs/inertia'

defineProps({
    ingredient_categories: Array
})

</script>

<template>
        <PaidMemberAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">プロフィール</h2>
        </template>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <div v-for="ingredient_category in ingredient_categories" :key="ingredient_category.id">
                        {{ ingredient_category.name }}
                        
                        <Category />
                    </div>


                </div>
            </div>
        </div>

        
    </PaidMemberAuthenticatedLayout>
</template>