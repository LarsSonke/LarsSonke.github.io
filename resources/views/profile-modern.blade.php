@extends('layouts.main')

@section('title', 'Profile - About Me')
@section('description', 'Learn more about me, my background, skills, and interests')

@section('content')
<!-- Header -->
<div class="site-page-header">
    <div class="site-page-header-inner">
        <h1 class="site-page-header-title">My Profile</h1>
        <p class="site-page-header-subtitle">ICT Student | Developer | Lifelong Learner</p>
    </div>
</div>

<!-- Profile Content -->
<div class="site-page-shell">
    
    <!-- About Me Section -->
    <div class="site-panel site-panel-padded mb-8">
        <h2 class="text-3xl font-bold site-text-heading mb-6">About Me</h2>
        <div class="prose max-w-none site-text-body">
            <p class="text-lg mb-4">
                Hello! I'm an ICT student at HZ University of Applied Sciences, passionate about technology, programming, and continuous learning.
            </p>
            <p class="text-lg mb-4">
                I chose to study ICT because I've always been fascinated by how technology shapes our world and solves real-world problems. Throughout my studies, I've developed skills in web development, programming, and software engineering.
            </p>
            <p class="text-lg">
                This portfolio serves as a documentation of my learning journey, showcasing my projects, reflections, and growth as an ICT professional.
            </p>
        </div>
    </div>
    
    <!-- Skills & Interests -->
    <div class="grid md:grid-cols-2 gap-8 mb-8">
        
        <!-- Skills Section -->
        <div class="site-panel site-panel-padded">
            <h2 class="text-2xl font-bold site-text-heading mb-6">Technical Skills</h2>
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold site-text-heading">Web Development</span>
                        <span class="site-text-muted">Advanced</span>
                    </div>
                    <div class="site-skill-track">
                        <div class="site-skill-fill site-progress-85"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold site-text-heading">Programming (PHP, JavaScript)</span>
                        <span class="site-text-muted">Intermediate</span>
                    </div>
                    <div class="site-skill-track">
                        <div class="site-skill-fill site-progress-70"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold site-text-heading">Database Management</span>
                        <span class="site-text-muted">Intermediate</span>
                    </div>
                    <div class="site-skill-track">
                        <div class="site-skill-fill site-progress-65"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold site-text-heading">Git & Version Control</span>
                        <span class="site-text-muted">Intermediate</span>
                    </div>
                    <div class="site-skill-track">
                        <div class="site-skill-fill site-progress-75"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Interests Section -->
        <div class="site-panel site-panel-padded">
            <h2 class="text-2xl font-bold site-text-heading mb-6">Interests & Hobbies</h2>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                        <div class="site-icon-chip">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold site-text-heading">Coding & Development</h3>
                        <p class="site-text-body">Building web applications and learning new technologies</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                        <div class="site-icon-chip">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold site-text-heading">Gaming</h3>
                        <p class="site-text-body">League of Legends, Valorant, Genshin Impact, Dead by Daylight</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                        <div class="site-icon-chip">
                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold site-text-heading">Learning & Research</h3>
                        <p class="site-text-body">Exploring new technologies and industry trends</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Education Section -->
    <div class="site-panel site-panel-padded mb-8">
        <h2 class="text-3xl font-bold site-text-heading mb-6">Education</h2>
        <div class="space-y-6">
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/50">
                        <span class="text-white font-bold text-lg">HZ</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold site-text-heading">HZ University of Applied Sciences</h3>
                    <p class="text-blue-400 font-semibold">Bachelor of ICT</p>
                    <p class="site-text-body">Currently studying software development, web technologies, and computer science fundamentals</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact/Links Section -->
    <div class="site-panel-callout text-white">
        <h2 class="text-2xl font-bold mb-4 site-text-heading">Want to Connect?</h2>
        <p class="site-text-body mb-6">Check out my GitHub profile or connect with me through HZ resources</p>
        <div class="flex flex-wrap gap-4">
            <a href="https://github.com" target="_blank" class="site-btn-primary">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
                GitHub
            </a>
            <a href="https://learn.hz.nl/my/" target="_blank" class="site-btn-secondary">
                Learn HZ
            </a>
        </div>
    </div>
    
</div>
@endsection
