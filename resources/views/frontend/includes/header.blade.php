<nav class="relative z-50  mb-[3.5rem] md:mb-[5.3rem]">
    <div class="fixed top-0 left-0 w-full shadow-lg z-50 bg-[rgba(255,255,255,0.86)] backdrop-blur-sm">
        <div class="navbar px-4 sm:px-8 py-2 flex gap-5 h-[65px] md:h-auto">
            <!-- Navbar Start -->
            <div class="navbar-start flex justify-between items-center w-full lg:flex-1">

                <!-- Logo -->
                <a href="/" class="flex items-center h-full">
                    <img src="{{ asset('/frontend/images/nav_logo.png') }}" alt="Logo"
                        class="h-[60px] w-[300px] md:h-[70px] md:w-auto">
                </a>

                <!-- Mobile Navigation -->
                <div class="relative lg:hidden">
                    <button id="menu-toggle" class="btn btn-ghost p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <ul id="mobile-menu"
                        class="fixed left-4 right-4 top-20 mt-2 p-5 bg-white rounded-2xl shadow-2xl z-[9999] animate__animated animate__slideInDown animate__faster transition-all duration-300 ease-in-out max-h-[calc(100vh-6rem)] overflow-y-auto invisible opacity-0 scale-95">



                        <!-- Home Link -->
                        <li class="py-4 px-2 border-b border-gray-100">
                            <a href="/" class="text-lg font-medium block w-full">Home</a>
                        </li>

                        <!-- About Us Section -->
                        <li class="py-4 px-2 border-b border-gray-100">
                            <details class="group">
                                <summary class="text-lg font-medium flex justify-between items-center cursor-pointer">
                                    <span>About Us</span>
                                    <svg class="w-5 h-5 transform group-open:rotate-180 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </summary>
                                <ul class="pl-4 mt-3 space-y-3">
                                    <li><a href="/demo" class="text-base block py-2">About Founder</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Chairman's Message</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Mission & Vision</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Our Values</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Board of Corporate Directors</a>
                                    </li>
                                </ul>
                            </details>
                        </li>

                        <!-- Our Companies Section -->
                        <li class="py-4 px-2 border-b border-gray-100">
                            <details class="group">
                                <summary class="text-lg font-medium flex justify-between items-center cursor-pointer">
                                    <span>Our Companies</span>
                                    <svg class="w-5 h-5 transform group-open:rotate-180 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </summary>
                                <ul class="pl-4 mt-3 space-y-3">
                                    <li><a href="/demo" class="text-base block py-2">Amanat Model Agro Pvt. Ltd.</a>
                                    </li>
                                    <li><a href="/demo" class="text-base block py-2">Amanat Model Security Service
                                            Pvt. Ltd.</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Amanat Model IT Pvt. Ltd.</a>
                                    </li>
                                    <li><a href="/demo" class="text-base block py-2">Amanat Model Trading House Pvt.
                                            Ltd.</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Amanat Model Food's & Beverage
                                            Pvt. Ltd.</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Amanat Model Properties Pvt.
                                            Ltd.</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Amanat Trading Corporative Bank
                                            Pvt. Ltd.</a></li>
                                </ul>
                            </details>
                        </li>

                        <!-- Our Brands Section -->
                        <li class="py-4 px-2 border-b border-gray-100">
                            <details class="group">
                                <summary class="text-lg font-medium flex justify-between items-center cursor-pointer">
                                    <span>Our Brands</span>
                                    <svg class="w-5 h-5 transform group-open:rotate-180 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </summary>
                                <div class="pl-4 mt-3">
                                    <div class="flex flex-wrap gap-4 py-2">
                                        <a href="/demo" class="block"><img class="w-10 h-10 object-contain"
                                                src="{{ asset('frontend/images/logo2.png') }}" alt=""></a>
                                        <a href="/demo" class="block"><img class="w-10 h-10 object-contain"
                                                src="{{ asset('frontend/images/amanat_model_foundation.jpeg') }}"
                                                alt=""></a>
                                        <a href="/demo" class="block"><img class="w-10 h-10 object-contain"
                                                src="{{ asset('frontend/images/amanat_agro.jpeg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </details>
                        </li>

                        <!-- Media Section -->
                        <li class="py-4 px-2 border-b border-gray-100">
                            <details class="group">
                                <summary class="text-lg font-medium flex justify-between items-center cursor-pointer">
                                    <span>Media</span>
                                    <svg class="w-5 h-5 transform group-open:rotate-180 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </summary>
                                <ul class="pl-4 mt-3 space-y-3">
                                    <li><a href="/demo" class="text-base block py-2">News & Events</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Photo</a></li>
                                    <li><a href="/demo" class="text-base block py-2">Video</a></li>
                                    <li><a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                                            class="text-base block py-2">Facebook</a></li>
                                    <li><a href="https://youtube.com" target="_blank" rel="noopener noreferrer"
                                            class="text-base block py-2">YouTube</a></li>
                                </ul>
                            </details>
                        </li>

                        <!-- CSR Section -->
                        <li class="py-4 px-2 border-b border-gray-100">
                            <details class="group">
                                <summary class="text-lg font-medium flex justify-between items-center cursor-pointer">
                                    <span>CSR</span>
                                    <svg class="w-5 h-5 transform group-open:rotate-180 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </summary>
                                <ul class="pl-4 mt-3">
                                    <li><a href="/demo" class="text-base block py-2">Amanat Model Foundation</a>
                                    </li>
                                </ul>
                            </details>
                        </li>

                        <!-- Contact Us Link -->
                        <li class="py-4 px-2">
                            <a href="/contact" class="text-lg font-medium block w-full">Contact Us</a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Navbar Center (Desktop) -->
            <div class="navbar-center hidden lg:flex">
                <ul class="flex gap-10 items-center h6 font-normal">
                    <!-- Home -->
                    <li><a href="/" class="hover:text-sky-600 transition-all duration-200">Home</a></li>

                    <!-- About Us -->
                    <li class="relative group">
                        <span class="flex items-center cursor-pointer hover:text-sky-600 transition-all duration-200">
                            About Us
                            <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                        <div
                            class="pointer-events-none absolute top-full left-0 opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition duration-300 ease-in-out text-base">
                            <div class="bg-base-100 shadow-lg rounded-md mt-2 p-4 w-80 z-50 space-y-2">
                                <a href="/demo" class="block hover:text-sky-600 transition">About Founder</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Chairman's Message</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Mission & Vision</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Our Values</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Board of Corporate
                                    Directors</a>
                            </div>
                        </div>
                    </li>

                    <!-- Our Companies -->
                    <li class="relative group">
                        <span class="flex items-center cursor-pointer hover:text-sky-600 transition-all duration-200">
                            Our Companies
                            <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                        <div
                            class="pointer-events-none absolute top-full left-0 opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition duration-300 ease-in-out text-base">
                            <div class="bg-base-100 shadow-lg rounded-md mt-2 p-4 w-96 z-50 space-y-2">
                                <a href="/demo" class="block hover:text-sky-600 transition">Amanat Model Agro Pvt.
                                    Ltd.</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Amanat Model Security
                                    Service Pvt. Ltd.</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Amanat Model IT Pvt.
                                    Ltd.</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Amanat Model Trading
                                    House Pvt. Ltd.</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Amanat Model Food's &
                                    Beverage Pvt. Ltd.</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Amanat Model Properties
                                    Pvt. Ltd.</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Amanat Trading
                                    Corporative Bank Pvt. Ltd.</a>
                            </div>
                        </div>
                    </li>

                    {{-- our brands --}}
                    <li class="relative group">
                        <span class="flex items-center cursor-pointer hover:text-sky-600 transition-all duration-200">
                            Our Brands
                            <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                        <div
                            class="pointer-events-none absolute top-full left-0 opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition duration-300 ease-in-out text-base">
                            <div
                                class="bg-base-100 shadow-lg rounded-md mt-2 p-4 w-64 z-50 flex justify-evenly items-center ga-6">
                                <a href="/demo" class="block hover:text-sky-600 transition"> <img class="w-18"
                                        src="{{ asset('frontend/images/logo2.png') }}" alt=""> </a>
                                <a href="/demo" class="block hover:text-sky-600 transition"> <img class="w-18"
                                        src="{{ asset('frontend/images/amanat_model_foundation.jpeg') }}"
                                        alt=""> </a>
                                <a href="/demo" class="block hover:text-sky-600 transition"> <img class="w-18"
                                        src="{{ asset('frontend/images/amanat_agro.jpeg') }}" alt=""> </a>
                            </div>
                        </div>
                    </li>

                    <!-- Our Brands -->
                    {{-- <li><a href="/demo" class="hover:text-sky-600 transition-all duration-200">Our Brands</a></li> --}}

                    <!-- Media -->
                    <li class="relative group">
                        <span class="flex items-center cursor-pointer hover:text-sky-600 transition-all duration-200">
                            Media
                            <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                        <div
                            class="pointer-events-none absolute top-full left-0 opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition duration-300 ease-in-out text-base">
                            <div class="bg-base-100 shadow-lg rounded-md mt-2 p-4 w-64 z-50 space-y-2">
                                <a href="/demo" class="block hover:text-sky-600 transition">News & Events</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Photo</a>
                                <a href="/demo" class="block hover:text-sky-600 transition">Video</a>
                                <a href="https://facebook.com" target="_blank"
                                    class="block hover:text-sky-600 transition">Facebook</a>
                                <a href="https://youtube.com" target="_blank"
                                    class="block hover:text-sky-600 transition">YouTube</a>
                            </div>
                        </div>
                    </li>

                    <!-- CSR -->
                    <li class="relative group">
                        <span class="flex items-center cursor-pointer hover:text-sky-600 transition-all duration-200">
                            CSR
                            <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                        <div
                            class="pointer-events-none absolute top-full left-0 opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition duration-300 ease-in-out text-base">
                            <div class="bg-base-100 shadow-lg rounded-md mt-2 p-4 w-64 z-50 space-y-2">
                                <a href="/demo" class="block hover:text-sky-600 transition"> Amanat Model Foundation
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- Contact Us -->
                    <li>
                        <a class="inline-flex items-center gap-2 border-2 border-gray-600 px-3 py-1 hover:bg-sky-300 transition-all duration-200 cursor-pointer group"
                            href="/contact">
                            <span>Contact Us</span>
                            <span
                                class="transform transition-transform ease-in-out duration-300 group-hover:translate-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
