<template>
  <head>
    <title>My app</title>
  </head>

  <section class="relative mx-auto bg-slate-500">
    <div class="container mx-auto">
      <nav>
        this is nav bar
      </nav>
      <div class="flex p-10">
        <div class="w-2/6 shrink-0">
          <slot name="sidebar" />
        </div>
        <div class="w-4/6">
          <slot />
        </div>
      </div>
    </div>
  </section>
  <ToastNotification />
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
// import Nav from '@/Shared/Nav.vue';
import TextInput from '@/Components/TextInput.vue';
import ToastNotification from '@/Components/ToastNotification.vue';

</script>

