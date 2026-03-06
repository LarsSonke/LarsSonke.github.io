@extends('layouts.main')

@section('title', 'Discussions - HTML5 Semantics')
@section('description', 'My thoughts and reflections on HTML5 semantic elements and their proper usage')

@section('content')
<!-- Header -->
<div class="bg-gradient-to-r from-blue-600/20 via-indigo-600/20 to-purple-600/20 border-b border-gray-800 backdrop-blur-sm text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">HTML5 Discussions</h1>
        <p class="text-xl text-gray-300">Exploring semantic elements and best practices</p>
    </div>
</div>

<!-- Content -->
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Introduction -->
    <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-lg p-6 mb-8">
        <p class="text-gray-300 text-lg">
            Here you will find posts about certain discussions regarding ICT. On top of that, I will also give my opinion on these discussions.
        </p>
    </div>
    
    <!-- Discussion 1 -->
    <div class="bg-gray-800/50 border border-blue-500/30 backdrop-blur-sm rounded-lg p-8 mb-8 hover:border-blue-400/50 transition-all">
        <div class="flex items-start space-x-4 mb-4">
            <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-blue-400 font-bold">1</span>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-100 mb-2">Section vs Article</h2>
                <h3 class="text-lg text-blue-400 mb-4">Which is the right tag to use?</h3>
            </div>
        </div>
        
        <div class="pl-14">
            <h4 class="text-gray-100 font-semibold mb-2">Start of the discussion:</h4>
            <p class="text-gray-300 mb-4">
                I have a page made up of various "sections" like videos, a newsfeed etc. I am a bit confused how to represent these with HTML5. Currently I have them as HTML5 'sections', but on further inspection it looks they the more correct tag would be 'article'. Could anyone shed some light on this for me?
            </p>
            <a href="https://stackoverflow.com/questions/7549561/section-vs-article-html5" target="_blank" class="inline-flex items-center text-blue-400 hover:text-blue-300 font-semibold transition-colors">
                Read full discussion →
            </a>
        </div>
    </div>
    
    <!-- Discussion 2 -->
    <div class="bg-gray-800/50 border border-purple-500/30 backdrop-blur-sm rounded-lg p-8 mb-8 hover:border-purple-400/50 transition-all">
        <div class="flex items-start space-x-4 mb-4">
            <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-purple-400 font-bold">2</span>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-100 mb-2">Nesting Structure</h2>
                <h3 class="text-lg text-purple-400 mb-4">Should 'sections' have 'articles' or should 'articles' have 'sections'?</h3>
            </div>
        </div>
        
        <div class="pl-14">
            <h4 class="text-gray-100 font-semibold mb-2">Start of the discussion:</h4>
            <p class="text-gray-300 mb-4">
                I'm reading Mark Pilgrim's "Dive into HTML5" and in the semantics section, it talks about how HTML5 introduces the 'article' and 'section' elements. It says that 'section's represent a generic document or section, while 'article's represent a self-contained composition. I don't see a logically semantic parent-child relationship either way.
            </p>
            <a href="https://stackoverflow.com/questions/9527378/should-sections-have-articles-or-should-articles-have-sections" target="_blank" class="inline-flex items-center text-purple-400 hover:text-purple-300 font-semibold transition-colors">
                Read full discussion →
            </a>
        </div>
    </div>
    
    <!-- Discussion 3 -->
    <div class="bg-gray-800/50 border border-green-500/30 backdrop-blur-sm rounded-lg p-8 mb-8 hover:border-green-400/50 transition-all">
        <div class="flex items-start space-x-4 mb-4">
            <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-green-400 font-bold">3</span>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-100 mb-2">Containment Question</h2>
                <h3 class="text-lg text-green-400 mb-4">'section' or 'article', which is contained in which?</h3>
            </div>
        </div>
        
        <div class="pl-14">
            <h4 class="text-gray-100 font-semibold mb-2">Start of the discussion:</h4>
            <p class="text-gray-300 mb-4">
                Trying to get my head around the new semantic elements in HTML5. Does a 'section' belong inside an 'article' or is it the other way around? Does it even matter? I'm looking at re-structuring a wordpress blog.
            </p>
            <a href="https://stackoverflow.com/questions/1789692/section-or-article-which-is-contained-in-which" target="_blank" class="inline-flex items-center text-green-400 hover:text-green-300 font-semibold transition-colors">
                Read full discussion →
            </a>
        </div>
    </div>
    
    <!-- My Opinion -->
    <div class="bg-gradient-to-br from-blue-600/10 to-purple-600/10 border border-blue-500/30 backdrop-blur-sm rounded-lg p-8 mb-8">
        <div class="flex items-center space-x-3 mb-6">
            <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
            </svg>
            <h3 class="text-2xl font-bold text-gray-100">My Opinion</h3>
        </div>
        <p class="text-gray-300 leading-relaxed mb-4">
            After reading all of the full posts I've made up my mind. I think there is no right or wrong option, but I do think there are certain cases where 'article' inside of 'section' works better and vice versa.
        </p>
        <p class="text-gray-300 leading-relaxed">
            Articles and sections are related but they still are really different, so it makes sense that their uses are different too. In my opinion it would be better to use 'article' inside of 'section' when you have a text block that is completely unrelated to other blocks on the page. However, I would rather use 'section' inside of 'article' when you have the main part of the text and you try to make a smaller paragraph inside of the main part about a subject that's related to the main subject.
        </p>
    </div>
    
    <!-- Conclusion -->
    <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-lg p-6">
        <div class="flex items-start space-x-3">
            <svg class="w-6 h-6 text-blue-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-gray-300 leading-relaxed">
                <span class="font-semibold text-gray-100">In conclusion:</span> There is not really a right way on whether to use 'sections' inside of 'articles' or the other way around. Both ways have different uses but it is mainly about preference and context.
            </p>
        </div>
    </div>
    
</div>
@endsection
