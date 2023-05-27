<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavLink from '@/Components/NavLink.vue';
import { Inertia } from '@inertiajs/inertia'


defineProps({
    ingredient_categories: Array,
})
</script>

<template>
        <PaidMemberAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">カテゴリー一覧</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">カテゴリーからレシピを探す</h1>
                    </div>
                    <div class="flex flex-wrap -m-2">
                        <div 
                            v-for="ingredient_category in ingredient_categories" 
                            :key="ingredient_category.id" 
                            class="p-2">
                                <div
                                    class="h-full flex items-center border-gray-200 border p-4 rounded-lg ">
                                        <Link
                                        :href="route('paid_member.ingredient_category.show', { ingredient_category: ingredient_category.id })"
                                        class="flex-grow">
                                            <h2 class="text-gray-900 title-font font-medium">{{ ingredient_category.name }}</h2>
                                        </Link>
                                </div>

                        </div>

                    </div>
                </div>
            </section>

            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">レシピ一覧</h1>
                    </div>
                    <div class="flex flex-wrap -m-2">
                        <div 
                            v-for="ingredient_category in ingredient_categories" 
                            :key="ingredient_category.id" 
                            class="p-2">
                            
                            <ul>
                                <li v-for="recipe in ingredient_category.recipes" :key="recipe.id">
                                    <h2 class="text-gray-900 title-font font-medium">{{ recipe.title }}</h2>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </section>



                </div>
            </div>
        </div>

        
    </PaidMemberAuthenticatedLayout>
</template>
