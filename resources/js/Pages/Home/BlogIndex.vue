<template>
    <Head>
        <title>Blog</title>
        <meta name="description" content="Home page">
    </Head>
    <div class="py-12 ">
        <h2 class="after-effect after:left-48 lg:mt-0">Blog</h2>
    </div>
    <div class="grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 mt-[30px] grid gap-x-10 gap-y-7 mb-6">

        <div v-for="(item, index) in props.blogs.data" :key="item.id"
            class="p-5 rounded-lg mb-2 h-full bg-[#fcf4ff] hover:shadow-md hover:bg-red-100 ">
            <!-- <div class="overflow-hidden rounded-lg">
                <a href="#ex1" rel="modal:open">
                    <img class="rounded-lg w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110"
                        src="" alt="blog image">
                </a>
            </div> -->

            <h3 class="text-lg font-medium  duration-300 transition cursor-pointer mt-3 pr-4 hover:text-[#FA5252] ">
                <a href="#ex1" rel="modal:open">{{ item.title }}</a>
            </h3>
            <p>{{ item.body }}</p>
            <div class="flex mt-4 text-tiny text-gray-lite flex items-baseline  text-xs ">
                <span>17 April </span>
                <span class=" ml-3 ">{{ item.postcategory.title }}</span>
            </div>
        </div>
    </div>
</template>

<script>
import HomeLayout from '@/Layouts/HomeLayout.vue'
export default { layout: HomeLayout }
</script>
<script setup>
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    blogs: Object
})

</script>

