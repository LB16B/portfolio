<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
        <Link
            v-if="$page.props.auth.user"
            :href="route('paid_member.dashboard')"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
            >Dashboard</Link
        >

        <!-- <template v-else> -->
        <template v-else>
            <Link
                :href="route('paid_member.login')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Log in</Link
            >

            <Link
                v-if="canRegister"
                :href="route('paid_member.register')"
                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Register</Link
            >
        </template>
    </div>
</template>