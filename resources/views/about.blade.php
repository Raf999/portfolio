
@extends('layouts.layout')

@section('title', 'About Me')

@section('content')

    {{-- <x-slot name="heading">About Page</x-slot> --}}

    <div class="container mx-auto px-6 py-12">

        {{-- About Section --}}
        <section id="about" class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-2">About</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-8">
                {{ $user->bio }}
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                {{-- Image --}}
                <div class="flex justify-center">
                    <img src="{{ asset('assets/img/personal.png') }}" alt="Profile"
                        class="rounded-lg shadow-md max-w-sm">
                </div>

                {{-- Info --}}
                <div>
                    <h3 class="text-xl font-semibold mb-2">{{ $user->title }}</h3>
                    <p class="text-gray-600 mb-6">
                        Equiped full stack developer with 3 years of experience in coding and a passion for creating dynamic and responsive web applications.
                    </p>

                    <div class="grid grid-cols-2 gap-4 text-gray-700">
                        <p><strong>Birthday:</strong> {{ $user->date_of_birth }}</p>
                        <p><strong>Age:</strong> {{ \Carbon\Carbon::parse($user->date_of_birth)->age }}</p>
                        <p><strong>Website:</strong> <a href="{{ $user->website }}" class="text-blue-600 hover:underline">{{ $user->website }}</a></p>
                        <p><strong>Degree:</strong> Currently in Level 400 studying BTECH in Computer Science</p>
                        <p><strong>Phone:</strong> {{ $user->primary_contact }} <br> {{ $user->secondary_contact }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>City:</strong> Accra, Ghana</p>
                        <p><strong>Freelance:</strong> Available</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Skills Section --}}
        <section id="skills" class="mb-16">
                    <h2 class="text-3xl font-bold text-center mb-2">Skills</h2>
                    <p class="text-gray-600 text-center max-w-2xl mx-auto mb-8">
                        Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach ($user->skills as $skill)
                            <div class="mb-4">
                                <div class="flex justify-between mb-1">
                                    <span>{{ $skill->name }}</span>
                                    <span>{{ $skill->proficiency }}%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-teal-400 h-3 rounded-full" style="width: {{ $skill->proficiency }}%"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    
                </section>

{{-- Testimonials Section --}}

        <section id="testimonials" 
            x-data="{ active: 0, testimonials: {{ $user->testimonials->toJson() }} }" 
            x-init="setInterval(() => { active = (active + 1) % testimonials.length }, 5000)"
            class="max-w-2xl mx-auto text-center relative">

            <h2 class="text-3xl font-bold mb-2">Testimonials</h2>
            <p class="text-gray-600 mb-8">What people say about me</p>

            <!-- Container for sliding -->
            <div class="relative min-h-[300px] overflow-hidden">
                <template x-for="(testimonial, index) in testimonials" :key="testimonial.id">
                    <div  
                        x-show="active === index" 
                        x-transition:enter="transition ease-out duration-500 transform"
                        x-transition:enter-start="opacity-0 translate-x-10"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-500 transform"
                        x-transition:leave-start="opacity-100 translate-x-0"
                        x-transition:leave-end="opacity-0 -translate-x-10"
                        class="absolute inset-0 flex flex-col items-center justify-center"
                    >
                        <div class="mb-4">
                            <img :src="testimonial.image_url" :alt="testimonial.name" 
                                class="w-24 h-24 rounded-full mx-auto shadow-md">
                        </div>
                        <h3 class="font-semibold text-lg" x-text="testimonial.name"></h3>
                        <p class="text-gray-500 mb-2" 
                        x-text="testimonial.role + (testimonial.company ? ', ' + testimonial.company : '')">
                        </p>

                        <!-- Rating stars -->
                        <div class="flex justify-center mb-4">
                            <template x-for="i in 5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-5 h-5" 
                                    :class="i <= testimonial.rating ? 'text-yellow-500' : 'text-gray-300'"
                                    viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 
                                            00.95.69h3.462c.969 0 1.371 1.24.588 
                                            1.81l-2.8 2.034a1 1 0 
                                            00-.364 1.118l1.07 3.292c.3.921-.755 
                                            1.688-1.54 1.118l-2.8-2.034a1 1 0 
                                            00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 
                                            00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 
                                            00.951-.69l1.07-3.292z"/>
                                </svg>
                            </template>
                        </div>

                        <blockquote class="text-gray-600 italic" x-text="testimonial.message"></blockquote>
                    </div>
                </template>
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center mt-6 space-x-2">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <button 
                        class="w-3 h-3 rounded-full"
                        :class="active === index ? 'bg-green-600' : 'bg-gray-300'"
                        @click="active = index"
                    ></button>
                </template>
            </div>

            <!-- Arrows -->
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button @click="active = (active - 1 + testimonials.length) % testimonials.length" 
                    class="p-2 bg-gray-200 rounded-full hover:bg-gray-300">
                    ‹
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button @click="active = (active + 1) % testimonials.length" 
                    class="p-2 bg-gray-200 rounded-full hover:bg-gray-300">
                    ›
                </button>
            </div>
        </section>

            
        
    </div>

@endsection
