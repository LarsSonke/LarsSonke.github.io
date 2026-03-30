@extends('layouts.main')

@section('title', 'Contact Me')
@section('description', 'Get in touch with me for questions, opportunities, or collaboration')

@section('content')
<!-- Header -->
<div class="site-page-header site-page-header--contact">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="site-page-header-title">Get In Touch</h1>
        <p class="site-page-header-subtitle">I'd love to hear from you!</p>
    </div>
</div>

<div class="site-page-shell-medium">
    <div class="grid md:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div>
            <h2 class="text-2xl font-bold site-text-heading mb-6">Send a Message</h2>
            <form id="contactForm" x-data="{ submitted: false }" @submit.prevent="submitForm" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium site-text-body mb-2">Name</label>
                    <input type="text" id="name" name="name" required
                           class="site-input"
                           placeholder="Your name">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium site-text-body mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="site-input"
                           placeholder="your.email@example.com">
                </div>
                
                <div>
                    <label for="subject" class="block text-sm font-medium site-text-body mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" required
                           class="site-input"
                           placeholder="What's this about?">
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-medium site-text-body mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" required
                              class="site-input site-input--textarea"
                              placeholder="Your message..."></textarea>
                </div>
                
                <button type="submit" class="site-btn-primary w-full">
                    Send Message
                </button>
                
                <div x-show="submitted" x-transition 
                     class="bg-green-500/20 border border-green-500/50 text-green-400 px-4 py-3 rounded-lg">
                    <p class="font-semibold">Thanks for your message!</p>
                    <p class="text-sm">I'll get back to you as soon as possible.</p>
                </div>
            </form>
        </div>
        
        <!-- Contact Info -->
        <div>
            <h2 class="text-2xl font-bold site-text-heading mb-6">Contact Information</h2>
            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-600/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold site-text-heading mb-1">Email</h3>
                        <p class="site-text-muted">sonk0004@hz.nl</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-purple-600/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold site-text-heading mb-1">Location</h3>
                        <p class="site-text-muted">Middelburg, Netherlands</p>
                    </div>
                </div>
            </div>
            
            <div class="site-panel site-panel-padded mt-12">
                <h3 class="font-semibold site-text-heading mb-3">Connect With Me</h3>
                <div class="flex space-x-4">
                    <a href="https://github.com/LarsSonke" target="_blank" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 site-text-body" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function submitForm(event) {
        // Simulate form submission
        setTimeout(() => {
            this.submitted = true;
            document.getElementById('contactForm').reset();
        }, 500);
    }
</script>

@endsection
