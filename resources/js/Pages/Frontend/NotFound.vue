<template>
    <section class="flex flex-col items-center justify-center min-h-screen bg-gray-100 px-4">
        <h1 class="text-9xl font-extrabold text-indigo-600 mb-6">404</h1>
        <p class="text-2xl md:text-3xl font-semibold mb-4 text-gray-700">Oops! Page Not Found.</p>
        <p class="mb-8 text-gray-600 max-w-md text-center">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        <router-link to="/" class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            Go Back Home
        </router-link>
    </section>
</template>

<script setup>
// No extra logic needed for static 404 page
</script>
