@extends('frontend.layouts.app')

@section('title', 'Mission-Vission')

@section('content')


    {{-- Page Banner --}}
    <section class="">
        <div style="background-image: url('{{ asset('/frontend/images/management_cover.jpg') }}');"
            class="bg-cover bg-no-repeat relative h-68 w-full center">
            <div class="absolute inset-0 bg-secondary opacity-60"></div>
            <div class="relative z-10 text-white px-5 md:px-10 gap-6 max-w-4xl text-left">
                <h1 class="page-title font-semibold">Our Values</h1>
            </div>
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

{{-- Values Section --}}
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Driven by Purpose, Guided by Principles</h2>
                <p class="text-lg text-gray-600">
                    At Amanat Group, our values aren't just words — they're the foundation of our culture, guiding every decision and action we take.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ([
                    ['title' => 'Integrity', 'desc' => 'We uphold the highest ethical standards in all our dealings.', 'icon' => 'shield-check'],
                    ['title' => 'Innovation', 'desc' => 'We embrace new ideas to deliver better solutions.', 'icon' => 'light-bulb'],
                    ['title' => 'Customer Focus', 'desc' => 'We put our clients and communities first.', 'icon' => 'user-group'],
                    ['title' => 'Accountability', 'desc' => 'We take responsibility and deliver on our commitments.', 'icon' => 'clipboard-check'],
                    ['title' => 'Teamwork', 'desc' => 'We believe in the power of collaboration.', 'icon' => 'handshake'],
                    ['title' => 'Sustainability', 'desc' => 'We care deeply about people, planet, and future generations.', 'icon' => 'leaf'],
                ] as $value)
                    <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-md transition-all duration-300 text-center">
                        <div class="mb-4 flex justify-center">
                            <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <use xlink:href="#icon-{{ $value['icon'] }}" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-2 text-gray-800">{{ $value['title'] }}</h4>
                        <p class="text-gray-600 text-base leading-relaxed">{{ $value['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            {{-- Call-to-action --}}
            <div class="mt-14 text-center">
                <a href="/contact#core-values" class="inline-block bg-secondary text-white px-6 py-3 rounded-lg shadow hover:bg-[#007bbf] transition duration-300">
                    Learn More About Our Commitment
                </a>
            </div>
        </div>
    </section>

    {{-- Inspirational Quote Section --}}
    <section class="bg-secondary text-white py-16">
        <div class="container mx-auto px-4 md:px-8 text-center max-w-3xl">
            <svg class="w-10 h-10 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12h3.75M15 16h3.75m0 0A4.75 4.75 0 0115 21a4.75 4.75 0 01-4.75-4.75V12A4.75 4.75 0 0115 7.25A4.75 4.75 0 0119.75 12v4z" />
            </svg>
            <p class="text-xl md:text-2xl font-medium leading-relaxed">
                "Values aren't just guidelines—they're the heartbeat of every sustainable success."
            </p>
            <p class="mt-4 text-base md:text-lg font-light">— Chairman, Amanat Group</p>
        </div>
    </section>

    {{-- SVG Icon Definitions (optional if using external icon library) --}}
    <svg style="display: none;">
        <symbol id="icon-shield-check" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 3l7 4v5c0 4.5-3.25 8.24-7 9-3.75-.76-7-4.5-7-9V7l7-4z M9 12l2 2 4-4" />
        </symbol>
        <symbol id="icon-light-bulb" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.38 17h5.24M10.5 21h3m-6.16-5.17a6 6 0 119.32 0A4.5 4.5 0 0112 20.5a4.5 4.5 0 01-4.66-4.67z" />
        </symbol>
        <symbol id="icon-user-group" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M17 20v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2m6-6a4 4 0 100-8 4 4 0 000 8zm8 0a4 4 0 100-8 4 4 0 000 8z" />
        </symbol>
        <symbol id="icon-clipboard-check" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12l2 2 4-4m1-4h-1a2 2 0 00-4 0H9a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V8a2 2 0 00-2-2z" />
        </symbol>
        <symbol id="icon-handshake" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M5 13l4 4L19 7M4 4h6l3 3h7a2 2 0 012 2v7a2 2 0 01-2 2h-3" />
        </symbol>
        <symbol id="icon-leaf" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 2C7.5 2 2 7 2 12c0 4.5 5.5 10 10 10s10-5.5 10-10c0-5-5.5-10-10-10zm0 10v6m0 0l3-3m-3 3l-3-3" />
        </symbol>
    </svg>



@endsection
