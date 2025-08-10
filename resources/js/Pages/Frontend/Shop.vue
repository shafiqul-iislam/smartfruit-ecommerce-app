<script setup>
import Footer from '@/Components/Frontend/Footer.vue';
</script>


<template>
    <section class="py-10 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <!-- Categories -->
                <div class="bg-white shadow rounded-lg p-5 mb-8">
                    <h3 class="text-lg font-semibold mb-4">Categories</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li><a href="#" class="hover:text-green-600">All</a></li>
                        <li><a href="#" class="hover:text-green-600">Fruits</a></li>
                        <li><a href="#" class="hover:text-green-600">Vegetables</a></li>
                        <li><a href="#" class="hover:text-green-600">Organic</a></li>
                        <li><a href="#" class="hover:text-green-600">Fresh Picks</a></li>
                    </ul>
                </div>

                <!-- Featured Products -->
                <div class="bg-white shadow rounded-lg p-5">
                    <h3 class="text-lg font-semibold mb-4">Featured Products</h3>
                    <div class="space-y-4">
                        <!-- Item -->
                        <div class="flex items-center space-x-4">
                            <img src="/storage/images/apple.jpg" class="w-16 h-16 rounded object-cover" alt="Apple" />
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Fresh Apple</h4>
                                <div class="flex text-yellow-400 text-xs">
                                    ★★★★☆
                                </div>
                                <p class="text-green-600 text-sm">$4.99</p>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="flex items-center space-x-4">
                            <img src="/storage/images/tomato.jpg" class="w-16 h-16 rounded object-cover" alt="Tomato" />
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Organic Tomato</h4>
                                <div class="flex text-yellow-400 text-xs">
                                    ★★★★★
                                </div>
                                <p class="text-green-600 text-sm">$2.49</p>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="flex items-center space-x-4">
                            <img src="/storage/images/carrot.jpg" class="w-16 h-16 rounded object-cover" alt="Carrot" />
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Fresh Carrot</h4>
                                <div class="flex text-yellow-400 text-xs">
                                    ★★★☆☆
                                </div>
                                <p class="text-green-600 text-sm">$1.99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Products -->
            <main class="lg:col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card -->
                    <div v-for="i in 9" :key="i"
                        class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                        <img src="/storage/images/fruit-sample.jpg" alt="Product" class="w-full h-48 object-cover" />
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">Fresh Fruit {{ i }}</h3>
                            <p class="text-gray-600 text-sm mb-2">Delicious and organic</p>
                            <p class="text-green-600 font-bold mb-4">$3.99</p>
                            <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 w-full">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-8">
                    <nav class="inline-flex items-center space-x-2">
                        <a href="#" class="px-3 py-1 bg-white border rounded hover:bg-green-50">1</a>
                        <a href="#" class="px-3 py-1 bg-white border rounded hover:bg-green-50">2</a>
                        <a href="#" class="px-3 py-1 bg-white border rounded hover:bg-green-50">3</a>
                        <a href="#" class="px-3 py-1 bg-white border rounded hover:bg-green-50">&raquo;</a>
                    </nav>
                </div>
            </main>

        </div>
    </section>
</template>

<Footer />