<script setup>
import { ref } from "vue";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Modal from "@/Components/Backend/Product/Modal.vue";

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

const isOpen = ref(false);

const openModal = () => {
    isOpen.value = true;
};

const closeModal = () => {
    isOpen.value = false;
};
</script>

<template>

    <Head title="Products" />

    <AuthenticatedLayout>
        <main class="p-6">
            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg p-4">
                <div class="flex items-center justify-between mb-6 p-2">
                    <h2 class="text-xl text-gray-800 dark:text-white font-semibold">All Products</h2>
                    <div class="flex align-center">

                        <button @click="openModal"
                            class="px-4 py-2 bg-blue-600 text-white dark:bg-gray-700 dark:text-white font-bold rounded-lg hover:bg-blue-700 mr-3">
                            Open Modal
                        </button>

                        <a href="/product-create"
                            class="bg-blue-500 hover:bg-blue-700 text-white dark:bg-gray-700 dark:text-white font-bold py-2 px-4 rounded-lg">Add New
                            Product</a>
                    </div>
                </div>

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">#
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">
                                Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">
                                Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">
                                Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">
                                Price</th>
                            <th
                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr v-for="(product, index) in products" :key="product.id">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-100">{{ index + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img :src="product.image" alt="" class="w-12 h-12 rounded-full object-cover" />
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-100">{{ product.name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-100">{{ product.category }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-100">${{ product.price.toFixed(2)
                            }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button @click="editProduct(product.id)" class="text-blue-600 dark:text-blue-300 hover:text-blue-900 mr-2">
                                    Edit
                                </button>
                                <button @click="deleteProduct(product.id)" class="text-red-600 dark:text-red-300 hover:text-red-900">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr v-if="products.length === 0">
                            <td colspan="6" class="text-center text-gray-500 dark:text-gray-100 py-4">No products found.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </AuthenticatedLayout>

    <!-- <Modal /> -->

    <div>
        <!-- Button to open modal -->
        <!-- <button @click="openModal" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Open Modal
        </button> -->

        <!-- Modal -->
        <div v-if="isOpen" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
            @click.self="closeModal">
            <div class="bg-white rounded-2xl shadow-lg w-96 p-6 relative">
                <!-- Close button -->
                <button @click="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-xl">
                    &times;
                </button>

                <!-- Modal Content -->
                <h2 class="text-xl font-semibold mb-4">Modal Title</h2>
                <p class="text-gray-600 mb-4">
                    This is a modal example built with Vue 3 and TailwindCSS.
                </p>
                <button @click="closeModal" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Close
                </button>
            </div>
        </div>
    </div>
</template>
