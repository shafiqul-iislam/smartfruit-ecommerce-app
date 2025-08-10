<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '@/Components/Frontend/Navbar.vue';
import Hero from '@/Components/Frontend/Hero.vue';
import Support from '@/Components/Frontend/Support.vue';
import Fruits from '@/Components/Frontend/Fruits.vue';
import Vegetables from '@/Components/Frontend/Vegetables.vue';
import Store from '@/Components/Frontend/Store.vue';
import Testimonials from '@/Components/Frontend/Testimonials.vue';
import Footer from '@/Components/Frontend/Footer.vue';
</script>


<template>

    <Head title="Home" />
    <Navbar />
    <Hero />
    <Support />
    <Fruits />
    <Vegetables />
    <Store />
    <Testimonials />
    <Footer />
</template>