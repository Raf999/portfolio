@extends('layouts.layout')

@section('title', 'About Me')

@section('content')

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <!-- Section Heading -->
                <h2 class="text-3xl font-bold text-gray-800">MY EDUCATIONAL JOURNEY</h2>
                <div class="w-16 h-1 bg-blue-500 mx-auto mt-2 mb-6"></div>
                {{-- <p class="text-gray-600 max-w-3xl mx-auto">
                Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                </p> --}}

                <!-- Cards -->
                <div class="mt-12 flex flex-wrap justify-center gap-8">

                @foreach ($education as $item)
                <!-- Card 1 -->
                <div class="w-full sm:w-80 bg-gray-50 p-8 rounded-2xl shadow transform transition duration-500 hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-100">
                    <div class="flex justify-center mb-4">
                    <div class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-500">
                        <!-- Example icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6m9-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
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
