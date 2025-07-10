<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Amanat Group')</title>
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/styles/style.css') }}">


    {{-- Daisy UI --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />


    {{-- swiper js --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- animate css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



</head>

<!-- Back to Top Button -->
<button id="backToTopBtn"
    class="hidden fixed bottom-6 right-6 bg-primary opacity-85 text-white p-4 rounded-full shadow-lg hover:bg-primary/90 transition-all duration-300 z-50"
    aria-label="Back to top">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
    </svg>
</button>



<body>
    <header>
        @include('frontend.includes.header')
    </header>

    <!-- Loader -->
    <div id="pageLoader"
        class="fixed inset-0 bg-white dark:bg-gray-900 z-[9999] flex items-center justify-center opacity-100 transition-opacity duration-500 ease-in-out">

        <div class="flex flex-col items-center space-y-2">
            <!-- Logo -->
            <img src="{{ asset('/frontend/images/logo.png') }}" alt="Loading Logo"
                class="h-52 w-auto animate-pulse rounded-lg shadow" />

            <!-- Spinner -->
            <span class="loading loading-spinner loading-lg text-primary"></span>
        </div>
    </div>


    <div>
        @yield('content')
    </div>

    <footer>
        @include('frontend.includes.footer')
    </footer>

    {{-- swiper js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{-- tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- loader --}}
    <script>
        // Fade out loader after page load
        window.addEventListener('load', () => {
            const loader = document.getElementById('pageLoader');
            loader.classList.add('opacity-0');
            setTimeout(() => loader.style.display = 'none', 500);
        });
    </script>

    {{-- back to top --}}
    <script>
        const backToTopBtn = document.getElementById("backToTopBtn");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                backToTopBtn.classList.remove("hidden");
            } else {
                backToTopBtn.classList.add("hidden");
            }
        });

        backToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>

{{-- smooth scroll --}}
<script src="{{ asset('/frontend/SmoothScroll.js') }}"></script>


    @yield('scripts')


</body>

</html>
