@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="site-auth-error-title">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="site-list-disc site-auth-error-list site-auth-error-list-spacing">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
