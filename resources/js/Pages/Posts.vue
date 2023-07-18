<template >
    <div class="relative p-5 mb-5 bg-white rounded rounded-lg shadow shadow-md hover:shadow-lg hover:bg-yellow-200 hover:cursor-pointer"
        v-for="post in posts.data" :key="post.id">
        <Link :href="`/posts/${post.id}`">
        <h2 class="text-xl font-semibold text-gray-900">{{ post.title }}</h2>
        <p>{{ post.body }}</p>
        <div class="flex mt-5 space-x-5 text-xs">
            <span class="font-bold">{{ post.user.name }}</span> <span class="font-bold">{{ post.created_at }}
            </span>
        </div>
        </Link>
        <span class="absolute hidden right-5 bottom-5">read..</span>
    </div>
    <div class="flex">

        <template v-for="link in posts.links" :key="link.index">
            <Link v-if="link.url" :href="link.url" :class="{ 'bg-blue-600': link.active, 'bg-white': !link.active }"
                v-html="link.label"
                class="items-center hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform rounded-md sm:flex hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
            </Link>
            <span v-else :class="{ 'bg-blue-600': link.active, 'bg-white': !link.active }" v-html="link.label"
                class="items-center hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform rounded-md sm:flex hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200"></span>
        </template>

    </div>
   
    <form @submit.prevent="submit">
        <button>Submit</button>
    </form>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import ToastNotification from '@/Components/ToastNotification.vue';
const name = ref('')
defineProps({
    posts: Object
})
const form = useForm({})
function submit() {
    form.post('/test',{
        preserveScroll: true,
    });
}

</script>
