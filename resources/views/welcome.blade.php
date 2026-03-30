@extends('layouts.main')

@section('title', 'Dashboard - My Study Progress')
@section('description', 'Track my ICT study progress, courses, and academic performance at HZ University')

@section('content')
<!-- Header -->
<div class="site-page-header site-page-header--dashboard">
    <div class="site-page-header-inner">
        <h1 class="site-page-header-title">Study Dashboard</h1>
        <p class="site-page-header-subtitle">Track your progress in the HBO-ICT programme at HZ University</p>
    </div>
</div>

<!-- Dashboard Content -->
<div class="site-page-shell">
    
    <!-- Quick Stats -->
    <div class="grid md:grid-cols-3 gap-6 mb-8">
        <!-- Total ECTS -->
        <div class="site-panel site-panel-padded-sm site-panel-accent site-dashboard-stat">
            <div class="flex items-center justify-between">
                <div>
                    <p class="site-text-muted text-sm font-medium mb-1">Total ECTS</p>
                    <p class="text-3xl font-bold site-text-heading">{{ number_format($progress->total_ec, 1) }} <span class="text-lg site-text-muted">/ 240</span></p>
                </div>
                <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 w-full bg-gray-700/50 rounded-full h-2">
                @php
                    $progressPercent = round(($progress->total_ec / 240) * 100);
                    $progressClass = match(true) {
                        $progressPercent >= 80 => 'site-progress-85',
                        $progressPercent >= 70 => 'site-progress-75',
                        $progressPercent >= 60 => 'site-progress-70',
                        default => 'site-progress-65',
                    };
                @endphp
                <div class="site-skill-fill {{ $progressClass }} h-2" style="width: {{ $progressPercent }}%"></div>
            </div>
            <p class="site-text-muted text-xs mt-2">{{ $progressPercent }}% Complete</p>
        </div>
        
        <!-- Propedeuse Progress -->
        <div class="site-panel site-panel-padded-sm site-panel-accent site-dashboard-stat">
            <div class="flex items-center justify-between">
                <div>
                    <p class="site-text-muted text-sm font-medium mb-1">Propedeuse</p>
                    <p class="text-3xl font-bold site-text-heading">{{ number_format($progress->propedeuse_ec, 1) }} <span class="text-lg site-text-muted">/ 60</span></p>
                </div>
                <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
            </div>
            <p class="site-text-muted text-sm mt-4">Completed</p>
        </div>
        
        <!-- Bachelor Progress -->
        <div class="site-panel site-panel-padded-sm site-panel-accent site-dashboard-stat">
            <div class="flex items-center justify-between">
                <div>
                    <p class="site-text-muted text-sm font-medium mb-1">Bachelor Phase</p>
                    <p class="text-3xl font-bold site-text-heading">{{ number_format($progress->bachelor_ec_earned, 1) }} <span class="text-lg site-text-muted">/ 180</span></p>
                </div>
                <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
            </div>
            <div class="mt-4 w-full bg-gray-700/50 rounded-full h-2">
                @php
                    $bachelorPercent = round(($progress->bachelor_ec_earned / 180) * 100);
                    $bachelorClass = match(true) {
                        $bachelorPercent >= 80 => 'site-progress-85',
                        $bachelorPercent >= 70 => 'site-progress-75',
                        $bachelorPercent >= 60 => 'site-progress-70',
                        default => 'site-progress-65',
                    };
                @endphp
                <div class="site-skill-fill {{ $bachelorClass }} h-2" style="width: {{ $bachelorPercent }}%"></div>
            </div>
        </div>
    </div>

    <!-- Statistics Row -->
    <div class="grid md:grid-cols-3 gap-6 mb-8">
        <div class="site-panel site-panel-padded">
            <p class="site-text-muted text-sm mb-2">Courses Completed</p>
            <p class="text-4xl font-bold site-text-heading">{{ $progress->courses_completed }}<span class="text-xl site-text-muted">/{{ $progress->courses_total }}</span></p>
        </div>
        <div class="site-panel site-panel-padded">
            <p class="site-text-muted text-sm mb-2">Average Grade</p>
            <p class="text-4xl font-bold site-text-heading">{{ $progress->average_grade ? number_format($progress->average_grade, 2) : 'N/A' }}</p>
        </div>
        <div class="site-panel site-panel-padded">
            <p class="site-text-muted text-sm mb-2">Last Updated</p>
            <p class="text-sm text-blue-400">{{ $progress->last_updated_at ? $progress->last_updated_at->format('M d, Y H:i') : 'Today' }}</p>
        </div>
    </div>

    <!-- Courses by Phase -->
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Propedeuse Courses -->
        <div class="site-panel overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-700 bg-gradient-to-r from-green-500/10 to-transparent">
                <h2 class="text-xl font-bold site-text-heading">Propedeuse Courses</h2>
                <p class="site-text-muted text-sm mt-1">Year 1 - Foundation Phase</p>
            </div>
            <div class="p-4">
                <div class="space-y-2 max-h-96 overflow-y-auto">
                @php
                    $propedeuseC = \App\Models\Course::where('phase', 'Propedeuse')->orderByRaw('COALESCE(date, created_at) DESC')->get();
                @endphp
                @forelse($propedeuseC as $course)
                    <div class="flex items-center justify-between p-3 rounded bg-gray-800/50 hover:bg-gray-800 transition">
                        <div class="flex-1">
                            <p class="font-semibold site-text-heading">{{ $course->name }}</p>
                            <p class="text-xs site-text-muted">{{ $course->course_code }}</p>
                        </div>
                        <div class="text-right">
                            @if($course->status === 'completed')
                                <p class="font-bold text-green-400">{{ number_format($course->ec, 2) }} EC</p>
                                @if($course->grade)
                                    <p class="text-sm site-text-muted">Grade: {{ $course->grade }}</p>
                                @endif
                            @else
                                <p class="text-sm text-yellow-400">Pending</p>
                            @endif
                        </div>
                    </div>
                @empty
                    <p class="site-text-muted text-center py-4">No propedeuse courses found</p>
                @endforelse
                </div>
            </div>
        </div>

        <!-- Bachelor Courses -->
        <div class="site-panel overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-700 bg-gradient-to-r from-purple-500/10 to-transparent">
                <h2 class="text-xl font-bold site-text-heading">Bachelor Courses</h2>
                <p class="site-text-muted text-sm mt-1">Year 2+ - Main Phase</p>
            </div>
            <div class="p-4">
                <div class="space-y-2 max-h-96 overflow-y-auto">
                @php
                    $bachelorC = \App\Models\Course::where('phase', 'Bachelor')->orderByRaw('COALESCE(date, created_at) DESC')->get();
                @endphp
                @forelse($bachelorC as $course)
                    <div class="flex items-center justify-between p-3 rounded bg-gray-800/50 hover:bg-gray-800 transition">
                        <div class="flex-1">
                            <p class="font-semibold site-text-heading">{{ $course->name }}</p>
                            <p class="text-xs site-text-muted">{{ $course->course_code }}</p>
                        </div>
                        <div class="text-right">
                            @if($course->status === 'completed')
                                <p class="font-bold text-green-400">{{ number_format($course->ec, 2) }} EC</p>
                                @if($course->grade)
                                    <p class="text-sm site-text-muted">Grade: {{ $course->grade }}</p>
                                @endif
                            @else
                                <p class="text-sm text-yellow-400">Pending</p>
                            @endif
                        </div>
                    </div>
                @empty
                    <p class="site-text-muted text-center py-4">No bachelor courses found</p>
                @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
