

<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="Home page">
    </Head>
    <div class="w-full min-h-screen bg-fixed bg-center bg-no-repeat bg-cover bg-homeBg dark:bg-homeTwoBg-dark md:pb-16">
        <!-- <div class="section-bg">
            <div class="flex justify-between w-full px-4">
                <a href="/">
                    <img class="h-[26px] lg:h-[32px]" src="" alt="logo" />
                </a>
                <div class="flex items-center">
                    <button id="theme-toggle" type="button" class="dark-light-btn">
                        <i id="theme-toggle-dark-icon" class="hidden text-xl fa-solid fa-moon"></i>
                        <i id="theme-toggle-light-icon" class="hidden text-xl fa-solid fa-sun"></i>
                    </button>
                    <button id="menu-toggle" type="button" class="menu-toggle-btn">
                        <i id="menu-toggle-open-icon" class="text-xl fa-solid fa-bars "></i>
                        <i id="menu-toggle-close-icon" class="hidden text-xl fa-solid fa-xmark "></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- mobile menu start -->
        <nav id="navbar" class="hidden lg:hidden">
            <ul
                class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
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
            <!-- sidber personal info -->

            <HomeSidebar />

            <div class="col-span-12 lg:col-span-8">
                <!-- header for mobile devices start -->
                <header
                    class="lg:w-[560px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white dark:bg-[#111111]">
                    <nav class="hidden lg:block">
                        <ul class="flex">
                            <li> <a class="menu-item" href="./aboutOne.html">
                                    <span class="mb-1 text-xl">
                                        <i class="fa-regular fa-user"></i>
                                    </span> About </a></li>
                            <li> <a class="menu-item" href="./resumeOne.html">
                                    <span class="mb-1 text-xl">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span> Resume </a></li>
                            <li> <a class="menu-active" href="./portfiloOne.html">
                                    <span class="mb-1 text-xl">
                                        <i class="fas fa-briefcase"></i>
                                    </span> Works </a></li>
                            <li><a class="menu-item" href="./blogOne.html">
                                    <span class="mb-1 text-xl">
                                        <i class="fa-brands fa-blogger"></i>
                                    </span> Blogs </a></li>
                            <li> <a class="menu-item" href="./contactOne.html">
                                    <span class="mb-1 text-xl">
                                        <i class="fa-solid fa-address-book"></i>
                                    </span> Contact </a></li>
                        </ul>
                    </nav>
                </header>
                <!-- header for mobile devices start -->

                <!-- about me section start -->
                <section id="portfolio" class="bg-white   lg:rounded-2xl dark:bg-[#111111]">
                    <div class="container  mb-8 px-4 sm:px-5 md:px-10 lg:px-[60px]">
                        <div class="py-12 ">
                            <h2 class="after-effect after:left-48 lg:mt-0">Portfolio</h2>
                            <!-- fillter button group -->
                            <!-- fillter group buttons -->
                            <ul
                                class="button-group isotop-menu-wrapper mt-[30px] flex w-full justify-start md:justify-end flex-wrap font-medium">
                                <li class="mr-4 fillter-btn md:mx-4 is-checked" data-filter="*">All</li>
                                <li class="mr-4 fillter-btn md:mx-4" data-filter=".dev">Video</li>
                                <li class="mr-4 fillter-btn md:mx-4" data-filter=".plugin"> Web Design</li>
                                <li class="mr-4 fillter-btn md:mx-4" data-filter=".branding"> Logo</li>
                                <li class="mr-4 fillter-btn md:mx-4" data-filter=".custom">Graphic Design</li>
                            </ul>
                        </div>
                        <!-- End py-12 -->

                        <div id="isotop-gallery-wrapper" class="mymix portfolio_list-two two-col ">
                            <div class="grid-sizer"></div>
                            <!-- portfolio items one start -->
                            <div class="portfolio_list-two-items isotop-item plugin custom ">
                                <div
                                    class="rounded-lg bg-[#fff0f0] p-6 dark:bg-transparent dark:border-[2px] border-[#212425]">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#portfiloOne" rel="modal:open">
                                            <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                                src="" alt="portfolio image" />
                                        </a>
                                    </div>
                                    <span
                                        class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">UI/UX</span>
                                    <h2
                                        class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                        <a href="#portfiloOne" rel="modal:open"> Chul urina </a>
                                    </h2>
                                </div>
                            </div>

                            <!-- modal start for item one  -->
                            <div id="portfiloOne" class="modal-container modal">
                                <div
                                    class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                    <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                        UI/UX Project
                                    </h2>
                                    <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                                Project :&nbsp;
                                                <span class="font-medium"> Website</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                                Langages :&nbsp;
                                                <span class="font-medium">Photoshop, Figma</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p
                                                class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                                Client :&nbsp; <span class="font-medium">Envato</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                                Preview :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                    <a href="https://www.envato.com" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Mollitia placeat magnam possimus iusto blanditiis pariatur
                                        labore explicabo quo repellat hic dolorum numquam
                                        asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                        odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                        quidem! Quas magni distinctio dolorum dolore natus, vel
                                        numquam accusamus. Nostrum eligendi recusandae qui tempore
                                        deserunt!
                                    </p>
                                    <div class="pr-3">
                                        <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src=""
                                            alt="portfolio image" />
                                    </div>
                                </div>
                                <!--  <a href="#close-modal" rel="modal:close"
                                    class="close bg-close-light dark:bg-close-dark">Close</a> -->
                            </div>

                            <!-- portfolio items two start -->
                            <div class="portfolio_list-two-items isotop-item dev branding ">
                                <div
                                    class="rounded-lg bg-[#fff3fc] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#portfiloTwo" rel="modal:open">
                                            <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                                src="" alt="portfolio image" />
                                        </a>
                                    </div>
                                    <span
                                        class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">Logo</span>
                                    <h2
                                        class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                        <a href="#portfiloTwo" rel="modal:open">Chul urina</a>
                                    </h2>
                                </div>
                            </div>

                            <!-- modal start for item two  -->
                            <div id="portfiloTwo" class="modal-container modal">
                                <div
                                    class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                    <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                        Logo Project
                                    </h2>
                                    <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                                Project :&nbsp;
                                                <span class="font-medium"> Website</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                                Langages :&nbsp;
                                                <span class="font-medium">Photoshop, Figma</span>
                                            </p>
                                        </div>
                                        <div class="space-y-2">
                                            <p
                                                class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                                Client :&nbsp; <span class="font-medium">Envato</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                                Preview :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                    <a href="https://www.envato.com" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Mollitia placeat magnam possimus iusto blanditiis pariatur
                                        labore explicabo quo repellat hic dolorum numquam
                                        asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                        odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                        quidem! Quas magni distinctio dolorum dolore natus, vel
                                        numquam accusamus. Nostrum eligendi recusandae qui tempore
                                        deserunt!
                                    </p>
                                    <div class="pr-3">
                                        <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src=""
                                            alt="portfolio image" />
                                    </div>
                                </div>
                                <!--  <a href="#close-modal" rel="modal:close"
                                    class="close bg-close-light dark:bg-close-dark">Close</a> -->
                            </div>

                            <!-- portfolio items three start -->
                            <div class="portfolio_list-two-items isotop-item plugin ">
                                <div
                                    class="rounded-lg bg-[#fff3fc] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#portfiloThree" rel="modal:open">
                                            <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                                src="" alt="portfolio image" />
                                        </a>
                                    </div>
                                    <span
                                        class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">UI/UX</span>
                                    <h2
                                        class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                        <a href="#portfiloThree" rel="modal:open">
                                            T-Shirt Design
                                        </a>
                                    </h2>
                                </div>
                            </div>

                            <!-- modal start for item three start -->
                            <div id="portfiloThree" class="modal-container modal">
                                <div
                                    class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                    <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                        T-Shirt Design Project
                                    </h2>
                                    <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                                Project :&nbsp;
                                                <span class="font-medium"> Website</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                                Langages :&nbsp;
                                                <span class="font-medium">Photoshop, Figma</span>
                                            </p>
                                        </div>
                                        <div class="space-y-2">
                                            <p
                                                class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                                Client :&nbsp; <span class="font-medium">Envato</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                                Preview :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                    <a href="https://www.envato.com" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Mollitia placeat magnam possimus iusto blanditiis pariatur
                                        labore explicabo quo repellat hic dolorum numquam
                                        asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                        odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                        quidem! Quas magni distinctio dolorum dolore natus, vel
                                        numquam accusamus. Nostrum eligendi recusandae qui tempore
                                        deserunt!
                                    </p>
                                    <div class="pr-3">
                                        <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src=""
                                            alt="portfolio image" />
                                    </div>
                                </div>
                                <!--  -->
                                <!--  <a href="#close-modal" rel="modal:close"
                                    class="close bg-close-light dark:bg-close-dark">Close</a> -->
                            </div>

                            <!-- portfolio items four start -->
                            <div class="portfolio_list-two-items isotop-item dev custom ">
                                <div
                                    class="rounded-lg p-6 bg-[#e9faff] dark:bg-transparent dark:border-[2px] border-[#212425]">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#portfiloFour" rel="modal:open">
                                            <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                                src="" alt="portfolio image" />
                                        </a>
                                    </div>
                                    <span
                                        class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">UI/UX</span>
                                    <h2
                                        class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                        <a href="#portfiloFour" rel="modal:open">Packaging Box
                                        </a>
                                    </h2>
                                </div>
                            </div>

                            <!-- modal start for item one start -->
                            <div id="portfiloFour" class="modal-container modal">
                                <div
                                    class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                    <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                        Packaging Box Project
                                    </h2>
                                    <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                                Project :&nbsp;
                                                <span class="font-medium"> Website</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                                Langages :&nbsp;
                                                <span class="font-medium">Photoshop, Figma</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p
                                                class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                                Client :&nbsp; <span class="font-medium">Envato</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                                Preview :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                    <a href="https://www.envato.com" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Mollitia placeat magnam possimus iusto blanditiis pariatur
                                        labore explicabo quo repellat hic dolorum numquam
                                        asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                        odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                        quidem! Quas magni distinctio dolorum dolore natus, vel
                                        numquam accusamus. Nostrum eligendi recusandae qui tempore
                                        deserunt!
                                    </p>
                                    <div class="pr-3">
                                        <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src=""
                                            alt="portfolio image" />
                                    </div>
                                </div>
                                <!--  <a href="#close-modal" rel="modal:close"
                                    class="close bg-close-light dark:bg-close-dark">Close</a> -->
                            </div>

                            <!-- modal start for item five start -->
                            <div class="portfolio_list-two-items isotop-item branding ">
                                <div
                                    class="rounded-lg bg-[#fffae9] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#portfiloFive" rel="modal:open">
                                            <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                                src="" alt="portfolio image" />
                                        </a>
                                    </div>
                                    <span class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">Web
                                        Design</span>
                                    <h2
                                        class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                        <a href="#portfiloFive" rel="modal:open"> Aura Dione</a>
                                    </h2>
                                </div>
                            </div>

                            <!-- modal start for item five start -->
                            <div id="portfiloFive" class="modal-container modal">
                                <div
                                    class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                    <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                        Aura Dione Project
                                    </h2>
                                    <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                                Project :&nbsp;
                                                <span class="font-medium"> Website</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                                Langages :&nbsp;
                                                <span class="font-medium">Photoshop, Figma</span>
                                            </p>
                                        </div>
                                        <div class="space-y-2">
                                            <p
                                                class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                                Client :&nbsp; <span class="font-medium">Envato</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                                Preview :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                    <a href="https://www.envato.com" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Mollitia placeat magnam possimus iusto blanditiis pariatur
                                        labore explicabo quo repellat hic dolorum numquam
                                        asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                        odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                        quidem! Quas magni distinctio dolorum dolore natus, vel
                                        numquam accusamus. Nostrum eligendi recusandae qui tempore
                                        deserunt!
                                    </p>
                                    <div class="pr-3">
                                        <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src=""
                                            alt="portfolio image" />
                                    </div>
                                </div>
                                <!--  <a href="#close-modal" rel="modal:close"
                                    class="close bg-close-light dark:bg-close-dark">Close</a> -->
                            </div>

                            <!-- portfolio items Six start -->
                            <div class="portfolio_list-two-items isotop-item branding ">
                                <div
                                    class="rounded-lg bg-[#f4f4ff] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#portfiloSix" rel="modal:open">
                                            <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                                src="" alt="portfolio image" />
                                        </a>
                                    </div>
                                    <span
                                        class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">Video</span>
                                    <h2
                                        class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                        <a href="#portfiloSix" rel="modal:open">
                                            Modern Bag Design
                                        </a>
                                    </h2>
                                </div>
                            </div>

                            <!-- modal start for item six start -->
                            <div id="portfiloSix" class="modal-container modal">
                                <div
                                    class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                    <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                        Modern Bag Design Project
                                    </h2>
                                    <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                                Project :&nbsp;
                                                <span class="font-medium"> Website</span>
                                            </p>

                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                                Langages :&nbsp;
                                                <span class="font-medium">Photoshop, Figma</span>
                                            </p>

                                        </div>

                                        <div class="space-y-2">
                                            <p
                                                class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                                Client :&nbsp; <span class="font-medium">Envato</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                                Preview :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                    <a href="https://www.envato.com" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Mollitia placeat magnam possimus iusto blanditiis pariatur
                                        labore explicabo quo repellat hic dolorum numquam
                                        asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                        odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                        quidem! Quas magni distinctio dolorum dolore natus, vel
                                        numquam accusamus. Nostrum eligendi recusandae qui tempore
                                        deserunt!
                                    </p>
                                    <div class="pr-3">
                                        <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src=""
                                            alt="portfolio image" />
                                    </div>
                                </div>
                                <!--  <a href="#close-modal" rel="modal:close"
                                    class="close bg-close-light dark:bg-close-dark">Close</a> -->
                            </div>

                            <!-- modal start for item Seven start -->
                            <div class="portfolio_list-two-items isotop-item plugin ">
                                <div
                                    class="rounded-lg bg-[#f4f4ff] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#portfiloSeven" rel="modal:open">
                                            <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                                src="" alt="portfolio image" />
                                        </a>
                                    </div>
                                    <span
                                        class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">Video</span>
                                    <h2
                                        class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                        <a href="#portfiloSeven" rel="modal:open"> Chul urina </a>
                                    </h2>
                                </div>
                            </div>

                            <!-- modal start for item Seven start -->
                            <div id="portfiloSeven" class="modal-container modal">
                                <div
                                    class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                    <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                        UI/UX Project
                                    </h2>
                                    <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                                Project :&nbsp;
                                                <span class="font-medium"> Website</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                                Langages :&nbsp;
                                                <span class="font-medium">Photoshop, Figma</span>
                                            </p>
                                        </div>
                                        <div class="space-y-2">
                                            <p
                                                class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                                Client :&nbsp; <span class="font-medium">Envato</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                                Preview :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                    <a href="https://www.envato.com" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Mollitia placeat magnam possimus iusto blanditiis pariatur
                                        labore explicabo quo repellat hic dolorum numquam
                                        asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                        odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                        quidem! Quas magni distinctio dolorum dolore natus, vel
                                        numquam accusamus. Nostrum eligendi recusandae qui tempore
                                        deserunt!
                                    </p>
                                    <div class="pr-3">
                                        <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src=""
                                            alt="portfolio image" />
                                    </div>
                                </div>
                                <!--  <a href="#close-modal" rel="modal:close"
                                    class="close bg-close-light dark:bg-close-dark">Close</a> -->
                            </div>

                            <!-- portfolio items Eight start -->
                            <div class="portfolio_list-two-items isotop-item dev branding ">
                                <div
                                    class="rounded-lg bg-[#f4f4ff] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#portfiloEight" rel="modal:open">
                                            <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                                src="" alt="portfolio image" />
                                        </a>
                                    </div>
                                    <span
                                        class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">Video</span>
                                    <h2
                                        class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                        <a href="#portfiloEight" rel="modal:open"> Chul urina </a>
                                    </h2>
                                </div>
                            </div>

                            <!-- modal start for item Eight start -->
                            <div id="portfiloEight" class="modal-container modal">
                                <div
                                    class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                    <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                        UI/UX Project
                                    </h2>
                                    <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                                Project :&nbsp;
                                                <span class="font-medium"> Website</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                                Langages :&nbsp;
                                                <span class="font-medium">Photoshop, Figma</span>
                                            </p>
                                        </div>
                                        <div class="space-y-2">
                                            <p
                                                class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                                Client :&nbsp; <span class="font-medium">Envato</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                                Preview :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                    <a href="https://www.envato.com" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Mollitia placeat magnam possimus iusto blanditiis pariatur
                                        labore explicabo quo repellat hic dolorum numquam
                                        asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                        odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                        quidem! Quas magni distinctio dolorum dolore natus, vel
                                        numquam accusamus. Nostrum eligendi recusandae qui tempore
                                        deserunt!
                                    </p>
                                    <div class="pr-3">
                                        <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src=""
                                            alt="portfolio image" />
                                    </div>
                                </div>
                                <!--  <a href="#close-modal" rel="modal:close"
                                    class="close bg-close-light dark:bg-close-dark">Close</a> -->
                            </div>


                            <!-- portfolio items Nine start -->
                            <div class="portfolio_list-two-items isotop-item plugin custom ">
                                <div
                                    class="rounded-lg bg-[#fff0f8] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#portfiloNine" rel="modal:open">
                                            <img class="w-full h-auto transition duration-200 ease-in-out transform rounded-lg cursor-pointer hover:scale-110"
                                                src="" alt="portfolio image" />
                                        </a>
                                    </div>
                                    <span class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">Web
                                        Design</span>
                                    <h2
                                        class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                        <a href="#portfiloNine" rel="modal:open"> Aura Dione </a>
                                    </h2>
                                </div>
                            </div>

                            <!-- modal start for item Nine start -->
                            <div id="portfiloNine" class="modal-container modal">
                                <div
                                    class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                    <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                        Aura Dione Project
                                    </h2>
                                    <div class="grid grid-cols-1 pr-3 my-6 lg:grid-cols-2">
                                        <div class="space-y-2">
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-4 fa-regular fa-file-lines sm:text-lg sm:block md:text-xl"></i>
                                                Project :&nbsp;
                                                <span class="font-medium"> Website</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-solid fa-code sm:block"></i>
                                                Langages :&nbsp;
                                                <span class="font-medium">Photoshop, Figma</span>
                                            </p>
                                        </div>

                                        <div class="space-y-2">
                                            <p
                                                class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                                <i class="hidden mr-2 text-lg fa-regular fa-user sm:block"></i>
                                                Client :&nbsp; <span class="font-medium">Envato</span>
                                            </p>
                                            <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                                <i
                                                    class="hidden mr-2 text-lg fa-solid fa-arrow-up-right-from-square sm:block"></i>
                                                Preview :&nbsp;
                                                <span
                                                    class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                    <a href="https://www.envato.com" target="_blank"
                                                        rel="noopener noreferrer">www.envato.com</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Mollitia placeat magnam possimus iusto blanditiis pariatur
                                        labore explicabo quo repellat hic dolorum numquam
                                        asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                        odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                        quidem! Quas magni distinctio dolorum dolore natus, vel
                                        numquam accusamus. Nostrum eligendi recusandae qui tempore
                                        deserunt!
                                    </p>
                                    <div class="pr-3">
                                        <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src=""
                                            alt="portfolio image" />
                                    </div>
                                </div>
                                <!--  <a href="#close-modal" rel="modal:close"
                                    class="close bg-close-light dark:bg-close-dark">Close</a> -->
                            </div>
                        </div>
                    </div>

                    <footer class="overflow-hidden rounded-b-2xl bg-[#f8fbfb] dark:bg-[#212425]">
                        <p class="py-6 text-center text-gray-lite dark:text-color-910"> © 2022 All Rights Reserved by <a
                                class="hover:text-[#FA5252] duration-300 transition"
                                href="https://themeforest.net/user/ib-themes" target="_blank"
                                rel="noopener noreferrer">ib-themes</a>.
                        </p>
                    </footer>
                </section>
                <!-- about me section start -->
            </div>
        </div>
    </div>
</template>




<script setup>
import { Head, Link } from '@inertiajs/vue3';
import HomeSidebar from '@/Pages/Home/HomeSidebar.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },

});
</script>
