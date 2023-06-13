<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { ref, onMounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';
import { Inertia } from '@inertiajs/inertia'

defineProps({
    recipe: Object,
    manual: Object
})


</script>

<template>
    <PaidMemberAuthenticatedLayout>
        <Head title="" />

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <section class="text-gray-600 body-font overflow-hidden">
                    <div class="container px-5 py-24 mx-auto">
                    <div class="lg:w-4/5 mx-auto flex flex-wrap">    
                            <img :src="'/recipe_images/' + recipe.filename" class="lg:w-1/2 w-full lg:h-auto  h-100 object-cover object-center rounded">
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ recipe.age_month_category.name }}</h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ recipe.title }}</h1>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ recipe.paid_member_id }}</h1>
                        <div class="flex mb-4">
                            <span class="flex items-center">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-pink-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <span class="text-gray-600 ml-3">4件のレビュー</span>
                            </span>
                            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                            </a>
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                            </a>
                            </span>
                        </div>
                        <div class="p-2 w-full">
                            <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                                <div class="flex-grow">
                                    <p class="text-gray-900 title-font font-medium">カロリー {{ recipe.cal }}cal / 所要時間 {{ recipe.time }}分 / 費用 {{ recipe.price }}円</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">

                        </div>
                        <div class="flex">
                            <!-- <span class="title-font font-medium text-2xl text-gray-900">$58.00</span> -->
                            <button class="flex ml-auto text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded">ブックマーク</button>
                            <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                            </svg>
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                    </section>


                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto flex flex-wrap">
                            <div class="flex flex-wrap -m-4">
                                <div class="p-4 lg:w-1/2 md:w-full">
                                <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                                    <div class="flex-grow">
                                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">食材/容量</h2>
                                            <div class="flex flex-row">
                                                <div class="mr-60 md:mr-80">
                                                    <div>{{ recipe.ingredient.ingredient1 }}</div>
                                                    <div>{{ recipe.ingredient.ingredient2 }}</div>
                                                    <div>{{ recipe.ingredient.ingredient3 }}</div>
                                                    <div>{{ recipe.ingredient.ingredient4 }}</div>
                                                    <div>{{ recipe.ingredient.ingredient5 }}</div>
                                                    <div>{{ recipe.ingredient.ingredient6 }}</div>
                                                    <div>{{ recipe.ingredient.ingredient7 }}</div>
                                                    <div>{{ recipe.ingredient.ingredient8 }}</div>
                                                </div>
                                                <div class="md:ml-48 lg:ml-10">
                                                    <div>{{ recipe.ingredient.amount1 }}</div>
                                                    <div>{{ recipe.ingredient.amount2 }}</div>
                                                    <div>{{ recipe.ingredient.amount3 }}</div>
                                                    <div>{{ recipe.ingredient.amount4 }}</div>
                                                    <div>{{ recipe.ingredient.amount5 }}</div>
                                                    <div>{{ recipe.ingredient.amount6 }}</div>
                                                    <div>{{ recipe.ingredient.amount7 }}</div>
                                                    <div>{{ recipe.ingredient.amount8 }}</div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                </div>
                                <div class="p-4 lg:w-1/2 md:w-full">
                                <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                                    <div class="flex-grow">
                                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">調理手順</h2>
                                        <p class="leading-relaxed text-base">(1) {{ recipe.manual.manual1 }}</p>
                                        <p class="leading-relaxed text-base">(2) {{ recipe.manual.manual2 }}</p>
                                        <p class="leading-relaxed text-base">(3) {{ recipe.manual.manual3 }}</p>
                                        <p class="leading-relaxed text-base">(4) {{ recipe.manual.manual4 }}</p>
                                        <p class="leading-relaxed text-base">(5) {{ recipe.manual.manual5 }}</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>

    </PaidMemberAuthenticatedLayout>
</template>