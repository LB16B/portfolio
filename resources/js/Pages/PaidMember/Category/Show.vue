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
                    

                    <div
                        class="h-full flex items-center border-gray-200 border p-4 rounded-lg ">
                            <h2 class="text-gray-900 title-font font-medium">{{ ingredientCategory.name }}</h2>
                            
                    </div>

                    <div v-for="recipe in recipes.data" :key="recipe.id" class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <h2 class="text-gray-900 title-font font-medium">{{ recipe.title }}</h2>
                        <h2 class="text-gray-900 title-font font-medium">{{ recipe.cal }}</h2>
                        <h2 class="text-gray-900 title-font font-medium">{{ recipe.time }}</h2>
                        <h2 class="text-gray-900 title-font font-medium">{{ recipe.price }}</h2>
                    </div>

                <Pagination class="mt-6" :links="recipes.links"></Pagination>
                </div>
            </div>
        </div>

    </PaidMemberAuthenticatedLayout>
</template>