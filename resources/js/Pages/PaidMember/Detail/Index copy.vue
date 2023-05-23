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




                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <section class="text-gray-600 body-font">
                        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                            <div v-for="paid_member_detail in paid_member_details" :key="paid_member_detail.id">
                                <div v-if="paid_member_detail.paid_member_id === $page.props.auth.user.id">
                                            <Link :href="route('paid_member.detail.edit', { detail: paid_member_detail.id })" class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                                                <img :src="'/paid_member_profile_images/' + paid_member_detail.filename">
                                            </Link>

                                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                                        ID : <Link  class="text-blue-400" :href="route('paid_member.detail.edit', { detail: paid_member_detail.id })">
                                            {{ paid_member_detail.id }}
                                        </Link>
                                    </h1>                            
                                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"> paid_member_id : {{ paid_member_detail.paid_member_id }}</h1>                            
                                    <p class="mb-8 leading-relaxed">nick_name : {{ paid_member_detail.nick_name }}</p>
                                    <p class="mb-8 leading-relaxed">greeting : {{ paid_member_detail.greeting }}</p>
                                    <div class="flex justify-center">
                                        <Link as="button" :href="route('paid_member.detail.edit', { detail: paid_member_detail.id })" class="inline-flex text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg">編集</Link>
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
