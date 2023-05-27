<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Head, Link } from '@inertiajs/vue3';
import Header from '../Pages/PaidMember/Header.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <Header/>

    <!-- Page Content -->
    <main>
        <slot />
    </main>
    
</template>
