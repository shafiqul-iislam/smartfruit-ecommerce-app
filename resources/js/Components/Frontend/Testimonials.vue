<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from 'vue'

const testimonials = [
  { name: "Sarah Johnson", role: "Happy Customer", quote: "Absolutely love the products! The quality is top-notch and delivery was fast.", image: "/storage/images/testimonial-1.jpg" },
  { name: "Michael Smith", role: "Frequent Shopper", quote: "I always find the best deals here. Customer service is amazing!", image: "/storage/images/testimonial-1.jpg" },
  { name: "Emily Davis", role: "Verified Buyer", quote: "Stylish, affordable, and super comfortable. Highly recommend!", image: "/storage/images/testimonial-1.jpg" },
  { name: "David Wilson", role: "Loyal Client", quote: "The experience was seamless from start to finish. I’m impressed!", image: "/storage/images/testimonial-1.jpg" },
  { name: "Sophia Brown", role: "Fashion Lover", quote: "Trendy designs at great prices. I’m a returning customer for sure.", image: "/storage/images/testimonial-1.jpg" },
  { name: "Noah Martinez", role: "Teacher", quote: "Freash vegetables at great prices. I’m a returning customer for sure.", image: "/storage/images/testimonial-1.jpg" }
]

const currentIndex = ref(0)
const slideWidth = 100 // each "page" is 100%

// Show 1 per slide in mobile, 2 per slide in desktop
const totalSlides = computed(() => {
  return window.innerWidth < 640
    ? testimonials.length
    : Math.ceil(testimonials.length / 2)
})

const nextSlide = () => {
  currentIndex.value = (currentIndex.value + 1) % totalSlides.value
}

const prevSlide = () => {
  currentIndex.value = (currentIndex.value - 1 + totalSlides.value) % totalSlides.value
}

// Auto-play
let interval = null
onMounted(() => {
  interval = setInterval(nextSlide, 8000)
})
onBeforeUnmount(() => {
  clearInterval(interval)
})
</script>


<template>
  <section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">What Our Customers Say</h2>

      <!-- Carousel Wrapper -->
      <div class="overflow-hidden relative">
        <div class="flex transition-transform duration-700 ease-in-out"
          :style="{ transform: `translateX(-${currentIndex * slideWidth}%)` }">
          <div v-for="(testimonial, index) in testimonials" :key="index" class="w-full sm:w-1/2 flex-shrink-0 px-4">
            <div class="bg-white rounded-xl shadow-lg p-6 h-full flex flex-col justify-between">
              <p class="text-gray-700 italic mb-6">
                "{{ testimonial.quote }}"
              </p>
              <div class="flex items-center gap-4 mt-auto">
                <img :src="testimonial.image" :alt="testimonial.name"
                  class="w-14 h-14 rounded-full object-cover border-2 border-indigo-500" />
                <div>
                  <h4 class="text-lg font-semibold text-gray-900">{{ testimonial.name }}</h4>
                  <span class="text-sm text-gray-500">{{ testimonial.role }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <button @click="prevSlide"
          class="absolute left-2 top-1/2 -translate-y-1/2 bg-indigo-100 hover:bg-indigo-200 w-10 h-10 rounded-full flex items-center justify-center shadow">‹</button>

        <button @click="nextSlide"
          class="absolute right-2 top-1/2 -translate-y-1/2 bg-indigo-100 hover:bg-indigo-200 w-10 h-10 rounded-full flex items-center justify-center shadow">›</button>
      </div>

      <!-- Indicators -->
      <div class="flex justify-center gap-2 mt-6">
        <span v-for="(t, index) in totalSlides" :key="index" class="w-3 h-3 rounded-full cursor-pointer"
          :class="index === currentIndex ? 'bg-indigo-600' : 'bg-gray-300'" @click="currentIndex = index"></span>
      </div>
    </div>
  </section>
</template>
