@extends('layouts.layout')

@section('title', 'Contact Me')

@section('content')
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
@endsection
