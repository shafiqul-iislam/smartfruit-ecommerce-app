<script setup>
import { ref } from "vue";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const products = ref([
    { id: 1, name: "Product A", price: 29.99, category: "Category 1", image: "https://via.placeholder.com/50" },
    { id: 2, name: "Product B", price: 49.99, category: "Category 2", image: "https://via.placeholder.com/50" },
    { id: 3, name: "Product C", price: 19.99, category: "Category 1", image: "https://via.placeholder.com/50" },
]);

function editProduct(id) {
    alert("Edit product " + id);
}

function deleteProduct(id) {
    if (confirm("Are you sure you want to delete this product?")) {
        products.value = products.value.filter(p => p.id !== id);
    }
}
</script>

<template>

    <Head title="Products" />

    <AuthenticatedLayout>
        <main class="p-6">
            <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold mb-4">All Products</h2>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price</th>
                            <th
                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr v-for="(product, index) in products" :key="product.id">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ index + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img :src="product.image" alt="" class="w-12 h-12 rounded-full object-cover" />
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ product.name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ product.category }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">${{ product.price.toFixed(2)
                                }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button @click="editProduct(product.id)" class="text-blue-600 hover:text-blue-900 mr-2">
                                    Edit
                                </button>
                                <button @click="deleteProduct(product.id)" class="text-red-600 hover:text-red-900">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr v-if="products.length === 0">
                            <td colspan="6" class="text-center text-gray-500 py-4">No products found.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </AuthenticatedLayout>
</template>
