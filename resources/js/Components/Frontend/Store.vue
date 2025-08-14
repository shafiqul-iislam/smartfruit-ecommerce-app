<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Text Side -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">
                        Fresh Exotic Fruits in Our Store
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Discover nature’s sweetest treasures with our selection of fresh exotic fruits, handpicked for
                        their vibrant colors, rich flavors, and nutritional goodness. From juicy tropical delights to
                        rare seasonal gems, every bite brings you closer to the taste of freshness. Perfect for
                        snacking, gifting, or adding a burst of flavor to your recipes — only the best makes it to our
                        store.
                    </p>
                    <div class="flex gap-4">
                        <Link href="/shop"
                            class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                        Buy Now
                        </Link>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="relative">
                    <img src="/storage/images/baner-1.png" alt="Fashion model"
                        class="rounded-xl shadow-lg w-full object-cover" />
                </div>

            </div>
        </div>
    </section>
</template>
