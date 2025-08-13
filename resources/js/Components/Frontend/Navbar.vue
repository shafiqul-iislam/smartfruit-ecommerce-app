<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { Link, Head } from '@inertiajs/vue3'

const mobileMenuOpen = ref(false);
const cartCount = ref(3); // You can replace this with props or store value
const searchQuery = ref("");

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

                    <!-- Search -->
                    <div class="relative mr-3">
                        <input v-model="searchQuery" type="text" placeholder="Search products..."
                            class="border border-gray-300 rounded-lg px-3 py-1.5 pl-9 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
                        <svg class="w-5 h-5 text-gray-500 absolute left-2 top-2.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M16 10a6 6 0 11-12 0 6 6 0 0112 0z"></path>
                        </svg>
                    </div>


                    <Link href="/" class="text-gray-700 hover:text-blue-600 px-2">Home</Link>
                    <Link href="/shop" class="text-gray-700 hover:text-blue-600 px-2">Shop</Link>

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
                            <Link href="/testimonials" class="block px-4 py-2 hover:bg-gray-100">Testimonials</Link>

                            <!-- Submenu -->
                            <!-- <div class="relative group/sub">
                                <div class="absolute top-0 left-full ml-1 w-40 bg-white border border-gray-200 rounded-md shadow-lg
                                    opacity-0 scale-95 invisible 
                                    group-hover/sub:opacity-100 group-hover/sub:scale-100 group-hover/sub:visible
                                    transition-all duration-200 origin-top-left">
                                    <Link href="/not-found" class="block px-4 py-2 hover:bg-gray-100">Testimonial 1
                                    </Link>
                                    <Link href="#" class="block px-4 py-2 hover:bg-gray-100">Testimonial 2</Link>
                                </div>
                            </div> -->
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
                        <Link href="/login" class="text-gray-700 hover:text-blue-600 px-2">Login</Link>
                        <Link href="/register" class="text-gray-700 hover:text-blue-600 px-2">Register</Link>
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
                <Link href="/cart" class="block py-1 text-gray-700">Cart</Link>
                <Link href="/checkout" class="block py-1 text-gray-700">Checkout</Link>
                <Link href="/contact" class="block py-1 text-gray-700">Contact</Link>
                <Link href="/testimonials" class="block py-1 text-gray-700">Testimonials</Link>
                <Link href="/login" class="block py-1 text-gray-700">Login</Link>
                <Link href="/register" class="block py-1 text-gray-700">Register</Link>

                <!-- Search -->
                <div class="relative mt-4">
                    <input v-model="searchQuery" type="text" placeholder="Search products..."
                        class="border border-gray-300 rounded-lg px-3 py-1.5 pl-9 focus:ring-2 focus:ring-blue-500 focus:outline-none w-full" />
                    <svg class="w-5 h-5 text-gray-500 absolute left-2 top-2.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M16 10a6 6 0 11-12 0 6 6 0 0112 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </nav>
</template>
