<script setup>
import { Link, Head } from '@inertiajs/vue3';

import { ref } from 'vue'

const mobileMenuOpen = ref(false)
const activeDropdown = ref(null)

const toggleDropdown = (menuName) => {
    activeDropdown.value = activeDropdown.value === menuName ? null : menuName
}

const cartCount = ref(3) // example, can be injected from store or props

const menus = [
    {
        name: 'Men',
        submenus: ['T-Shirts', 'Shoes', 'Accessories']
    },
    {
        name: 'Women',
        submenus: ['Dresses', 'Shoes', 'Bags']
    },
    {
        name: 'Kids',
        submenus: ['Toys', 'Clothing', 'Shoes']
    }
]

const goToCart = () => {
    window.location.href = '/cart'
}
</script>


<template>
    <nav class="bg-white border-b shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-xl font-bold text-gray-800">ShopMate</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-6 items-center">
                    <div class="relative" v-for="menu in menus" :key="menu.name">
                        <button @click="toggleDropdown(menu.name)"
                            class="text-gray-700 font-medium hover:text-blue-600">
                            {{ menu.name }}
                        </button>
                        <div v-if="activeDropdown === menu.name"
                            class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg">
                            <a v-for="sub in menu.submenus" :key="sub" href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                {{ sub }}
                            </a>
                        </div>
                    </div>

                    <!-- Cart -->
                    <div class="relative">
                        <button @click="goToCart" class="text-gray-700 hover:text-blue-600">
                            🛒
                            <span
                                class="absolute -top-2 -right-3 bg-red-500 text-white text-xs font-bold rounded-full px-1.5">
                                {{ cartCount }}
                            </span>
                        </button>
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
            <div v-for="menu in menus" :key="menu.name" class="px-4 py-2">
                <button @click="toggleDropdown(menu.name)" class="w-full text-left font-medium">
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