<script setup>
import Footer from '@/Components/Frontend/Footer.vue'
import Navbar from '@/Components/Frontend/Navbar.vue'
import { Head } from '@inertiajs/vue3'
import { ref, computed } from 'vue'

// Sample cart data (can be replaced with Vuex/Pinia data)
const cart = ref([
  { name: 'Fresh Apples', price: 4.5, quantity: 2 },
  { name: 'Organic Bananas', price: 3.2, quantity: 3 },
  { name: 'Carrots', price: 2.0, quantity: 1 }
])

const shipping = ref(5.0)

const subtotal = computed(() =>
  cart.value.reduce((sum, item) => sum + item.price * item.quantity, 0)
)

const total = computed(() => subtotal.value + shipping.value)

const checkout = ref({
  name: '',
  phone: '',
  email: '',
  address: '',
  paymentMethod: 'cod'
})

function placeOrder() {
  alert(`Order placed successfully for ${checkout.value.name}!`)
}
</script>

<template>

  <Head title="Checkout" />

  <Navbar />

  <section class="py-12 bg-gray-50">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Checkout</h2>

    <div class="max-w-5xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Billing & Shipping Info -->
      <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-md space-y-6">
        <h2 class="text-2xl font-semibold mb-4">Billing & Shipping Information</h2>

        <form @submit.prevent="placeOrder" class="space-y-4">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block mb-1 font-medium">Full Name</label>
              <input type="text" v-model="checkout.name"
                class="w-full border rounded px-3 py-2 focus:ring focus:border-indigo-500" required />
            </div>
            <div>
              <label class="block mb-1 font-medium">Phone</label>
              <input type="tel" v-model="checkout.phone"
                class="w-full border rounded px-3 py-2 focus:ring focus:border-indigo-500" required />
            </div>
          </div>

          <div>
            <label class="block mb-1 font-medium">Email</label>
            <input type="email" v-model="checkout.email"
              class="w-full border rounded px-3 py-2 focus:ring focus:border-indigo-500" required />
          </div>

          <div>
            <label class="block mb-1 font-medium">Shipping Address</label>
            <textarea v-model="checkout.address" rows="3"
              class="w-full border rounded px-3 py-2 focus:ring focus:border-indigo-500" required></textarea>
          </div>

          <!-- Payment Method -->
          <div>
            <label class="block mb-2 font-medium">Payment Method</label>
            <div class="space-y-2">
              <label class="flex items-center gap-2">
                <input type="radio" value="cod" v-model="checkout.paymentMethod" />
                Cash on Delivery
              </label>
              <label class="flex items-center gap-2">
                <input type="radio" value="card" v-model="checkout.paymentMethod" />
                Credit/Debit Card
              </label>
            </div>
          </div>
        </form>
      </div>

      <!-- Order Summary -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Order Summary</h2>

        <div v-for="(item, index) in cart" :key="index" class="flex justify-between mb-2">
          <span>{{ item.name }} (x{{ item.quantity }})</span>
          <span>${{ (item.price * item.quantity).toFixed(2) }}</span>
        </div>

        <hr class="my-4" />

        <div class="flex justify-between mb-2">
          <span>Subtotal</span>
          <span>${{ subtotal.toFixed(2) }}</span>
        </div>
        <div class="flex justify-between mb-2">
          <span>Shipping</span>
          <span>${{ shipping.toFixed(2) }}</span>
        </div>
        <div class="flex justify-between font-semibold text-lg">
          <span>Total</span>
          <span>${{ total.toFixed(2) }}</span>
        </div>

        <button @click="placeOrder"
          class="mt-6 w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
          Place Order
        </button>
      </div>

    </div>
  </section>

  <Footer />
</template>