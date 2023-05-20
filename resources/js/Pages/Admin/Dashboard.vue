<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AdminAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        

        <div class="py-12">
            <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
            <div class="lg:w-3/4 lg:right-4 absolute right-4 mx-auto max-w-7xl md:w-2/3 md:right-4 w-11/12 xl:w-3/5 xl:left-32">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're Admin logged in!</div>
                </div>
            </div>
        </div>
    </AdminAuthenticatedLayout>
</template>
