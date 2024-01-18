<script setup>
import HomeLayout from "@/Layouts/HomeLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps(["car", "revision"]);
</script>

<template>
  <Head :title="car.model" />

  <HomeLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Car Revision
      </h2>
    </template>

    <div
      className="w-full h-full rounded-md border flex flex-col-reverse md:flex-row"
    >
      <div
        className="w-full md:w-1/2 p-4 h-full flex flex-col  items-center mt-40"
      >
        <h1 class="text-xl font-semibold">
          {{ car.model ? car.model : "Model not available" }}, {{ car.year }}
        </h1>

        <p class="mt-2 text-gray-400">
          {{ car.brand ? car.brand : "Brand not available" }}
        </p>
        <p className="mt-3 text-sm w-1/2">
          {{ revision.description ? revision.description : "Description not available" }}
        </p>
      </div>

      <div className="w-full md:w-1/2 h-full">
        <img :src="car.image_url" :alt="car.model" class="w-full h-full" />
      </div>
    </div>
  </HomeLayout>
</template>
