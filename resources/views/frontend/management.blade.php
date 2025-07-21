@extends('frontend.layouts.app')

@section('title', 'Amanat Group - Management')

@section('content')

    {{-- page banner --}}

    <section class="">
        <div style="background-image: url('{{ asset('/frontend/images/management_cover.jpg') }}');"
            class="bg-cover bg-no-repeat relative h-68 w-full center">
            {{-- Dark overlay (slightly lighter) --}}
            <div class="absolute inset-0 bg-secondary opacity-30"></div>

            <div class="relative z-10 text-white px-5 md:px-10  gap-6 max-w-4xl text-left">
                <h1 class="page-title font-semibold">
                    Board of Directors
                </h1>
            </div>


        </div>
    </section>



    {{-- Our Founder --}}

    <section class="bg-secondary-light text-secondary pb-16 pt-24">
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


    {{-- board of directors --}}
    <section class="container center flex-col py-16">
        <h2 class="h2 font-bold text-secondary underline mb-20"> Board Of Directors </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-10 md:gap-x-32 md:gap-y-24 font-semibold">

            <div class="text-center">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Chairman </p>
            </div>
            <div class="text-center">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Managing Director </p>
            </div>
            <div class="text-center">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director </p>
            </div>
            <div class="text-center">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director </p>
            </div>
            <div class="text-center">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director </p>
            </div>

        </div>

    </section>



    {{-- Management Team --}}
    <section class="container center flex-col py-16">
        <h2 class="h2 font-bold text-secondary underline mb-20"> Management Team </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-10 md:gap-x-32 md:gap-y-8 font-semibold">

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Marketing and Sales </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director: Planning and Business Development </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Finance & Investments </p>
            </div>
            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Marketing and Sales </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director: Planning and Business Development </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Finance & Investments </p>
            </div>
            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Marketing and Sales </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director: Planning and Business Development </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Finance & Investments </p>
            </div>
            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Marketing and Sales </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director: Planning and Business Development </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Finance & Investments </p>
            </div>


        </div>

    </section>

    {{-- Advisory panel --}}
    <section class="container center flex-col py-16">
        <h2 class="h2 font-bold text-secondary underline mb-20"> Advisory panel </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-10 md:gap-x-32 md:gap-y-12 font-semibold">

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Marketing and Sales </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director: Planning and Business Development </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Finance & Investments </p>
            </div>
            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Marketing and Sales </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director: Planning and Business Development </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Finance & Investments </p>
            </div>
            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Marketing and Sales </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Director: Planning and Business Development </p>
            </div>

            <div class="text-start">
                <h6 class="h6 text-secondary"> Mr. Adbullah AL Imran </h6>
                <p> Executive Director: Finance & Investments </p>
            </div>
 


        </div>

    </section>




@endsection
