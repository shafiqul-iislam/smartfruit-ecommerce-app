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
import { onMounted, onUnmounted, ref } from 'vue';
import { ArrowUpIcon } from '@heroicons/vue/24/solid'; // Heroicon import


const showGoTop = ref(false);

const handleScroll = () => {
    showGoTop.value = window.scrollY > 300;
};

const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
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


    <!-- Go to Top Button -->
    <button v-show="showGoTop" @click="scrollToTop"
        class="fixed bottom-6 right-6 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition duration-300"
        title="Go to Top">
        <ArrowUpIcon class="w-6 h-6" />
    </button>
</template>