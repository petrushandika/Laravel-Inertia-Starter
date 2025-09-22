<nav class="bg-black fixed top-0 left-0 w-full z-50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center">
        <div class="shrink-0">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
            alt="Your Company" class="h-8 w-8" />
        </div>
        <!-- Desktop menu -->
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <x-navbar.link href="/">Home</x-navbar.link>
            <x-navbar.link href="/about">About</x-navbar.link>
            <x-navbar.link href="/contact">Contact</x-navbar.link>
            <x-navbar.link href="/gallery">Gallery</x-navbar.link>
          </div>
        </div>
      </div>

      <!-- Mobile button -->
      <div class="-mr-2 flex md:hidden">
        <button id="menu-toggle"
          class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-300 hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
          <span class="sr-only">Open main menu</span>
          <svg id="icon-hamburger" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="h-6 w-6 hidden">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-black">
   <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
      <x-navbar.dropdown-item href="/" >Home</x-navbar.dropdown-item>
      <x-navbar.dropdown-item href="/about" >About</x-navbar.dropdown-item>
      <x-navbar.dropdown-item href="/contact" >Contact</x-navbar.dropdown-item>
      <x-navbar.dropdown-item href="/gallery" >Gallery</x-navbar.dropdown-item>
    </div>
  </div>
</nav>

<script>
  const toggleBtn = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const iconHamburger = document.getElementById("icon-hamburger");
  const iconClose = document.getElementById("icon-close");

  toggleBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
    iconHamburger.classList.toggle("hidden");
    iconClose.classList.toggle("hidden");
  });
</script>
