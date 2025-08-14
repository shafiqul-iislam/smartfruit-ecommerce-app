<script setup>
import { Link } from '@inertiajs/vue3';

// No JS needed unless you make newsletter functional
</script>

<template>
  <footer class="bg-gray-900 text-gray-300 pt-16 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Top Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">

        <!-- Brand -->
        <div>
          <h2 class="text-2xl font-bold text-white mb-4">ShopMate</h2>
          <p class="text-gray-400 text-sm leading-relaxed mb-4">
            Your one-stop shop for quality products at unbeatable prices. We bring you the latest trends and top deals.
          </p>
          <div class="flex space-x-3">
            <a href="#" class="w-9 h-9 rounded-full bg-gray-700 hover:bg-indigo-600 flex items-center justify-center">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="w-9 h-9 rounded-full bg-gray-700 hover:bg-indigo-600 flex items-center justify-center">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="w-9 h-9 rounded-full bg-gray-700 hover:bg-indigo-600 flex items-center justify-center">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="w-9 h-9 rounded-full bg-gray-700 hover:bg-indigo-600 flex items-center justify-center">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>

        <!-- Company -->
        <div>
          <h3 class="text-lg font-semibold text-white mb-4">Shop Info</h3>
          <ul class="space-y-2 text-sm">
            <li><Link href="/about-us" class="hover:text-white">About Us</Link></li>
            <li><Link href="/contact" class="hover:text-white">Contact Us</Link></li>
            <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
            <li><a href="#" class="hover:text-white">Terms of Service</a></li>
            <li><a href="#" class="hover:text-white">FAQs</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div>
          <h3 class="text-lg font-semibold text-white mb-4">Contact</h3>
          <ul class="space-y-2 text-sm">
            <li>Address: Dhaka, Bangladesh</li>
            <li>Phone: +1 (123) 456-7890</li>
            <li>Email: 0c6b3@example.com</li>
            <li>Payment: Visa, Mastercard, BKash, SSLcommerz</li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div>
          <h3 class="text-lg font-semibold text-white mb-4">Join Our Newsletter</h3>
          <p class="text-sm text-gray-400 mb-3">Stay updated with our latest offers and products.</p>
          <form class="flex items-center">
            <input type="email" placeholder="Your email"
              class="px-3 py-2 w-full rounded-l-lg bg-gray-800 text-gray-200 focus:outline-none" />
            <button type="submit"
              class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 rounded-r-lg text-white font-medium">
              Subscribe
            </button>
          </form>
        </div>

      </div>

      <!-- Bottom -->
      <div
        class="border-t border-gray-700 pt-6 flex flex-col sm:flex-row justify-between items-center text-sm text-gray-500">
        <p>© 2025 ShopMate. All rights reserved.</p>
        <div class="flex space-x-4 mt-3 sm:mt-0">
          <a href="#" class="hover:text-white">Privacy Policy</a>
          <a href="#" class="hover:text-white">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<style>
@import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
</style>
