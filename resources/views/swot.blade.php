@extends('layouts.main')

@section('title', 'SWOT Analysis')
@section('description', 'Personal SWOT analysis: strengths, weaknesses, opportunities, and threats')

@section('content')
<div class="bg-gradient-to-r from-purple-600/20 via-pink-600/20 to-red-600/20 border-b border-gray-800 backdrop-blur-sm text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">SWOT Analysis</h1>
        <p class="text-xl text-gray-300">Analyzing my strengths, weaknesses, opportunities, and threats</p>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-gray-800/50 border border-green-500/30 backdrop-blur-sm rounded-lg p-6">
            <h2 class="text-2xl font-bold text-green-400 mb-4">Strengths</h2>
            <p class="text-gray-300">My core competencies and positive attributes</p>
        </div>
        <div class="bg-gray-800/50 border border-red-500/30 backdrop-blur-sm rounded-lg p-6">
            <h2 class="text-2xl font-bold text-red-400 mb-4">Weaknesses</h2>
            <p class="text-gray-300">Areas for improvement and development</p>
        </div>
        <div class="bg-gray-800/50 border border-blue-500/30 backdrop-blur-sm rounded-lg p-6">
            <h2 class="text-2xl font-bold text-blue-400 mb-4">Opportunities</h2>
            <p class="text-gray-300">Potential paths for growth and advancement</p>
        </div>
        <div class="bg-gray-800/50 border border-yellow-500/30 backdrop-blur-sm rounded-lg p-6">
            <h2 class="text-2xl font-bold text-yellow-400 mb-4">Threats</h2>
            <p class="text-gray-300">External challenges to be aware of</p>
        </div>
    </div>
</div>
@endsection