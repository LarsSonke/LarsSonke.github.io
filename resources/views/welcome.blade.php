@extends('layouts.main')

@section('title', 'Dashboard - My Study Progress')
@section('description', 'Track my ICT study progress, courses, and academic performance at HZ University')

@section('breadcrumb')
    <span>/</span>
    <span class="text-gray-400">Dashboard</span>
@endsection

@section('content')
<!-- Header -->
<div class="bg-gradient-to-r from-blue-600/20 via-indigo-600/20 to-purple-600/20 border-b border-gray-800 backdrop-blur-sm text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Study Dashboard</h1>
        <p class="text-xl text-gray-300">Track your progress in the HBO-ICT programme at HZ University</p>
    </div>
</div>

<!-- Dashboard Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Quick Stats -->
    <div class="grid md:grid-cols-3 gap-6 mb-8">
        <!-- Total ECTS -->
        <div class="bg-gray-800/50 border border-blue-500/30 backdrop-blur-sm rounded-lg p-6 relative overflow-hidden group hover:border-blue-400/50 transition-all">
            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-400 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm font-medium mb-1">Total ECTS</p>
                    <p class="text-3xl font-bold text-gray-100">45 <span class="text-lg text-gray-400">/ 60</span></p>
                </div>
                <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 w-full bg-gray-700/50 rounded-full h-2">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full" style="width: 75%"></div>
            </div>
        </div>
        
        <!-- Current Quarter -->
        <div class="bg-gray-800/50 border border-purple-500/30 backdrop-blur-sm rounded-lg p-6 relative overflow-hidden group hover:border-purple-400/50 transition-all">
            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-purple-400 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm font-medium mb-1">Current Quarter</p>
                    <p class="text-3xl font-bold text-gray-100">Q2</p>
                </div>
                <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
            <p class="text-gray-400 text-sm mt-4">Academic Year 2024/2025</p>
        </div>
        
        <!-- Active Courses -->
        <div class="bg-gray-800/50 border border-green-500/30 backdrop-blur-sm rounded-lg p-6 relative overflow-hidden group hover:border-green-400/50 transition-all">
            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-green-400 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 text-sm font-medium mb-1">Active Courses</p>
                    <p class="text-3xl font-bold text-gray-100">5</p>
                </div>
                <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
            </div>
            <p class="text-gray-400 text-sm mt-4">In Progress</p>
        </div>
    </div>
    
    <!-- Course List -->
    <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-lg overflow-hidden mb-8">
        <div class="px-6 py-4 border-b border-gray-700">
            <h2 class="text-2xl font-bold text-gray-100">Current Courses</h2>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <!-- Course 1 -->
                <div class="flex items-center justify-between p-4 bg-gray-900/50 border border-gray-700 rounded-lg hover:border-blue-500/50 transition-all">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-100">Programming Basics</h3>
                            <p class="text-sm text-gray-400">5 ECTS • Quarter 2</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-green-400">In Progress</p>
                        <p class="text-xs text-gray-400">Grade: 7.5</p>
                    </div>
                </div>
                
                <!-- Course 2 -->
                <div class="flex items-center justify-between p-4 bg-gray-900/50 border border-gray-700 rounded-lg hover:border-blue-500/50 transition-all">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-100">Web Development</h3>
                            <p class="text-sm text-gray-400">5 ECTS • Quarter 2</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-green-400">In Progress</p>
                        <p class="text-xs text-gray-400">Grade: 8.0</p>
                    </div>
                </div>
                
                <!-- Course 3 -->
                <div class="flex items-center justify-between p-4 bg-gray-900/50 border border-gray-700 rounded-lg hover:border-blue-500/50 transition-all">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-100">Database Management</h3>
                            <p class="text-sm text-gray-400">5 ECTS • Quarter 2</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-medium text-green-400">In Progress</p>
                        <p class="text-xs text-gray-400">Grade: 7.0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Links -->
    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-700">
                <h2 class="text-xl font-bold text-gray-100">Quick Links</h2>
            </div>
            <div class="p-6 space-y-3">
                <a href="https://learn.hz.nl/my/" target="_blank" class="flex items-center justify-between p-3 bg-gray-900/50 border border-gray-700 rounded-lg hover:border-blue-500/50 hover:bg-gray-900/70 transition-all group">
                    <span class="text-gray-300 group-hover:text-blue-400">Learn HZ Portal</span>
                    <svg class="w-5 h-5 text-gray-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
                <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank" class="flex items-center justify-between p-3 bg-gray-900/50 border border-gray-700 rounded-lg hover:border-blue-500/50 hover:bg-gray-900/70 transition-all group">
                    <span class="text-gray-300 group-hover:text-blue-400">Study Progress</span>
                    <svg class="w-5 h-5 text-gray-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
                <a href="https://teams.microsoft.com" target="_blank" class="flex items-center justify-between p-3 bg-gray-900/50 border border-gray-700 rounded-lg hover:border-blue-500/50 hover:bg-gray-900/70 transition-all group">
                    <span class="text-gray-300 group-hover:text-blue-400">Microsoft Teams</span>
                    <svg class="w-5 h-5 text-gray-500 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-700">
                <h2 class="text-xl font-bold text-gray-100">Upcoming Deadlines</h2>
            </div>
            <div class="p-6 space-y-3">
                <div class="flex items-start space-x-3 p-3 bg-gray-900/50 border border-gray-700 rounded-lg">
                    <div class="w-8 h-8 bg-red-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-100 font-medium">Project Presentation</p>
                        <p class="text-sm text-gray-400">Due in 3 days</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3 p-3 bg-gray-900/50 border border-gray-700 rounded-lg">
                    <div class="w-8 h-8 bg-yellow-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-100 font-medium">Database Assignment</p>
                        <p class="text-sm text-gray-400">Due in 1 week</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3 p-3 bg-gray-900/50 border border-gray-700 rounded-lg">
                    <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-100 font-medium">Code Review</p>
                        <p class="text-sm text-gray-400">Due in 2 weeks</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
