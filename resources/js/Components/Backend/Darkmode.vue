<script setup>
import { ref, watchEffect } from 'vue'

const isDark = ref(localStorage.getItem('darkMode') === 'true')

const toggleDarkMode = () => {
  isDark.value = !isDark.value
  localStorage.setItem('darkMode', isDark.value)
  updateBodyClass()
}

const updateBodyClass = () => {
  if (isDark.value) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
}

// Initialize on page load
updateBodyClass()
</script>

<template>
  <button @click="toggleDarkMode">
    {{ isDark ? '☀️ ' : '🌙 ' }}
  </button>
</template>
