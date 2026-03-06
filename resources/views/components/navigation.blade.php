<nav class="bg-gray-900/80 backdrop-blur-md shadow-lg sticky top-0 z-[60] border-b border-gray-800" x-data="{ mobileMenuOpen: false, resourcesOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo / Brand -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-3">
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                        My Portfolio
                    </span>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:space-x-1">
                <a href="{{ url('/') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ Request::is('/') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-colors">
                    Home
                </a>
                <a href="{{ url('/profile') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ Request::is('profile') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-colors">
                    Profile
                </a>
                <a href="{{ url('/welcome') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ Request::is('welcome') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-colors">
                    Dashboard
                </a>
                <a href="{{ url('/blog') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ Request::is('blog') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-colors">
                    Blog
                </a>
                <a href="{{ url('/projects') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ Request::is('projects') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-colors">
                    Projects
                </a>
                <a href="{{ url('/contact') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ Request::is('contact') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-colors">
                    Contact
                </a>
                <a href="{{ url('/faq') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ Request::is('faq') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-colors">
                    FAQ
                </a>
                
                <!-- Resources Dropdown -->
                <div class="relative" @click.away="resourcesOpen = false">
                    <button @click="resourcesOpen = !resourcesOpen" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-800 hover:text-blue-400 transition-colors flex items-center space-x-1">
                        <span>Resources</span>
                        <svg class="w-4 h-4" :class="resourcesOpen && 'transform rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="resourcesOpen" x-transition class="absolute right-0 mt-2 w-64 bg-gray-800 rounded-md shadow-lg py-1 ring-1 ring-gray-700 z-[100]">
                        <a href="https://www.w3schools.com" target="_blank" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-blue-400">W3Schools</a>
                        <a href="https://github.com" target="_blank" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-blue-400">Github</a>
                        <a href="https://www.freecodecamp.org" target="_blank" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-blue-400">FreeCodeCamp</a>
                        <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-blue-400">Course Regulations</a>
                        <a href="https://learn.hz.nl/my/" target="_blank" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-blue-400">Learn HZ</a>
                        <a href="https://teams.microsoft.com" target="_blank" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-blue-400">Teams</a>
                        <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-blue-400">Study Progress</a>
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-300 hover:text-blue-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-600">
                    <svg class="h-6 w-6" :class="mobileMenuOpen && 'hidden'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="h-6 w-6" :class="!mobileMenuOpen && 'hidden'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-4"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-4"
         class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-gray-800 bg-gray-900/95 backdrop-blur-lg">
            <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('/') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-all">
                Home
            </a>
            <a href="{{ url('/profile') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('profile') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-all">
                Profile
            </a>
            <a href="{{ url('/welcome') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('welcome') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-all">
                Dashboard
            </a>
            <a href="{{ url('/blog') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('blog') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-all">
                Blog
            </a>
            <a href="{{ url('/projects') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('projects') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-all">
                Projects
            </a>
            <a href="{{ url('/contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('contact') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-all">
                Contact
            </a>
            <a href="{{ url('/faq') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('faq') ? 'bg-blue-600/20 text-blue-400' : 'text-gray-300 hover:bg-gray-800 hover:text-blue-400' }} transition-all">
                FAQ
            </a>
            <div class="border-t border-gray-800 mt-2 pt-2">
                <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Resources</p>
                <a href="https://www.w3schools.com" target="_blank" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-blue-400 transition-all">W3Schools</a>
                <a href="https://github.com" target="_blank" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-blue-400 transition-all">Github</a>
                <a href="https://www.freecodecamp.org" target="_blank" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-blue-400 transition-all">FreeCodeCamp</a>
                <a href="https://learn.hz.nl/my/" target="_blank" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-blue-400 transition-all">Learn HZ</a>
            </div>
        </div>
    </div>
</nav>
