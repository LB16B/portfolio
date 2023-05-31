<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { ref, onMounted } from 'vue';
import { Head} from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue'

defineProps({
    ingredientCategory: Object,
    recipes: {
        type: Object,
        default: () => null,
    },
})


</script>

<template>
    <Head title="カテゴリー詳細" />

    <PaidMemberAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">プロフィール編集</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="text-center ">
                        <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mt-20">{{ ingredientCategory.name }}のレシピ一覧</h1>
                    </div>

                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="flex flex-wrap -m-4">

                                    <div v-for="recipe in recipes.data" :key="recipe.id"
                                        class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                        <a class="block relative h-48 rounded overflow-hidden">
                                            <img :src="'/recipe_images/' + recipe.filename" class="rounded-md w-full h-full">
                                        </a>
                                        <div class="mt-4">
                                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                            <h2 class="text-gray-900 title-font text-lg font-medium">{{ recipe.title }}</h2>
                                            <p class="mt-1">{{ recipe.cal }}cal / {{ recipe.time }}分 / {{ recipe.price }} 円</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </section>

                    <Pagination class="mt-6" :links="recipes.links"></Pagination>
                    
                </div>
            </div>
        </div>

    </PaidMemberAuthenticatedLayout>
</template>