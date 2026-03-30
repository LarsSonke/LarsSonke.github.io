<footer class="site-footer">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About Section -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4">About</h3>
                <p class="text-sm">
                    ICT student portfolio showcasing my journey, projects, and learning experiences at HZ University of Applied Sciences.
                </p>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/') }}" class="site-footer-link">Home</a></li>
                    <li><a href="{{ url('/profile') }}" class="site-footer-link">Profile</a></li>
                    <li><a href="{{ url('/blog') }}" class="site-footer-link">Blog</a></li>
                    <li><a href="{{ url('/faq') }}" class="site-footer-link">FAQ</a></li>
                </ul>
            </div>
            
            <!-- Resources -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4">Study Resources</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="https://learn.hz.nl/my/" target="_blank" class="site-footer-link">Learn HZ</a></li>
                    <li><a href="https://hz.nl" target="_blank" class="site-footer-link">HZ University</a></li>
                    <li><a href="https://github.com" target="_blank" class="site-footer-link">GitHub</a></li>
                    <li><a href="https://www.w3schools.com" target="_blank" class="site-footer-link">W3Schools</a></li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-800 mt-8 pt-8 text-sm text-center">
            <p>&copy; {{ date('Y') }} My Portfolio. Built with Laravel & Tailwind CSS.</p>
        </div>
    </div>
</footer>
