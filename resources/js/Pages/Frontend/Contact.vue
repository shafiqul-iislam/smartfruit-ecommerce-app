<script setup>
import Footer from '@/Components/Frontend/Footer.vue'
import Navbar from '@/Components/Frontend/Navbar.vue'
import { Head } from '@inertiajs/vue3'
import { reactive } from 'vue'

const form = reactive({
  name: '',
  email: '',
  message: ''
})

const submitForm = () => {
  console.log('Form Submitted:', form)
  alert('Message sent successfully!')
  form.name = ''
  form.email = ''
  form.message = ''
}
</script>

<template>
  <Head title="Contact" />

  <Navbar />

  <section class="py-12 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">
        Contact Us
      </h2>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white px-6 py-6 rounded-xl shadow-lg">
        <!-- Contact Form -->
        <div>
          <h3 class="text-2xl font-semibold text-gray-800 mb-6">Send Us a Message</h3>
          <form @submit.prevent="submitForm" class="space-y-5">
            <div class="mb-2">
              <label class="block text-gray-700 font-medium mb-2">Name</label>
              <input v-model="form.name" type="text"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Your Name" />
            </div>

            <div class="mb-2">
              <label class="block text-gray-700 font-medium mb-2">Email</label>
              <input v-model="form.email" type="email"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Your Email" />
            </div>

            <div class="mb-2">
              <label class="block text-gray-700 font-medium mb-2">Message</label>
              <textarea v-model="form.message" rows="3"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Write your message here..."></textarea>
            </div>

            <button type="submit"
              class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
              Send Message
            </button>
          </form>
        </div>

        <!-- Contact Information -->
        <div class="bg-indigo-50 p-6 rounded-lg">
          <h3 class="text-2xl font-semibold text-gray-800 mb-6">Get in Touch</h3>
          <p class="text-gray-600 mb-6">
            We’d love to hear from you! Whether you have a question, need assistance, or just want to share your
            thoughts, feel free to reach out.
          </p>

          <div class="space-y-5">
            <div class="flex items-center gap-4">
              <span class="bg-indigo-100 p-3 rounded-full">
                📍
              </span>
              <p class="text-gray-700">123 Market Street, City, Country</p>
            </div>

            <div class="flex items-center gap-4">
              <span class="bg-indigo-100 p-3 rounded-full">
                📧
              </span>
              <p class="text-gray-700">support@example.com</p>
            </div>

            <div class="flex items-center gap-4">
              <span class="bg-indigo-100 p-3 rounded-full">
                📞
              </span>
              <p class="text-gray-700">+123 456 7890</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <Footer />
</template>
