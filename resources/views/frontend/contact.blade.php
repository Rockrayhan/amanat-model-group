@extends('frontend.layouts.app')

@section('title', 'Dashboard')

@section('content')

    {{-- page banner --}}

    <section class="pb-16">
        <div style="background-image: url('{{ asset('/frontend/images/contact_cover.jpg') }}');"
            class="bg-cover bg-no-repeat relative h-68 w-full center">
            {{-- Dark overlay (slightly lighter) --}}
            <div class="absolute inset-0 bg-secondary opacity-30"></div>

            <div class="relative z-10 text-white px-5 md:px-10  gap-6 max-w-4xl text-left">
                <h1 class="page-title font-semibold">
                    CONTACT US
                </h1>
            </div>


        </div>
    </section>


    {{-- all brands --}}
    <section class="container mx-auto px-6 py-16" id="all-brands">

        <div class="center flex-col mb-16">
            <h2 class="h2 font-bold text-secondary mb-6 text-secondary">
                Our Honorable Clients
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed w-3/5">
                We take pride in partnering with industry leaders and innovators. Our collaborations have helped
                businesses transform their digital presence and achieve remarkable growth through cutting-edge
                solutions.
            </p>
        </div>

        <!-- Client Logos Grid -->
        <div class="w-full grid grid-cols-2 md:grid-cols-4 gap-8 container">
            @for ($i = 19; $i < 31; $i++)
                <div
                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 flex items-center justify-center h-32">
                    <img src="{{ asset('/frontend/images/clients/client' . $i . '.jpg') }}" alt="Client logo"
                        class="max-h-16 w-auto object-contain" loading="lazy">
                </div>
            @endfor

        </div>

    </section>



    {{-- map --}}
    <section class="w-full">

        <h2 class="h2 font-bold text-secondary mb-6 text-secondary text-center py-16">
            Find Us Here
        </h2>

        <div class="w-full h-[450px] overflow-hidden rounded-md shadow-md">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5411965212497!2d90.41650707484504!3d23.728072889633978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85a65c3cbbb%3A0x445b8d15d2b435a6!2sMotijheel!5e0!3m2!1sen!2sbd!4v1752157221894!5m2!1sen!2sbd"
                width="100%" height="100%" class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>


    {{-- contact us --}}
    <section class="py-16 container">

        <h2 class="h2 font-bold text-secondary mb-6 text-secondary text-center">
            Have Any Query ?
        </h2>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto px-4 py-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 ease-in-out p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
                <form class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-primary text-white py-3 px-6 rounded-lg font-medium hover:bg-primary-dark transition-colors duration-300 shadow-md hover:shadow-lg">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="bg-gray-50 rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 ease-in-out p-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h2>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-primary/10 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Phone</h3>
                            <p class="text-gray-600 mt-1">+1 (555) 123-4567</p>
                            <p class="text-gray-600">+1 (555) 987-6543</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-primary/10 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Email</h3>
                            <p class="text-gray-600 mt-1">info@amanatmodelgroup.com</p>
                            <p class="text-gray-600">support@amanatmodelgroup.com.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-primary/10 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Address</h3>
                            <p class="text-gray-600 mt-1">123 Business Avenue</p>
                            <p class="text-gray-600">Suite 456, New York, NY 10001</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>




@endsection
