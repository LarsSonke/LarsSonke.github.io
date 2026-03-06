<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Portfolio')</title>
    <meta name="description" content="@yield('description', 'Portfolio website showcasing my ICT studies and projects')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #0a0a0f 0%, #111827 50%, #0f172a 100%);
            position: relative;
        }
        
        /* Loading Screen */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0a0a0f 0%, #111827 50%, #0f172a 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        
        .loading-screen.hidden {
            opacity: 0;
            visibility: hidden;
        }
        
        .loader {
            width: 60px;
            height: 60px;
            border: 3px solid rgba(59, 130, 246, 0.2);
            border-top-color: #3b82f6;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .loading-text {
            margin-top: 20px;
            color: #3b82f6;
            font-size: 18px;
            font-weight: 600;
            animation: pulse 1.5s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }
        
        .tech-grid {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(59, 130, 246, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(59, 130, 246, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            pointer-events: none;
            z-index: 0;
            transition: background-position 0.3s ease;
        }
        
        .tech-lines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }
        
        .tech-line {
            position: absolute;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.3), transparent);
            height: 1px;
            width: 100%;
            animation: scan 8s linear infinite;
        }
        
        .tech-line:nth-child(1) { top: 20%; animation-delay: 0s; }
        .tech-line:nth-child(2) { top: 50%; animation-delay: 2s; }
        .tech-line:nth-child(3) { top: 80%; animation-delay: 4s; }
        
        @keyframes scan {
            0%, 100% { opacity: 0; transform: translateX(-100%); }
            50% { opacity: 1; }
            100% { transform: translateX(100%); }
        }
        
        .corner-accent {
            position: fixed;
            width: 200px;
            height: 200px;
            border: 1px solid rgba(59, 130, 246, 0.2);
            pointer-events: none;
            z-index: 0;
        }
        
        .corner-accent.top-left {
            top: 0;
            left: 0;
            border-right: none;
            border-bottom: none;
        }
        
        .corner-accent.bottom-right {
            bottom: 0;
            right: 0;
            border-left: none;
            border-top: none;
        }
        
        /* Interactive particles */
        .particle {
            position: fixed;
            width: 4px;
            height: 4px;
            background: rgba(59, 130, 246, 0.6);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.8);
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .mouse-trail {
            position: fixed;
            width: 8px;
            height: 8px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.8) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            animation: fadeOut 0.5s ease-out forwards;
        }
        
        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: scale(2);
            }
        }
        
        /* Scroll animations */
        .fade-in-up {
            opacity: 0;
            transform: translateY(15px);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }
        
        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 50;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.6);
        }
        
        /* Breadcrumb */
        .breadcrumb {
            padding: 12px 0;
            font-size: 14px;
            color: #9ca3af;
        }
        
        .breadcrumb a {
            color: #60a5fa;
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .breadcrumb a:hover {
            color: #3b82f6;
        }
        
        .breadcrumb span {
            margin: 0 8px;
            color: #4b5563;
        }
        
        /* Page transitions */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        main {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
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
    
    <!-- Breadcrumb -->
    <div class="relative z-[10] max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            @hasSection('breadcrumb')
                @yield('breadcrumb')
            @endif
        </nav>
    </div>
    
    <!-- Main Content -->
    <main class="relative z-[10]">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <div class="relative z-[10]">
        <x-footer />
    </div>
    
    <!-- Interactive Background Script -->
    <script>
        const techGrid = document.getElementById('techGrid');
        const loadingScreen = document.getElementById('loadingScreen');
        const backToTop = document.getElementById('backToTop');
        let particles = [];
        
        // Hide loading screen after page load
        window.addEventListener('load', () => {
            setTimeout(() => {
                loadingScreen.classList.add('hidden');
            }, 800);
        });
        
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
            const xShift = (x / window.innerWidth - 0.5) * 20;
            const yShift = (y / window.innerHeight - 0.5) * 20;
            techGrid.style.backgroundPosition = `${xShift}px ${yShift}px`;
            
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
    </script>
    
    <!-- Alpine.js for interactive components -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
