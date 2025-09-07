@extends('layouts.layout')

@section('title', 'Home')

@section('content')

{{-- Hero Section --}}

    <section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('assets/img/hero-bg.jpg') }}')">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/30"></div>

        <!-- Content Wrapper -->
        <div class="relative z-10 w-full h-full flex items-center px-6 md:px-20">
            <!-- Left column: text -->
            <div class="w-full md:w-3/4 text-left">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                    GAFARU ABDUL RAFIU
                </h1>
                <div class="flex items-center gap-3 mb-4">
                    <h4 class="text-2xl md:text-4xl font-semibold text-white mb-4">
                    Fullstack Developer
                    </h4>
                    <span class="flex items-center gap-1 border border-teal-600 text-teal-600 text-sm font-medium px-3 py-1 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
                        </svg>
                        5+ yrs Experience
                    </span>

                </div>
                <hr class="w-24 border-t-4 border-teal-500 mb-6">
                <p class="text-gray-200 text-lg mb-6 max-w-2xl">
                    Motivated Computer Science student with 5 years’ experience in teaching and administration. Skilled in organization and programming, eager to apply technical expertise in dynamic, tech-driven environments.
                </p>
                <a href="/contact" class="bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 px-6 rounded-lg text-lg">
                    Contact Me
                </a>
            </div>

            <!-- Right column: empty space -->
            <div class="hidden md:block w-1/4"></div>
        </div>
    </section>


{{-- Projects section  --}}
    <section id="portfolio" class="py-10 bg-gray-100">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">MY PROJECTS</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0">
                @foreach ($projects as $project)
                    <a href="{{$project->project_url}}" class="relative group portfolio-box block">
                    <img src="{{$project->image_url}}" class="w-full h-64 object-cover" alt="{{$project->title}}">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-white transition">
                    <span class="text-sm">{{ $project->category }}</span>
                        <span class="text-lg font-bold">{{ $project->title}}</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

{{-- Education section --}}

    <section class="w-full py-16 bg-white">
                <div class="max-w-6xl mx-auto px-6 text-center">
                    <!-- Section Heading -->
                    <h2 class="text-3xl font-bold text-gray-800">MY EDUCATION</h2>
                    <div class="w-16 h-1 bg-teal-500 mx-auto mt-2 mb-6"></div>
                    {{-- <p class="text-gray-600 max-w-3xl mx-auto">
                    Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                    </p> --}}

                    <!-- Cards -->
                    <div class="mt-12 flex flex-wrap justify-center gap-8">

                    @foreach ($education as $item)
                    <!-- Card 1 -->
                    <div class="w-full sm:w-80 bg-gray-50 p-8 rounded-2xl shadow transform transition duration-500 hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-100">
                        <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-teal-100 text-teal-500">
                            <!-- Example icon -->
                            <img src="{{ $item->icon_url }}" alt="icon" class="w-6 h-6 object-contain">
                        </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">{{$item->institution}}</h3>
                        <p class="mt-3 text-gray-600 text-sm">
                        Here I earned my {{$item->degree}}. The experience was transformative and laid the foundation for my career.
                        </p>
                        <p class="mt-3 text-gray-600 text-sm">
                        I started in {{$item->start_date}} and graduated in {{$item->end_date}}.
                        </p>
                    </div>

                    @endforeach
                </div>
            </section>

            

{{-- contact section --}}
    <section class="w-full py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 bg-white rounded-2xl shadow-lg p-10">
            
            <!-- Left Column -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Discuss your Project</h2>
                <p class="mt-4 text-gray-600">
                    I'm available for freelance work. Drop me a line if you have a project you think I'd be a good fit for.
                </p>

                <div class="mt-8 space-y-6">
                    <!-- Address -->
                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-teal-100 rounded-xl text-teal-600">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Address:</p>
                            <p class="font-semibold text-gray-800">GW-0292-6414, Agya herbal, North Ofankor, <br> Accra, Ghana</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-teal-100 rounded-xl text-teal-600">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">My Email:</p>
                            <p class="font-semibold text-gray-800">rafiugafaru7@gmail.com</p>
                            <p class="font-semibold text-gray-800">rafiugafaruabdul@gmail.com</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-teal-100 rounded-xl text-teal-600">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Call Me Now:</p>
                            <p class="font-semibold text-gray-800">+233 53 024 1453</p>
                            <p class="font-semibold text-gray-800">+233 50 426 6853</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="mt-8 flex space-x-4 text-teal-600">
                    <a href="#" class="hover:text-teal-800"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-teal-800"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-teal-800"><i class="fab fa-github"></i></a>
                    <a href="#" class="hover:text-teal-800"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Right Column (Form) -->
            <div>
                <p class="text-gray-600 mb-6">
                    I'm always open to discussing product design work or partnership opportunities.
                </p>

                <form action="#" method="POST" class="space-y-4">
                    <input type="text" placeholder="Name*" class="w-full border-b p-2 focus:outline-none focus:border-teal-500" required>
                    <input type="email" placeholder="Email*" class="w-full border-b p-2 focus:outline-none focus:border-teal-500" required>
                    <input type="text" placeholder="Location*" class="w-full border-b p-2 focus:outline-none focus:border-teal-500">

                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" placeholder="Budget*" class="border-b p-2 focus:outline-none focus:border-teal-500">
                        <input type="text" placeholder="Subject*" class="border-b p-2 focus:outline-none focus:border-teal-500">
                    </div>

                    <textarea placeholder="Message*" rows="4" class="w-full border-b p-2 focus:outline-none focus:border-teal-500"></textarea>

                    <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-2 rounded-md flex items-center">
                        Submit
                        <span class="ml-2">➜</span>
                    </button>
                </form>
            </div>
        </div>
    </section>



        <!-- Custom Tailwind animation -->
        <style>
        @keyframes fade-in-up {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        </style>
@endsection
