<script setup>
import CarCard from "@/Components/CarCard.vue";
import HomeLayout from "@/Layouts/HomeLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
  canRegister: {
    type: Boolean,
  },
  canLogin: {
    type: Boolean,
  },
  cars: {
    type: Object,
  },
});
</script>

<template>
  <Head title="Laravel - Vue Challenge" />

  <HomeLayout :canRegister="canRegister" :canLogin="canLogin">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Laravel - Vue Challenge
      </h2>
    </template>

    <div class="md:flex mt-8 mx-4 flex-wrap py-20 gap-4 justify-center">
      <div class="w-1/5" v-for="car in cars" :key="car.brand">
        <CarCard :car="car" />
      </div>
    </div>
  </HomeLayout>
</template>
