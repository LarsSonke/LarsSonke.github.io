<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Portfolio')</title>
    <meta name="description" content="@yield('description', 'Portfolio website showcasing my ICT studies and projects')">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon-computer.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset("theme.css") }}">
    <link rel="stylesheet" href="{{ asset("generalized.css") }}">
</head>
<body class="bg-gray-900 font-sans antialiased text-gray-100 gradient-bg">
    
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loader"></div>
        <div class="loading-text">Loading Portfolio...</div>
    </div>
    
    <!-- Tech Grid Background -->
    <div class="tech-grid" id="techGrid"></div>
    
    <!-- Tech Scanning Lines -->
    <div class="tech-lines">
        <div class="tech-line"></div>
        <div class="tech-line"></div>
        <div class="tech-line"></div>
    </div>
    
    <!-- Corner Accents -->
    <div class="corner-accent top-left"></div>
    <div class="corner-accent bottom-right"></div>
    
    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </div>
    
    <!-- Navigation -->
    <div class="relative z-[60]">
        <x-navigation />
    </div>
    
    <div class="site-readable-shell">
        <div class="site-readable-panel">
            <!-- Main Content -->
            <main class="relative z-[10]">
                @yield('content')
            </main>

            <!-- Footer -->
            <div class="relative z-[10]">
                <x-footer />
            </div>
        </div>
    </div>

    <!-- Vanta.js Dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    
    <!-- Interactive Background Script -->
    <script>
        const techGrid = document.getElementById('techGrid');
        const loadingScreen = document.getElementById('loadingScreen');
        const backToTop = document.getElementById('backToTop');
        let particles = [];
        let vantaEffect = null;
        
        // Hide loading screen after page load
        window.addEventListener('load', () => {
            setTimeout(() => {
                loadingScreen.classList.add('hidden');
            }, 800);

            initVantaBackground();
        });

        function initVantaBackground() {
            if (!techGrid || !window.VANTA || !window.VANTA.NET) {
                return;
            }

            if (window.matchMedia('(max-width: 768px)').matches) {
                return;
            }

            vantaEffect = window.VANTA.NET({
                el: techGrid,
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200,
                minWidth: 200,
                scale: 1,
                scaleMobile: 1,
                color: 0x4a86f2,
                backgroundColor: 0x0b1220,
                points: 12,
                maxDistance: 22,
                spacing: 17,
                showDots: true
            });

            techGrid.classList.add('has-vanta');
        }
        
        // Back to top button functionality
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });
        
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Scroll animations - fade in elements
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    // Remove visible class when element leaves viewport
                    entry.target.classList.remove('visible');
                }
            });
        }, observerOptions);
        
        // Observe all elements that should fade in
        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.bg-gray-800\\/50, .bg-gradient-to-r, [class*="hover:"]');
            fadeElements.forEach(el => {
                el.classList.add('fade-in-up');
                observer.observe(el);
            });
        });
        
        // Create floating particles
        function createParticles() {
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * window.innerWidth + 'px';
                particle.style.top = Math.random() * window.innerHeight + 'px';
                particle.style.animationDelay = Math.random() * 3 + 's';
                document.body.appendChild(particle);
                particles.push(particle);
            }
        }
        
        createParticles();
        
        // Mouse movement - shift grid
        document.addEventListener('mousemove', (e) => {
            const x = e.clientX;
            const y = e.clientY;
            
            // Shift grid based on mouse position
            if (!vantaEffect) {
                const xShift = (x / window.innerWidth - 0.5) * 20;
                const yShift = (y / window.innerHeight - 0.5) * 20;
                techGrid.style.backgroundPosition = `${xShift}px ${yShift}px`;
            }
            
            // Create trail effect occasionally
            if (Math.random() > 0.9) {
                const trail = document.createElement('div');
                trail.className = 'mouse-trail';
                trail.style.left = x + 'px';
                trail.style.top = y + 'px';
                document.body.appendChild(trail);
                
                setTimeout(() => trail.remove(), 500);
            }
        });
        
        // Click creates pulse effect
        document.addEventListener('click', (e) => {
            for (let i = 0; i < 5; i++) {
                const pulse = document.createElement('div');
                pulse.className = 'mouse-trail';
                const angle = (Math.PI * 2 * i) / 5;
                const distance = 30;
                pulse.style.left = (e.clientX + Math.cos(angle) * distance) + 'px';
                pulse.style.top = (e.clientY + Math.sin(angle) * distance) + 'px';
                pulse.style.animationDelay = (i * 0.05) + 's';
                document.body.appendChild(pulse);
                
                setTimeout(() => pulse.remove(), 600);
            }
        });
        
        // Hide particles on mobile
        if (window.matchMedia('(max-width: 768px)').matches) {
            particles.forEach(p => p.style.display = 'none');
        }

        window.addEventListener('beforeunload', () => {
            if (vantaEffect && typeof vantaEffect.destroy === 'function') {
                vantaEffect.destroy();
            }
        });
    </script>
    
    <!-- Alpine.js for interactive components -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
