
<template>
    <div class="w-full min-h-screen bg-fixed bg-center bg-no-repeat bg-cover bg-homeBg  md:pb-16">

        <nav id="navbar" class="hidden lg:hidden">
            <ul class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white ">
                <li>
                    <a class="mobile-menu-items" href="./aboutOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-regular fa-user"></i>
                        </span> About </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="./resumeOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-regular fa-file-lines"></i>
                        </span> Resume </a>
                </li>
                <li>
                    <a class="mobile-menu-items-active" href="./portfiloOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fas fa-briefcase"></i>
                        </span> Works </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="./blogOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-brands fa-blogger"></i>
                        </span> Blogs </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="./contactOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-solid fa-address-book"></i>
                        </span> Contact </a>
                </li>
            </ul>
        </nav>
        <!-- mobile menu end -->

        <div class="container mx-auto grid grid-cols-12 md:gap-10 justify-between lg:mt-[200px]">
            <HomeSidebar />
            <div class="col-span-12 lg:col-span-8">
                <header class="lg:w-[560px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white ">
                    <nav class="hidden lg:block">
                        <ul class="flex justify-evenly">
                            <li>
                                <Link preserve-scroll href="/"
                                    :class="{ 'bg-gradient-to-r from-[#FA5252] to-[#DD2476] text-white scale-110  ': page.url == '/' }"
                                    class=" hover:bg-gradient-to-r from-[#FA5252] to-[#DD2476] hover:text-white transition-all ease-in-out duration-300 hover:scale-110 h-20 w-20 flex items-center justify-center flex-col mb-3 bg-gray-300 text-gray-800 rounded-md ">
                                <span class="mb-1 text-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="h-6 w-6 ">
                                        <path fill-rule="evenodd"
                                            d="M10.5 3.798v5.02a3 3 0 01-.879 2.121l-2.377 2.377a9.845 9.845 0 015.091 1.013 8.315 8.315 0 005.713.636l.285-.071-3.954-3.955a3 3 0 01-.879-2.121v-5.02a23.614 23.614 0 00-3 0zm4.5.138a.75.75 0 00.093-1.495A24.837 24.837 0 0012 2.25a25.048 25.048 0 00-3.093.191A.75.75 0 009 3.936v4.882a1.5 1.5 0 01-.44 1.06l-6.293 6.294c-1.62 1.621-.903 4.475 1.471 4.88 2.686.46 5.447.698 8.262.698 2.816 0 5.576-.239 8.262-.697 2.373-.406 3.092-3.26 1.47-4.881L15.44 9.879A1.5 1.5 0 0115 8.818V3.936z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span> About Me </Link>
                            </li>
                            <li>
                                <Link preserve-scroll href="/blog"
                                    :class="{ 'bg-gradient-to-r from-[#FA5252] to-[#DD2476] text-white scale-110': page.url == '/blog' }"
                                    class=" hover:bg-gradient-to-r from-[#FA5252] to-[#DD2476] hover:text-white transition-all ease-in-out duration-300 hover:scale-110 h-20 w-20 flex items-center justify-center flex-col mb-3 bg-gray-300 text-gray-800 rounded-md">
                                <span class="mb-1 text-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="h-6 w-6 ">
                                        <path fill-rule="evenodd"
                                            d="M10.5 3.798v5.02a3 3 0 01-.879 2.121l-2.377 2.377a9.845 9.845 0 015.091 1.013 8.315 8.315 0 005.713.636l.285-.071-3.954-3.955a3 3 0 01-.879-2.121v-5.02a23.614 23.614 0 00-3 0zm4.5.138a.75.75 0 00.093-1.495A24.837 24.837 0 0012 2.25a25.048 25.048 0 00-3.093.191A.75.75 0 009 3.936v4.882a1.5 1.5 0 01-.44 1.06l-6.293 6.294c-1.62 1.621-.903 4.475 1.471 4.88 2.686.46 5.447.698 8.262.698 2.816 0 5.576-.239 8.262-.697 2.373-.406 3.092-3.26 1.47-4.881L15.44 9.879A1.5 1.5 0 0115 8.818V3.936z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span> Blog </Link>
                            </li>
                            <li> <a class=" hover:bg-gradient-to-r from-[#FA5252] to-[#DD2476] hover:text-white transition-all ease-in-out duration-300 hover:scale-110 h-20 w-20 flex items-center justify-center flex-col mb-3 bg-gray-300 text-gray-800 rounded-md "
                                    href="./aboutOne.html">
                                    <span class="mb-1 text-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-6 w-6 ">
                                            <path fill-rule="evenodd"
                                                d="M10.5 3.798v5.02a3 3 0 01-.879 2.121l-2.377 2.377a9.845 9.845 0 015.091 1.013 8.315 8.315 0 005.713.636l.285-.071-3.954-3.955a3 3 0 01-.879-2.121v-5.02a23.614 23.614 0 00-3 0zm4.5.138a.75.75 0 00.093-1.495A24.837 24.837 0 0012 2.25a25.048 25.048 0 00-3.093.191A.75.75 0 009 3.936v4.882a1.5 1.5 0 01-.44 1.06l-6.293 6.294c-1.62 1.621-.903 4.475 1.471 4.88 2.686.46 5.447.698 8.262.698 2.816 0 5.576-.239 8.262-.697 2.373-.406 3.092-3.26 1.47-4.881L15.44 9.879A1.5 1.5 0 0115 8.818V3.936z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span> About </a>
                            </li>
                            <li> <a class=" hover:bg-gradient-to-r hover:from-[#FA5252] hover:to-[#DD2476] hover:text-white transition-all ease-in-out duration-300 hover:scale-110 h-20 w-20 flex items-center justify-center flex-col mb-3 bg-gray-300 text-gray-800 rounded-md "
                                    href="./aboutOne.html">
                                    <span class="mb-1 text-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-6 w-6 ">
                                            <path fill-rule="evenodd"
                                                d="M10.5 3.798v5.02a3 3 0 01-.879 2.121l-2.377 2.377a9.845 9.845 0 015.091 1.013 8.315 8.315 0 005.713.636l.285-.071-3.954-3.955a3 3 0 01-.879-2.121v-5.02a23.614 23.614 0 00-3 0zm4.5.138a.75.75 0 00.093-1.495A24.837 24.837 0 0012 2.25a25.048 25.048 0 00-3.093.191A.75.75 0 009 3.936v4.882a1.5 1.5 0 01-.44 1.06l-6.293 6.294c-1.62 1.621-.903 4.475 1.471 4.88 2.686.46 5.447.698 8.262.698 2.816 0 5.576-.239 8.262-.697 2.373-.406 3.092-3.26 1.47-4.881L15.44 9.879A1.5 1.5 0 0115 8.818V3.936z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span> About </a>
                            </li>
                            <li> <a class=" hover:bg-gradient-to-r hover:from-[#FA5252] hover:to-[#DD2476] hover:text-white transition-all ease-in-out duration-300 hover:scale-110 h-20 w-20 flex items-center justify-center flex-col mb-3 bg-gray-300 text-gray-800 rounded-md "
                                    href="./aboutOne.html">
                                    <span class="mb-1 text-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-6 w-6 ">
                                            <path fill-rule="evenodd"
                                                d="M10.5 3.798v5.02a3 3 0 01-.879 2.121l-2.377 2.377a9.845 9.845 0 015.091 1.013 8.315 8.315 0 005.713.636l.285-.071-3.954-3.955a3 3 0 01-.879-2.121v-5.02a23.614 23.614 0 00-3 0zm4.5.138a.75.75 0 00.093-1.495A24.837 24.837 0 0012 2.25a25.048 25.048 0 00-3.093.191A.75.75 0 009 3.936v4.882a1.5 1.5 0 01-.44 1.06l-6.293 6.294c-1.62 1.621-.903 4.475 1.471 4.88 2.686.46 5.447.698 8.262.698 2.816 0 5.576-.239 8.262-.697 2.373-.406 3.092-3.26 1.47-4.881L15.44 9.879A1.5 1.5 0 0115 8.818V3.936z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span> About </a>
                            </li>
                        </ul>
                    </nav>
                </header>

                <section class="bg-white   lg:rounded-2xl ">
                    <div class="container  mb-8 px-4 sm:px-5 md:px-10 lg:px-[60px]">
                        <slot />
                    </div>

                    <footer class="overflow-hidden rounded-b-2xl bg-[#f8fbfb] ">
                        <p class="py-6 text-center text-gray-lite ">Shubham </p>
                    </footer>
                </section>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import HomeSidebar from '@/Pages/Home/HomeSidebar.vue';
import { usePage } from '@inertiajs/vue3'

const page = usePage()
console.log(page.url);
// defineProps({
//     canLogin: {
//         type: Boolean,
//     },
//     canRegister: {
//         type: Boolean,
//     },

// });
</script>
