@extends('layouts.main')

@section('title', 'Company Safari')
@section('description', 'Insights from visiting tech companies and learning about the industry')

@section('content')
<div class="bg-gradient-to-r from-green-600/20 via-teal-600/20 to-blue-600/20 border-b border-gray-800 backdrop-blur-sm text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-green-400 to-teal-400 bg-clip-text text-transparent">Company Safari</h1>
        <p class="text-xl text-gray-300">Exploring the tech industry firsthand</p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-gray-800/50 border border-gray-700 backdrop-blur-sm rounded-lg p-6 mb-8">
        <p class="text-gray-300 text-lg">
            On this page you will find information about companies I visited during the Company Safari.
        </p>
    </div>
    
    <div class="space-y-6">
        <!-- Daemen -->
        <div class="bg-gray-800/50 border border-green-500/30 backdrop-blur-sm rounded-lg p-8 hover:border-green-400/50 transition-all">
            <h2 class="text-2xl font-bold text-gray-100 mb-4">Daemen</h2>
            <p class="text-gray-300 mb-4">
                Daemen focuses on cyber security, bringing affordable fiberglass internet connections, and efficiency of their employees. They want their employees to feel comfortable at work, that way they will work more efficiently.
            </p>
            <p class="text-gray-300 mb-4">
                After hearing this it sounded quite interesting since having a nice and comfortable workplace will help a lot with enjoying your job for many years. Cybersecurity seems interesting as well, and I like that they try to bring affordable fiberglass internet to NL which makes internet a lot faster.
            </p>
            <h4 class="text-lg font-semibold text-gray-100 mb-2">Roles</h4>
            <ul class="list-disc list-inside text-gray-300 mb-4 space-y-1">
                <li>Engineer</li>
                <li>Technical Director</li>
                <li>Developer</li>
            </ul>
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <h5 class="font-semibold text-green-400 mb-2">Pros</h5>
                    <ul class="list-disc list-inside text-gray-300 space-y-1 text-sm">
                        <li>Comfortable work environment</li>
                        <li>Clear expectations</li>
                        <li>Helping bring fast internet to NL</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- HackerOne -->
        <div class="bg-gray-800/50 border border-blue-500/30 backdrop-blur-sm rounded-lg p-8 hover:border-blue-400/50 transition-all">
            <h2 class="text-2xl font-bold text-gray-100 mb-4">HackerOne</h2>
            <p class="text-gray-300 mb-4">
                HackerOne is a vulnerability coordination and bug bounty platform that connects businesses with penetration testers and cybersecurity researchers. They focus on protecting companies from hackers and bugs in their systems.
            </p>
            <h4 class="text-lg font-semibold text-gray-100 mb-2">Roles</h4>
            <ul class="list-disc list-inside text-gray-300 mb-4 space-y-1">
                <li>Engineer</li>
                <li>Technical Director</li>
                <li>Developer</li>
                <li>Security Engineer</li>
                <li>Security Software Developer</li>
                <li>Security Consultant</li>
            </ul>
            <div>
                <h5 class="font-semibold text-green-400 mb-2">Pros</h5>
                <ul class="list-disc list-inside text-gray-300 space-y-1 text-sm">
                    <li>Help companies with security</li>
                    <li>Interesting approach using ethical hackers</li>
                </ul>
            </div>
        </div>
        
        <!-- Macaw -->
        <div class="bg-gray-800/50 border border-purple-500/30 backdrop-blur-sm rounded-lg p-8 hover:border-purple-400/50 transition-all">
            <h2 class="text-2xl font-bold text-gray-100 mb-4">Macaw</h2>
            <p class="text-gray-300 mb-4">
                They are a combination of a digital office and a system integrator.
            </p>
            <h4 class="text-lg font-semibold text-gray-100 mb-2">Roles</h4>
            <ul class="list-disc list-inside text-gray-300 mb-4 space-y-1">
                <li>Digital Marketing Engineer</li>
                <li>Security Engineer</li>
                <li>Software Developer</li>
                <li>Power Platform Consultant</li>
            </ul>
            <div>
                <h5 class="font-semibold text-green-400 mb-2">Pros</h5>
                <ul class="list-disc list-inside text-gray-300 space-y-1 text-sm">
                    <li>Welcome people with experience to learn and improve</li>
                    <li>Continuous learning and improvement</li>
                </ul>
            </div>
        </div>
        
        <!-- Cisco -->
        <div class="bg-gray-800/50 border border-orange-500/30 backdrop-blur-sm rounded-lg p-8 hover:border-orange-400/50 transition-all">
            <h2 class="text-2xl font-bold text-gray-100 mb-4">Cisco</h2>
            <p class="text-gray-300 mb-4">
                Cisco is the biggest security company in the world, specializing in enterprise networks, security products, and IT infrastructure.
            </p>
            <h4 class="text-lg font-semibold text-gray-100 mb-2">Specializations</h4>
            <ul class="list-disc list-inside text-gray-300 mb-4 space-y-1">
                <li>Enterprise networks (routers, switches, wireless systems)</li>
                <li>Security (firewalls, VPN, intrusion detection)</li>
                <li>Building management systems</li>
                <li>WAN acceleration hardware</li>
            </ul>
            <h4 class="text-lg font-semibold text-gray-100 mb-2">Roles</h4>
            <ul class="list-disc list-inside text-gray-300 mb-4 space-y-1">
                <li>Engineer</li>
                <li>Security Engineer</li>
                <li>Security Software Developer</li>
                <li>Security Consultant</li>
            </ul>
            <div>
                <h5 class="font-semibold text-green-400 mb-2">Pros</h5>
                <ul class="list-disc list-inside text-gray-300 space-y-1 text-sm">
                    <li>Comfortable work environment</li>
                    <li>Global impact</li>
                    <li>Wide variety of products and services</li>
                    <li>Diverse job opportunities</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection