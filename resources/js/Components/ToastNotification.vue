<template>
  <div class="fixed space-y-4 bottom-4 right-4">
    <template v-for="(item, index) in toast.items" :key="item.key">
      <ToastNotificationItem :title="item.title" :type="item.type" @remove="remove(item.id)" />
    </template>



  </div>
</template>

<script setup>
import ToastNotificationItem from './ToastNotificationItem.vue';
import { router, usePage } from '@inertiajs/vue3';
import toast from '@/Stores/toast';
import { onMounted } from 'vue';
import { onUnmounted } from 'vue';
defineProps({
  title: String,
  type: {
    type: String,
    default: 'white'
  }
})

onMounted(() => {
  console.log(toast.items);
})
// const items = ref([
//   { 'id': Symbol(), 'title': 'this is title', 'type': 'danger' },
// ])

const remove = (i) => {
  toast.items.splice(i, 1);
}


// The line `const page = usePage();` is using the `usePage` function from the `@inertiajs/vue3`
// package to access the current page's data and properties. It allows you to access the properties
// passed from the server to the client-side Vue component. In this case, it is used to access the
// `toast` property from the page's props, which is then used to add a new item to the `items` array
// when the router's `finish` event is triggered.
const page = usePage();

// The `const removeFinishEventListener = router.on('finish', () => { ... })` code is creating an event
// listener that listens for the `finish` event on the router.
const removeFinishEventListener = router.on('finish', () => {
  if (page.props.toast) {
    toast.items.unshift({
      'key': Symbol(), 'title': page.props.toast.title, 'type': page.props.toast.type
    })
  }
})

// The `onUnmounted(() => { removeFinishEventListener() })` function is a lifecycle hook provided by
// Vue 3. It is used to clean up any resources or event listeners when the component is unmounted or
// destroyed.
onUnmounted(() => { removeFinishEventListener() })

</script>

