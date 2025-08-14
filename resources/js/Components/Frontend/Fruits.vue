<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Fresh Fruits</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-100">
                        <img src="/storage/images/best-product-1.jpg" alt="Orange"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Orange</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Very Fresh Oranges & Taste Is Very Good. Italian Oranges.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 350</span>
                            <button
                                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition text-sm font-semibold">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-100">
                        <img src="/storage/images/best-product-2.jpg" alt="Banana"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Grapes</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Very Fresh Grapes & Taste Is Very Good. Australian Grapes.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 250</span>
                            <button
                                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition text-sm font-semibold">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-100">
                        <img src="/storage/images/fruite-item-3.jpg" alt="Banana"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Banana</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Very Fresh Banana & Taste Is Very Good. Bangladeshi Banana.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 120 Dozen</span>
                            <button
                                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition text-sm font-semibold">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-100">
                        <img src="/storage/images/best-product-4.jpg" alt="Passion Fruit"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Passion Fruit</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Very Fresh Passion Fruit & Taste Is Very Good. Australian Passion Fruit.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 395</span>
                            <button
                                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition text-sm font-semibold">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-100">
                        <img src="/storage/images/best-product-5.jpg" alt="Grapes"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Grapes</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Very Fresh Grapes & Taste Is Very Good. Argentine Grapes.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 450</span>
                            <button
                                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition text-sm font-semibold">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-100">
                        <img src="/storage/images/best-product-6.jpg" alt="Apple"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Apple</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Very Fresh Apple & Taste Is Very Good. Australian Apple.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 360</span>
                            <button
                                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition text-sm font-semibold">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 7 -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-100">
                        <img src="/storage/images/best-product-4.jpg" alt="Pomegranate"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Pomegranate</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Very Fresh Pomegranate & Taste Is Very Good. Australian Pomegranate.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">$95</span>
                            <button
                                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition text-sm font-semibold">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 8 -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-100">
                        <img src="/storage/images/best-product-1.jpg" alt="Orange"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Orange</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Very Fresh Oranges & Taste Is Very Good. Russian Orange.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">$95</span>
                            <button
                                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition text-sm font-semibold">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex justify-center mt-12">
            <Link href="/shop" class="bg-black text-white px-6 py-2 rounded-md hover:bg-gray-700 transition">View All
            </Link>
        </div>

    </section>
</template>

<style>
/* Aspect ratio helper */
.aspect-w-1 {
    position: relative;
    padding-bottom: 100%;
}

.aspect-h-1 {
    height: 0;
}

.aspect-w-1>img {
    position: absolute;
    top: 0;
    left: 0;
}
</style>
