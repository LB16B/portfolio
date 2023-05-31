<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { ref, reactive  } from 'vue';
import { Head} from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia'

const form = reactive ({
        title: null,
        ingredient_category_id: null,
        cal: null,
        time: null,
        price: null,
        filename: null,
        file: null
})

const storeRecipe = () => {
    Inertia.post('/paid_member/recipe', form)
}
</script>

<template>
    <Head title="レシピ投稿" />

    <PaidMemberAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">レシピ投稿</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <section class="text-gray-600 body-font relative">
                    <form @submit.prevent="storeRecipe" enctype="multipart/form-data">
                        <div class="container px-5 py-8 mx-auto">
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">

                                    <div class="lg:max-w-lg lg:w-full md:w-1/2 mb-10 md:mb-0 p-2 ">
                                        <div class="relative">
                                            <!-- <img :src="'/paid_member_profile_images/' + props.paid_member_detail.filename" class="rounded-md"> -->
                                            <input type="text" v-model="form.filename">
                                        </div>
                                    </div>


                                    <div class="p-2 w-full">
                                        <div class="relative">
                                        <label for="filename" class="leading-7 text-sm text-gray-600">画像</label>
                                        <input @change="fileSelected" id="file" name="file"  type="file" @input="form.file = $event.target.files[0]" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>

                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="title" class="leading-7 text-sm text-gray-600">タイトル</label>
                                            <input type="text" id="title" name="title" v-model="form.title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                

                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="ingredient_category_id" class="leading-7 text-sm text-gray-600">カテゴリーID</label>
                                            <input type="number" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>

                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="cal" class="leading-7 text-sm text-gray-600">カロリー</label>
                                            <input type="number" id="cal" name="cal" v-model="form.cal" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>

                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="time" class="leading-7 text-sm text-gray-600">所要時間</label>
                                            <input type="number" id="time" name="time" v-model="form.time" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>

                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="price" class="leading-7 text-sm text-gray-600">金額</label>
                                            <input type="number" id="price" name="price" v-model="form.price" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="filename" class="leading-7 text-sm text-gray-600">画像</label>
                                            <input type="number" id="filename" name="filename" v-model="form.filename" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div> -->
                                    
                                    <div class="p-2 w-full">
                                        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">投稿する</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
                    
                </div>
            </div>
        </div>

    </PaidMemberAuthenticatedLayout>
</template>