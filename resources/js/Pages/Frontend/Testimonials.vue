<script setup>
import { Head } from '@inertiajs/vue3';
import Testimonials from '@/Components/Frontend/Testimonials.vue';
import Footer from '@/Components/Frontend/Footer.vue';
import Navbar from '@/Components/Frontend/Navbar.vue';
</script>


<template>

    <Head title="Testimonials" />

    <Navbar />
    <div class="py-16 bg-gray-50">
        <Testimonials />
    </div>

    <Footer />

</template>