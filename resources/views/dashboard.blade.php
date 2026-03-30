@extends('layouts.main')

@section('title', 'Dashboard')
@section('description', 'Authenticated dashboard overview')

@section('content')
<div class="site-page-header site-page-header--dashboard">
    <div class="site-page-header-inner">
        <h1 class="site-page-header-title">Dashboard</h1>
        <p class="site-page-header-subtitle">Welcome back to your workspace.</p>
    </div>
</div>

<div class="site-page-shell-medium">
    <div class="site-panel site-panel-padded">
        <h2 class="site-title-md">Session Status</h2>
        <p class="site-text-body">You're logged in.</p>
    </div>
</div>
@endsection
