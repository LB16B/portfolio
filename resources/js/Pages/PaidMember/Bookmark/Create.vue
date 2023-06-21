<script setup>
import PaidMemberAuthenticatedLayout from '@/Layouts/PaidMemberAuthenticatedLayout.vue';
import Like from '@/Components/Like.vue';
import { ref, onMounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue';
import { Inertia } from '@inertiajs/inertia'

defineProps({
    recipe: Object,
    bookmarks: Array,
    bookmarkCount: Number,
})

const storeBookmark = (button) => {
    Inertia.post('/paid_member/bookmark', button);
}

</script>

<template>
    いいね数 {{ bookmarkCount }}
    <div v-if="$page.props.auth.user.id != recipe.paid_member_id">
        <button @click="storeLike" class="mr-4">いいねする</button>
    </div>
    <div else>

    </div>
</template>