<nav class="px-5 relative z-50">
    <div class="navbar bg-base-100 shadow-sm max-h-[7rem] container">
        <!-- Navbar Start -->
        <div class="navbar-start">
            <!-- Mobile Menu -->
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-10 mt-3 w-64 p-3 shadow space-y-1 text-sm font-medium">
                    <li><a href="/">Home</a></li>

                    <li>
                        <details>
                            <summary>Media</summary>
                            <ul class="pl-4 space-y-1">
                                <li><a href="/media/news">News & Events</a></li>
                                <li><a href="/media/photo">Photo</a></li>
                                <li><a href="/media/video">Video</a></li>
                                <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                                <li><a href="https://youtube.com" target="_blank">YouTube</a></li>
                            </ul>
                        </details>
                    </li>

                    <li>
                        <details>
                            <summary>Our Companies</summary>
                            <ul class="pl-4 space-y-1">
                                <li><a href="/business/company1">Amanat Model Foundation</a></li>
                                <li><a href="/business/company2">Amanat Trading Cooperative</a></li>
                                <li><a href="/business/company3">Amanat Model Agro Ltd</a></li>
                            </ul>
                        </details>
                    </li>

                    <li><a href="/management">Management</a></li>
                    <li><a href="/responsibility">Our Responsibility</a></li>

                    <li>
                        <details>
                            <summary>About</summary>
                            <ul class="pl-4 space-y-1">
                                <li><a href="/about/management">Management</a></li>
                                <li><a href="/about/sustainability">Sustainability</a></li>
                            </ul>
                        </details>
                    </li>

                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>


            <!-- Logo -->
            <a class="center">
                <img class="md:h-40 h-24 w-auto" src="{{ asset('/frontend/images/logo.png') }}" alt="Logo">
            </a>
        </div>


        <!-- Navbar Center (Desktop) -->
        <div class="navbar-center hidden lg:flex">
            <ul class="flex gap-10 items-center h4 font-normal">

                <!-- Home -->
                <li><a href="/" class="hover:text-sky-600 transition-all duration-200">Home</a></li>

                <!-- Media Mega Menu -->
                <li class="relative group">
                    <span class="cursor-pointer hover:text-sky-600 transition-all duration-200">Media</span>

                    <!-- Hover Box -->
                    <div
                        class="pointer-events-none absolute top-full left-0 opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-300 ease-in-out">
                        <div class="bg-base-100 shadow-lg rounded-md mt-2 p-4 w-64 z-50 space-y-2">
                            <a href="/media/news" class="block hover:text-sky-600 transition">News & Events</a>
                            <a href="/media/photo" class="block hover:text-sky-600 transition">Photo</a>
                            <a href="/media/video" class="block hover:text-sky-600 transition">Video</a>
                            <a href="https://facebook.com" target="_blank"
                                class="block hover:text-sky-600 transition">Facebook</a>
                            <a href="https://youtube.com" target="_blank"
                                class="block hover:text-sky-600 transition">YouTube</a>
                        </div>
                    </div>
                </li>

                <!-- Our Companies Mega Menu -->
                <li class="relative group">
                    <span class="cursor-pointer hover:text-sky-600 transition-all duration-200">Our Companies</span>
                    <div
                        class="pointer-events-none absolute top-full left-0 opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-300 ease-in-out w-96 center">
                        <div class="bg-base-100 shadow-lg rounded-md mt-2 p-4 z-50 center flex-col gap-10">
                            <a href="/business/company1" class="block hover:text-sky-600 transition flex">
                                <img class="h-20 w-20" src="{{ asset('/frontend/images/logo2.png') }}"
                                    alt="Amanat Model Logo">
                                <h6 class="h6"> AMANAT MODEL FOUNDATION </h6>
                            </a>
                            <a href="/business/company2" class="block hover:text-sky-600 transition flex">
                                <img class="h-20 w-20" src="{{ asset('/frontend/images/logo2.jpeg') }}"
                                    alt="Amanat Model Logo">
                                <h6 class="h6"> AMANAT TRADING COOPERATIVE </h6>
                            </a>
                            <a href="/business/company3" class="block hover:text-sky-600 transition flex">
                                <img class="h-20 w-20" src="{{ asset('/frontend/images/logo3.jpeg') }}"
                                    alt="Amanat Model Logo">
                                <h6 class="h6"> AMANAT MODEL AGRO LIMITED </h6>
                            </a>
                        </div>
                    </div>
                </li>

                <!-- Responsibility -->
                <li><a href="/responsibility" class="hover:text-sky-600 transition-all duration-200">Our
                        Responsibility</a></li>

                <!-- About Mega Menu -->
                <li class="relative group">
                    <span class="cursor-pointer hover:text-sky-600 transition-all duration-200">About</span>
                    <div
                        class="pointer-events-none absolute top-full left-0 opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-300 ease-in-out">
                        <div class="bg-base-100 shadow-lg rounded-md mt-2 p-4 w-64 z-50 space-y-2">
                            <a href="/about/management" class="block hover:text-sky-600 transition">Management</a>
                            <a href="/about/sustainability"
                                class="block hover:text-sky-600 transition">Sustainability</a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>


        <!-- Navbar End -->
        <div class="navbar-end hidden md:flex">
            <a
                class="inline-flex items-center gap-1 border-2 border-gray-600 px-6 py-3 hover:bg-gray-200 transition-all duration-200 cursor-pointer group"
                href="/contact"
                >
                <span>Contact Us</span>
                <span class="transform transition-transform duration-300 group-hover:translate-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </span>
            </a>

        </div>

    </div>
</nav>
