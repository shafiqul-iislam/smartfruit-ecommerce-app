
<script setup>
import { ref } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const tabs = ["Profile", "Dashboard", "Settings", "Contacts"];
const activeTab = ref("Profile");
</script>

<template>
    <Head title="Products" />

    <AuthenticatedLayout>
        <div class="max-w-6xl mx-auto px-6 py-10">
            <!-- Page Title -->
            <h1 class="text-2xl font-semibold mb-6">Settings</h1>
            <p class="text-gray-600 mb-8">
                Manage your profile and account information
            </p>

            <!-- Tabs -->
            <div class="flex space-x-4 border-b">
                <button v-for="tab in tabs" :key="tab" @click="activeTab = tab" :class="[
                    'px-4 py-2 font-medium',
                    activeTab === tab
                        ? 'border-b-2 border-blue-600 text-blue-600'
                        : 'text-gray-600 hover:text-gray-800'
                ]">
                    {{ tab }}
                </button>
            </div>

            <!-- Tab Content -->
            <div class="mt-6">
                <!-- Profile Tab -->
                <div v-if="activeTab === 'Profile'" class="space-y-6">
                    <!-- Top: Profile Picture + Account Settings -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Profile Picture -->
                        <div class="bg-white shadow rounded-xl p-6">
                            <h2 class="text-lg font-semibold mb-4">Profile Picture</h2>
                            <div class="flex items-center space-x-4">
                                <img src="https://via.placeholder.com/100" alt="Profile"
                                    class="w-20 h-20 rounded-full object-cover" />
                                <div>
                                    <p class="font-medium">Joseph McFall</p>
                                    <p class="text-gray-600 text-sm">Web Developer</p>
                                    <button class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                        Edit
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Account Settings -->
                        <div class="bg-white shadow rounded-xl p-6">
                            <h2 class="text-lg font-semibold mb-4">Account Settings</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium">Timezone</label>
                                    <select class="w-full mt-1 border rounded-lg px-3 py-2">
                                        <option>UTC+06:00 - Dhaka</option>
                                        <option>UTC+05:30 - Delhi</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium">Language</label>
                                    <select class="w-full mt-1 border rounded-lg px-3 py-2">
                                        <option>English</option>
                                        <option>Bangla</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium">Date of Birth</label>
                                    <input type="date" value="1995-06-12"
                                        class="w-full mt-1 border rounded-lg px-3 py-2" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium">Gender</label>
                                    <select class="w-full mt-1 border rounded-lg px-3 py-2">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="bg-white shadow rounded-xl p-6">
                        <h2 class="text-lg font-semibold mb-4">Personal Information</h2>
                        <div class="grid md:grid-cols-2 gap-6 text-gray-700">
                            <!-- Left Column -->
                            <div class="space-y-4">
                                <div>
                                    <p class="font-medium">Full Name</p>
                                    <p>Joseph McFall</p>
                                </div>
                                <div>
                                    <p class="font-medium">Biography</p>
                                    <p class="text-sm leading-relaxed">
                                        I am Joseph McFall, a fervent explorer navigating the
                                        intricate landscapes of web design, driven by an unyielding
                                        passion for Web 3 and Artificial Intelligence. From the early
                                        days of tinkering with computers to my current standing as a
                                        web designer, my journey has been a dynamic evolution marked
                                        by a relentless pursuit of innovation.
                                    </p>
                                </div>
                                <div>
                                    <p class="font-medium">Social</p>
                                    <div class="flex space-x-3 text-xl text-gray-600">
                                        <i class="fab fa-facebook"></i>
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-github"></i>
                                        <i class="fab fa-dribbble"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-medium">Location</p>
                                    <p>California, United States of America</p>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-4">
                                <div>
                                    <p class="font-medium">Email Address</p>
                                    <p>helene@company.com</p>
                                </div>
                                <div>
                                    <p class="font-medium">Home Address</p>
                                    <p>
                                        92 Miles Drive, Newark, NJ 07103, California, United States of
                                        America
                                    </p>
                                </div>
                                <div>
                                    <p class="font-medium">Phone Number</p>
                                    <p>+1234 567 890 / +12 345 678</p>
                                </div>
                                <div>
                                    <p class="font-medium">Software Skills</p>
                                    <div class="flex space-x-2 text-2xl">
                                        <span>💻</span>
                                        <span>🎨</span>
                                        <span>🖌️</span>
                                        <span>📐</span>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-medium">Languages</p>
                                    <p>English, French, Spanish</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Tab -->
                <div v-if="activeTab === 'Dashboard'" class="bg-white shadow rounded-xl p-6">
                    <h2 class="text-lg font-semibold mb-4">Dashboard Overview</h2>
                    <p class="text-gray-600">Here you can display dashboard information.</p>
                </div>

                <!-- Settings Tab -->
                <div v-if="activeTab === 'Settings'" class="bg-white shadow rounded-xl p-6">
                    <h2 class="text-lg font-semibold mb-4">Settings</h2>
                    <p class="text-gray-600">Here you can manage your settings.</p>
                </div>

                <!-- Contacts Tab -->
                <div v-if="activeTab === 'Contacts'" class="bg-white shadow rounded-xl p-6">
                    <h2 class="text-lg font-semibold mb-4">Contacts</h2>
                    <p class="text-gray-600">Here you can manage your contacts.</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<!-- Optional: FontAwesome icons (if not already installed) -->
<!-- Add in index.html: <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
