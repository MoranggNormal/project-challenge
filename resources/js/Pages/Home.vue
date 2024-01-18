<script setup>
import HomeLayout from "@/Layouts/HomeLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
  canRegister: {
    type: Boolean,
  },
  canLogin: {
    type: Boolean,
  },
});
</script>

<template>
  <Head title="Home" />

  <HomeLayout :canRegister="canRegister" :canLogin="canLogin">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Laravel - Vue Challenge
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">You're logged in!</div>
        </div>
      </div>
    </div>
  </HomeLayout>
</template>
