<x-layout>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
        <section id="testimonials">
            <h2 class="text-3xl font-bold text-center mb-2">Testimonials</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-8">
                These are some testimonials, from my clients, relatives and previous bosses I have worked it. 
            </p>

            <div class="max-w-2xl mx-auto text-center">
                <div class="mb-4">
                    <img src="{{ asset('images/testimonial.jpg') }}" alt="Saul Goodman"
                        class="w-24 h-24 rounded-full mx-auto shadow-md">
                </div>
                <h3 class="font-semibold text-lg">Saul Goodman</h3>
                <p class="text-gray-500 mb-2">CEO & Founder</p>

                {{-- Stars --}}
                <div class="flex justify-center mb-4">
                    @for ($i = 0; $i < 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="w-5 h-5 text-yellow-500" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 
                                    00.95.69h3.462c.969 0 1.371 1.24.588 
                                    1.81l-2.8 2.034a1 1 0 
                                    00-.364 1.118l1.07 3.292c.3.921-.755 
                                    1.688-1.54 1.118l-2.8-2.034a1 1 0 
                                    00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 
                                    00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 
                                    00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>

                <blockquote class="text-gray-600 italic">
                    "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accumsan quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper."
                </blockquote>
            </div>
        </section>
    </div>


</x-layout>
