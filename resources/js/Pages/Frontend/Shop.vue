<script setup>
import Footer from '@/Components/Frontend/Footer.vue';
import Navbar from '@/Components/Frontend/Navbar.vue';
import { Head } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

// Dummy categories
const categories = ["All", "Fruits", "Vegetables", "Organic"];

// Dummy products (replace with API data later)
const products = ref([
    { id: 1, name: "Apple", description: "Fresh and juicy", category: "Fruits", price: 120 },
    { id: 2, name: "Banana", description: "Tasty and sweet", category: "Fruits", price: 80 },
    { id: 3, name: "Carrot", description: "Healthy and nutritious", category: "Vegetables", price: 50 },
    { id: 4, name: "Broccoli", description: "Green and fresh", category: "Vegetables", price: 70 },
    { id: 5, name: "Organic Mango", description: "Organic and fresh", category: "Organic", price: 200 },
    { id: 6, name: "Organic Tomato", description: "Organic and fresh", category: "Organic", price: 90 },
]);

// // Selected category
const selectedCategory = ref("All");

// Computed filtered products
const filteredProducts = computed(() => {
    if (selectedCategory.value === "All") {
        return products.value;
    }
    return products.value.filter(
        (p) => p.category === selectedCategory.value
    );
});

// Function to change category
function filterByCategory(category) {
    selectedCategory.value = category;
}

</script>



<template>

    <Head title="Shop" />
    <Navbar />

    <section class="py-10 bg-gray-50">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Shop</h2>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <!-- Categories -->
                <div class="bg-white shadow rounded-lg p-5 mb-8">
                    <h3 class="text-lg font-semibold mb-4">Categories</h3>
                    <ul class="space-y-1 text-gray-700">
                        <li v-for="category in categories" :key="category" @click="filterByCategory(category)"
                            class="cursor-pointer px-2 py-1" :class="[selectedCategory == category ? 'bg-gray-200 rounded-md px-2 py-1' : '']">{{ category }}</li>
                    </ul>
                </div>

                <!-- Featured Products -->
                <div class="bg-white shadow rounded-lg p-5">
                    <h3 class="text-lg font-semibold mb-4">Featured Products</h3>
                    <div class="space-y-4">
                        <!-- Item -->
                        <div class="flex items-center space-x-4">
                            <img src="/storage/images/fruite-item-6.jpg" class="w-16 h-16 rounded object-cover"
                                alt="Apple" />
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Fresh Apple</h4>
                                <div class="flex text-yellow-400 text-xs">
                                    ★★★★☆
                                </div>
                                <p class="text-green-600 text-sm">৳350</p>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="flex items-center space-x-4">
                            <img src="/storage/images/vegetable-item-1.jpg" class="w-16 h-16 rounded object-cover"
                                alt="Tomato" />
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Organic Tomato</h4>
                                <div class="flex text-yellow-400 text-xs">
                                    ★★★★★
                                </div>
                                <p class="text-green-600 text-sm">৳120</p>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="flex items-center space-x-4">
                            <img src="/storage/images/featur-2.jpg" class="w-16 h-16 rounded object-cover"
                                alt="Strawberry" />
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Strawberry</h4>
                                <div class="flex text-yellow-400 text-xs">
                                    ★★★☆☆
                                </div>
                                <p class="text-green-600 text-sm">৳199</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Products -->
            <main class="lg:col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card -->
                    <div v-for="product in filteredProducts" :key="product.id"
                        class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                        <img src="/storage/images/featur-1.jpg" alt="Product" class="w-full h-48 object-cover" />
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ product.name }}</h3>
                            <p class="text-gray-600 text-sm mb-2">{{ product.description }}</p>
                            <p class="text-green-600 font-bold mb-4">৳{{ product.price }}</p>
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
    <Footer />
</template>