<script setup>
import { onMounted, ref } from "vue";
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

const chartRef = ref(null);

onMounted(() => {
    const ctx = chartRef.value.getContext("2d");

    new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
            datasets: [
                {
                    label: "Revenue ($)",
                    data: [5000, 7000, 6500, 8000, 9000, 7500, 9500, 11000],
                    borderColor: "rgba(16, 185, 129, 1)", // Tailwind emerald-500
                    backgroundColor: "rgba(16, 185, 129, 0.2)", // fill under line
                    fill: true,
                    tension: 0.4, // smooth curve
                    borderWidth: 2,
                    pointRadius: 4,
                    pointBackgroundColor: "rgba(16, 185, 129, 1)",
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
                    ticks: { callback: value => `$${value}` },
                },
            },
        },
    });
});
</script>

<template>
    <div class="bg-white rounded-xl shadow p-6 mt-4">
        <h2 class="text-lg font-semibold mb-4">Monthly Revenue</h2>
        <div class="h-72">
            <canvas ref="chartRef"></canvas>
        </div>
    </div>
</template>
