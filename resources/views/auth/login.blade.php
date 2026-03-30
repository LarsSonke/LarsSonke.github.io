<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="site-auth-feedback" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="site-auth-feedback" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="site-auth-form">
            @csrf

            <!-- Email Address -->
            <div class="site-auth-field-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="site-auth-field-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="site-auth-remember-row">
                <label for="remember_me" class="site-auth-remember-label">
                    <input id="remember_me" type="checkbox" class="site-auth-checkbox" name="remember">
                    <span class="site-auth-remember-text">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="site-auth-actions-end">
                @if (Route::has('password.request'))
                    <a class="site-auth-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button>
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
