@extends('frontend.layouts.app')

@section('title', 'Dashboard')


@section('content')

    {{-- banner --}}

    <div class="h-[90vh]">
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
                                AMANAT MODEL FOOD AND BEVERAGE LIMITED
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
                                AMANAT TRADING COOPERATIVE BANK
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
                                AMANAT MODEL AGRO LIMITED
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
    <section>
<div id="globe"></div>

    </section>


    {{-- short description --}}
    <section class="bg-primary text-white">
        <p class="container text-center px-10 py-12 w-4/5 text-xl">
            Amanat Model Group is a forward-thinking and diversified business group rooted in strong values and visionary
            leadership. With operations across key sectors including textiles, finance, agriculture, healthcare, and
            education, the group continues to drive sustainable growth and innovation.
            Guided by a commitment to quality, community impact, and ethical business practices, Amanat Model Group aims to
            empower industries and uplift lives across Bangladesh.
        </p>
    </section>


    {{-- our brands --}}

    <section class="container mx-auto px-4 py-16">
        <h1 class="h3 font-bold text-center text-primary mb-10">
            OUR BRANDS & SOLUTIONS

            <span class="text-white bg-primary py-2 inline-block rounded w-[400px]">
                <span id="brandText" class="inline-block w-full text-center animate__animated animate__slower">
                    <!-- Brand will appear here -->
                </span>
            </span>
        </h1>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 px-4">

            <!-- Card 1 -->
            <div
                class="flex items-center shadow-md rounded-xl p-5 hover:shadow-xl transition-all duration-300 w-full max-w-md mx-auto h-50">

                <div class="flex  gap-4 ">
                    <img class="h-20 w-20 object-cover rounded-md"
                        src="https://cdn.vectorstock.com/i/1000v/40/00/foundation-logo-template-design-vector-38234000.jpg"
                        alt="Amanat Model Foundation Logo">
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-1"> AMANAT MODEL FOUNDATION </h4>
                        <p class="text-gray-600  leading-relaxed">
                            A trusted platform dedicated to building better futures through community-focused initiatives
                            and education-first programs.
                        </p>
                    </div>
                </div>

            </div>
            <!-- Card 2 -->
            <div
                class="flex items-center shadow-md rounded-xl p-5 hover:shadow-xl transition-all duration-300 w-full max-w-md mx-auto h-50">

                <div class="flex  gap-4 ">
                    <img class="h-20 w-20 object-cover rounded-md"
                        src="https://media.istockphoto.com/id/866393210/vector/farm-icon.jpg?s=612x612&w=0&k=20&c=CZnGt4ER-NjDGJJMzyYaGEz3ko9BoYnuf2vNRp-cMfc="
                        alt="Amanat Agro Logo">
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-1"> AMANAT MODEL AGRO LIMITED </h4>
                        <p class="text-gray-600  leading-relaxed">
                            Committed to modern agriculture, sustainable farming, and empowering local farmers with
                            cutting-edge solutions.
                        </p>
                    </div>
                </div>

            </div>
            <!-- Card 3 -->
            <div
                class="flex items-center shadow-md rounded-xl p-5 hover:shadow-xl transition-all duration-300 w-full max-w-md mx-auto h-50">

                <div class="flex  gap-4 ">
                    <img class="h-20 w-20 object-cover rounded-md"
                        src="https://static.vecteezy.com/system/resources/previews/048/782/554/non_2x/trading-logo-design-free-vector.jpg"
                        alt="Amanat Trading Logo">
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-1"> AMANAT TRADING COOPERATIVE BANK </h4>
                        <p class="text-gray-600  leading-relaxed">
                            A forward-thinking cooperative bank enabling secure, accessible, and inclusive financial
                            services across regions.
                        </p>
                    </div>
                </div>

            </div>
            <!-- Card 4 -->
            <div
                class="flex items-center shadow-md rounded-xl p-5 hover:shadow-xl transition-all duration-300 w-full max-w-md mx-auto h-50">

                <div class="flex  gap-4 ">
                    <img class="h-20 w-20 object-cover rounded-md"
                        src="https://img.freepik.com/premium-vector/food-beverage-logo-design-inspirations_527727-272.jpg"
                        alt="Amanat Food Logo">
                    <div>
                        <h4 class="text-xl font-semibold text-primary mb-1"> AMANAT MODEL FOOD & BEVERAGE LIMITED </h4>
                        <p class="text-gray-600  leading-relaxed">
                            Delivering high-quality food and beverage products that blend taste, nutrition, and safety at
                            every level.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </section>



    {{-- about section 1 --}}

    <section class="my-6 py-16">
        <div class="container center gap-4 flex-wrap">
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

    <section class="bg-secondary text-white py-16 container">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-0 items-center px-4">

            <!-- Left Image -->
            <div>
                <img src="https://plus.unsplash.com/premium_photo-1661331747255-25854e79d9b6?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Zm91bmRlcnxlbnwwfHwwfHx8MA%3D%3D"
                    alt="About Image" class="w-full h-auto md:h-[400px] object-cover rounded-xl shadow-lg">
            </div>

            <!-- Right Content -->
            <div class="w-full flex justify-center">
                <div class="space-y-6 w-full max-w-lg text-center md:text-left">
                    <h2 class="text-4xl font-bold leading-tight"> Our Founder </h2>
                    <p class="text-lg leading-relaxed">
                        Since our establishment in 1990, Amanat Group has evolved into a diversified business entity with
                        operations spanning manufacturing, technology, healthcare, and infrastructure.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Guided by a vision of sustainable growth and community empowerment, we are committed to innovation,
                        excellence, and delivering value across every sector we touch.
                    </p>
                    <a href="#more"
                        class="inline-block bg-white text-sky-600 font-semibold px-6 py-2 rounded-lg shadow hover:bg-gray-100 transition duration-300">
                        Learn More
                    </a>
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
                    <h2 class="text-4xl font-bold text-sky-700 leading-tight">
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
                    <a href="#more"
                        class="inline-block bg-sky-600 text-white font-medium px-6 py-3 rounded-lg shadow-md hover:bg-sky-700 transition-all duration-300">
                        Learn More
                    </a>
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
        <div class="flex flex-col lg:flex-row gap-12 mb-16">
            <div class="md:w-2/5 w-full flex items-center">
                <div>
                    <h2
                        class="h2 font-bold text-secondary mb-6 relative after:content-[''] after:absolute after:left-0 after:bottom-[-8px] after:w-16 after:h-1 after:bg-blue-500">
                        Our Honorable Clients
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        We take pride in partnering with industry leaders and innovators. Our collaborations have helped
                        businesses
                        transform their digital presence and achieve remarkable growth through cutting-edge solutions.
                    </p>
                </div>
            </div>

            <!-- Client Logos Grid -->
            <div class="md:w-3/5 w-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8">
                @for ($i = 19; $i < 31; $i++)
                    <div
                        class="bg-white p-6 rounded-xl shadow-lg hover:shadow-md transition-all duration-300 border border-gray-100 flex items-center justify-center h-32">
                        <img src="{{ asset('/frontend/images/clients/client' . $i . '.jpg') }}" alt="Client logo"
                            class="max-h-16 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-200"
                            loading="lazy">
                    </div>
                @endfor
            </div>
        </div>

    </section>

    {{-- blogs --}}

    <section class="container">

        <h1 class="text-3xl md:text-4xl font-bold text-center text-sky-700 mb-10">
            NEWS & EVENTS
        </h1>


        <div class="relative px-12 py-8 max-w-7xl mx-auto">
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
                <div
                    class="swiper-button-next bg-sky-400/50 hover:bg-sky-400 text-gray-800 rounded-full w-10 h-10 shadow-md transition-all">
                </div>
                <div
                    class="swiper-button-prev bg-sky-400/50 hover:bg-sky-400 text-gray-800 rounded-full w-10 h-10 shadow-md transition-all">
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
            "FOOD & BEVERAGE"
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
