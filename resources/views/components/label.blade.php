@props(['value'])

<label {{ $attributes->merge(['class' => 'site-auth-label']) }}>
    {{ $value ?? $slot }}
</label>
