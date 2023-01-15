
<script setup lang="ts">
import { ExclamationCircleIcon } from '@heroicons/vue/24/outline';
const props = defineProps<{
    errors: string[] ,
 
}>();
</script>

<template>
    <div v-if="errors.length > 0" class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 mb-6" role="alert">
  <div class="flex">
    <div class="py-1">
        <ExclamationCircleIcon class=" h-6 w-6 text-red-500 mr-4" />
    </div>
    <div>
      <p class="font-bold">Oupps Erreur !!!</p>
      <p class="text-sm" v-for="error,index in errors" :key="index">{{ error }}</p>
    </div>
  </div>
</div>
</template>