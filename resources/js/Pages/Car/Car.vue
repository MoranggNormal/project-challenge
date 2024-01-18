<script setup>
import HomeLayout from "@/Layouts/HomeLayout.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { Head } from "@inertiajs/vue3";

defineProps(["car", "revision"]);
</script>

<template>
  <HomeLayout>
    <template #header>
      <Head :title="car.model" />
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Car Revision
      </h2>
    </template>

    <div
      class="my-8 p-2 rounded-lg absolute w-[80%] bg-white translate-x-[-50%] translate-y-[-50%] left-[50%] md:left-0 md:translate-x-0 md:translate-y-0 md:m-4 md:w-[calc(50%-2rem)]"
      v-if="$page.props.auth.user && $page.props.auth.user.id === car.owner_id"
    >
      <SecondaryButton>Edit</SecondaryButton>
    </div>

    <div
      className="w-full h-full rounded-md  flex flex-col-reverse md:flex-row"
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
          {{
            revision.description
              ? revision.description
              : "Description not available"
          }}
        </p>
      </div>

      <div className="w-full md:w-1/2 h-full">
        <img :src="car.image_url" :alt="car.model" class="w-full h-full" />
      </div>
    </div>
  </HomeLayout>
</template>
