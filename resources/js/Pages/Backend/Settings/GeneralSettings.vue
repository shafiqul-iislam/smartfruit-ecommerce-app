<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { reactive } from "vue";

// Reactive settings object
const settings = reactive({
    siteName: "",
    siteEmail: "",
    timezone: "UTC",
    maintenanceMode: false,
});

// Save function
const saveSettings = () => {
    // Replace this with actual API call
    console.log("Settings saved:", settings);
    alert("Settings saved successfully!");
};

</script>

<template>

    <Head title="Product Creation" />

    <AuthenticatedLayout>
        <div class="p-8 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6">General Settings</h1>

            <!-- Form -->
            <form @submit.prevent="saveSettings" class="space-y-4">

                <div class="grid grid-cols-2 gap-4">



                    <!-- Site Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Site Name</label>
                        <input v-model="settings.siteName" type="text" placeholder="Enter site name"
                            class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    </div>

                    <!-- Site Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Site Email</label>
                        <input v-model="settings.siteEmail" type="email" placeholder="Enter site email"
                            class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    </div>

                    <!-- Timezone -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Timezone</label>
                        <select v-model="settings.timezone"
                            class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="UTC">UTC</option>
                            <option value="Asia/Dhaka">Asia/Dhaka</option>
                            <option value="America/New_York">America/New_York</option>
                            <option value="Europe/London">Europe/London</option>
                        </select>
                    </div>

                    <!-- Maintenance Mode -->
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" v-model="settings.maintenanceMode" id="maintenance"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                        <label for="maintenance" class="text-sm text-gray-700">Maintenance Mode</label>
                    </div>

                </div>

                <!-- Save Button -->
                <div>
                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                        Save Settings
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>