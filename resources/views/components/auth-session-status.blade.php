@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'site-auth-status']) }}>
        {{ $status }}
    </div>
@endif
