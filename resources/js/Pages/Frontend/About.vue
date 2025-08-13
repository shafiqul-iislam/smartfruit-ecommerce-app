<script setup>
import { Head } from '@inertiajs/vue3';
import Footer from '@/Components/Frontend/Footer.vue';
import Navbar from '@/Components/Frontend/Navbar.vue';
</script>

<template>

    <Head title="About" />

    <Navbar />

    <section class="bg-gray-50">
        <!-- Company Story -->
        <div class="max-w-6xl mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="https://via.placeholder.com/500x350" alt="Our Story" class="rounded-lg shadow-lg" />
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Story</h2>
                <p class="text-gray-600 mb-4">
                    We started our journey with a passion for delivering the freshest fruits and vegetables to our
                    customers.
                    Over the years, we’ve grown into a trusted source of high-quality, locally sourced products.
                </p>
                <p class="text-gray-600">
                    Our goal is to make healthy living accessible to everyone, while supporting local farmers and
                    sustainable
                    agriculture.
                </p>
            </div>
        </div>

        <!-- Mission & Values -->
        <div class="bg-white py-16">
            <div class="max-w-5xl mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Our Mission & Values</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition">
                        <h3 class="text-xl font-semibold text-indigo-600 mb-3">Quality</h3>
                        <p class="text-gray-600">We source only the best produce to ensure freshness and taste in every
                            bite.</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition">
                        <h3 class="text-xl font-semibold text-indigo-600 mb-3">Sustainability</h3>
                        <p class="text-gray-600">We support eco-friendly farming and work to reduce environmental
                            impact.</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition">
                        <h3 class="text-xl font-semibold text-indigo-600 mb-3">Community</h3>
                        <p class="text-gray-600">We collaborate with local farmers and give back to our community.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet Our Team -->
        <div class="max-w-6xl mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Meet Our Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member"
                        class="w-24 h-24 mx-auto rounded-full mb-4" />
                    <h3 class="text-lg font-semibold text-gray-800">John Doe</h3>
                    <p class="text-sm text-gray-600">Founder & CEO</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member"
                        class="w-24 h-24 mx-auto rounded-full mb-4" />
                    <h3 class="text-lg font-semibold text-gray-800">Jane Smith</h3>
                    <p class="text-sm text-gray-600">Operations Manager</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member"
                        class="w-24 h-24 mx-auto rounded-full mb-4" />
                    <h3 class="text-lg font-semibold text-gray-800">Michael Brown</h3>
                    <p class="text-sm text-gray-600">Head of Marketing</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member"
                        class="w-24 h-24 mx-auto rounded-full mb-4" />
                    <h3 class="text-lg font-semibold text-gray-800">Emily Davis</h3>
                    <p class="text-sm text-gray-600">Customer Support Lead</p>
                </div>
            </div>
        </div>
    </section>

    <Footer />
</template>
