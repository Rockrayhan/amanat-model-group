@extends('frontend.layouts.app')

@section('title', 'Chairman\'s Message')

@section('content')

    {{-- Page Banner --}}
    <section class="">
        <div style="background-image: url('{{ asset('/frontend/images/management_cover.jpg') }}');"
            class="bg-cover bg-no-repeat relative h-68 w-full center">
            <div class="absolute inset-0 bg-secondary opacity-60"></div>
            <div class="relative z-10 text-white px-5 md:px-10 gap-6 max-w-4xl text-left">
                <h1 class="page-title font-semibold">Chairman's Message</h1>
            </div>
        </div>
    </section>

    {{-- Chairman’s Message --}}
    <section class="bg-secondary-light text-secondary py-16">
        <div class="container px-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                {{-- Left Image --}}
                <div>
                    <img src="https://www.ramayaworld.com/images/Chairman-Message.jpg"
                        alt="Chairman" class="w-full rounded-xl shadow-lg object-fill h-auto md:h-[400px]">
                </div>

                {{-- Right Text --}}
                <div class="space-y-5 max-w-xl">
                    <h2 class="text-2xl md:text-3xl font-bold text-secondary">A Message from Our Chairman</h2>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Dear Visitors,<br>
                        I warmly welcome you to Amanat Model Group. With deep gratitude to the Almighty, our journey has
                        been one of faith, dedication, and a relentless pursuit of excellence across diverse industries.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        At the heart of our organization lies a strong commitment to ethical practices, community growth,
                        and sustainable development. Our vision is to empower lives — not just through business, but by
                        building futures rooted in dignity, knowledge, and opportunity.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        I invite you to explore our initiatives and be a part of our mission in building a brighter,
                        values-driven tomorrow for Bangladesh and beyond.
                    </p>
                    <p class="text-lg font-semibold text-secondary">
                        — Dr. Abdul Azim Al-Farooqi <br>
                        Chairman, Amanat Model Group
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to Action --}}
    <section class="py-12 text-center bg-white">
        <div class="container mx-auto space-y-6">
            <h3 class="text-2xl font-bold text-secondary">Explore Our Vision in Action</h3>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                From education and agriculture to finance and technology, Amanat Model Group is shaping a better tomorrow.
                Discover how we're making a difference across industries.
            </p>
            <a href="/about" class="btn btn-secondary btn-wide text-white">Learn More About Us</a>
        </div>
    </section>

@endsection
