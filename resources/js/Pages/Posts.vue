<template >
    <nav class="container mx-auto mt-3 bg-gray-50">
        <div class="flex">

        </div>
    </nav>
    <div class="flex container">
        <div class="w-2/5 shrink-0">
            sidebar
        </div>
        <div class="container mx-auto w-3/5 ">
            <div @mouseenter="" @mouseleave="" class="relative bg-white rounded rounded-lg mb-5 shadow shadow-md hover:shadow-lg hover:bg-yellow-200 hover:cursor-pointer p-5"
                v-for="post in posts" :key="post.id">
                <div>
                    <h2 class="text-xl text-gray-900 font-semibold">{{ post.title }}</h2>
                    <p>{{ post.body }}</p>
                    <div class="flex space-x-5 mt-5  text-xs">
                        <span class="font-bold">Author Name</span> <span class="font-bold">June 15, 2023 </span>
                    </div>
                </div>
                <span class="hidden absolute right-5 bottom-5">read..</span>
            </div>
        </div>
    </div>
</template>

<script setup>
const readMoreTest = ref('false')
defineProps({
    posts: Object
})

</script>
