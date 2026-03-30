@extends('layouts.main')

@section('title', 'Discussions - HTML5 Semantics')
@section('description', 'My thoughts and reflections on HTML5 semantic elements and their proper usage')

@section('content')
<!-- Header -->
<div class="site-page-header site-page-header--discussion">
    <div class="site-page-header-inner">
        <h1 class="site-page-header-title">HTML5 Discussions</h1>
        <p class="site-page-header-subtitle">Exploring semantic elements and best practices</p>
    </div>
</div>

<!-- Content -->
<div class="site-page-shell-narrow">
    
    <!-- Introduction -->
    <div class="site-panel site-panel-padded-sm mb-8">
        <p class="site-text-body-lg">
            Here you will find posts about certain discussions regarding ICT. On top of that, I will also give my opinion on these discussions.
        </p>
    </div>
    
    <!-- Discussion 1 -->
    <div class="site-panel site-panel-padded site-panel-accent mb-8">
        <div class="flex items-start space-x-4 mb-4">
            <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-blue-400 font-bold">1</span>
            </div>
            <div>
                <h2 class="site-title-md">Section vs Article</h2>
                <h3 class="site-subtitle">Which is the right tag to use?</h3>
            </div>
        </div>
        
        <div class="pl-14">
            <h4 class="site-subtitle">Start of the discussion:</h4>
            <p class="site-text-body mb-4">
                I have a page made up of various "sections" like videos, a newsfeed etc. I am a bit confused how to represent these with HTML5. Currently I have them as HTML5 'sections', but on further inspection it looks they the more correct tag would be 'article'. Could anyone shed some light on this for me?
            </p>
            <a href="https://stackoverflow.com/questions/7549561/section-vs-article-html5" target="_blank" class="site-link-emphasis site-link-emphasis--primary">
                Read full discussion →
            </a>
        </div>
    </div>
    
    <!-- Discussion 2 -->
    <div class="site-panel site-panel-padded site-panel-accent mb-8">
        <div class="flex items-start space-x-4 mb-4">
            <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-purple-400 font-bold">2</span>
            </div>
            <div>
                <h2 class="site-title-md">Nesting Structure</h2>
                <h3 class="site-subtitle">Should 'sections' have 'articles' or should 'articles' have 'sections'?</h3>
            </div>
        </div>
        
        <div class="pl-14">
            <h4 class="site-subtitle">Start of the discussion:</h4>
            <p class="site-text-body mb-4">
                I'm reading Mark Pilgrim's "Dive into HTML5" and in the semantics section, it talks about how HTML5 introduces the 'article' and 'section' elements. It says that 'section's represent a generic document or section, while 'article's represent a self-contained composition. I don't see a logically semantic parent-child relationship either way.
            </p>
            <a href="https://stackoverflow.com/questions/9527378/should-sections-have-articles-or-should-articles-have-sections" target="_blank" class="site-link-emphasis site-link-emphasis--primary">
                Read full discussion →
            </a>
        </div>
    </div>
    
    <!-- Discussion 3 -->
    <div class="site-panel site-panel-padded site-panel-accent mb-8">
        <div class="flex items-start space-x-4 mb-4">
            <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-green-400 font-bold">3</span>
            </div>
            <div>
                <h2 class="site-title-md">Containment Question</h2>
                <h3 class="site-subtitle">'section' or 'article', which is contained in which?</h3>
            </div>
        </div>
        
        <div class="pl-14">
            <h4 class="site-subtitle">Start of the discussion:</h4>
            <p class="site-text-body mb-4">
                Trying to get my head around the new semantic elements in HTML5. Does a 'section' belong inside an 'article' or is it the other way around? Does it even matter? I'm looking at re-structuring a wordpress blog.
            </p>
            <a href="https://stackoverflow.com/questions/1789692/section-or-article-which-is-contained-in-which" target="_blank" class="site-link-emphasis site-link-emphasis--primary">
                Read full discussion →
            </a>
        </div>
    </div>
    
    <!-- My Opinion -->
    <div class="site-panel-callout mb-8">
        <div class="flex items-center space-x-3 mb-6">
            <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
            </svg>
            <h3 class="site-title-md">My Opinion</h3>
        </div>
        <p class="site-text-body mb-4">
            After reading all of the full posts I've made up my mind. I think there is no right or wrong option, but I do think there are certain cases where 'article' inside of 'section' works better and vice versa.
        </p>
        <p class="site-text-body">
            Articles and sections are related but they still are really different, so it makes sense that their uses are different too. In my opinion it would be better to use 'article' inside of 'section' when you have a text block that is completely unrelated to other blocks on the page. However, I would rather use 'section' inside of 'article' when you have the main part of the text and you try to make a smaller paragraph inside of the main part about a subject that's related to the main subject.
        </p>
    </div>
    
    <!-- Conclusion -->
    <div class="site-panel site-panel-padded-sm">
        <div class="flex items-start space-x-3">
            <svg class="w-6 h-6 text-blue-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="site-text-body">
                <span class="site-subtitle">In conclusion:</span> There is not really a right way on whether to use 'sections' inside of 'articles' or the other way around. Both ways have different uses but it is mainly about preference and context.
            </p>
        </div>
    </div>
    
</div>
@endsection
