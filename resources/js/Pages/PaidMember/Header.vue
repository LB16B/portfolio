<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
// import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Head, Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <!-- <Head title="Yum-Yum For baby" /> -->

    <header class="text-gray-600 body-fon bg-rose-50">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0 invisible md:visible">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-pink-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">Tailblocks</span>
                </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900">First Link</a>
                <NavLink :href="route('paid_member.recipe.index')" :active="route().current('paid_member.recipe.index')">
                    レシピ               
                </NavLink>
                <!-- <NavLink :href="route('paid_member.category.index')" :active="route().current('paid_member.category.index')">
                    カテゴリー                
                </NavLink> -->
                <NavLink :href="route('paid_member.detail.index')" :active="route().current('paid_member.detail.index')">
                    プロフィール
                </NavLink>
                <NavLink :href="route('paid_member.profile.edit')" :active="route().current('paid_member.profile.edit')">
                    アカウント
                </NavLink>
            </nav>

            <div class="-mr-2 flex items-center sm:hidden">
                <button
                    @click="showingNavigationDropdown = !showingNavigationDropdown"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                >
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path
                            :class="{
                                hidden: showingNavigationDropdown,
                                'inline-flex': !showingNavigationDropdown,
                            }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                        <path
                            :class="{
                                hidden: !showingNavigationDropdown,
                                'inline-flex': showingNavigationDropdown,
                            }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>

                            <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('paid_member.dashboard')" :active="route().current('paid_member.dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <!-- <div class="px-4">
                            <div class="font-medium text-base text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div> -->

                        <div class="mt-3 space-y-1">
                            <!-- <ResponsiveNavLink :href="route('admin.profile.edit')"> Profile </ResponsiveNavLink> -->
                            <ResponsiveNavLink :href="route('admin.logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>

            <!-- <div v-if="canLogin">
                <Link v-if="$page.props.auth.user" :href="route('paid_member.dashboard')"
                    class="font-semibold inline-flex items-center bg-gray-100 border-0 py-1 px-3 text-gray-600 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
                    Dashboard
                </Link>   
                <template v-else>
                    <Link
                        :href="route('')"
                        class="font-semibold inline-flex items-center bg-pink-400 border-0 py-2 px-6 text-white focus:outline-none hover:bg-white hover:text-pink-400 rounded text-base mt-4 md:mt-0">
                        ログイン
                    </Link>
                    <a
                        :href="route('')"
                        class="ml-4 font-semibold inline-flex items-center bg-pink-400 border-0 py-2 px-6 text-white focus:outline-none hover:bg-white hover:text-pink-400 rounded text-base mt-4 md:mt-0">
                        会員登録
                    </a>
                </template>
            </div> -->
        </div>
    </header>
</template>