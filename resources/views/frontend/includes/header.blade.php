<nav class="relative z-50 md:mb-[6rem]">
    <div class="fixed top-0 left-0 w-full shadow-lg z-50 bg-[rgba(255,255,255,0.86)] backdrop-blur-sm">
        <div class="navbar px-8 flex gap-5 max-h-[6rem]">
            <!-- Navbar Start -->
            <div class="navbar-start flex justify-between items-center w-full lg:flex-1">


                <!-- Logo -->
                <a href="/" class="flex items-center h-full ">
                    <img src="{{ asset('/frontend/images/nav_logo.png') }}" alt="Logo"
                        class="h-20 md:h-24 lg:h-28 xl:h-32 w-auto max-w-[12rem] md:max-w-[16rem] lg:max-w-[18rem] object-contain transition-all duration-300" />
                </a>

                <!-- Mobile Menu -->
                <div class="dropdown dropdown-end lg:hidden">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-4 z-[999] right-0 bg-base-100 rounded-box w-64 p-3 shadow space-y-1 text-sm font-medium">
                        <li><a href="/">Home</a></li>
                        <li>
                            <details>
                                <summary>About Us</summary>
                                <ul class="pl-4 space-y-1">
                                    <li><a href="#">About Founder</a></li>
                                    <li><a href="#">Chairman's Message</a></li>
                                    <li><a href="#">Mission & Vision</a></li>
                                    <li><a href="#">Our Values</a></li>
                                    <li><a href="#">Board of Corporate Directors</a></li>
                                </ul>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary>Our Companies</summary>
                                <ul class="pl-4 space-y-1">
                                    <li><a href="#">Amanat Model Agro Pvt. Ltd.</a></li>
                                    <li><a href="#">Amanat Model Security Service Pvt. Ltd.</a></li>
                                    <li><a href="#">Amanat Model IT Pvt. Ltd.</a></li>
                                    <li><a href="#">Amanat Model Trading House Pvt. Ltd.</a></li>
                                    <li><a href="#">Amanat Model Food’s & Beverage Pvt. Ltd.</a></li>
                                    <li><a href="#">Amanat Model Properties Pvt. Ltd.</a></li>
                                </ul>
                            </details>
                        </li>
                        <li><a href="#">Our Brands</a></li>
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
                                <summary>CSR</summary>
                                <ul class="pl-4 space-y-1">
                                    <li><a href="#">Foundation</a></li>
                                </ul>
                            </details>
                        </li>
                        <li><a href="/contact">Contact Us</a></li>
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
                                <a href="#" class="block hover:text-sky-600 transition">About Founder</a>
                                <a href="#" class="block hover:text-sky-600 transition">Chairman's Message</a>
                                <a href="#" class="block hover:text-sky-600 transition">Mission & Vision</a>
                                <a href="#" class="block hover:text-sky-600 transition">Our Values</a>
                                <a href="#" class="block hover:text-sky-600 transition">Board of Corporate
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
                                <a href="#" class="block hover:text-sky-600 transition">Amanat Model Agro Pvt. Ltd.</a>
                                <a href="#" class="block hover:text-sky-600 transition">Amanat Model Security
                                    Service Pvt. Ltd.</a>
                                <a href="#" class="block hover:text-sky-600 transition">Amanat Model IT Pvt. Ltd.</a>
                                <a href="#" class="block hover:text-sky-600 transition">Amanat Model Trading House Pvt.
                                    Ltd.</a>
                                <a href="#" class="block hover:text-sky-600 transition">Amanat Model Food’s &
                                    Beverage Pvt. Ltd.</a>
                                <a href="#" class="block hover:text-sky-600 transition">Amanat Model Properties Pvt.
                                    Ltd.</a>
                            </div>
                        </div>
                    </li>

                    <!-- Our Brands -->
                    <li><a href="#" class="hover:text-sky-600 transition-all duration-200">Our Brands</a></li>

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
                                <a href="#" class="block hover:text-sky-600 transition">Foundation</a>
                            </div>
                        </div>
                    </li>

                    <!-- Contact Us -->
                    <li>

                        <a class="inline-flex items-center gap-1 border-2 border-gray-600 px-6 py-3 hover:bg-gray-200 transition-all duration-200 cursor-pointer group"
                            href="/contact">
                            <span>Contact Us</span>
                            <span class="transform transition-transform duration-300 group-hover:translate-x-2">
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

            <!-- Navbar End -->
            {{-- <div class="navbar-end hidden lg:flex">
                <a class="inline-flex items-center gap-1 border-2 border-gray-600 px-6 py-3 hover:bg-gray-200 transition-all duration-200 cursor-pointer group"
                    href="/contact">
                    <span>Contact Us</span>
                    <span class="transform transition-transform duration-300 group-hover:translate-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </span>
                </a>
            </div> --}}
        </div>
    </div>
</nav>
