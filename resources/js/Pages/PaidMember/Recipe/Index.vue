<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavLink from '@/Components/NavLink.vue';
import { Inertia } from '@inertiajs/inertia'

defineProps({
    recipes: Array,
})

const deleteRecipe = id => {
    Inertia.delete(route('paid_member.recipe.destroy', { recipe: id }), {
        onBefore: () => confirm('本当に削除しますか?')
    })
}
</script>

<template>
        <PaidMemberAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">投稿済みレシピ一覧</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-20">
                            <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">投稿済みレシピ一覧</h1>
                        </div>
                        <div class="flex flex-wrap -m-4">

                            <div v-for="recipe in recipes" :key="recipe.id" class="p-4 lg:w-1/2">

                                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                        <img :src="'/recipe_images/' + recipe.filename" alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4">
                                        <div class="flex-grow sm:pl-8">
                                            <h2 class="title-font font-medium text-lg text-gray-900">{{ recipe.title }}</h2>
                                            <h3 class="text-gray-500 mb-3">aaaa</h3>
                                            <p class="mb-4">{{ recipe.cal }}cal / {{ recipe.time }}分 / {{ recipe.price }} 円</p>
                                            <span class="inline-flex">
                                                <Link :href="route('paid_member.recipe.show', { recipe: recipe.id })" class="mr-4">詳細</Link>
                                                <Link :href="route('paid_member.recipe.edit', { recipe: recipe.id })" class="mr-4">編集</Link>
                                                <button @click="deleteRecipe(recipe.id)" class="mr-4">削除</button>
                                            </span>
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