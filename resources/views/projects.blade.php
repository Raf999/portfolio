<x-layout>
    <x-slot name="heading">Projects Page</x-slot>
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <!-- Section Heading -->
             <h2 class="text-3xl font-bold text-gray-800">MY PROJECTS</h2>
             <div class="w-16 h-1 bg-blue-500 mx-auto mt-2 mb-6"></div>
             <p class="text-gray-600 max-w-3xl mx-auto">
                 Here are some of the projects I've worked on. Each project reflects my skills and dedication to delivering quality work.
             </p>               
        </div>
    </section>
    <div class="bg-gray-50 min-h-screen flex flex-col items-center py-10">
        <!-- Card Grid -->
        <div class="grid gap-6 px-6 w-full max-w-7xl
                    grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($projects as $project)       
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4 flex flex-col">
            <img src="{{ $project->image_url }}" alt="Project Image" class="rounded-lg mb-4 object-cover h-48 w-full">
            <span class="text-xs uppercase tracking-wide text-gray-500">{{ $project->category }}</span>
            <h3 class="text-lg font-semibold text-gray-800 mt-1">{{ $project->title }}</h3>
            <p class="text-sm text-gray-600 mt-2 flex-grow">
                {{ $project->description }}
            </p>
            <a href="{{ $project->project_url }}" target="_blank" rel="noopener noreferrer"
                class="mt-4 bg-blue-100 hover:bg-blue-200 text-gray-800 px-4 py-2 rounded-lg text-sm flex items-center justify-center">
                Project Link <span class="ml-2">→</span>
            </a>

            </div>
            @endforeach

        </div>

        <!-- More Project Button -->
        <button class="mt-10 bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-xl">
            More Projects
        </button>
    </div>

</x-layout>
