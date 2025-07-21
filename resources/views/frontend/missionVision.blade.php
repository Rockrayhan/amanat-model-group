@extends('frontend.layouts.app')

@section('title', 'Mission-Vission')

@section('content')

    {{-- Page Banner --}}
    <section class="">
        <div style="background-image: url('{{ asset('/frontend/images/management_cover.jpg') }}');"
            class="bg-cover bg-no-repeat relative h-68 w-full center">
            <div class="absolute inset-0 bg-secondary opacity-60"></div>
            <div class="relative z-10 text-white px-5 md:px-10 gap-6 max-w-4xl text-left">
                <h1 class="page-title font-semibold">Mission Vission</h1>
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



@endsection
