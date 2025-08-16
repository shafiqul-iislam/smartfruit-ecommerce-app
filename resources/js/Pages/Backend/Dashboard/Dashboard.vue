<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MonthlySalesChart from './MonthlySalesChart.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-6 pt-8">
            <!-- Card 1 -->
            <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Users</p>
                        <h3 class="text-2xl font-bold text-gray-800">1,245</h3>
                    </div>
                    <div class="p-3 bg-blue-100 text-blue-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5V4H2v16h5m10-9l-3 3-3-3m0 6l3-3 3 3" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Orders</p>
                        <h3 class="text-2xl font-bold text-gray-800">320</h3>
                    </div>
                    <div class="p-3 bg-green-100 text-green-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h18M9 3v18m6-18v18" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Revenue</p>
                        <h3 class="text-2xl font-bold text-gray-800">$12,450</h3>
                    </div>
                    <div class="p-3 bg-yellow-100 text-yellow-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10V4m0 16v-2" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">New Messages</p>
                        <h3 class="text-2xl font-bold text-gray-800">58</h3>
                    </div>
                    <div class="p-3 bg-red-100 text-red-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 16h10M5 12h14" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="p-6">
            <MonthlySalesChart />
        </main>
    </AuthenticatedLayout>
</template>
