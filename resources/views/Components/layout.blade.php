<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN -->
    <!-- Try jsDelivr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">


</head>
<body class="h-full">


<div class="flex flex-col min-h-screen pt-16">
  <nav class="fixed top-0 left-0 w-full bg-white z-50 shadow h-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
      
      <!-- Left: Logo -->
      <div class="flex items-center space-x-2">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Your Company" class="h-8 w-auto" />
        <span class="text-xl font-bold text-gray-800">RAF</span>
      </div>

      <!-- Center: Nav Links -->
      <div class="hidden md:flex items-center space-x-8">
        <x-nav-link href="/"  :active="request()->is('/')">HOME</x-nav-link>
        <x-nav-link href="/about"  :active="request()->is('about')">ABOUT</x-nav-link>
        <x-nav-link href="/contact"  :active="request()->is('contact')">CONTACT</x-nav-link>
        <x-nav-link href="/projects"  :active="request()->is('projects')">PROJECTS</x-nav-link>
        <x-nav-link href="/education"  :active="request()->is('education')">EDUCATION</x-nav-link>
      </div>

      <!-- Right: Icons + CTA -->
      <div class="flex items-center space-x-4">
        <button class="text-gray-700 hover:text-teal-600">
          <i class="fas fa-user text-lg"></i>
        </button>
        <button class="text-gray-700 hover:text-teal-600">
          <i class="fas fa-search text-lg"></i>
        </button>
        <a href="#" class="bg-teal-400 hover:bg-teal-500 text-white px-4 py-2 rounded-md font-semibold">
          Hire Talent
        </a>
      </div>

      
    </div>
  </nav>

  <header class="bg-white shadow-sm">
    {{-- <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
    </div> --}}
  </header>
  <main class="flex-1"> 
      {{ $slot }}
  </main>

  <footer class="bg-gray-900 text-white py-4 text-center">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p class="text-center text-gray-500 text-sm">© 2025 My portfolio.</p>
    </div>
  </footer>
</div>


</body>
</html>