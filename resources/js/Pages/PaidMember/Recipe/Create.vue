<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { ref, reactive  } from 'vue';
import { Head} from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia'

const form = reactive ({
        title: null,
        ingredient_category_id: null,
        age_month_category_id: null,
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

                <section id="vue" class="text-gray-600 body-font relative">
                    <form @submit.prevent="storeRecipe" enctype="multipart/form-data">
                        <div class="container px-5 py-8 mx-auto">
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">

                                    <!-- <div>
                                        <div>
                                            <input type="file" name="avatar" ref="preview" v-on:change="show">
                                        </div>
                                        <div class="preview-box" v-if="url">
                                            <img class="image-preview" v-bind:src="url">
                                        </div>
                                    </div> -->


                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <di v-if="url === ''">
                                                <img src="/images/no_image.png">
                                            </di>
                                            <div v-else>
                                                <img class="image-preview" v-bind:src="url">
                                            </div>
                                            
                                            <label for="filename" class="leading-7 text-sm text-gray-600">画像</label>
                                            <input ref="preview" v-on:change="show" @change="fileSelected" id="file" name="file"  type="file" @input="form.file = $event.target.files[0]"
                                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
                                            <label for="ingredient_category_id" class="leading-7 text-sm text-gray-600">食材カテゴリーID</label>
                                            <input type="number" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                

                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="age_month_category_id" class="leading-7 text-sm text-gray-600">月齢カテゴリーID</label>
                                            <input type="number" id="age_month_category_id" name="age_month_category_id" v-model="form.age_month_category_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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

<script>
export default {
    name: "ProfileImagePreviewComponent",

    data() {
        return {
            url:""
        }
    },
    methods: {
        show() {
            const file = this.$refs.preview.files[0];
            this.url = URL.createObjectURL(file);
        }
    }
}
</script>