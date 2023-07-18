<template>
  <div :class="{
    'bg-white': type == 'white',
    'bg-red-200': type == 'danger',
    'bg-orange-200': type == 'warning',
    'bg-green-200': type == 'success',
  }" class="flex items-center w-full max-w-xs p-4 text-gray-500 rounded-lg shadow " role="alert">

    <div class="mr-3 text-sm font-normal">{{ title }}</div>
    <button @click="emit('remove')" type="button"
      class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 "
      data-dismiss-target="#toast-default" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
    </button>
  </div>
</template>

<script setup>
import { onMounted } from 'vue';
defineProps({
  title: String,
  type: {
    type: String,
    default: 'white'
  }
})
const emit = defineEmits(['remove'])
onMounted(() => {
  setTimeout(() => {
    emit('remove');
  }, 1000)
})
</script>

