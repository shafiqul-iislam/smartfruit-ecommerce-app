<script setup>
import axios from "axios";
import { ref } from "vue";

const email = ref("");
const password = ref("");
const remember = ref(false);
const loading = ref(false);
const error = ref("");

const adminLogin = async () => {
  loading.value = true;
  error.value = "";

  try {
    const res = await axios.post("/admin-login", {
      email: email.value,
      password: password.value,
    });

    if (res.status === 200) {
      window.location.href = "/admin/dashboard";
    }
  } catch (err) {
    error.value = err.response?.data?.message || "Login failed";
  } finally {
    loading.value = false;
  }
};
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900">
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl w-full max-w-md p-8">
            <!-- Logo -->
            <div class="flex flex-col items-center mb-8">
                <div
                    class="bg-blue-500 text-white w-14 h-14 flex items-center justify-center rounded-full text-2xl font-bold">
                    A
                </div>
                <h1 class="text-2xl font-semibold mt-3 text-gray-800 dark:text-gray-100">
                    Admin Login
                </h1>
                <p class="text-gray-500 text-sm">Welcome back! Please sign in to your account.</p>
            </div>

            <!-- Login Form -->
            <form @submit.prevent="adminLogin" class="space-y-5">
                <!-- Email -->
                <div>
                    <label class="block text-gray-600 dark:text-gray-300 mb-1 text-sm font-medium">Email</label>
                    <input type="email" v-model="email" placeholder="admin@example.com"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none"
                        required />
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-gray-600 dark:text-gray-300 mb-1 text-sm font-medium">Password</label>
                    <div class="relative">
                        <input type="password" v-model="password" placeholder="••••••••"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none"
                            required />
                    </div>
                </div>

                <!-- Remember Me & Forgot -->
                <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" v-model="remember" class="rounded border-gray-300 text-blue-500" />
                        Remember me
                    </label>
                    <a href="#" class="hover:underline">Forgot password?</a>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition duration-200">
                    Login
                </button>
            </form>

            <!-- Footer -->
            <p class="mt-6 text-center text-xs text-gray-400">
                &copy; 2025 Admin Panel. All rights reserved.
            </p>
        </div>
    </div>
</template>
