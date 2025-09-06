<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { ref } from "vue";

const form = ref({
    name: "",
    category: "",
    price: "",
    description: "",
    image: null,
});

const handleFileUpload = (event) => {
    form.value.image = event.target.files[0];
};

const handleSubmit = () => {
    console.log("Product Submitted:", form.value);

    // Reset form after submit
    form.value = {
        name: "",
        category: "",
        price: "",
        description: "",
        image: null,
    };
};
</script>

<template>

    <Head title="Product Edit" />

    <AuthenticatedLayout>
        <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
            <!-- Changed max-w-lg → max-w-md -->
            <div class="bg-white shadow-xl rounded-2xl p-8 w-full">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Update Product</h2>

                <form @submit.prevent="handleSubmit" class="space-y-5">
                    <!-- Product Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                        <input v-model="form.name" type="text" placeholder="Enter product name"
                            class="w-4/6 border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required />
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                        <select v-model="form.category"
                            class="w-4/6 border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option disabled value="">Select category</option>
                            <option>Electronics</option>
                            <option>Clothing</option>
                            <option>Books</option>
                            <option>Furniture</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                        <input v-model="form.price" type="number" min="0" step="0.01" placeholder="Enter price"
                            class="w-4/6 border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required />
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea v-model="form.description" rows="2" placeholder="Enter product description"
                            class="w-4/6 border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Product Image</label>
                        <input type="file" @change="handleFileUpload" class="w-full text-gray-600" />
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                        Add Product
                    </button>
                </form>
            </div>
        </div>

    </AuthenticatedLayout>
</template>