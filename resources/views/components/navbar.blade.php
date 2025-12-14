  <nav class="bg-gray-800" x-data="{ mobileOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <!-- Logo and Desktop Navigation -->
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="/img/Logo.png" alt="Logo" class="h-8 w-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">  
              <x-navlink href="/" :current="request()->is('/')">Home</x-navlink>
              <x-navlink href="/posts" :current="request()->is('posts')">Blog</x-navlink>
              <x-navlink href="/about" :current="request()->is('about')">About</x-navlink>
              <x-navlink href="/contact" :current="request()->is('contact')">Contact</x-navlink>
            </div>
          </div>
        </div>

        <!-- Desktop Profile -->
        <div class="hidden md:flex items-center space-x-4">
          <!-- Profile dropdown -->
          <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center text-sm focus:outline-none">
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User" />
            </button>

            <div x-show="open" x-transition:enter="transition ease-out duration-100 transform"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75 transform"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5 focus:outline-hidden"
                 role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
            </div>
          </div>
        </div>

        <!-- Mobile menu button - positioned at the far right -->
        <div class="flex md:hidden">
          <button @click="mobileOpen = !mobileOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700">
            <svg class="h-6 w-6" x-show="!mobileOpen" fill="none" stroke="currentColor" stroke-width="1.5"
                 viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
            <svg class="h-6 w-6" x-show="mobileOpen" fill="none" stroke="currentColor" stroke-width="1.5"
                 viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileOpen" class="md:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1">
        
            <x-navlink class='block' href="/" :current="request()->is('/')">Home</x-navlink>
            <x-navlink class='block' href="/posts" :current="request()->is('blog')">Blog</x-navlink>
            <x-navlink class='block' href="/about" :current="request()->is('about')">About</x-navlink>
            <x-navlink class='block' href="/contact" :current="request()->is('contact')">Contact</x-navlink>
            
        <div class="border-t border-gray-700 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User" />
          </div>
      <div>
            <div class="ml-3">
              <div class="text-base/5 font-medium text-white">Tom Cook</div>
              <div class="text-sm font-medium text-gray-400">tom@example.com</div>
      </div>
        </div>
    </div>
      <div class="mt-3 px-2 space-y-1">
              <a href="#" class="block px-4 py-3 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Your Profile</a>
              <a href="#" class="block px-4 py-3 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Settings</a>
              <a href="#" class="block px-4 py-3 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Sign out</a>
      </div>
    </div>
     
  </nav>