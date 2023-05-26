<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { Head} from '@inertiajs/vue3';
import Recipe from './Recipe/Index.vue';

defineProps({
    ingredientCategory: Object,
    recipe3: Array
})

// console.log(recipe);

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
                    
                    <h1 class="flex justify-center py-8">{{ ingredientCategory.name }}のレシピ</h1>
                    <Recipe :recipe3="recipe3" />

                </div>
            </div>
        </div>

    </PaidMemberAuthenticatedLayout>
</template>