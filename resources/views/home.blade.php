@extends('layouts.main')

@section('title', 'Home - My ICT Portfolio')
@section('description', 'Welcome to my ICT student portfolio at HZ University of Applied Sciences')

@section('content')
<!-- Hero Section -->
<div class="home-hero">
    <div class="home-hero-inner">
        <div class="home-hero-content">
            <h1 class="home-hero-title">
                Welcome to My Portfolio
            </h1>
            <p class="home-hero-subtitle">
                ICT Student at HZ University of Applied Sciences
            </p>
            <div class="home-hero-actions">
                <a href="{{ url('/profile') }}" class="home-btn-primary">
                    View My Profile
                    <svg class="home-icon-sm home-btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="{{ url('/blog') }}" class="home-btn-secondary">
                    Read My Blog
                </a>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="home-about">
    <div class="home-about-grid">
        <div>
            <h2 class="home-about-title">
                About Me
            </h2>
            <p class="home-about-paragraph">
                I'm an ICT student at HZ University of Applied Sciences, passionate about web development, programming, and technology.
            </p>
            <p class="home-about-paragraph home-about-paragraph-last">
                This portfolio showcases my journey through the ICT program, including my projects, learning experiences, and professional development.
            </p>
            <a href="{{ url('/profile') }}" class="home-about-link">
                Learn more about me
                <svg class="home-icon-sm home-btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
        <div class="home-about-media-wrap">
            <div class="home-about-media-card">
                <img src="{{ asset('images/index-images/source-code.png') }}" alt="Coding" class="home-about-image" onerror="this.style.display='none'">
                <div class="home-about-overlay"></div>
            </div>
        </div>
    </div>
</div>

<!-- Features/Highlights Section -->
<div class="home-features">
    <div class="home-features-inner">
        <div class="home-section-header">
            <h2 class="home-section-title">
                What You'll Find Here
            </h2>
            <p class="home-section-subtitle">
                Explore my academic journey, projects, and growth as an ICT professional
            </p>
        </div>
        
        <div class="home-features-grid">
            <!-- Feature 1 -->
            <a href="{{ url('/profile') }}" class="home-feature-card home-feature-card--blue">
                <div class="home-feature-icon home-feature-icon--blue">
                    <svg class="home-icon-md" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h3 class="home-feature-title">My Profile</h3>
                <p class="home-feature-copy">
                    Learn about my background, interests, skills, and what drives my passion for ICT.
                </p>
                <span class="home-feature-link home-feature-link--blue">
                    View Profile →
                </span>
            </a>
            
            <!-- Feature 2 -->
            <a href="{{ url('/blog') }}" class="home-feature-card home-feature-card--purple">
                <div class="home-feature-icon home-feature-icon--purple">
                    <svg class="home-icon-md" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <h3 class="home-feature-title">Blog & Articles</h3>
                <p class="home-feature-copy">
                    Read about my learning experiences, projects, reflections, and technical insights.
                </p>
                <span class="home-feature-link home-feature-link--purple">
                    Read Blog →
                </span>
            </a>
            
            <!-- Feature 3 -->
            <a href="{{ url('/welcome') }}" class="home-feature-card home-feature-card--green">
                <div class="home-feature-icon home-feature-icon--green">
                    <svg class="home-icon-md" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="home-feature-title">Dashboard</h3>
                <p class="home-feature-copy">
                    Track my study progress, coursework, and academic achievements at HZ.
                </p>
                <span class="home-feature-link home-feature-link--green">
                    View Dashboard →
                </span>
            </a>
            
            <!-- Feature 4 -->
            <a href="{{ url('/projects') }}" class="home-feature-card home-feature-card--orange">
                <div class="home-feature-icon home-feature-icon--orange">
                    <svg class="home-icon-md" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3 class="home-feature-title">My Projects</h3>
                <p class="home-feature-copy">
                    Explore my portfolio of web development and programming projects.
                </p>
                <span class="home-feature-link home-feature-link--orange">
                    View Projects →
                </span>
            </a>
            
            <!-- Feature 5 -->
            <a href="{{ url('/contact') }}" class="home-feature-card home-feature-card--cyan">
                <div class="home-feature-icon home-feature-icon--cyan">
                    <svg class="home-icon-md" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="home-feature-title">Get In Touch</h3>
                <p class="home-feature-copy">
                    Have questions or want to connect? Send me a message!
                </p>
                <span class="home-feature-link home-feature-link--cyan">
                    Contact Me →
                </span>
            </a>
            
            <!-- Feature 6 -->
            <a href="{{ url('/faq') }}" class="home-feature-card home-feature-card--yellow">
                <div class="home-feature-icon home-feature-icon--yellow">
                    <svg class="home-icon-md" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="home-feature-title">FAQ</h3>
                <p class="home-feature-copy">
                    Find answers to frequently asked questions about my studies and career.
                </p>
                <span class="home-feature-link home-feature-link--yellow">
                    View FAQ →
                </span>
            </a>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="home-cta">
    <div class="home-cta-inner">
        <h2 class="home-cta-title">
            Want to Learn More?
        </h2>
        <p class="home-cta-subtitle">
            Check out my FAQ section for common questions or explore my blog posts
        </p>
        <div class="home-cta-actions">
            <a href="{{ url('/faq') }}" class="home-btn-primary">
                View FAQ
            </a>
            <a href="{{ url('/blog') }}" class="home-btn-secondary">
                Explore Blog
            </a>
        </div>
    </div>
</div>
@endsection
