<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Creative - Tailwind Portfolio</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SimpleLightbox plugin CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
</head>
<body id="page-top" class="font-sans antialiased text-gray-800">

    <!-- ===== NAVBAR ===== -->
    <nav id="mainNav" class="fixed top-0 left-0 w-full bg-white shadow-md z-50 transition-all duration-300">
        <div class="container mx-auto flex justify-between items-center px-6 py-4">
            <a href="#page-top" class="text-xl font-bold text-orange-600">Start Tailwind</a>
            <button class="md:hidden text-gray-700 focus:outline-none" id="navToggle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul class="hidden md:flex space-x-6 text-gray-700 font-medium" id="navbarResponsive">
                <li><a href="#about" class="hover:text-orange-600">About</a></li>
                <li><a href="#services" class="hover:text-orange-600">Services</a></li>
                <li><a href="#portfolio" class="hover:text-orange-600">Portfolio</a></li>
                <li><a href="#contact" class="hover:text-orange-600">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- ===== HERO / MASTHEAD ===== -->
    <header class="h-screen bg-cover bg-center flex items-center justify-center text-center" style="background-image: url('assets/img/bg-masthead.jpg')">
        <div class="bg-black bg-opacity-50 w-full h-full flex flex-col justify-center items-center px-6">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Your Favorite Place for Free Tailwind Themes</h1>
            <hr class="w-24 border-t-4 border-orange-500 mx-auto mb-6">
            <p class="text-gray-200 text-lg mb-6 max-w-2xl">Start Tailwind can help you build better websites using Tailwind framework! Just download a theme and start customizing, no strings attached!</p>
            <a href="#about" class="bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-6 rounded-lg text-lg">Find Out More</a>
        </div>
    </header>

    <!-- ===== ABOUT ===== -->
    <section id="about" class="py-20 bg-orange-600 text-center text-white">
        <div class="container mx-auto px-6 max-w-3xl">
            <h2 class="text-3xl font-bold mb-4">We've got what you need!</h2>
            <hr class="w-24 border-t-4 border-white mx-auto mb-6">
            <p class="text-gray-100 mb-6">Start Tailwind has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
            <a href="#services" class="bg-white text-orange-600 font-semibold py-3 px-6 rounded-lg text-lg hover:bg-gray-100">Get Started!</a>
        </div>
    </section>

    <!-- ===== SERVICES ===== -->
    <section id="services" class="py-20 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-4">At Your Service</h2>
            <hr class="w-24 border-t-4 border-orange-600 mx-auto mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="text-orange-600 text-5xl mb-4"><i class="bi bi-gem"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Sturdy Themes</h3>
                    <p class="text-gray-600">Our themes are updated regularly to keep them bug free!</p>
                </div>
                <div>
                    <div class="text-orange-600 text-5xl mb-4"><i class="bi bi-laptop"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Up to Date</h3>
                    <p class="text-gray-600">All dependencies are kept current to keep things fresh.</p>
                </div>
                <div>
                    <div class="text-orange-600 text-5xl mb-4"><i class="bi bi-globe"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Ready to Publish</h3>
                    <p class="text-gray-600">You can use this design as is, or you can make changes!</p>
                </div>
                <div>
                    <div class="text-orange-600 text-5xl mb-4"><i class="bi bi-heart"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Made with Love</h3>
                    <p class="text-gray-600">Is it really open source if it's not made with love?</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PORTFOLIO ===== -->
    <section id="portfolio" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="assets/img/portfolio/fullsize/1.jpg" class="relative group portfolio-box">
                    <img src="assets/img/portfolio/thumbnails/1.jpg" class="w-full h-auto" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-white transition">
                        <span class="text-sm">Category</span>
                        <span class="text-lg font-bold">Project Name</span>
                    </div>
                </a>
                <a href="assets/img/portfolio/fullsize/2.jpg" class="relative group portfolio-box">
                    <img src="assets/img/portfolio/thumbnails/2.jpg" class="w-full h-auto" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-white transition">
                        <span class="text-sm">Category</span>
                        <span class="text-lg font-bold">Project Name</span>
                    </div>
                </a>
                <a href="assets/img/portfolio/fullsize/3.jpg" class="relative group portfolio-box">
                    <img src="assets/img/portfolio/thumbnails/3.jpg" class="w-full h-auto" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-white transition">
                        <span class="text-sm">Category</span>
                        <span class="text-lg font-bold">Project Name</span>
                    </div>
                </a>
                <a href="assets/img/portfolio/fullsize/4.jpg" class="relative group portfolio-box">
                    <img src="assets/img/portfolio/thumbnails/4.jpg" class="w-full h-auto" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-white transition">
                        <span class="text-sm">Category</span>
                        <span class="text-lg font-bold">Project Name</span>
                    </div>
                </a>
                <a href="assets/img/portfolio/fullsize/5.jpg" class="relative group portfolio-box">
                    <img src="assets/img/portfolio/thumbnails/5.jpg" class="w-full h-auto" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-white transition">
                        <span class="text-sm">Category</span>
                        <span class="text-lg font-bold">Project Name</span>
                    </div>
                </a>
                <a href="assets/img/portfolio/fullsize/6.jpg" class="relative group portfolio-box">
                    <img src="assets/img/portfolio/thumbnails/6.jpg" class="w-full h-auto" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex flex-col justify-center items-center text-white transition">
                        <span class="text-sm">Category</span>
                        <span class="text-lg font-bold">Project Name</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== CALL TO ACTION ===== -->
    <section class="py-20 bg-gray-900 text-white text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-6">Free Download at Start Tailwind!</h2>
            <a href="https://startbootstrap.com/theme/creative/" class="bg-white text-gray-900 font-semibold py-3 px-6 rounded-lg text-lg hover:bg-gray-200">Download Now!</a>
        </div>
    </section>

    <!-- ===== CONTACT ===== -->
    <section id="contact" class="py-20">
        <div class="container mx-auto px-6 max-w-2xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Let's Get In Touch!</h2>
                <hr class="w-24 border-t-4 border-orange-600 mx-auto mb-6">
                <p class="text-gray-600">Ready to start your next project with us? Send us a message and we will get back to you as soon as possible!</p>
            </div>
            <form class="space-y-6">
                <div>
                    <label for="name" class="block text-left font-medium text-gray-700">Full name</label>
                    <input type="text" id="name" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Enter your name...">
                </div>
                <div>
                    <label for="email" class="block text-left font-medium text-gray-700">Email address</label>
                    <input type="email" id="email" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="name@example.com">
                </div>
                <div>
                    <label for="phone" class="block text-left font-medium text-gray-700">Phone number</label>
                    <input type="tel" id="phone" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="(123) 456-7890">
                </div>
                <div>
                    <label for="message" class="block text-left font-medium text-gray-700">Message</label>
                    <textarea id="message" rows="6" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-orange-600" placeholder="Enter your message here..."></textarea>
                </div>
                <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-6 rounded-lg text-lg">Submit</button>
            </form>
        </div>
    </section>



<!-- Old nav -->
<nav class="fixed top-0 left-0 w-full bg-gray-800 z-50 shadow h-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-center">
      <div class="flex h-16 items-center justify-center">
        <div class="flex items-center">
          <div class="shrink-0 mr-8">
            <img src="{{ asset('assets/img/logo.png?color=indigo&shade=500') }}" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="flex items-baseline space-x-6">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
              <x-nav-link href="/" :active="request()->is('/')">home</x-nav-link>
              <x-nav-link href="/about" :active="request()->is('about')">about</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">contact</x-nav-link>
              <x-nav-link href="/projects" :active="request()->is('projects')">projects</x-nav-link>
              <x-nav-link href="/education" :active="request()->is('education')">education</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            {{-- <el-dropdown class="relative ml-3">
              <button class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
              </button>

              <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Your profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign out</a>
              </el-menu>
            </el-dropdown> --}}
          </div>
        </div>
        {{-- <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div> --}}
      </div>
    </div>

    {{-- <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
        <a href="#" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
        <a href="/education" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Education</a>

      </div>
      <div class="border-t border-white/10 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign out</a>
        </div>
      </div>
    </el-disclosure> --}}
  </nav>


    <!-- ===== FOOTER ===== -->
    <footer class="py-6 bg-gray-800 text-center text-gray-400">
        <p>&copy; 2025 Your Website. All Rights Reserved.</p>
    </footer>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
