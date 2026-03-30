@extends('layouts.main')

@section('title', 'SWOT Analysis')
@section('description', 'Personal SWOT analysis: strengths, weaknesses, opportunities, and threats')

@section('content')
<div class="site-page-header site-page-header--swot">
    <div class="site-page-header-inner">
        <h1 class="site-page-header-title">SWOT Analysis</h1>
        <p class="site-page-header-subtitle">Analyzing my strengths, weaknesses, opportunities, and threats</p>
    </div>
</div>

<div class="site-page-shell-wide">
    <div class="grid md:grid-cols-2 gap-6">
        <div class="site-panel site-panel-padded site-panel-accent">
            <h2 class="site-title-md">Strengths</h2>
            <p class="site-text-body">My core competencies and positive attributes</p>
        </div>
        <div class="site-panel site-panel-padded site-panel-accent">
            <h2 class="site-title-md">Weaknesses</h2>
            <p class="site-text-body">Areas for improvement and development</p>
        </div>
        <div class="site-panel site-panel-padded site-panel-accent">
            <h2 class="site-title-md">Opportunities</h2>
            <p class="site-text-body">Potential paths for growth and advancement</p>
        </div>
        <div class="site-panel site-panel-padded site-panel-accent">
            <h2 class="site-title-md">Threats</h2>
            <p class="site-text-body">External challenges to be aware of</p>
        </div>
    </div>
</div>
@endsection