@extends('frontend.layouts.app')

@section('title', 'Dashboard')

@section('content')


    {{-- page banner --}}
    <section class="">
        <div style="background-image: url('{{ asset('/frontend/images/management_cover.jpg') }}');"
            class="bg-cover bg-center bg-no-repeat relative h-68 w-full center">
            {{-- Dark overlay (slightly lighter) --}}
            <div class="absolute inset-0 bg-secondary opacity-60"></div>

            <div class="relative z-10 text-white px-5 md:px-10  gap-6 max-w-4xl text-left">
                <h1 class="page-title font-semibold">
                    About Founder
                </h1>
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


        {{-- Vision & Philosophy --}}
    <section class="bg-white text-gray-800 py-16">
        <div class="container max-w-5xl mx-auto text-center space-y-8">
            <h2 class="h2 font-bold text-secondary">Founder’s Vision</h2>
            <p class="text-lg leading-relaxed max-w-3xl mx-auto">
                Dr. Abdul Azim Al-Farooqi envisions a Bangladesh rooted in ethical prosperity, guided by faith, education, and
                innovation. His mission is to nurture a generation of professionals and entrepreneurs grounded in Islamic
                values and social responsibility.
            </p>
        </div>
    </section>

    {{-- Key Milestones --}}
    <section class="bg-secondary-light py-16 text-secondary">
        <div class="container">
            <h2 class="h2 font-bold text-center mb-10">Milestones of Excellence</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <h3 class="text-xl font-bold mb-2">2005</h3>
                    <p class="text-gray-700">Established Amanat Model Madrasah, nurturing over 2,000 students in Islamic and modern education.</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <h3 class="text-xl font-bold mb-2">2012</h3>
                    <p class="text-gray-700">Launched Amanat Group, expanding into agriculture, healthcare, IT, and more.</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <h3 class="text-xl font-bold mb-2">2021</h3>
                    <p class="text-gray-700">Recognized for lifetime achievement in Islamic Leadership and Community Service.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Values Section --}}
    <section class="bg-white py-16 text-gray-800">
        <div class="container max-w-6xl mx-auto text-center space-y-10">
            <h2 class="h2 font-bold text-secondary">Core Principles</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-6 border rounded-xl shadow hover:shadow-lg">
                    <h4 class="text-xl font-semibold mb-2">Integrity</h4>
                    <p>Every decision is guided by transparency, truth, and Islamic ethics.</p>
                </div>
                <div class="p-6 border rounded-xl shadow hover:shadow-lg">
                    <h4 class="text-xl font-semibold mb-2">Education</h4>
                    <p>Dedicated to uplifting society through meaningful learning and guidance.</p>
                </div>
                <div class="p-6 border rounded-xl shadow hover:shadow-lg">
                    <h4 class="text-xl font-semibold mb-2">Service</h4>
                    <p>Striving to serve the nation through impactful businesses and social projects.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Founder’s Message --}}
    <section class="bg-secondary text-white py-16">
        <div class="container max-w-4xl mx-auto text-center space-y-6 px-4">
            <h2 class="text-3xl font-bold">A Message from the Founder</h2>
            <p class="text-lg leading-relaxed">
                “Success is not just about wealth or titles; it is about the positive legacy we leave behind — through our
                values, contributions, and commitment to Allah.”
            </p>
            <span class="block font-semibold mt-4">— Dr. Abdul Azim Al-Farooqi</span>
        </div>
    </section>


@endsection