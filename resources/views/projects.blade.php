@extends('layouts.main')

@section('title', 'My Projects')
@section('description', 'A showcase of my programming projects and technical work')

@section('breadcrumb')
    <span>/</span>
    <span class="text-gray-400">Projects</span>
@endsection

@section('content')
<!-- Header -->
<div class="bg-gradient-to-r from-purple-600/20 via-pink-600/20 to-orange-600/20 border-b border-gray-800 backdrop-blur-sm text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">My Projects</h1>
        <p class="text-xl text-gray-300">Explore my portfolio of work</p>
        <div class="mt-4 inline-block px-4 py-2 bg-yellow-600/20 border border-yellow-600/50 rounded-lg">
            <p class="text-sm text-yellow-400 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Note: The projects below are placeholder examples to showcase the layout and design
            </p>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Filter Buttons -->
    <div class="flex flex-wrap gap-3 mb-12 justify-center" x-data="{ activeFilter: 'all' }">
        <button @click="activeFilter = 'all'; filterProjects('all')" 
                :class="activeFilter === 'all' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white' : 'bg-gray-800/50 text-gray-300 hover:bg-gray-700/50'"
                class="px-6 py-2 rounded-lg font-medium transition-all">
            All Projects
        </button>
        <button @click="activeFilter = 'web'; filterProjects('web')" 
                :class="activeFilter === 'web' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white' : 'bg-gray-800/50 text-gray-300 hover:bg-gray-700/50'"
                class="px-6 py-2 rounded-lg font-medium transition-all">
            Web Development
        </button>
        <button @click="activeFilter = 'php'; filterProjects('php')" 
                :class="activeFilter === 'php' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white' : 'bg-gray-800/50 text-gray-300 hover:bg-gray-700/50'"
                class="px-6 py-2 rounded-lg font-medium transition-all">
            PHP/Laravel
        </button>
        <button @click="activeFilter = 'javascript'; filterProjects('javascript')" 
                :class="activeFilter === 'javascript' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white' : 'bg-gray-800/50 text-gray-300 hover:bg-gray-700/50'"
                class="px-6 py-2 rounded-lg font-medium transition-all">
            JavaScript
        </button>
    </div>

    <!-- Projects Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project 1: Portfolio Website -->
        <div class="project-card bg-gray-800/50 border border-gray-700 rounded-xl overflow-hidden hover:border-blue-500/50 transition-all transform hover:scale-105" 
             data-category="web php">
            <div class="h-48 bg-gradient-to-br from-blue-600/30 to-purple-600/30 flex items-center justify-center">
                <svg class="w-20 h-20 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                </svg>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-100 mb-2">Portfolio Website</h3>
                <p class="text-gray-400 mb-4">Modern portfolio built with Laravel 11, featuring dark theme, interactive background, and responsive design.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-blue-600/20 text-blue-400 text-xs rounded-full">Laravel</span>
                    <span class="px-3 py-1 bg-purple-600/20 text-purple-400 text-xs rounded-full">Tailwind CSS</span>
                    <span class="px-3 py-1 bg-green-600/20 text-green-400 text-xs rounded-full">Alpine.js</span>
                    <span class="px-3 py-1 bg-orange-600/20 text-orange-400 text-xs rounded-full">Vite</span>
                </div>
                
                <div class="flex gap-3">
                    <a href="#" class="flex-1 px-4 py-2 bg-gray-700 hover:bg-blue-600 text-gray-300 hover:text-white text-center rounded-lg transition-colors">
                        View Demo
                    </a>
                    <a href="https://github.com" target="_blank" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-gray-300 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 2: Study Dashboard -->
        <div class="project-card bg-gray-800/50 border border-gray-700 rounded-xl overflow-hidden hover:border-purple-500/50 transition-all transform hover:scale-105" 
             data-category="web php">
            <div class="h-48 bg-gradient-to-br from-purple-600/30 to-pink-600/30 flex items-center justify-center">
                <svg class="w-20 h-20 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-100 mb-2">Study Dashboard</h3>
                <p class="text-gray-400 mb-4">Interactive dashboard for tracking study progress with EC counter, grade calculator, and program information.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-blue-600/20 text-blue-400 text-xs rounded-full">Laravel</span>
                    <span class="px-3 py-1 bg-purple-600/20 text-purple-400 text-xs rounded-full">Blade</span>
                    <span class="px-3 py-1 bg-green-600/20 text-green-400 text-xs rounded-full">Charts.js</span>
                </div>
                
                <div class="flex gap-3">
                    <a href="/dashboard" class="flex-1 px-4 py-2 bg-gray-700 hover:bg-purple-600 text-gray-300 hover:text-white text-center rounded-lg transition-colors">
                        View Demo
                    </a>
                    <a href="https://github.com" target="_blank" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-gray-300 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 3: Blog System -->
        <div class="project-card bg-gray-800/50 border border-gray-700 rounded-xl overflow-hidden hover:border-green-500/50 transition-all transform hover:scale-105" 
             data-category="web php">
            <div class="h-48 bg-gradient-to-br from-green-600/30 to-blue-600/30 flex items-center justify-center">
                <svg class="w-20 h-20 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-100 mb-2">Blog Platform</h3>
                <p class="text-gray-400 mb-4">Modern blog with real-time search, category filtering, and reading time estimates.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-blue-600/20 text-blue-400 text-xs rounded-full">PHP</span>
                    <span class="px-3 py-1 bg-purple-600/20 text-purple-400 text-xs rounded-full">Laravel</span>
                    <span class="px-3 py-1 bg-yellow-600/20 text-yellow-400 text-xs rounded-full">JavaScript</span>
                </div>
                
                <div class="flex gap-3">
                    <a href="/blog" class="flex-1 px-4 py-2 bg-gray-700 hover:bg-green-600 text-gray-300 hover:text-white text-center rounded-lg transition-colors">
                        View Demo
                    </a>
                    <a href="https://github.com" target="_blank" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-gray-300 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 4: Interactive Background -->
        <div class="project-card bg-gray-800/50 border border-gray-700 rounded-xl overflow-hidden hover:border-orange-500/50 transition-all transform hover:scale-105" 
             data-category="javascript web">
            <div class="h-48 bg-gradient-to-br from-orange-600/30 to-red-600/30 flex items-center justify-center">
                <svg class="w-20 h-20 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                </svg>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-100 mb-2">Interactive Tech Grid</h3>
                <p class="text-gray-400 mb-4">Dynamic background with particles, mouse trails, and grid animations using vanilla JavaScript.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-yellow-600/20 text-yellow-400 text-xs rounded-full">JavaScript</span>
                    <span class="px-3 py-1 bg-orange-600/20 text-orange-400 text-xs rounded-full">Canvas API</span>
                    <span class="px-3 py-1 bg-purple-600/20 text-purple-400 text-xs rounded-full">CSS3</span>
                </div>
                
                <div class="flex gap-3">
                    <a href="#" class="flex-1 px-4 py-2 bg-gray-700 hover:bg-orange-600 text-gray-300 hover:text-white text-center rounded-lg transition-colors">
                        View Demo
                    </a>
                    <a href="https://github.com" target="_blank" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-gray-300 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 5: Task Manager -->
        <div class="project-card bg-gray-800/50 border border-gray-700 rounded-xl overflow-hidden hover:border-cyan-500/50 transition-all transform hover:scale-105" 
             data-category="javascript web">
            <div class="h-48 bg-gradient-to-br from-cyan-600/30 to-blue-600/30 flex items-center justify-center">
                <svg class="w-20 h-20 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-100 mb-2">Task Manager App</h3>
                <p class="text-gray-400 mb-4">Responsive task management application with drag-and-drop, local storage, and priority sorting.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-yellow-600/20 text-yellow-400 text-xs rounded-full">JavaScript</span>
                    <span class="px-3 py-1 bg-blue-600/20 text-blue-400 text-xs rounded-full">HTML5</span>
                    <span class="px-3 py-1 bg-purple-600/20 text-purple-400 text-xs rounded-full">CSS3</span>
                </div>
                
                <div class="flex gap-3">
                    <a href="#" class="flex-1 px-4 py-2 bg-gray-700 hover:bg-cyan-600 text-gray-300 hover:text-white text-center rounded-lg transition-colors">
                        View Demo
                    </a>
                    <a href="https://github.com" target="_blank" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-gray-300 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Project 6: API Integration -->
        <div class="project-card bg-gray-800/50 border border-gray-700 rounded-xl overflow-hidden hover:border-yellow-500/50 transition-all transform hover:scale-105" 
             data-category="php javascript">
            <div class="h-48 bg-gradient-to-br from-yellow-600/30 to-orange-600/30 flex items-center justify-center">
                <svg class="w-20 h-20 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-100 mb-2">Weather Dashboard</h3>
                <p class="text-gray-400 mb-4">Real-time weather application using API integration, geolocation, and responsive charts.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-yellow-600/20 text-yellow-400 text-xs rounded-full">JavaScript</span>
                    <span class="px-3 py-1 bg-blue-600/20 text-blue-400 text-xs rounded-full">REST API</span>
                    <span class="px-3 py-1 bg-green-600/20 text-green-400 text-xs rounded-full">Chart.js</span>
                </div>
                
                <div class="flex gap-3">
                    <a href="#" class="flex-1 px-4 py-2 bg-gray-700 hover:bg-yellow-600 text-gray-300 hover:text-white text-center rounded-lg transition-colors">
                        View Demo
                    </a>
                    <a href="https://github.com" target="_blank" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-gray-300 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function filterProjects(category) {
        const cards = document.querySelectorAll('.project-card');
        cards.forEach(card => {
            if (category === 'all' || card.dataset.category.includes(category)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>

@endsection
