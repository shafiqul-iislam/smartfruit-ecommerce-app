<template>
  <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside
      :class="[
        'bg-white shadow-lg transition-all duration-300 ease-in-out',
        isCollapsed ? 'w-16' : 'w-64'
      ]"
    >
      <!-- Sidebar header -->
      <div class="flex items-center justify-between p-4 border-b border-gray-200">
        <h1
          v-if="!isCollapsed"
          class="text-xl font-bold text-gray-800"
        >
          Admin
        </h1>
        <button
          @click="toggleSidebar"
          class="p-2 rounded-md hover:bg-gray-200"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6 text-gray-600"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <!-- Menu -->
      <nav class="mt-4">
        <ul class="space-y-1">
          <li>
            <a
              href="#"
              class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-gray-100"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
              </svg>
              <span v-if="!isCollapsed">Dashboard</span>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-gray-100"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5 13l4 4L19 7" />
              </svg>
              <span v-if="!isCollapsed">Orders</span>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-gray-100"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <span v-if="!isCollapsed">Products</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main content -->
    <div class="flex-1 p-6">
      <h2 class="text-2xl font-semibold">Dashboard Content</h2>
      <p class="mt-2 text-gray-600">
        This is where your main content goes.
      </p>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";

const isCollapsed = ref(false);

function toggleSidebar() {
  isCollapsed.value = !isCollapsed.value;
}
</script>
