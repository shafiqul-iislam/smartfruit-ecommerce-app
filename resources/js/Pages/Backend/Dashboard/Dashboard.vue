<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MonthlySalesChart from './MonthlySalesChart.vue';
import MonthlyRevenueChart from './MonthlyRevenueChart.vue';
import { Head } from '@inertiajs/vue3';
import RecentOrdersTable from './RecentOrdersTable.vue';
import NewCustomersTable from './NewCustomersTable.vue';

import { UsersIcon, ShoppingCartIcon, ArrowTrendingUpIcon, ShoppingBagIcon } from "@heroicons/vue/24/outline";
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
                        <p class="text-sm text-gray-500">Total Customer</p>
                        <h3 class="text-2xl font-bold text-gray-800">1,245</h3>
                    </div>
                    <div class="p-3 bg-blue-100 text-blue-600 rounded-full">
                        <UsersIcon class="h-6 w-6" />
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
                        <ShoppingCartIcon class="h-6 w-6" />
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Sales</p>
                        <h3 class="text-2xl font-bold text-gray-800">$2,000</h3>
                    </div>
                    <div class="p-3 bg-red-100 text-red-600 rounded-full">
                        <ShoppingBagIcon class="h-6 w-6" />
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Revenue</p>
                        <h3 class="text-2xl font-bold text-gray-800">$12,450</h3>
                    </div>
                    <div class="p-3 bg-yellow-100 text-yellow-600 rounded-full">
                        <ArrowTrendingUpIcon class="h-6 w-6" />
                    </div>
                </div>
            </div>

        </div>

        <!-- Main Content -->
        <main class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <MonthlySalesChart />
                <MonthlyRevenueChart />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <RecentOrdersTable />
                <NewCustomersTable />
            </div>
        </main>
    </AuthenticatedLayout>   

</template>
