<button {{ $attributes->merge(['type' => 'submit', 'class' => 'site-auth-button']) }}>
    {{ $slot }}
</button>
