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
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-10 mt-3 w-52 p-2 shadow ">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/management">Management</a></li>
                    <li>
                        <a>Business</a>
                        <ul class="p-2">
                            <li><a href="/business/unit1">Unit 1</a></li>
                            <li><a href="/business/unit2">Unit 2</a></li>
                            <li><a href="/business/unit3">Unit 3</a></li>
                        </ul>
                    </li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/career">Career</a></li>
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
                <li><a href="/" class="hover:text-sky-600 transition-all duration-200">Home</a></li>
                <li><a href="/about" class="hover:text-sky-600 transition-all duration-200">About</a></li>
                <li><a href="/management" class="hover:text-sky-600 transition-all duration-200">Management</a></li>

                <li class="relative group">
                    <span class="cursor-pointer hover:text-sky-600 transition">Business</span>
                    <ul
                        class="absolute hidden group-hover:flex flex-col gap-1 bg-base-100 shadow-md rounded-md px-3 py-2 mt-2 w-52 z-10">
                        <li><a href="/business/unit1" class="hover:text-sky-600 transition">Unit 1</a></li>
                        <li><a href="/business/unit2" class="hover:text-sky-600 transition">Unit 2</a></li>
                        <li><a href="/business/unit3" class="hover:text-sky-600 transition">Unit 3</a></li>
                    </ul>
                </li>

                <li><a href="/news" class="hover:text-sky-600 transition-all duration-200">News</a></li>
                {{-- <li><a href="/contact" class="hover:text-sky-600 transition-all duration-200">Contact</a></li> --}}
                <li><a href="/career" class="hover:text-sky-600 transition-all duration-200">Career</a></li>
            </ul>
        </div>


        <!-- Navbar End -->
        <div class="navbar-end">
            <a class="btn btn-outline-primary"> Contact </a>
        </div>
    </div>
</nav>
