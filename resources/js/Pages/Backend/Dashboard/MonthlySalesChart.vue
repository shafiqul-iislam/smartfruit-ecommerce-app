<script setup>
import { onMounted, ref } from "vue";
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

const chartRef = ref(null);

onMounted(() => {
    const ctx = chartRef.value.getContext("2d");
    new Chart(ctx, {
        type: "bar", // you can change to "line"
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
            datasets: [
                {
                    label: "Monthly Sales",
                    data: [1200, 1900, 1500, 2000, 2300, 1800, 2500, 3000],
                    backgroundColor: "rgba(59, 130, 246, 0.6)", // Tailwind blue-500
                    borderRadius: 8,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 500 },
                },
            },
        },
    });
});
</script>

<template>
    <div class="bg-white rounded-xl shadow p-6 mt-6 w-1/2">
        <h2 class="text-lg font-semibold mb-4">Monthly Sales</h2>
        <div class="h-72">
            <canvas ref="chartRef"></canvas>
        </div>
    </div>
</template>
