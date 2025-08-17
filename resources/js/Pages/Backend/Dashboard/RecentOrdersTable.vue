<script setup>
import { ref } from "vue";

// Dummy recent orders data
const orders = ref([
  { id: 1001, customer: "John Doe", date: "2025-08-01", total: 250, status: "Completed" },
  { id: 1002, customer: "Jane Smith", date: "2025-08-03", total: 120, status: "Pending" },
  { id: 1003, customer: "Alex Johnson", date: "2025-08-05", total: 400, status: "Cancelled" },
  { id: 1004, customer: "Emma Brown", date: "2025-08-07", total: 180, status: "Completed" },
  { id: 1005, customer: "Chris Lee", date: "2025-08-09", total: 320, status: "Processing" },
]);
</script>

<template>
  <div class="bg-white rounded-xl shadow p-6 mt-6 w-full">
    <h2 class="text-lg font-semibold mb-4">Recent Orders</h2>

    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left border-collapse">
        <thead>
          <tr class="bg-gray-50 text-gray-600 uppercase text-xs">
            <th class="px-4 py-3 border-b">Order ID</th>
            <th class="px-4 py-3 border-b">Customer</th>
            <th class="px-4 py-3 border-b">Date</th>
            <th class="px-4 py-3 border-b">Total</th>
            <th class="px-4 py-3 border-b">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="order in orders" :key="order.id" class="hover:bg-gray-50">
            <td class="px-4 py-3 border-b font-medium">#{{ order.id }}</td>
            <td class="px-4 py-3 border-b">{{ order.customer }}</td>
            <td class="px-4 py-3 border-b">{{ order.date }}</td>
            <td class="px-4 py-3 border-b">${{ order.total }}</td>
            <td class="px-4 py-3 border-b">
              <span
                :class="[
                  'px-2 py-1 text-xs font-semibold rounded-full',
                  order.status === 'Completed' ? 'bg-green-100 text-green-700' : '',
                  order.status === 'Pending' ? 'bg-yellow-100 text-yellow-700' : '',
                  order.status === 'Processing' ? 'bg-blue-100 text-blue-700' : '',
                  order.status === 'Cancelled' ? 'bg-red-100 text-red-700' : ''
                ]"
              >
                {{ order.status }}
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
