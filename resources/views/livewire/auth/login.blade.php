<?php

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Features;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        $user = $this->validateCredentials();

        if (Features::canManageTwoFactorAuthentication() && $user->hasEnabledTwoFactorAuthentication()) {
            Session::put([
                'login.id' => $user->getKey(),
                'login.remember' => $this->remember,
            ]);

            $this->redirect(route('two-factor.login'), navigate: true);

            return;
        }

        Auth::login($user, $this->remember);

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

//        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
        $this->redirectIntended(default: url('/'));
    }

    /**
     * Validate the user's credentials.
     */
    protected function validateCredentials(): User
    {
        $user = Auth::getProvider()->retrieveByCredentials(['email' => $this->email, 'password' => $this->password]);

        if (! $user || ! Auth::getProvider()->validateCredentials($user, ['password' => $this->password])) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        return $user;
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
}; ?>

<div class="fluid-container">
    <div class="flex flex-col lg:flex-row items-center justify-center gap-12 max-w-7xl mx-auto">
        <!-- Left Column - Welcome Message -->
        <div class="lg:w-1/2 text-center lg:text-left fade-in">
            <div class="max-w-lg mx-auto lg:mx-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    {{ __('gothamfolio.auth.welcome_back') }}
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                    {{ __('gothamfolio.auth.welcome_message') }}
                </p>

                <div class="space-y-4">
                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center text-white mr-4">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">{{ __('gothamfolio.auth.secure_login') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.auth.secure_connection') }}</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white mr-4">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">{{ __('gothamfolio.auth.fast_access') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.auth.instant_access') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Login Form -->
        <div class="lg:w-1/2 w-full max-w-md fade-in" style="transition-delay: 0.2s;">
            <div class="auth-card bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-200 dark:border-gray-700">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-xl mx-auto mb-4">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h2 class="text-2xl font-bold">{{ __('gothamfolio.auth.login_title') }}</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">
                        {{ __('gothamfolio.auth.login_instructions') }}
                    </p>
                </div>

                <form method="POST" wire:submit="login">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ __('gothamfolio.auth.email_address') }}
                        </label>
                        <div class="relative">
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="email"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('email') border-red-500 @enderror"
                                placeholder="your@email.com"
                                wire:model="email"
                            >
                            <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ __('gothamfolio.auth.password') }}
                        </label>
                        <div class="relative">
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('password') border-red-500 @enderror"
                                placeholder="••••••••"
                                wire:model="password"
                            >
                            <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between mb-6">
                        <label for="remember_me" class="flex items-center">
                            <input
                                id="remember_me"
                                type="checkbox"
                                name="remember"
                                class="rounded border-gray-300 text-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700"
                                wire:model="remember"
                            >
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('gothamfolio.auth.remember_me') }}
                            </span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-primary-500 hover:text-primary-400 transition-colors" wire:navigate>
                                {{ __('gothamfolio.auth.forgot_password') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-primary-500 to-purple-500 hover:from-primary-600 hover:to-purple-600 text-white py-3 px-4 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 shadow-lg"
                    >
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        {{ __('gothamfolio.auth.login_button') }}
                    </button>

                    <!-- Register Link -->
                    @if (Route::has('register'))
                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                {{ __('gothamfolio.auth.no_account') }}
                                <a href="{{ route('register') }}" class="font-medium text-primary-500 hover:text-primary-400 transition-colors" wire:navigate>
                                    {{ __('gothamfolio.auth.register_link') }}
                                </a>
                            </p>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
