<nav class="site-nav-shell" x-data="{ mobileMenuOpen: false, resourcesOpen: false }">
    <div class="site-nav-container">
        <div class="site-nav-row">
            <!-- Logo / Brand -->
            <div class="site-nav-brand-wrap">
                <a href="{{ url('/') }}" class="site-nav-brand-link">
                    <span class="site-nav-brand">
                        My Portfolio
                    </span>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="site-nav-desktop">
                <a href="{{ url('/') }}" class="site-nav-link {{ Request::is('/') ? 'is-active' : '' }}">
                    Home
                </a>
                <a href="{{ url('/profile') }}" class="site-nav-link {{ Request::is('profile') ? 'is-active' : '' }}">
                    Profile
                </a>
                <a href="{{ url('/welcome') }}" class="site-nav-link {{ Request::is('welcome') ? 'is-active' : '' }}">
                    Dashboard
                </a>
                <a href="{{ url('/blog') }}" class="site-nav-link {{ Request::is('blog') ? 'is-active' : '' }}">
                    Blog
                </a>
                <a href="{{ url('/projects') }}" class="site-nav-link {{ Request::is('projects') ? 'is-active' : '' }}">
                    Projects
                </a>
                <a href="{{ url('/contact') }}" class="site-nav-link {{ Request::is('contact') ? 'is-active' : '' }}">
                    Contact
                </a>
                <a href="{{ url('/faq') }}" class="site-nav-link {{ Request::is('faq') ? 'is-active' : '' }}">
                    FAQ
                </a>
                
                <!-- Resources Dropdown -->
                <div class="site-nav-dropdown-wrap" @click.away="resourcesOpen = false">
                    <button @click="resourcesOpen = !resourcesOpen" class="site-nav-link site-nav-dropdown-toggle">
                        <span>Resources</span>
                        <svg class="site-nav-chevron" :class="resourcesOpen ? 'is-open' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="resourcesOpen" x-transition class="site-nav-dropdown">
                        <a href="https://www.w3schools.com" target="_blank" class="site-nav-dropdown-link">W3Schools</a>
                        <a href="https://github.com" target="_blank" class="site-nav-dropdown-link">Github</a>
                        <a href="https://www.freecodecamp.org" target="_blank" class="site-nav-dropdown-link">FreeCodeCamp</a>
                        <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank" class="site-nav-dropdown-link">Course Regulations</a>
                        <a href="https://learn.hz.nl/my/" target="_blank" class="site-nav-dropdown-link">Learn HZ</a>
                        <a href="https://teams.microsoft.com" target="_blank" class="site-nav-dropdown-link">Teams</a>
                        <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank" class="site-nav-dropdown-link">Study Progress</a>
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <div class="site-nav-mobile-toggle-wrap">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="site-nav-mobile-toggle">
                    <svg x-show="!mobileMenuOpen" class="site-nav-mobile-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="site-nav-mobile-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
         class="site-nav-mobile-panel">
        <div>
            <a href="{{ url('/') }}" class="site-nav-mobile-link {{ Request::is('/') ? 'is-active' : '' }}">
                Home
            </a>
            <a href="{{ url('/profile') }}" class="site-nav-mobile-link {{ Request::is('profile') ? 'is-active' : '' }}">
                Profile
            </a>
            <a href="{{ url('/welcome') }}" class="site-nav-mobile-link {{ Request::is('welcome') ? 'is-active' : '' }}">
                Dashboard
            </a>
            <a href="{{ url('/blog') }}" class="site-nav-mobile-link {{ Request::is('blog') ? 'is-active' : '' }}">
                Blog
            </a>
            <a href="{{ url('/projects') }}" class="site-nav-mobile-link {{ Request::is('projects') ? 'is-active' : '' }}">
                Projects
            </a>
            <a href="{{ url('/contact') }}" class="site-nav-mobile-link {{ Request::is('contact') ? 'is-active' : '' }}">
                Contact
            </a>
            <a href="{{ url('/faq') }}" class="site-nav-mobile-link {{ Request::is('faq') ? 'is-active' : '' }}">
                FAQ
            </a>
            <div class="site-nav-mobile-resources">
                <p class="site-nav-mobile-resources-heading">Resources</p>
                <a href="https://www.w3schools.com" target="_blank" class="site-nav-mobile-link">W3Schools</a>
                <a href="https://github.com" target="_blank" class="site-nav-mobile-link">Github</a>
                <a href="https://www.freecodecamp.org" target="_blank" class="site-nav-mobile-link">FreeCodeCamp</a>
                <a href="https://learn.hz.nl/my/" target="_blank" class="site-nav-mobile-link">Learn HZ</a>
            </div>
        </div>
    </div>
</nav>
