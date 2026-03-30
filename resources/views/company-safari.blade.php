@extends('layouts.main')

@section('title', 'Company Safari')
@section('description', 'Insights from visiting tech companies and learning about the industry')

@section('content')
<div class="site-page-header site-page-header--company">
    <div class="site-page-header-inner">
        <h1 class="site-page-header-title">Company Safari</h1>
        <p class="site-page-header-subtitle">Exploring the tech industry firsthand</p>
    </div>
</div>

<div class="site-page-shell-narrow">
    <div class="site-panel site-panel-padded-sm mb-8">
        <p class="site-text-body-lg">
            On this page you will find information about companies I visited during the Company Safari.
        </p>
    </div>
    
    <div class="site-stack-md">
        <!-- Daemen -->
        <div class="site-panel site-panel-padded site-panel-accent">
            <h2 class="site-title-md">Daemen</h2>
            <p class="site-text-body mb-4">
                Daemen focuses on cyber security, bringing affordable fiberglass internet connections, and efficiency of their employees. They want their employees to feel comfortable at work, that way they will work more efficiently.
            </p>
            <p class="site-text-body mb-4">
                After hearing this it sounded quite interesting since having a nice and comfortable workplace will help a lot with enjoying your job for many years. Cybersecurity seems interesting as well, and I like that they try to bring affordable fiberglass internet to NL which makes internet a lot faster.
            </p>
            <h4 class="site-subtitle">Roles</h4>
            <ul class="site-list-disc mb-4 site-stack-sm">
                <li>Engineer</li>
                <li>Technical Director</li>
                <li>Developer</li>
            </ul>
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <h5 class="site-subtitle">Pros</h5>
                    <ul class="site-list-disc site-stack-sm">
                        <li>Comfortable work environment</li>
                        <li>Clear expectations</li>
                        <li>Helping bring fast internet to NL</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- HackerOne -->
        <div class="site-panel site-panel-padded site-panel-accent">
            <h2 class="site-title-md">HackerOne</h2>
            <p class="site-text-body mb-4">
                HackerOne is a vulnerability coordination and bug bounty platform that connects businesses with penetration testers and cybersecurity researchers. They focus on protecting companies from hackers and bugs in their systems.
            </p>
            <h4 class="site-subtitle">Roles</h4>
            <ul class="site-list-disc mb-4 site-stack-sm">
                <li>Engineer</li>
                <li>Technical Director</li>
                <li>Developer</li>
                <li>Security Engineer</li>
                <li>Security Software Developer</li>
                <li>Security Consultant</li>
            </ul>
            <div>
                <h5 class="site-subtitle">Pros</h5>
                <ul class="site-list-disc site-stack-sm">
                    <li>Help companies with security</li>
                    <li>Interesting approach using ethical hackers</li>
                </ul>
            </div>
        </div>
        
        <!-- Macaw -->
        <div class="site-panel site-panel-padded site-panel-accent">
            <h2 class="site-title-md">Macaw</h2>
            <p class="site-text-body mb-4">
                They are a combination of a digital office and a system integrator.
            </p>
            <h4 class="site-subtitle">Roles</h4>
            <ul class="site-list-disc mb-4 site-stack-sm">
                <li>Digital Marketing Engineer</li>
                <li>Security Engineer</li>
                <li>Software Developer</li>
                <li>Power Platform Consultant</li>
            </ul>
            <div>
                <h5 class="site-subtitle">Pros</h5>
                <ul class="site-list-disc site-stack-sm">
                    <li>Welcome people with experience to learn and improve</li>
                    <li>Continuous learning and improvement</li>
                </ul>
            </div>
        </div>
        
        <!-- Cisco -->
        <div class="site-panel site-panel-padded site-panel-accent">
            <h2 class="site-title-md">Cisco</h2>
            <p class="site-text-body mb-4">
                Cisco is the biggest security company in the world, specializing in enterprise networks, security products, and IT infrastructure.
            </p>
            <h4 class="site-subtitle">Specializations</h4>
            <ul class="site-list-disc mb-4 site-stack-sm">
                <li>Enterprise networks (routers, switches, wireless systems)</li>
                <li>Security (firewalls, VPN, intrusion detection)</li>
                <li>Building management systems</li>
                <li>WAN acceleration hardware</li>
            </ul>
            <h4 class="site-subtitle">Roles</h4>
            <ul class="site-list-disc mb-4 site-stack-sm">
                <li>Engineer</li>
                <li>Security Engineer</li>
                <li>Security Software Developer</li>
                <li>Security Consultant</li>
            </ul>
            <div>
                <h5 class="site-subtitle">Pros</h5>
                <ul class="site-list-disc site-stack-sm">
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