<!-- Sidebar (Floating & Detached) -->
<aside id="sidebar"
  class="fixed top-4 left-4 w-64 h-[calc(100vh-2rem)] bg-gray-300 shadow-lg rounded-2xl z-50 flex flex-col 
         transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">

  <!-- Logo -->
  <div class="h-16 flex items-center justify-center border-b">
    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-8">
    <span class="ml-2 font-bold text-lg text-gray-800">RAF</span>
  </div>

  <!-- Navigation -->
  <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
    <a href="/dashboard" class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-teal-100 hover:text-teal-600 transition">
      <i class="fas fa-home mr-3"></i>
      <span>My Profile</span>
    </a>

    <a href="/profile" class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-teal-100 hover:text-teal-600 transition">
      <i class="fas fa-user mr-3"></i>
      <span>About Me</span>
    </a>

    <a href="/users" class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-teal-100 hover:text-teal-600 transition">
      <i class="fas fa-users mr-3"></i>
      <span>Contact me</span>
    </a>

    <a href="/tables" class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-teal-100 hover:text-teal-600 transition">
      <i class="fas fa-briefcase mr-3"></i>
      <span>Portfolio</span>
    </a>

    <a href="/tables" class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-teal-100 hover:text-teal-600 transition">
      <i class="fas fa-table mr-3"></i>
      <span>My skills</span>
    </a>

    <a href="/billing" class="flex items-center px-4 py-2 rounded-lg text-gray-700 hover:bg-teal-100 hover:text-teal-600 transition">
      <i class="fas fa-file-invoice-dollar mr-3"></i>
      <span>Testimonials</span>
    </a>
  </nav>

  <!-- Footer -->
  <div class="p-4 border-t">
    <a href="#" class="flex items-center px-4 py-2 bg-teal-500 text-white rounded-lg hover:bg-teal-600 transition">
      <i class="fas fa-book mr-2"></i>
      Documentation
    </a>
  </div>
</aside>

<!-- Mobile Toggle Button -->
<div class="md:hidden fixed top-4 left-4 z-50">
  <button id="sidebarToggle" class="p-2 bg-white shadow rounded-lg text-gray-700 focus:outline-none">
    <i class="fas fa-bars text-2xl"></i>
  </button>
</div>

<!-- Script -->
<script>
  const sidebar = document.getElementById("sidebar");
  const toggle = document.getElementById("sidebarToggle");

  toggle.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
  });
</script>
