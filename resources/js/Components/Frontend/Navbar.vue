<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { Link, Head } from '@inertiajs/vue3'

const mobileMenuOpen = ref(false);
const cartCount = ref(3); // You can replace this with props or store value

</script>

<template>
    <nav class="bg-white border-b shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-xl font-bold text-gray-800">Smart Fruits</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-3 items-center">
                    <Link href="/shop" class="text-gray-700 hover:text-blue-600 px-2">Shop</Link>
                    <Link href="/shop-details" class="text-gray-700 hover:text-blue-600 px-2">Shop Details</Link>

                    <div class="relative inline-block text-left group">

                        <!-- Button -->
                        <p class="text-gray-700 hover:text-blue-600 focus:outline-none">
                            Pages
                        </p>

                        <!-- Dropdown -->
                        <div class="absolute left-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg 
                                    opacity-0 scale-95 invisible 
                                    group-hover:opacity-100 group-hover:scale-100 group-hover:visible 
                                    transition-all duration-200 origin-top z-10">
                            <Link href="/cart" class="block px-4 py-2 hover:bg-gray-100">Cart</Link>
                            <Link href="/checkout" class="block px-4 py-2 hover:bg-gray-100">Checkout</Link>

                            <div class="relative group/sub">
                                <Link href="/testimonials" class="block px-4 py-2 hover:bg-gray-100">Testimonials ▸
                                </Link>
                                <!-- Submenu -->
                                <div class="absolute top-0 left-full ml-1 w-40 bg-white border border-gray-200 rounded-md shadow-lg
                                    opacity-0 scale-95 invisible 
                                    group-hover/sub:opacity-100 group-hover/sub:scale-100 group-hover/sub:visible
                                    transition-all duration-200 origin-top-left">
                                    <Link href="#" class="block px-4 py-2 hover:bg-gray-100">Testimonial 1</Link>
                                    <Link href="#" class="block px-4 py-2 hover:bg-gray-100">Testimonial 2</Link>
                                </div>
                            </div>
                        </div>
                    </div>

                    <Link href="/contact" class="text-gray-700 hover:text-blue-600 px-2">Contact</Link>

                    <!-- Cart -->
                    <div class="relative">
                        <Link href="/cart" class="text-gray-700 hover:text-blue-600">
                        🛒
                        <span
                            class="absolute -top-2 -right-3 bg-red-500 text-white text-xs font-bold rounded-full px-1.5">
                            {{ cartCount }}
                        </span>
                        </Link>
                    </div>

                    <!-- Auth -->
                    <div>
                        <a href="/login" class="text-gray-700 hover:text-blue-600 px-2">Login</a>
                        <a href="/register" class="text-gray-700 hover:text-blue-600 px-2">Register</a>
                    </div>
                </div>

                <!-- Mobile Toggle -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div v-if="mobileMenuOpen" class="md:hidden bg-white border-t">
            <div v-for="menu in menus" :key="menu.name" class="px-4 py-2" data-dropdown>
                <button @click.stop="toggleDropdown(menu.name)" class="w-full text-left font-medium">
                    {{ menu.name }}
                </button>
                <div v-if="activeDropdown === menu.name" class="pl-4 mt-1">
                    <a v-for="sub in menu.submenus" :key="sub" href="#"
                        class="block py-1 text-sm text-gray-700 hover:text-blue-600">
                        {{ sub }}
                    </a>
                </div>
            </div>

            <div class="px-4 py-2">
                <a href="/login" class="block py-1 text-gray-700">Login</a>
                <a href="/register" class="block py-1 text-gray-700">Register</a>
                <button @click="goToCart" class="flex items-center py-1 text-gray-700">
                    🛒 <span class="ml-2">Cart ({{ cartCount }})</span>
                </button>
            </div>
        </div>
    </nav>
</template>
