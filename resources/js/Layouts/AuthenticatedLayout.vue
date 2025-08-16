<script setup>
import { ref } from "vue";
import { Link, router } from "@inertiajs/vue3";

const isCollapsed = ref(false);
const submenuOpen = ref(false);
const profileOpen = ref(false); // profile dropdown

function toggleSidebar() {
  isCollapsed.value = !isCollapsed.value;
  if (isCollapsed.value) submenuOpen.value = false;
}

const logout = () => {
  router.post(route('logout'));
};
</script>

<template>
  <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside :class="[
      'bg-white shadow-lg transition-all duration-300 ease-in-out',
      isCollapsed ? 'w-16' : 'w-64'
    ]">
      <!-- Sidebar header -->
      <div class="flex items-center justify-between p-3 border-b border-gray-200">
        <h1 v-if="!isCollapsed" class="text-xl font-bold text-gray-800">
          Admin
        </h1>
        <button @click="toggleSidebar" class="p-2 rounded-md hover:bg-gray-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <!-- Menu -->
      <nav class="mt-4">
        <ul class="space-y-1">
          <li>
            <a href="#" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
              </svg>
              <span v-if="!isCollapsed">Dashboard</span>
            </a>
          </li>

          <li>
            <a href="#" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span v-if="!isCollapsed">Orders</span>
            </a>
          </li>

          <!-- Products with submenu -->
          <li>
            <button @click="submenuOpen = !submenuOpen"
              class="flex items-center w-full gap-3 px-4 py-2 text-gray-700 hover:bg-gray-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <span v-if="!isCollapsed">Products</span>
              <svg v-if="!isCollapsed" :class="[submenuOpen ? 'rotate-180' : '']"
                class="w-4 h-4 ml-auto transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <!-- Submenu -->
            <Transition enter-active-class="transition-all duration-300 ease-out"
              leave-active-class="transition-all duration-300 ease-in" enter-from-class="max-h-0 opacity-0"
              enter-to-class="max-h-40 opacity-100" leave-from-class="max-h-40 opacity-100"
              leave-to-class="max-h-0 opacity-0">
              <ul v-show="submenuOpen && !isCollapsed" class="ml-10 mt-1 space-y-1 overflow-hidden">
                <li><a href="#" class="block px-2 py-1 text-gray-600 hover:bg-gray-100">All Products</a></li>
                <li><a href="#" class="block px-2 py-1 text-gray-600 hover:bg-gray-100">Add New</a></li>
                <li><a href="#" class="block px-2 py-1 text-gray-600 hover:bg-gray-100">Categories</a></li>
              </ul>
            </Transition>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main content -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <header class="flex items-center justify-between bg-white shadow px-6 py-3">
        <!-- Page Title -->
        <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>

        <!-- Profile Dropdown -->
        <div class="relative">
          <button @click="profileOpen = !profileOpen" class="flex items-center focus:outline-none">
            <img src="https://i.pravatar.cc/40" class="w-10 h-10 rounded-full border" />
          </button>

          <Transition enter-active-class="transition duration-200 ease-out"
            enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
            leave-active-class="transition duration-200 ease-in" leave-from-class="transform opacity-100 scale-100"
            leave-to-class="transform opacity-0 scale-95">
            <div v-show="profileOpen" class="absolute right-0 mt-2 w-40 bg-white border rounded-md shadow-lg py-2 z-50">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>

              <!-- Authentication -->
              <form @submit.prevent="logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                <button type="submit">Log Out</button>
              </form>

            </div>
          </Transition>
        </div>
      </header>

      <!-- Page Content -->
      <main>
        <slot />
      </main>

    </div>
  </div>
</template>
