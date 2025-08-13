<script setup>
import { Link } from '@inertiajs/vue3';

const imageUrl = '/storage/images/hero-img-2.jpg';
</script>

<template>
    <section :style="{
        backgroundImage: `url(${imageUrl})`
    }" class="relative bg-cover bg-center bg-no-repeat h-[90vh] flex items-center justify-center">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">100% Organic Fruits & Vegetables</h1>
            <p class="text-lg md:text-xl mb-6 max-w-xl mx-auto">
                Discover a world of fresh, healthy fruits and vegetables that nourish your body and soul.
            </p>
            <div class="flex justify-center gap-4">
                <Link href="/shop"
                    class="bg-white text-black px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                    Shop Now
                </Link>
                <Link href="/about-us"
                    class="bg-transparent border border-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-black transition">
                    Learn More
                </Link>
            </div>
        </div>
    </section>
</template>
