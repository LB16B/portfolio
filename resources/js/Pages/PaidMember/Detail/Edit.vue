<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { Head, router, useForm} from '@inertiajs/vue3';

const props = defineProps({
    paid_member_detail: Object
})


const form = useForm({
    id: props.paid_member_detail.id,
    paid_member_id: props.paid_member_detail.paid_member_id,
    nick_name: props.paid_member_detail.nick_name,
    greeting: props.paid_member_detail.greeting,
    filename: props.paid_member_detail.filename,
    file: null
})



const updatePaidMemberDetail = id => {
    router.post(route('paid_member.detail.update', {detail: id}), {
        _method: 'put',
        paid_member_id: form.paid_member_id,
        nick_name: form.nick_name,
        greeting: form.greeting,
        file: form.file,
    })
}


</script>

<template>
    <Head title="プロフィール編集" />

    <PaidMemberAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">プロフィール編集</h2>
        </template>
<!--  -->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section class="text-gray-600 body-font relative flex justify-center">
                            <form @submit.prevent="updatePaidMemberDetail(form.id)"  enctype="multipart/form-data">
                                <div class="container px-5 py-8 mx-auto ">


                                    <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                        <div class="flex flex-wrap -m-2">
                                            <div class="lg:max-w-lg lg:w-full md:w-1/2 mb-10 md:mb-0 p-2 ">
                                                <div class="relative">
                                                    <img :src="'/paid_member_profile_images/' + props.paid_member_detail.filename" class="rounded-md">
                                                    <input type="hidden" v-model="form.filename">
                                                </div>
                                            </div>
                                            <div class="p-2 w-full">
                                                <div class="relative">
                                                <label for="paid_member_id" class="leading-7 text-sm text-gray-600">paid_member_id</label>
                                                <input type="number" id="paid_member_id" name="paid_member_id" v-model="form.paid_member_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                            </div>
                                            <div class="p-2 w-full">
                                                <div class="relative">
                                                <label for="nick_name" class="leading-7 text-sm text-gray-600">ニックネーム</label>
                                                <input type="text" id="nick_name" name="nick_name"  v-model="form.nick_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
                                                <label for="greeting" class="leading-7 text-sm text-gray-600">挨拶</label>
                                                <textarea id="greeting" name="greeting" v-model="form.greeting" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                                </div>
                                            </div>

                                            <div class="p-2 w-full">
                                                <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新する</button>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        
    </PaidMemberAuthenticatedLayout>
</template>
