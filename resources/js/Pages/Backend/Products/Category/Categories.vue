<script setup>
import { ref, defineProps } from "vue";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Modal from "@/Components/Backend/Product/Modal.vue";

const props = defineProps({
    categories: {
        type: Array,
        default: () => []
    }
})

function editCategory(id) {
    alert("Edit Category " + id);
}

function deleteCategory(id) {
    if (confirm("Are you sure you want to delete this category?")) {
        //
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

    <Head title="Categories" />

    <AuthenticatedLayout>
        <main class="p-6">
            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg p-4">
                <div class="flex items-center justify-between mb-6 p-2">
                    <h2 class="text-xl text-gray-800 dark:text-white font-semibold">All Categories</h2>
                    <div class="flex align-center">

                        <button @click="openModal"
                            class="px-4 py-2 bg-blue-600 text-white dark:bg-gray-700 dark:text-white font-bold rounded-lg hover:bg-blue-700 mr-3">
                            New Category
                        </button>
                    </div>
                </div>

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">
                                ID
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">
                                Name</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">
                                Description</th>
                            <th
                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-100 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr v-if="categories" v-for="(category) in categories" :key="category.id">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-100">{{
                                category.id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-100">{{
                                category.name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-100">{{
                                category.description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <button @click="editCategory(category.id)"
                                    class="text-blue-600 dark:text-blue-300 hover:text-blue-900 mr-2">
                                    Edit
                                </button>
                                <button @click="deleteCategory(category.id)"
                                    class="text-red-600 dark:text-red-300 hover:text-red-900">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <!-- Show empty message -->
                        <tr v-if="props.categories.length === 0">
                            <td colspan="6" class="text-center text-gray-500 dark:text-gray-100 py-4">
                                No categories found.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </AuthenticatedLayout>

    <!-- <Modal /> -->

    <!-- Modal -->
    <div v-if="isOpen" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
        @click.self="closeModal">
        <div class="bg-white rounded-2xl shadow-lg w-96 p-8 relative">

            <div class="flex justify-between items-center mb-4">
                <!-- Modal Content -->
                <h2 class="text-xl font-semibold">Modal Title</h2>

                <!-- Close button -->
                <button @click="closeModal" class="absolute right-4 text-gray-500 hover:text-gray-700 text-xl">
                    &times;
                </button>
            </div>

            <p class="text-gray-600 mb-4">
                This is a modal example built with Vue 3 and TailwindCSS.
            </p>
            <button @click="closeModal" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                Close
            </button>
        </div>
    </div>
</template>
