<script setup>
import { Link } from "@inertiajs/vue3";

defineProps(["car"]);
</script>

<template>
  <div
    class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center"
    :style="{ backgroundImage: `url(${car.image_url})` }"
  >
    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
      <div class="px-10 max-w-xl">
        <h2 class="text-2xl text-white font-semibold">
          {{ car.model ? car.model : "Model not available" }}, {{ car.year }}
        </h2>
        <p class="mt-2 text-gray-400">
          {{ car.brand ? car.brand : "Brand not available" }}
        </p>

        <Link
          :href="'/car/' + car.id"
          class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none"
          >Read more
          <svg
            class="h-5 w-5 mx-2"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </Link>
      </div>
    </div>
  </div>
</template>
