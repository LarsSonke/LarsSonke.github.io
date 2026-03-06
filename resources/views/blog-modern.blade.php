@extends('layouts.main')

@section('title', 'Blog - My Learning Journey')
@section('description', 'Read about my experiences, projects, and reflections as an ICT student')

@section('breadcrumb')
    <span>/</span>
    <span class="text-gray-400">Blog</span>
@endsection

@section('content')
<!-- Header -->
<div class="bg-gradient-to-r from-purple-600/20 via-indigo-600/20 to-blue-600/20 border-b border-gray-800 backdrop-blur-sm text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">Blog & Reflections</h1>
        <p class="text-xl text-gray-300">My learning journey, experiences, and insights</p>
    </div>
</div>

<!-- Search and Filter Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col md:flex-row gap-4 items-start md:items-center justify-between">
        <!-- Search Bar -->
        <div class="w-full md:w-96" x-data="{ search: '' }">
            <div class="relative">
                <input 
                    type="text" 
                    x-model="search"
                    @input="filterPosts()"
                    id="searchInput"
                    placeholder="Search posts..." 
                    class="w-full bg-gray-800/50 border border-gray-700 rounded-lg px-4 py-3 pl-11 text-gray-100 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
        
        <!-- Category Filter -->
        <div class="flex flex-wrap gap-2">
            <button onclick="filterByTag('all')" class="filter-btn px-4 py-2 rounded-lg bg-blue-600 text-white font-medium transition-all hover:bg-blue-700 active">
                All
            </button>
            <button onclick="filterByTag('discussions')" class="filter-btn px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-gray-300 font-medium transition-all hover:bg-gray-700">
                Discussions
            </button>
            <button onclick="filterByTag('experiences')" class="filter-btn px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-gray-300 font-medium transition-all hover:bg-gray-700">
                Experiences
            </button>
            <button onclick="filterByTag('reflections')" class="filter-btn px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-gray-300 font-medium transition-all hover:bg-gray-700">
                Reflections
            </button>
        </div>
    </div>
</div>

<!-- Blog Posts Grid -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="blogGrid">
        
        <!-- Discussions Post -->
        <a href="{{ url('/discussions') }}" class="group blog-post" data-tags="discussions reflections" data-title="Discussions">
            <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-blue-500/20 hover:border-blue-500/50 transition-all transform hover:-translate-y-2">
                <div class="h-48 bg-gradient-to-br from-blue-500/30 to-indigo-600/30 flex items-center justify-center">
                    <img src="{{ asset('images/blog-images/discussions.jpg') }}" alt="Discussions" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center\'><svg class=\'w-16 h-16 text-blue-400\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z\'/></svg></div>'">
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-3">
                        <span class="px-2 py-1 text-xs font-semibold bg-blue-600/20 text-blue-400 rounded">Discussions</span>
                        <span class="px-2 py-1 text-xs font-semibold bg-purple-600/20 text-purple-400 rounded">5 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-100 mb-2 group-hover:text-blue-400 transition-colors">
                        Discussions
                    </h3>
                    <p class="text-gray-300 mb-4">
                        Reflections on class discussions, debates, and collaborative learning experiences.
                    </p>
                    <span class="inline-flex items-center text-blue-400 font-semibold">
                        Read more →
                    </span>
                </div>
            </div>
        </a>
        
        <!-- Company Safari Post -->
        <a href="{{ url('/company-safari') }}" class="group blog-post" data-tags="experiences" data-title="Company Safari">
            <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-green-500/20 hover:border-green-500/50 transition-all transform hover:-translate-y-2">
                <div class="h-48 bg-gradient-to-br from-green-500/30 to-teal-600/30 flex items-center justify-center">
                    <img src="{{ asset('images/blog-images/company-safari.jpg') }}" alt="Company Safari" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center\'><svg class=\'w-16 h-16 text-green-400\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4\'/></svg></div>'">
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-3">
                        <span class="px-2 py-1 text-xs font-semibold bg-green-600/20 text-green-400 rounded">Experiences</span>
                        <span class="px-2 py-1 text-xs font-semibold bg-purple-600/20 text-purple-400 rounded">7 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-100 mb-2 group-hover:text-green-400 transition-colors">
                        Company Safari
                    </h3>
                    <p class="text-gray-300 mb-4">
                        Insights from visiting tech companies and learning about the industry firsthand.
                    </p>
                    <span class="inline-flex items-center text-green-400 font-semibold">
                        Read more →
                    </span>
                </div>
            </div>
        </a>
        
        <!-- SWOT Analysis Post -->
        <a href="{{ url('/swot') }}" class="group blog-post" data-tags="reflections" data-title="SWOT Analysis">
            <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-purple-500/20 hover:border-purple-500/50 transition-all transform hover:-translate-y-2">
                <div class="h-48 bg-gradient-to-br from-purple-500/30 to-pink-600/30 flex items-center justify-center">
                    <img src="{{ asset('images/blog-images/swot.jpg') }}" alt="SWOT Analysis" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center\'><svg class=\'w-16 h-16 text-purple-400\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\'/></svg></div>'">
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-3">
                        <span class="px-2 py-1 text-xs font-semibold bg-purple-600/20 text-purple-400 rounded">Reflections</span>
                        <span class="px-2 py-1 text-xs font-semibold bg-purple-600/20 text-purple-400 rounded">4 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-100 mb-2 group-hover:text-purple-400 transition-colors">
                        SWOT Analysis
                    </h3>
                    <p class="text-gray-300 mb-4">
                        Personal SWOT analysis: strengths, weaknesses, opportunities, and threats.
                    </p>
                    <span class="inline-flex items-center text-purple-400 font-semibold">
                        Read more →
                    </span>
                </div>
            </div>
        </a>
        
        <!-- Programming Experience Post -->
        <a href="{{ url('/experience') }}" class="group blog-post" data-tags="experiences reflections" data-title="Programming Experience">
            <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-orange-500/20 hover:border-orange-500/50 transition-all transform hover:-translate-y-2">
                <div class="h-48 bg-gradient-to-br from-orange-500/30 to-red-600/30 flex items-center justify-center">
                    <img src="{{ asset('images/blog-images/experience.jpg') }}" alt="Programming Experience" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center\'><svg class=\'w-16 h-16 text-orange-400\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4\'/></svg></div>'">
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-3">
                        <span class="px-2 py-1 text-xs font-semibold bg-orange-600/20 text-orange-400 rounded">Experiences</span>
                        <span class="px-2 py-1 text-xs font-semibold bg-purple-600/20 text-purple-400 rounded">3 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-100 mb-2 group-hover:text-orange-400 transition-colors">
                        Programming Experience
                    </h3>
                    <p class="text-gray-300 mb-4">
                        My journey in programming: languages learned, projects built, and skills developed.
                    </p>
                    <span class="inline-flex items-center text-orange-400 font-semibold">
                        Read more →
                    </span>
                </div>
            </div>
        </a>
        
        <!-- Feedback Post -->
        <a href="{{ url('/feedback') }}" class="group blog-post" data-tags="reflections" data-title="Feedback Growth">
            <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:shadow-yellow-500/20 hover:border-yellow-500/50 transition-all transform hover:-translate-y-2">
                <div class="h-48 bg-gradient-to-br from-yellow-500/30 to-amber-600/30 flex items-center justify-center">
                    <img src="{{ asset('images/blog-images/feedback.jpg') }}" alt="Feedback" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center\'><svg class=\'w-16 h-16 text-yellow-400\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z\'/></svg></div>'">
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-3">
                        <span class="px-2 py-1 text-xs font-semibold bg-yellow-600/20 text-yellow-400 rounded">Reflections</span>
                        <span class="px-2 py-1 text-xs font-semibold bg-purple-600/20 text-purple-400 rounded">6 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-100 mb-2 group-hover:text-yellow-400 transition-colors">
                        Feedback & Growth
                    </h3>
                    <p class="text-gray-300 mb-4">
                        Reflections on feedback received and how it has shaped my learning and development.
                    </p>
                    <span class="inline-flex items-center text-yellow-400 font-semibold">
                        Read more →
                    </span>
                </div>
            </div>
        </a>
        
    </div>
</div>

<script>
    // Search and filter functionality
    function filterPosts() {
        const searchInput = document.getElementById('searchInput').value.toLowerCase();
        const posts = document.querySelectorAll('.blog-post');
        
        posts.forEach(post => {
            const title = post.getAttribute('data-title').toLowerCase();
            const tags = post.getAttribute('data-tags').toLowerCase();
            const text = post.textContent.toLowerCase();
            
            if (title.includes(searchInput) || tags.includes(searchInput) || text.includes(searchInput)) {
                post.style.display = 'block';
            } else {
                post.style.display = 'none';
            }
        });
    }
    
    function filterByTag(tag) {
        const posts = document.querySelectorAll('.blog-post');
        const buttons = document.querySelectorAll('.filter-btn');
        
        // Update button styles
        buttons.forEach(btn => {
            btn.classList.remove('bg-blue-600', 'text-white', 'active');
            btn.classList.add('bg-gray-800', 'border', 'border-gray-700', 'text-gray-300');
        });
        event.target.classList.remove('bg-gray-800', 'border', 'border-gray-700', 'text-gray-300');
        event.target.classList.add('bg-blue-600', 'text-white', 'active');
        
        // Filter posts
        posts.forEach(post => {
            if (tag === 'all') {
                post.style.display = 'block';
            } else {
                const tags = post.getAttribute('data-tags');
                if (tags.includes(tag)) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            }
        });
        
        // Reset search
        document.getElementById('searchInput').value = '';
    }
</script>

@endsection
