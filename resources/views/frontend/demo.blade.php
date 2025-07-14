@extends('frontend.layouts.app')

@section('title', 'Amanat Group - Demo Page')

@section('content')
    <!-- Hero Section -->
    <section class="hero min-h-[60vh] bg-gray-600 from-primary to-secondary">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-4xl">
                <h1 class="mb-5 text-5xl md:text-6xl font-bold">Welcome to Amanat Group</h1>
                <p class="mb-5 text-xl">Explore our demo page showcasing various components and features</p>
                <button class="btn btn-accent btn-lg px-6">Get Started</button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-base-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Our Features</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                    <figure class="px-10 pt-10">
                        <div class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-2xl mb-2">Amanat Model IT</h3>
                        <p class="text-base-content/70">Optimized for speed and efficiency to deliver the best user
                            experience.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                    <figure class="px-10 pt-10">
                        <div class="w-20 h-20 bg-secondary text-white rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-2xl mb-2"> Amanat Model Trading House </h3>
                        <p class="text-base-content/70">Enterprise-grade security to protect your data and privacy.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                    <figure class="px-10 pt-10">
                        <div class="w-20 h-20 bg-accent text-white rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title text-2xl mb-2"> AMANAT FOOD & BREVARAGE </h3>
                        <p class="text-base-content/70">Seamless integration with all major cloud platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-secondary text-primary">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="stat">
                    <div class="stat-value text-4xl">25+</div>
                    <div class="stat-title">Years Experience</div>
                </div>
                <div class="stat">
                    <div class="stat-value text-4xl">150+</div>
                    <div class="stat-title">Employees</div>
                </div>
                <div class="stat">
                    <div class="stat-value text-4xl">500+</div>
                    <div class="stat-title">Clients</div>
                </div>
                <div class="stat">
                    <div class="stat-value text-4xl">10+</div>
                    <div class="stat-title">Awards</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-base-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">What Our Clients Say</h2>

            <div class="carousel w-full">
                <!-- Testimonial 1 -->
                <div id="slide1" class="carousel-item relative w-full">
                    <div class="w-full flex flex-col items-center">
                        <div class="max-w-3xl text-center">
                            <div class="avatar mb-6">
                                <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://randomuser.me/api/portraits/men/43.jpg" />
                                </div>
                            </div>
                            <p class="text-xl italic mb-6">"Amanat Group has transformed our business operations with their
                                innovative solutions. Their team is professional and responsive."</p>
                            <h4 class="text-2xl font-semibold">Sarah Johnson</h4>
                            <p class="text-base-content/70">CEO, TechSolutions Inc.</p>
                        </div>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide3" class="btn btn-circle">❮</a>
                        <a href="#slide2" class="btn btn-circle">❯</a>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div id="slide2" class="carousel-item relative w-full">
                    <div class="w-full flex flex-col items-center">
                        <div class="max-w-3xl text-center">
                            <div class="avatar mb-6">
                                <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" />
                                </div>
                            </div>
                            <p class="text-xl italic mb-6">"The level of service and attention to detail from Amanat Group
                                is unmatched. We've seen a 40% increase in efficiency since implementation."</p>
                            <h4 class="text-2xl font-semibold">Michael Chen</h4>
                            <p class="text-base-content/70">Director, Global Enterprises</p>
                        </div>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="btn btn-circle">❮</a>
                        <a href="#slide3" class="btn btn-circle">❯</a>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div id="slide3" class="carousel-item relative w-full">
                    <div class="w-full flex flex-col items-center">
                        <div class="max-w-3xl text-center">
                            <div class="avatar mb-6">
                                <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://randomuser.me/api/portraits/men/31.jpg" />
                                </div>
                            </div>
                            <p class="text-xl italic mb-6">"The level of service and attention to detail from Amanat Group
                                is unmatched. We've seen a 40% increase in efficiency since implementation."</p>
                            <h4 class="text-2xl font-semibold"> John Cena </h4>
                            <p class="text-base-content/70">MD, Global Enterprises</p>
                        </div>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="btn btn-circle">❮</a>
                        <a href="#slide3" class="btn btn-circle">❯</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-secondary text-secondary-content">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-6">Ready to Get Started?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join hundreds of satisfied clients who trust Amanat Group for their
                business solutions.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="btn btn-secondary btn-lg shadow-2xl px-4 border-2 border-teal-400">Contact Us</button>
                <button class="btn btn-outline btn-lg btn-accent shadow-2xl px-4 border-2 border-teal-400">Learn More</button>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-base-100">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>

            <div class="join join-vertical w-full">
                <!-- FAQ Item 1 -->
                <div class="collapse collapse-arrow join-item border border-base-300">
                    <input type="radio" name="my-accordion-4" checked="checked" />
                    <div class="collapse-title text-xl font-medium">
                        What industries does Amanat Group serve?
                    </div>
                    <div class="collapse-content">
                        <p>Amanat Group serves a wide range of industries including manufacturing, technology, healthcare,
                            finance, and retail. Our solutions are adaptable to meet the specific needs of each sector.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="collapse collapse-arrow join-item border border-base-300">
                    <input type="radio" name="my-accordion-4" />
                    <div class="collapse-title text-xl font-medium">
                        How can I get in touch with your support team?
                    </div>
                    <div class="collapse-content">
                        <p>You can contact our support team 24/7 through our contact page, by email at
                            support@amanatgroup.com, or by phone at +1 (800) 123-4567.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="collapse collapse-arrow join-item border border-base-300">
                    <input type="radio" name="my-accordion-4" />
                    <div class="collapse-title text-xl font-medium">
                        What makes Amanat Group different from competitors?
                    </div>
                    <div class="collapse-content">
                        <p>Our 25+ years of industry experience, customer-first approach, and commitment to innovation set
                            us apart. We provide tailored solutions rather than one-size-fits-all products.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
