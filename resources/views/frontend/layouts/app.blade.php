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


<body>
    <header>
        @include('frontend.includes.header')
    </header>

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


    @yield('scripts')


</body>

</html>
