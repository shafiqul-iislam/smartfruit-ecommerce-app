<script setup>
import Footer from '@/Components/Frontend/Footer.vue';
import Navbar from '@/Components/Frontend/Navbar.vue';
import { Head } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const cart = ref([
  { name: 'Fresh Apple', price: 3.0, qty: 2, image: '/storage/images/apple.jpg' },
  { name: 'Red Tomato', price: 2.0, qty: 3, image: '/storage/images/tomato.jpg' }
])

const shipping = ref(5)
const taxRate = 0.1 // 10% tax

const subtotal = computed(() =>
  cart.value.reduce((sum, item) => sum + item.price * item.qty, 0)
)

const tax = computed(() => subtotal.value * taxRate)

const total = computed(() => subtotal.value + shipping.value + tax.value)

function increaseQty(index) {
  cart.value[index].qty++
}

function decreaseQty(index) {
  if (cart.value[index].qty > 1) {
    cart.value[index].qty--
  }
}
</script>

<template>

  <Head title="Cart" />

  <Navbar />

  <section class="py-16 px-6 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4">
      <h1 class="text-3xl font-bold mb-8">Checkout</h1>

      <!-- Cart Table -->
      <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <table class="w-full text-left border-collapse">
          <thead class="bg-gray-100">
            <tr>
              <th class="py-3 px-4 font-semibold text-gray-600">Product</th>
              <th class="py-3 px-4 font-semibold text-gray-600">Price</th>
              <th class="py-3 px-4 font-semibold text-gray-600">Quantity</th>
              <th class="py-3 px-4 font-semibold text-gray-600">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(item, index) in cart" :key="index" class="border-b">
              <td class="py-4 px-4 flex items-center gap-4">
                <img :src="item.image" :alt="item.name" class="w-16 h-16 rounded object-cover">
                <span class="font-medium text-gray-800">{{ item.name }}</span>
              </td>
              <td class="py-4 px-4 text-gray-700">${{ item.price.toFixed(2) }}</td>
              <td class="py-4 px-4">
                <div class="flex items-center gap-2">
                  <button @click="decreaseQty(index)" class="bg-gray-200 hover:bg-gray-300 px-2 py-1 rounded">-</button>
                  <span class="px-3">{{ item.qty }}</span>
                  <button @click="increaseQty(index)" class="bg-gray-200 hover:bg-gray-300 px-2 py-1 rounded">+</button>
                </div>
              </td>
              <td class="py-4 px-4 font-semibold text-gray-800">
                ${{ (item.qty * item.price).toFixed(2) }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Order Summary Card -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Order Summary</h2>
        <div class="space-y-3">
          <div class="flex justify-between">
            <span class="text-gray-600">Subtotal</span>
            <span class="font-medium text-gray-800">${{ subtotal.toFixed(2) }}</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-600">Shipping</span>
            <span class="font-medium text-gray-800">${{ shipping.toFixed(2) }}</span>
          </div>
          <div class="flex justify-between">
            <span class="text-gray-600">Tax</span>
            <span class="font-medium text-gray-800">${{ tax.toFixed(2) }}</span>
          </div>
          <hr>
          <div class="flex justify-between text-lg font-bold">
            <span>Total</span>
            <span>${{ total.toFixed(2) }}</span>
          </div>
        </div>
        <button class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition mt-6">
          Proceed to Checkout
        </button>
      </div>
    </div>
  </section>

  <Footer />
</template>
