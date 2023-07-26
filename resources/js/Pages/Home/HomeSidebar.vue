<template>
    <div class="col-span-12 lg:col-span-4 hidden lg:block h-screen sticky top-44">
        <div
            class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center  px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
            <!-- profile image -->
            <img src=""
                class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]"
                alt="about avatar" />
            <div class="pt-[100px] pb-8">
                <h1 class="mt-6 mb-1 text-[26px] font-semibold "> Monalisa Ashley </h1>
                <h3 class="mb-4 text-[#7B7B7B] inline-block  px-5 py-1.5 rounded-lg ">
                    Ui/Ux Designer </h3>
                <div class="flex justify-center space-x-3">
                    <!-- facebook icon and link -->
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                        <HomeIcon>
                            <BeakerIcon class="h-6 w-6 text-blue-500" />
                        </HomeIcon>
                    </a>
                    <!-- twitter icon and link -->
                    <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                        <span class="socialbtn text-[#1C9CEA]">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                    </a>
                    <!-- dribbble icon and link -->
                    <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                        <span class="socialbtn text-[#e14a84]">
                            <i class="fa-brands fa-dribbble"></i>
                        </span>
                    </a>
                    <!-- linkedin icon and link -->
                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                        <span class="socialbtn text-[#0072b1]">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </span>
                    </a>
                </div>
                <input type="text" name="" id="">
                <div class="p-7 rounded-2xl mt-7 bg-[#F3F6F6] ">
                    <div class="flex border-b border-[#E3E3E3]  pb-2.5">
                        <span class="socialbtn bg-white  text-[#E93B81] shadow-md">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </span>
                        <div class="text-left ml-2.5">
                            <p class="text-xs text-[#44566C] "> Phone </p>
                            <p class="">+123 456 7890</p>
                        </div>
                    </div>
                    <div class="flex border-b border-[#E3E3E3] py-2.5">
                        <span class="socialbtn bg-white  text-[#6AB5B9] shadow-md">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </span>
                        <div class="text-left ml-2.5">
                            <p class="text-xs text-[#44566C] "> Email </p>
                            <p class="">example@mail.com</p>
                        </div>
                    </div>
                    <div class="flex border-b border-[#E3E3E3]  py-2.5">
                        <span class="socialbtn bg-white text-[#FD7590] shadow-md">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <div class="text-left ml-2.5">
                            <p class="text-xs text-[#44566C] "> Location </p>
                            <p class="">Hong kong china</p>
                        </div>
                    </div>
                    <div class="flex py-2.5">
                        <span class="socialbtn bg-white  text-[#C17CEB] shadow-md">
                            <i class="fa-solid fa-calendar-days"></i>
                        </span>
                        <div class="text-left ml-2.5">
                            <p class="text-xs text-[#44566C] "> Birthday </p>
                            <p class="">May 27, 1990</p>
                        </div>
                    </div>
                </div>

                <!-- dowanload button -->
                <button class="dowanload-btn">
                    <img class="mr-3" src="" alt="icon" /> Download CV </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import HomeIcon from '@/Components/HomeComponent/HomeIcon.vue';
import { BeakerIcon } from '@heroicons/vue/24/solid'

</script>

