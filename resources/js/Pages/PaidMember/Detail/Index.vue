<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavLink from '@/Components/NavLink.vue';
import Header from '../Header.vue';
import { Inertia } from '@inertiajs/inertia'

defineProps({
    paid_member_details: Object
})

</script>

<template>
    <Head title="プロフィール" />

    <PaidMemberAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">プロフィール</h2>
        </template>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">    
                    
                        <section class="text-gray-600 body-font relative flex justify-center">
                            <div class="container px-5 py-8 mx-auto ">

                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">
                                    <div v-for="paid_member_detail in paid_member_details" :key="paid_member_detail.id">
                                        <div v-if="paid_member_detail.paid_member_id === $page.props.auth.user.id">

                                        <div class="lg:max-w-lg lg:w-full mb-10 md:mb-0 p-2 ">
                                            <div v-if="paid_member_detail.filename === ''" class="relative">
                                                <img src="/images/no_image.png" class="rounded-md">
                                            </div>
                                            <div v-else class="relative">
                                                <img :src="'/paid_member_profile_images/' + paid_member_detail.filename" class="rounded-md">
                                            </div>
                                        </div>

                                            <div class="p-2 w-full">
                                                <div class="relative">
                                                    <label class="leading-7 text-sm text-gray-600">ニックネーム</label>
                                                    <p class="w-full  bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        {{ paid_member_detail.nick_name }}
                                                    </p>
                                                </div>
                                            </div>

                                                <div class="p-2 w-full">
                                                    <div class="relative">
                                                        <label for="greeting" class="leading-7 text-sm text-gray-600">挨拶</label>
                                                        <div class="w-full  bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
                                                            {{ paid_member_detail.greeting }}
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            
                                            <div class="flex justify-center">
                                                <Link as="button" :href="route('paid_member.detail.edit', { detail: paid_member_detail.id })" class="inline-flex text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg">編集</Link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </PaidMemberAuthenticatedLayout>
</template>