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
    <div v-for="ingredient_category in ingredient_categories" :key="ingredient_category.id">
        {{ ingredient_category.name }}
    </div>
</template>
