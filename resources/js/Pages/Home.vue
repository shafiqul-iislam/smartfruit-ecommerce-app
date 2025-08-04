<script setup>
import { Link, Head } from '@inertiajs/vue3';
</script>


<template>

    <Head title="Home" />
    <div class="text-center py-10">
        <h1 class="text-3xl font-bold text-blue-600">Welcome to Inertia + Vue 3 + Laravel 11</h1>
        <Link href="/shop" class="text-blue-600 hover:underline">Shop Page</Link>
    </div>
</template>