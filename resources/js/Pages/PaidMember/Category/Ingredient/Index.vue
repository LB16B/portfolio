<script setup>
import { Inertia } from '@inertiajs/inertia'

defineProps({
    ingredient_categories: Array
})

</script>

<template>

                    <div v-for="ingredient_category in ingredient_categories" :key="ingredient_category.id">
                        {{ ingredient_category.name }}
                    
                    </div>

</template>