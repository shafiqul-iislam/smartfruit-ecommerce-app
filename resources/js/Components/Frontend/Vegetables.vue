<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Fresh Organic Vegetables</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Product Card 1 -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4 flex flex-col">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-100">
                        <img src="/storage/images/vegetable-item-1.jpg" alt="Tomato"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Tomato</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Fresh tomatoes are a great source of essential vitamins and minerals.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 120</span>
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
                        <img src="/storage/images/vegetable-item-2.jpg" alt="Cauliflower"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Cauliflower</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Fresh cauliflower is a nutritious and delicious vegetable.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 150</span>
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
                        <img src="/storage/images/vegetable-item-3.jpg" alt="Raw Banana"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Raw Banana</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Fresh bananas are a nutritious and best vegetable.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 80</span>
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
                        <img src="/storage/images/vegetable-item-4.jpg" alt="Green Chili"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Green Chili</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Fresh green chili is a nutritious and delicious vegetable.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 95</span>
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
                        <img src="/storage/images/vegetable-item-5.jpg" alt="Potato"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Potato</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Fresh potatoes are a nutritious and delicious vegetable.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 35</span>
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
                        <img src="/storage/images/vegetable-item-6.jpg" alt="Leek"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Leek</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Fresh leeks are a nutritious and delicious vegetable.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 95</span>
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
                        <img src="/storage/images/vegetable-item-1.jpg" alt="Indian Tomato"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Indian Tomato</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Fresh tomatoes are a great source of essential vitamins and minerals.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 95</span>
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
                        <img src="/storage/images/vegetable-item-2.jpg" alt="Green Beans"
                            class="h-full w-full object-cover object-center" />
                    </div>
                    <div class="mt-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-900">Green Beans</h3>
                        <p class="text-gray-500 text-sm mt-1 line-clamp-2">
                            Fresh green beans are a nutritious and delicious vegetable.
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-bold text-indigo-600">BDT 95</span>
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
            <Link href="/shop" class="bg-black text-white px-6 py-2 rounded-md hover:bg-gray-700 transition">View All</Link>
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
