@extends('frontend.layouts.app')

@section('title', 'Amanat Model Group - Home')


@section('content')

    {{-- banner --}}

    <div class="h-[95vh]">
        <div class="swiper bannerSwiper h-full w-full"> <!-- full height & width -->
            <div class="swiper-wrapper h-full"> <!-- full height -->
                {{-- slide 1 --}}
                <div class="swiper-slide h-full">
                    <div style="background-image: url('{{ asset('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29ycG9yYXRlfGVufDB8fDB8fHww') }}');"
                        class="bg-cover bg-no-repeat relative h-full w-full center">

                        {{-- Dark overlay (slightly lighter) --}}
                        <div class="absolute inset-0 bg-black opacity-30"></div>

                        <div class="relative z-10 text-white px-5 md:px-10 flex flex-col gap-6 max-w-4xl text-left">
                            <h1 class="md:text-6xl font-semibold text-3xl banner-title">
                                AMANAT MODEL FOUNDATION
                            </h1>
                            <span class="text-xl text-second">
                                Explore the science, practices, and innovations shaping for your sustainable life.
                            </span>
                        </div>
                    </div>
                </div>

                {{-- slide 2 --}}
                <div class="swiper-slide h-full">
                    <div style="background-image: url('{{ asset('https://industrialoutlook.in/wp-content/uploads/2023/01/Food.webp') }}');"
                        class="bg-cover bg-no-repeat relative h-full w-full center">

                        {{-- Dark overlay (slightly lighter) --}}
                        <div class="absolute inset-0 bg-black opacity-30"></div>

                        <div class="relative z-10 text-white px-5 md:px-10 flex flex-col gap-6 max-w-4xl text-left">
                            <h1 class="md:text-6xl font-semibold text-3xl banner-title">
                                AMANAT MODEL FOOD AND BEVERAGE PVT. LIMITED
                            </h1>
                            <span class="text-xl text-second">
                                Explore the science, practices, and innovations shaping for your sustainable life.
                            </span>
                        </div>
                    </div>
                </div>
                {{-- slide 3 --}}
                <div class="swiper-slide h-full">
                    <div style="background-image: url('{{ asset('https://i0.wp.com/www.india-briefing.com/news/wp-content/uploads/2017/03/India-Brefing-Starting-an-Export-Import-Business-in-India.jpg?fit=900%2C506&ssl=1') }}');"
                        class="bg-cover bg-no-repeat relative h-full w-full center">

                        {{-- Dark overlay (slightly lighter) --}}
                        <div class="absolute inset-0 bg-black opacity-30"></div>

                        <div class="relative z-10 text-white px-5 md:px-10 flex flex-col gap-6 max-w-4xl text-left">
                            <h1 class="md:text-6xl font-semibold text-3xl banner-title">
                                {{-- AMANAT TRADING COOPERATIVE BANK --}}
                                AMANAT MODEL TRADING HOUSE PVT. LTD
                            </h1>
                            <span class="text-xl text-second">
                                Explore the science, practices, and innovations shaping soil health and
                                sustainable farming.
                            </span>
                        </div>
                    </div>
                </div>


                {{-- slide 4 --}}
                <div class="swiper-slide h-full">
                    <div style="background-image: url('{{ asset('http://media.istockphoto.com/id/1297398472/photo/field-of-wheat-at-sunset-with-grain-silos-in-the-back-ground.jpg?s=612x612&w=0&k=20&c=9l7R8uFNOVPxUh3vFWaP-xW31lL11QsucLZ4IdISkVI=') }}');"
                        class="bg-cover bg-no-repeat relative h-full w-full center">

                        {{-- Dark overlay (slightly lighter) --}}
                        <div class="absolute inset-0 bg-black opacity-30"></div>

                        <div class="relative z-10 text-white px-5 md:px-10 flex flex-col gap-6 max-w-4xl text-left">
                            <h1 class="md:text-6xl font-semibold text-3xl banner-title">
                                AMANAT MODEL AGRO PVT. LIMITED
                            </h1>
                            <span class="text-xl text-second">
                                Explore the science, practices, and innovations shaping soil health and
                                sustainable farming.
                            </span>
                        </div>
                    </div>
                </div>





            </div>
            <div class="swiper-scrollbar"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    {{-- globe section --}}
    {{-- <section>
        <div id="globe"></div>

    </section> --}}


    {{-- short description --}}
    <section class="bg-secondary-light text-secondary">
        <p class="p container text-center px-10 py-12 w-full md:w-4/5">
            Amanat Model Group is a forward-thinking and diversified business group rooted in strong values and visionary
            leadership. Operations across key sectors including textiles, finance, agriculture, healthcare, and
            education, the group continues to drive sustainable growth and innovation.
            Guided by a commitment to quality, community impact, and ethical business practices, Amanat Model Group aims to
            empower industries and uplift lives across Bangladesh.
        </p>
    </section>


    {{-- our Companies --}}

    <section class="container mx-auto py-16">
        <h3 class="h3 font-bold text-center text-secondary mb-10">
            OUR BUSINESS & COMPANIES

            <span class="text-white bg-secondary py-2 inline-block rounded md:w-[400px] w-full">
                <span id="brandText" class="inline-block w-full text-center animate__animated animate__slower">
                    <!-- Brand will appear here -->
                </span>
            </span>
        </h3>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 md:gap-y-4 gap-y-8">

            @foreach ([
            [
                'title' => 'AMANAT MODEL AGRO PVT. LTD.',
                'desc' => 'Advancing sustainable agriculture with innovation, supporting local farmers and promoting eco-friendly practices.',
                'img' => '/frontend/images/amanat_agro.jpeg',
                'alt' => 'Amanat Agro Logo',
            ],
            [
                'title' => 'AMANAT MODEL SECURITY SERVICE PVT. LTD.',
                'desc' => 'Providing top-notch security solutions with trained personnel and the latest surveillance technologies.',
                'img' => '',
                'alt' => 'AMANAT Security',
            ],
            [
                'title' => 'AMANAT MODEL IT PVT. LTD.',
                'desc' => 'Empowering businesses with digital transformation, software development, and IT consulting services.',
                'img' => '',
                'alt' => 'AMANAT MODEL IT',
            ],
            [
                'title' => 'AMANAT MODEL TRADING HOUSE PVT. LTD.',
                'desc' => 'A dynamic trading company specializing in quality goods distribution, import/export, and business solutions.',
                'img' => '',
                'alt' => 'AMANAT Trading House',
            ],
            [
                'title' => 'AMANAT MODEL FOOD’S & BEVERAGE PVT. LTD.',
                'desc' => 'Delivering quality food and beverage products with a focus on health, hygiene, and consumer satisfaction.',
                'img' => '',
                'alt' => 'Amanat Food & Beverage',
            ],
            [
                'title' => 'AMANAT MODEL PROPERTIES PVT. LTD.',
                'desc' => 'Transforming skylines with reliable, innovative, and sustainable real estate development projects.',
                'img' => '',
                'alt' => 'Amanat Real Estate',
            ],
        ] as $item)
                <div
                    class="flex flex-col sm:flex-row items-start sm:items-center shadow-md rounded-xl p-5 hover:shadow-xl transition-all duration-300 w-full max-w-md mx-auto">
                    <img class="h-20 w-20 object-cover rounded-md mb-4 sm:mb-0 sm:mr-4" src="{{ asset($item['img']) }}"
                        alt="{{ $item['alt'] }}">
                    <div>
                        <h4 class="text-lg sm:text-xl font-semibold text-secondary mb-1 break-words leading-tight">
                            {{ $item['title'] }}
                        </h4>
                        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>



    </section>



    {{-- about section 1 --}}

    <section class="my-6 py-16">
        <div class="container flex justify-center items-center gap-6 flex-wrap">
            <div
                class="flex flex-col items-center gap-2 rounded-xl border-secondary w-62 p-4
              transition-all duration-700 ease-in-out hover:shadow-2xl hover:shadow-blue-300 hover:scale-[1.03]">
                <img class="h-12 w-auto" src="https://www.akij.net/img/Group_873.svg" alt="">
                <h6 class="text-sm font-medium text-gray-600">Since</h6>
                <h1 class="text-2xl font-bold text-secondary">1990</h1>
            </div>

            <div
                class="flex flex-col items-center gap-2 rounded-xl border-secondary w-62 p-4
              transition-all duration-700 ease-in-out hover:shadow-2xl hover:shadow-blue-300 hover:scale-[1.03]">
                <img class="h-12 w-auto" src="https://www.akij.net/img/Group_874.svg" alt="">
                <h6 class="text-sm font-medium text-gray-600">Units</h6>
                <h1 class="text-2xl font-bold text-secondary">20+</h1>
            </div>

            <div
                class="flex flex-col items-center gap-2 rounded-xl border-secondary w-62 p-4
              transition-all duration-700 ease-in-out hover:shadow-2xl hover:shadow-blue-300 hover:scale-[1.03]">
                <img class="h-12 w-auto" src="https://www.akij.net/img/Group_875-1.svg" alt="">
                <h6 class="text-sm font-medium text-gray-600">Employees</h6>
                <h1 class="text-2xl font-bold text-secondary">5000+</h1>
            </div>

            <div
                class="flex flex-col items-center gap-2 rounded-xl border-secondary w-62 p-4
              transition-all duration-700 ease-in-out hover:shadow-2xl hover:shadow-blue-300 hover:scale-[1.03]">
                <img class="h-12 w-auto" src="https://www.akij.net/img/Acheivement.png" alt="">
                <h6 class="text-sm font-medium text-gray-600">Achievements</h6>
                <h1 class="text-2xl font-bold text-secondary">15+</h1>
            </div>
        </div>

    </section>



    {{-- Our Founder --}}

    <section class="bg-secondary-light text-secondary py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-10 container">

            <!-- Left Image -->
            <div>
                <img src="https://plus.unsplash.com/premium_photo-1661331747255-25854e79d9b6?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Zm91bmRlcnxlbnwwfHwwfHx8MA%3D%3D"
                    alt="About Image" class="w-full h-auto md:h-[400px] object-cover rounded-xl shadow-lg">
            </div>

            <!-- Right Content -->
            <div class="w-full flex justify-center">
                <div class="space-y-6 w-full max-w-lg text-center md:text-left">
                    <h2 class="h2 font-bold leading-tight"> About Founder </h2>
                    <p class="text-lg leading-relaxed font-semibold">
                        Dr. Abdul Azim Al-Farooqi <br>
                        Founder & Chairman, Amanat Model Group.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Dr. Abdul Azim Al-Farooqi is a distinguished Islamic scholar, renowned for his deep commitment to
                        Islamic values and education. He is a Guardian of Islamic Principles, a Hafiz-e-Qur’an,
                        Hafiz-e-Hadith, and a respected Shaikh-ul-Hadith. As the visionary founder and chairman of Amanat
                        Model Group, he leads with unwavering dedication to faith, integrity, and community development.
                    </p>
                    <x-frontend.show-more-button />
                </div>
            </div>

        </div>
    </section>


    {{-- mission --}}
    <section class="py-16 bg-white">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 items-center px-4 md:px-8">
            <!-- Right Image (shown first on mobile) -->
            <div class="p-6 order-1 md:order-2">
                <img src="{{ asset('/frontend/images/mission.jpg') }}" alt="Mission of Amanat Group"
                    class="w-full h-auto md:h-[400px] object-cover p-3 rounded-2xl">
            </div>

            <!-- Left Content -->
            <div class="w-full flex justify-center order-2 md:order-1">
                <div class="space-y-6 w-full max-w-lg text-center md:text-left">
                    <h2 class="h2 font-bold text-secondary leading-tight">
                        Mission of Amanat Group
                    </h2>
                    <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                        At <strong>Amanat Model Foundation</strong>, our mission is to create sustainable value through
                        ethical business practices, innovation, and social responsibility.
                    </p>
                    <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                        We are committed to:
                    </p>
                    <ul class="text-base md:text-lg text-gray-700 leading-relaxed space-y-3 pl-5">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mr-2 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Delivering exceptional quality products and services</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mr-2 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Fostering innovation and continuous improvement</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mr-2 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Empowering our employees and communities</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-secondary mr-2 mt-0.5 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Maintaining the highest standards of integrity</span>
                        </li>
                    </ul>

                    {{-- btn primary --}}
                    <x-frontend.show-more-button />
                </div>
            </div>
        </div>
    </section>

    {{-- vision --}}

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 items-center px-4 md:px-8">

            <!-- Left Content -->
            <div class="w-full flex justify-center">
                <div class="space-y-6 w-full max-w-lg text-center md:text-left">
                    <h2 class="h2 font-bold text-secondary leading-tight">
                        Vision of Amanat Group
                    </h2>
                    <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                        Founded in 1990, <strong>Amanat Group</strong> has grown into a multi-sector business powerhouse,
                        with strong roots in manufacturing, technology, healthcare, and infrastructure.
                    </p>
                    <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                        Our vision is to drive sustainable growth, empower communities, and set industry standards through
                        innovation, integrity, and excellence in every endeavor.
                    </p>


                    {{-- btn primary --}}
                    <x-frontend.show-more-button />





                </div>
            </div>

            <!-- Right Image -->
            <div class="p-6">
                <img src="{{ asset('/frontend/images/vision.jpg') }}" alt="Vision of Amanat Group"
                    class="w-full h-auto md:h-[400px] object-cover rounded-2xl shadow-xl ">
            </div>

        </div>
    </section>



    {{-- our clients --}}

    <section class="container mx-auto px-6 py-16">


        <!-- Header Section -->
        <div class="flex justify-center flex-col lg:flex-row items-center gap-12 mb-16">
            {{-- left side --}}
            <div class="md:w-2/5 w-full flex items-center text-center md:text-start">
                <div>
                    <h2 class="h2 font-bold text-secondary mb-6 relative text-secondary">
                        Our Honorable Clients
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        We take pride in partnering with industry leaders and innovators. Our collaborations have helped
                        businesses transform their digital presence and achieve remarkable growth through cutting-edge
                        solutions.
                    </p>
                </div>
            </div>

            <!-- Client Logos Grid -->
            <div class="md:w-3/5 w-full">

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8">
                    @for ($i = 19; $i < 27; $i++)
                        <div
                            class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 flex items-center justify-center h-32">
                            <img src="{{ asset('/frontend/images/clients/client' . $i . '.jpg') }}" alt="Client logo"
                                class="" loading="lazy">

                        </div>
                    @endfor
                </div>
                <div class="flex md:justify-start justify-center mt-6">
                    <a href="/contact#all-brands">
                        <x-frontend.show-more-button />
                    </a>
                </div>
            </div>



        </div>



    </section>


    {{-- blogs --}}

    <section class="container">

        <h1 class="text-3xl md:text-4xl font-bold text-center text-sky-700 mb-10">
            NEWS & EVENTS
        </h1>


        <div class="relative max-w-7xl mx-auto">
            <!-- Swiper -->
            <div class="swiper blogSwiper">
                <div class="swiper-wrapper pb-12">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div
                            class="max-w-sm rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 bg-white h-full">
                            <div class="h-48 overflow-hidden relative group">
                                <img src="https://t4.ftcdn.net/jpg/02/09/53/11/360_F_209531103_vL5MaF5fWcdpVcXk5yREBk3KMcXE0X7m.jpg"
                                    alt="Blog post image"
                                    class="w-full h-full object-cover transition-all duration-500 ease-in-out transform group-hover:scale-105">
                            </div>
                            <div class="p-6">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition-colors duration-300">
                                    Web Development Trends 2024
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    Discover the latest trends shaping web development this year.
                                </p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span>June 15, 2024</span>
                                    <span class="mx-2">•</span>
                                    <span>5 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div
                            class="max-w-sm rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 bg-white h-full">
                            <div class="h-48 overflow-hidden relative group">
                                <img src="https://t4.ftcdn.net/jpg/02/09/53/11/360_F_209531103_vL5MaF5fWcdpVcXk5yREBk3KMcXE0X7m.jpg"
                                    alt="Blog post image"
                                    class="w-full h-full object-cover transition-all duration-500 ease-in-out transform group-hover:scale-105">
                            </div>
                            <div class="p-6">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition-colors duration-300">
                                    Web Development Trends 2024
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    Discover the latest trends shaping web development this year.
                                </p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span>June 15, 2024</span>
                                    <span class="mx-2">•</span>
                                    <span>5 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div
                            class="max-w-sm rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 bg-white h-full">
                            <div class="h-48 overflow-hidden relative group">
                                <img src="https://t4.ftcdn.net/jpg/02/09/53/11/360_F_209531103_vL5MaF5fWcdpVcXk5yREBk3KMcXE0X7m.jpg"
                                    alt="Blog post image"
                                    class="w-full h-full object-cover transition-all duration-500 ease-in-out transform group-hover:scale-105">
                            </div>
                            <div class="p-6">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition-colors duration-300">
                                    Web Development Trends 2024
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    Discover the latest trends shaping web development this year.
                                </p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span>June 15, 2024</span>
                                    <span class="mx-2">•</span>
                                    <span>5 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div
                            class="max-w-sm rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 bg-white h-full">
                            <div class="h-48 overflow-hidden relative group">
                                <img src="https://t4.ftcdn.net/jpg/02/09/53/11/360_F_209531103_vL5MaF5fWcdpVcXk5yREBk3KMcXE0X7m.jpg"
                                    alt="Blog post image"
                                    class="w-full h-full object-cover transition-all duration-500 ease-in-out transform group-hover:scale-105">
                            </div>
                            <div class="p-6">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition-colors duration-300">
                                    Web Development Trends 2024
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    Discover the latest trends shaping web development this year.
                                </p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span>June 15, 2024</span>
                                    <span class="mx-2">•</span>
                                    <span>5 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Navigation Buttons -->
                <!-- Navigation Buttons -->
                <div
                    class="swiper-button-next bg-sky-400/40 hover:bg-sky-400/70 text-gray-600 rounded-full w-12 h-12 shadow-md transition-all flex items-center justify-center">
                </div>
                <div
                    class="swiper-button-prev bg-sky-400/40 hover:bg-sky-400/70 text-gray-600 rounded-full w-12 h-12 shadow-md transition-all flex items-center justify-center">
                </div>

            </div>
        </div>






    </section>







@section('scripts')

    {{-- banner slider --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".bannerSwiper", {
                scrollbar: {
                    el: ".swiper-scrollbar",
                    hide: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                loop: true,
                speed: 1500,
            });
        });
    </script>


    {{-- blog slider --}}
    <script>
        const swiper = new Swiper('.blogSwiper', {
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            breakpoints: {
                // Responsive breakpoints
                320: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
            }
        });
    </script>

    {{-- text animation --}}
    <script>
        const brands = [
            "MODEL FOUNDATION",
            "AGRO LIMITED",
            "COOPERATIVE BANK",
            "FOOD & BEVERAGE",
            "TRADING HOUSE",
            "SECURITY SERVICE",
            "IT SERVICE"
        ];

        let index = 0;
        const brandText = document.getElementById("brandText");

        function showNextBrand() {
            brandText.classList.remove("animate__flipInX");
            void brandText.offsetWidth; // Force reflow
            brandText.textContent = brands[index];
            brandText.classList.add("animate__flipInX");
            index = (index + 1) % brands.length;
        }

        showNextBrand(); // initial text
        setInterval(showNextBrand, 3000);
    </script>



@endsection


@endsection
