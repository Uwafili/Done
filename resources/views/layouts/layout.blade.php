<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Responsive Nav</title>
  
</head>

<body class="bg-[#FAF9F6] min-h-screen pb-16 md:pb-0 text-yellow-400">

  <!-- 📱 Mobile Header (Top) -->
  <div class="md:hidden flex justify-start items-center px-4 py-3 bg-[#0A0A0A] text-yellow-400 fixed top-0 left-0 right-0 z-50">
    <div class="text-lg font-bold tracking-wide">MyWebsite</div>
  </div>

  <!-- 💻 Desktop Top Bar -->
  <div class="hidden md:flex justify-between items-center px-4 py-3 bg-[#0A0A0A] text-yellow-400 shadow-md fixed top-0 left-0 right-0 z-50">
    <!-- Logo (Left) -->
    <div class="text-lg font-bold tracking-wide">
      MyWebsite
    </div>

    <!-- Toggle Button (Right) -->
    <button id="toggleSidebar" class="bg-yellow-500 p-2 rounded hover:bg-yellow-400">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- 💻 Sidebar for Desktop -->
  <aside id="sidebar" class="hidden md:flex fixed top-0 left-0 h-full w-64 bg-[#1a1a1a] text-yellow-400 flex-col p-6 pt-16 transition-transform duration-300 transform -translate-x-full z-40">
    <button id="closeSidebar" class="self-end mb-4 bg-red-600 p-2 rounded hover:bg-red-500">
      <!-- Close Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <nav class="space-y-3">
      <a href="#" class="block hover:underline">Home</a>
      <a href="#" class="block hover:underline">About</a>
      <a href="#" class="block hover:underline">Services</a>
      <a href="#" class="block hover:underline">Contact</a>
      <a href="" class="block hover:underline">Login</a>
      <a href="{{route('register')}}" class="block hover:underline">Sign Up</a>
    </nav>
  </aside>

  <!-- 📱 Bottom Nav for Mobile -->
  <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-[#1a1a1a] text-yellow-400 flex justify-around py-3 shadow-md z-30">
    <a href="#" class="hover:text-yellow-300">
      <svg class="h-6 w-6 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M3 6h18M3 18h18" />
      </svg>
      <span class="text-xs block">Home</span>
    </a>
    <a href="#" class="hover:text-yellow-300">
      <svg class="h-6 w-6 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
      </svg>
      <span class="text-xs block">About</span>
    </a>
    <a href="#" class="hover:text-yellow-300">
      <svg class="h-6 w-6 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
      <span class="text-xs block">Login</span>
    </a>
    <a href="#" class="hover:text-yellow-300">
      <svg class="h-6 w-6 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
      </svg>
      <span class="text-xs block" >Sign Up</span>
    </a>
  </nav>

  <script>
    const sidebar = document.getElementById("sidebar");
    const toggleBtn = document.getElementById("toggleSidebar");
    const closeBtn = document.getElementById("closeSidebar");

    toggleBtn?.addEventListener("click", () => {
      sidebar.classList.remove("-translate-x-full");
    });

    closeBtn?.addEventListener("click", () => {
      sidebar.classList.add("-translate-x-full");
    });
  </script>
  
@yield('content')
<!-- Footer -->
<footer class="bg-[#1a1a1a] text-yellow-400 py-6 mt-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row justify-between items-center">
      <!-- Footer Logo and Text -->
      <div class="mb-4 md:mb-0">
        <h3 class="text-lg font-bold">MyWebsite</h3>
        <p class="text-sm">© 2025 MyWebsite. All rights reserved.</p>
      </div>

      <!-- Social Media Links -->
      <div class="flex space-x-4">
        <a href="https://facebook.com" target="_blank" class="hover:text-yellow-300">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.794.143v3.24h-1.918c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.324-.593 1.324-1.324V1.325C24 .593 23.407 0 22.675 0z" />
          </svg>
        </a>
        <a href="https://twitter.com" target="_blank" class="hover:text-yellow-300">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195 4.916 4.916 0 00-8.384 4.482A13.944 13.944 0 011.671 3.149a4.916 4.916 0 001.523 6.573 4.897 4.897 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.918 4.918 0 004.6 3.417A9.867 9.867 0 010 21.543a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A9.936 9.936 0 0024 4.557z" />
          </svg>
        </a>
        <a href="https://instagram.com" target="_blank" class="hover:text-yellow-300">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.31.975.975 1.247 2.242 1.31 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.31 3.608-.975.975-2.242 1.247-3.608 1.31-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.31-.975-.975-1.247-2.242-1.31-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.334-2.633 1.31-3.608.975-.975 2.242-1.247 3.608-1.31 1.266-.058 1.646-.07 4.85-.07zm0-2.163C8.756 0 8.332.013 7.052.072 5.773.13 4.548.396 3.465 1.48 2.382 2.564 2.116 3.789 2.058 5.068.999 6.348.986 6.772.986 12s.013 5.652.072 6.932c.058 1.279.324 2.504 1.408 3.588 1.084 1.084 2.309 1.35 3.588 1.408 1.28.059 1.704.072 6.932.072s5.652-.013 6.932-.072c1.279-.058 2.504-.324 3.588-1.408 1.084-1.084 1.35-2.309 1.408-3.588.059-1.28.072-1.704.072-6.932s-.013-5.652-.072-6.932c-.058-1.279-.324-2.504-1.408-3.588-1.084-1.084-2.309-1.35-3.588-1.408C16.652.013 16.228 0 12 0z" />
            <path d="M12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z" />
          </svg>
        </a>
        <a href="https://linkedin.com" target="_blank" class="hover:text-yellow-300">
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm13.5 11.268h-3v-5.5c0-1.378-.028-3.152-1.919-3.152-1.919 0-2.213 1.5-2.213 3.051v5.601h-3v-10h2.881v1.367h.041c.401-.761 1.381-1.563 2.841-1.563 3.041 0 3.601 2.001 3.601 4.601v5.595z" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
