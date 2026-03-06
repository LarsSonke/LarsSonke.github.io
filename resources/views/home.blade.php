@extends('layouts.main')

@section('title', 'Home - My ICT Portfolio')
@section('description', 'Welcome to my ICT student portfolio at HZ University of Applied Sciences')

@section('content')
<!-- Hero Section -->
<div class="relative text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                Welcome to My Portfolio
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-300 max-w-3xl mx-auto">
                ICT Student at HZ University of Applied Sciences
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/profile') }}" class="inline-flex items-center justify-center px-8 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-purple-700 transition-all transform hover:scale-105 shadow-lg shadow-blue-500/50">
                    View My Profile
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="{{ url('/blog') }}" class="inline-flex items-center justify-center px-8 py-3 bg-gray-800 text-white font-semibold rounded-lg hover:bg-gray-700 transition-all transform hover:scale-105 shadow-lg border border-gray-700">
                    Read My Blog
                </a>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-100 mb-6">
                About Me
            </h2>
            <p class="text-lg text-gray-300 mb-4">
                I'm an ICT student at HZ University of Applied Sciences, passionate about web development, programming, and technology.
            </p>
            <p class="text-lg text-gray-300 mb-6">
                This portfolio showcases my journey through the ICT program, including my projects, learning experiences, and professional development.
            </p>
            <a href="{{ url('/profile') }}" class="inline-flex items-center text-blue-400 font-semibold hover:text-blue-300 transition-colors">
                Learn more about me
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
        <div class="relative">
            <div class="bg-gradient-to-br from-blue-500/20 to-purple-600/20 border border-gray-700 rounded-2xl p-8 shadow-2xl shadow-blue-500/10 transform hover:scale-105 transition-transform backdrop-blur-sm">
                <img src="{{ asset('images/index-images/source-code.png') }}" alt="Coding" class="rounded-lg w-full h-auto" onerror="this.style.display='none'">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-purple-600/10 rounded-2xl"></div>
            </div>
        </div>
    </div>
</div>

<!-- Features/Highlights Section -->
<div class="bg-gray-900/50 backdrop-blur-sm py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-100 mb-4">
                What You'll Find Here
            </h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Explore my academic journey, projects, and growth as an ICT professional
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <a href="{{ url('/profile') }}" class="block bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl p-6 shadow-lg shadow-blue-500/5 hover:shadow-blue-500/20 hover:border-blue-500/50 transition-all group cursor-pointer">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-12 h-12 rounded-lg flex items-center justify-center mb-4 shadow-lg shadow-blue-500/50 group-hover:shadow-blue-500/70 transition-shadow">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-100 mb-2">My Profile</h3>
                <p class="text-gray-300 mb-4">
                    Learn about my background, interests, skills, and what drives my passion for ICT.
                </p>
                <span class="text-blue-400 font-semibold group-hover:text-blue-300 inline-flex items-center transition-colors">
                    View Profile →
                </span>
            </a>
            
            <!-- Feature 2 -->
            <a href="{{ url('/blog') }}" class="block bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl p-6 shadow-lg shadow-purple-500/5 hover:shadow-purple-500/20 hover:border-purple-500/50 transition-all group cursor-pointer">
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-12 h-12 rounded-lg flex items-center justify-center mb-4 shadow-lg shadow-purple-500/50 group-hover:shadow-purple-500/70 transition-shadow">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-100 mb-2">Blog & Articles</h3>
                <p class="text-gray-300 mb-4">
                    Read about my learning experiences, projects, reflections, and technical insights.
                </p>
                <span class="text-purple-400 font-semibold group-hover:text-purple-300 inline-flex items-center transition-colors">
                    Read Blog →
                </span>
            </a>
            
            <!-- Feature 3 -->
            <a href="{{ url('/welcome') }}" class="block bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl p-6 shadow-lg shadow-green-500/5 hover:shadow-green-500/20 hover:border-green-500/50 transition-all group cursor-pointer">
                <div class="bg-gradient-to-br from-green-500 to-green-600 w-12 h-12 rounded-lg flex items-center justify-center mb-4 shadow-lg shadow-green-500/50 group-hover:shadow-green-500/70 transition-shadow">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-100 mb-2">Dashboard</h3>
                <p class="text-gray-300 mb-4">
                    Track my study progress, coursework, and academic achievements at HZ.
                </p>
                <span class="text-green-400 font-semibold group-hover:text-green-300 inline-flex items-center transition-colors">
                    View Dashboard →
                </span>
            </a>
            
            <!-- Feature 4 -->
            <a href="{{ url('/projects') }}" class="block bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl p-6 shadow-lg shadow-orange-500/5 hover:shadow-orange-500/20 hover:border-orange-500/50 transition-all group cursor-pointer">
                <div class="bg-gradient-to-br from-orange-500 to-orange-600 w-12 h-12 rounded-lg flex items-center justify-center mb-4 shadow-lg shadow-orange-500/50 group-hover:shadow-orange-500/70 transition-shadow">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-100 mb-2">My Projects</h3>
                <p class="text-gray-300 mb-4">
                    Explore my portfolio of web development and programming projects.
                </p>
                <span class="text-orange-400 font-semibold group-hover:text-orange-300 inline-flex items-center transition-colors">
                    View Projects →
                </span>
            </a>
            
            <!-- Feature 5 -->
            <a href="{{ url('/contact') }}" class="block bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl p-6 shadow-lg shadow-cyan-500/5 hover:shadow-cyan-500/20 hover:border-cyan-500/50 transition-all group cursor-pointer">
                <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-12 h-12 rounded-lg flex items-center justify-center mb-4 shadow-lg shadow-cyan-500/50 group-hover:shadow-cyan-500/70 transition-shadow">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-100 mb-2">Get In Touch</h3>
                <p class="text-gray-300 mb-4">
                    Have questions or want to connect? Send me a message!
                </p>
                <span class="text-cyan-400 font-semibold group-hover:text-cyan-300 inline-flex items-center transition-colors">
                    Contact Me →
                </span>
            </a>
            
            <!-- Feature 6 -->
            <a href="{{ url('/faq') }}" class="block bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl p-6 shadow-lg shadow-yellow-500/5 hover:shadow-yellow-500/20 hover:border-yellow-500/50 transition-all group cursor-pointer">
                <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 w-12 h-12 rounded-lg flex items-center justify-center mb-4 shadow-lg shadow-yellow-500/50 group-hover:shadow-yellow-500/70 transition-shadow">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-100 mb-2">FAQ</h3>
                <p class="text-gray-300 mb-4">
                    Find answers to frequently asked questions about my studies and career.
                </p>
                <span class="text-yellow-400 font-semibold group-hover:text-yellow-300 inline-flex items-center transition-colors">
                    View FAQ →
                </span>
            </a>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-gradient-to-r from-blue-600/20 via-purple-600/20 to-indigo-600/20 border-t border-gray-800 backdrop-blur-sm text-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
            Want to Learn More?
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Check out my FAQ section for common questions or explore my blog posts
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ url('/faq') }}" class="inline-flex items-center justify-center px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-lg hover:from-blue-400 hover:to-blue-500 transition-all shadow-lg shadow-blue-500/50">
                View FAQ
            </a>
            <a href="{{ url('/blog') }}" class="inline-flex items-center justify-center px-8 py-3 bg-gray-800 text-white font-semibold rounded-lg hover:bg-gray-700 transition-all border-2 border-gray-700 hover:border-purple-500 shadow-lg">
                Explore Blog
            </a>
        </div>
    </div>
</div>
@endsection
