<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { ref, reactive, onMounted  } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia'
import { defineProps } from 'vue'



const paid_member_id = ref('');

const form = reactive ({
        title: null,
        paid_member_id: null,
        ingredient_category_id: null,
        age_month_category_id: null,
        cal: null,
        time: null,
        price: null,
        filename: null,
        file: null,
        manual1: null,
        manual2: null,
        manual3: null,
        manual4: null,
        manual5: null,
        Ingredient1: null,
        Ingredient2: null,
        Ingredient3: null,
        Ingredient4: null,
        Ingredient5: null,
        Ingredient6: null,
        Ingredient7: null,
        Ingredient8: null,
        amount1: null,
        amount2: null,
        amount3: null,
        amount4: null,
        amount5: null,
        amount6: null,
        amount7: null,
        amount8: null,
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

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <div v-if="url === ''">
                                                    <img src="/images/no_image.png">
                                                </div>
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
                                                <label for="ingredient_category_id" class="leading-7 text-sm text-gray-600">食材カテゴリー</label>
                                                    <div>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="1" >
                                                        <label for="ml-2 mr-4">主食 - ごはん</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="2" >
                                                        <label for="ml-2 mr-4">主食 - パン</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="3" >
                                                        <label for="ml-2 mr-4">主食 - 麺</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="4" >
                                                        <label for="ml-2 mr-4">おかず -野菜</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="5" >
                                                        <label for="ml-2 mr-4">おかず - 芋</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="6" >
                                                        <label for="ml-2 mr-4">おかず - 豆腐</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="7" >
                                                        <label for="ml-2 mr-4">おかず - 豆</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="8" >
                                                        <label for="ml-2 mr-4">おかず - 乳製品</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="9" >
                                                        <label for="ml-2 mr-4">おかず - 卵</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="10" >
                                                        <label for="ml-2 mr-4">おかず - 魚</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="11" >
                                                        <label for="ml-2 mr-4">おかず - 肉</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="12" >
                                                        <label for="ml-2 mr-4">その他 - 果物</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="13" >
                                                        <label for="ml-2 mr-4">その他 - スープ</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="14" >
                                                        <label for="ml-2 mr-4">その他 - デザート</label>
                                                        <input type="radio" id="ingredient_category_id" name="ingredient_category_id" v-model="form.ingredient_category_id" value="15" >
                                                        <label for="ml-2 mr-4">その他 - おやつ</label>
                                                    </div>
                                            </div>
                                        </div>

                                    

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="age_month_category_id" class="leading-7 text-sm text-gray-600">月齢カテゴリー</label>
                                                <div>
                                                    <input type="radio" id="age_month_category_id" name="age_month_category_id" v-model="form.age_month_category_id" value="1">
                                                    <label for="ml-2 mr-4">0 ~ 4ヶ月頃</label>
                                                    <input type="radio" id="age_month_category_id" name="age_month_category_id" v-model="form.age_month_category_id" value="2">
                                                    <label for="ml-2 mr-4">5 ~ 6ヶ月頃</label>
                                                    <input type="radio" id="age_month_category_id" name="age_month_category_id" v-model="form.age_month_category_id" value="3">
                                                    <label for="ml-2 mr-4">7 ~ 8ヶ月頃</label>
                                                    <input type="radio" id="age_month_category_id" name="age_month_category_id" v-model="form.age_month_category_id" value="4">
                                                    <label for="ml-2 mr-4">9 ~ 11ヶ月頃</label>
                                                    <input type="radio" id="age_month_category_id" name="age_month_category_id" v-model="form.age_month_category_id" value="5">
                                                    <label for="ml-2 mr-4">1 ~ 2歳頃</label>
                                                </div>
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
                                            <div class="relative">
                                                <label for="manual1" class="leading-7 text-sm text-gray-600">手順1</label>
                                                <input type="text" id="manual1" name="manual1" v-model="form.manual1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="manual2" class="leading-7 text-sm text-gray-600">手順2</label>
                                                <input type="text" id="manual2" name="manual2" v-model="form.manual2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="manual3" class="leading-7 text-sm text-gray-600">手順3</label>
                                                <input type="text" id="manual3" name="manual3" v-model="form.manual3" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="manual4" class="leading-7 text-sm text-gray-600">手順4</label>
                                                <input type="text" id="manual4" name="manual4" v-model="form.manual4" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="manual5" class="leading-7 text-sm text-gray-600">手順5</label>
                                                <input type="text" id="manual5" name="manual5" v-model="form.manual5" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="ingredient1" class="leading-7 text-sm text-gray-600">材料1</label>
                                                <input type="text" id="ingredient1" name="ingredient1" v-model="form.ingredient1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="ingredient2" class="leading-7 text-sm text-gray-600">材料2</label>
                                                <input type="text" id="ingredient2" name="ingredient2" v-model="form.ingredient2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="ingredient3" class="leading-7 text-sm text-gray-600">材料3</label>
                                                <input type="text" id="ingredient3" name="ingredient3" v-model="form.ingredient3" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="ingredient4" class="leading-7 text-sm text-gray-600">材料4</label>
                                                <input type="text" id="ingredient4" name="ingredient4" v-model="form.ingredient4" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="ingredient5" class="leading-7 text-sm text-gray-600">材料5</label>
                                                <input type="text" id="ingredient5" name="ingredient5" v-model="form.ingredient5" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="ingredient6" class="leading-7 text-sm text-gray-600">材料6</label>
                                                <input type="text" id="ingredient6" name="ingredient6" v-model="form.ingredient6" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="ingredient7" class="leading-7 text-sm text-gray-600">材料7</label>
                                                <input type="text" id="ingredient7" name="ingredient7" v-model="form.ingredient7" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="ingredient8" class="leading-7 text-sm text-gray-600">材料8</label>
                                                <input type="text" id="ingredient8" name="ingredient8" v-model="form.ingredient8" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="amount1" class="leading-7 text-sm text-gray-600">容量1</label>
                                                <input type="text" id="amount1" name="amount1" v-model="form.amount1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="amount2" class="leading-7 text-sm text-gray-600">容量2</label>
                                                <input type="text" id="amount2" name="amount2" v-model="form.amount2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="amount3" class="leading-7 text-sm text-gray-600">容量3</label>
                                                <input type="text" id="amount3" name="amount3" v-model="form.amount3" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="amount4" class="leading-7 text-sm text-gray-600">容量4</label>
                                                <input type="text" id="amount4" name="amount4" v-model="form.amount4" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="amount5" class="leading-7 text-sm text-gray-600">容量5</label>
                                                <input type="text" id="amount5" name="amount5" v-model="form.amount5" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="amount6" class="leading-7 text-sm text-gray-600">容量6</label>
                                                <input type="text" id="amount6" name="amount6" v-model="form.amount6" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="amount7" class="leading-7 text-sm text-gray-600">容量7</label>
                                                <input type="text" id="amount7" name="amount7" v-model="form.amount7" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="amount8" class="leading-7 text-sm text-gray-600">容量8</label>
                                                <input type="text" id="amount8" name="amount8" v-model="form.amount8" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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