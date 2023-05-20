<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
    mustVerifyEmail: Boolean,
    status: String,
});
</script>

<template>
    <Head title="Profile" />

    <AdminAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Profile</h2>
        </template>

        <div class="py-12 relative">
            <div class="w-3/4 right-12 sm:right-14 md:right-6 md:w-3/5 lg:right-2 lg:w-9/12 xl:right-8 xl:w-9/12 absolute ">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </div>

                <div class="p-4 mt-8 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div class="mb-20 mt-8 sm:p-8 bg-white shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AdminAuthenticatedLayout>
</template>