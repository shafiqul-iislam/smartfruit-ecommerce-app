<script setup>
import { ref } from "vue";

// Dummy new customers data
const customers = ref([
    { id: 1, name: "Sophia Wilson", email: "sophia@example.com", joined: "2025-08-01", status: "Active" },
    { id: 2, name: "Liam Miller", email: "liam@example.com", joined: "2025-08-03", status: "Inactive" },
    { id: 3, name: "Olivia Davis", email: "olivia@example.com", joined: "2025-08-05", status: "Active" },
    { id: 4, name: "Noah Garcia", email: "noah@example.com", joined: "2025-08-07", status: "Active" },
    { id: 5, name: "Ava Martinez", email: "ava@example.com", joined: "2025-08-09", status: "Inactive" },
]);
</script>

<template>
    <div class="bg-white rounded-xl shadow p-6 mt-6">
        <h2 class="text-lg font-semibold mb-4">New Customers</h2>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-600 uppercase text-xs">
                        <th class="px-4 py-3 border-b">ID</th>
                        <th class="px-4 py-3 border-b">Name</th>
                        <th class="px-4 py-3 border-b">Email</th>
                        <th class="px-4 py-3 border-b">Joined</th>
                        <th class="px-4 py-3 border-b">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="customer in customers" :key="customer.id" class="hover:bg-gray-50">
                        <td class="px-4 py-3 border-b font-medium">#{{ customer.id }}</td>
                        <td class="px-4 py-3 border-b">{{ customer.name }}</td>
                        <td class="px-4 py-3 border-b text-gray-500">{{ customer.email }}</td>
                        <td class="px-4 py-3 border-b">{{ customer.joined }}</td>
                        <td class="px-4 py-3 border-b">
                            <span :class="[
                                'px-2 py-1 text-xs font-semibold rounded-full',
                                customer.status === 'Active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'
                            ]">
                                {{ customer.status }}
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
