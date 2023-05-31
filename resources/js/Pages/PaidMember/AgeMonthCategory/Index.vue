<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavLink from '@/Components/NavLink.vue';
import { Inertia } from '@inertiajs/inertia'


defineProps({
    age_month_categories: Array,
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
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">月齢からレシピを探す</h1>
                    </div>
                    <div class="flex flex-wrap -m-2">
                        <div 
                            v-for="age_month_category in age_month_categories" 
                            :key="age_month_category.id" 
                            class="p-2">
                                <div
                                    class="h-full flex items-center border-gray-200 border p-4 rounded-lg ">
                                        <Link
                                        :href="route('paid_member.age_month_category.show', { age_month_category: age_month_category.id })"
                                        class="flex-grow">
                                            <h2 class="text-gray-900 title-font font-medium">{{ age_month_category.name }}</h2>
                                        </Link>
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