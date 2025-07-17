<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Amanat Group')</title>

    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/loader-logo.png') }}">

    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/styles/style.css') }}">



    {{-- Daisy UI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />


    {{-- swiper js --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- animate css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



</head>

<!-- Back to Top Button -->
<button id="backToTopBtn"
    class="hidden fixed bottom-6 right-6 bg-secondary opacity-80 text-white p-4 rounded-full shadow-2xl z-50"
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
        class="fixed inset-0 bg-gray-900 z-[9999] flex items-center justify-center opacity-100 transition-opacity ease-in-out">

        <div class="flex flex-col items-center space-y-2">
            <!-- Logo -->
            <img src="{{ asset('/frontend/images/loader-logo.png') }}" alt="Loading Logo"
                class="h-52 w-auto animate-pulse  rounded-lg shadow" />

            <!-- Spinner -->
            {{-- <span class="loading loading-spinner loading-lg text-secondary"></span> --}}
        </div>
    </div>


    <div>
        @yield('content')
    </div>

    <footer>
        @include('frontend.includes.footer')
    </footer>

    {{-- mobile script --}}
<script>
 const toggle = document.getElementById('menu-toggle');
const menu = document.getElementById('mobile-menu');

toggle.addEventListener('click', function () {
    const isVisible = menu.classList.contains('visible');

    if (isVisible) {
        menu.classList.remove('visible', 'animate__slideInDown');
        menu.classList.add('invisible', 'opacity-0', 'scale-95');
    } else {
        menu.classList.remove('invisible', 'opacity-0', 'scale-95');
        menu.classList.add('visible', 'animate__slideInDown');
    }
});

// Optional: Close when clicking outside
document.addEventListener('click', function (e) {
    if (!menu.contains(e.target) && !toggle.contains(e.target)) {
        menu.classList.remove('visible', 'animate__slideInDown');
        menu.classList.add('invisible', 'opacity-0', 'scale-95');
    }
});

</script>



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
