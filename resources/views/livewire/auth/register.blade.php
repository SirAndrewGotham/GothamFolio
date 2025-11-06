<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        Session::regenerate();

        $this->redirectIntended(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="fluid-container">
    <div class="flex flex-col lg:flex-row items-center justify-center gap-12 max-w-7xl mx-auto">
        <!-- Left Column - Welcome Message -->
        <div class="lg:w-1/2 text-center lg:text-left fade-in">
            <div class="max-w-lg mx-auto lg:mx-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    {{ __('gothamfolio.registration.join_us') }}
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                    {{ __('gothamfolio.registration.create_account_message') }}
                </p>

                <div class="space-y-4">
                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white mr-4">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">{{ __('gothamfolio.registration.quick_start') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.registration.start_in_minutes') }}</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white mr-4">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">{{ __('gothamfolio.registration.personal_settings') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.registration.customize_needs') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Registration Form -->
        <div class="lg:w-1/2 w-full max-w-md fade-in" style="transition-delay: 0.2s;">
            <div class="auth-card bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-200 dark:border-gray-700">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-xl mx-auto mb-4">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h2 class="text-2xl font-bold">{{ __('gothamfolio.registration.create_account_title') }}</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">
                        {{ __('gothamfolio.registration.registration_instructions') }}
                    </p>
                </div>

                <form method="POST" wire:submit="register">
                    @csrf

                    <!-- Name -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ __('gothamfolio.registration.name') }}
                        </label>
                        <div class="relative">
                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('name') border-red-500 @enderror"
                                placeholder="{{ __('gothamfolio.registration.name_placeholder') }}"
                                wire:model="name"
                            >
                            <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ __('gothamfolio.registration.email') }}
                        </label>
                        <div class="relative">
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
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
                            {{ __('gothamfolio.registration.password') }}
                        </label>
                        <div class="relative">
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
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

                    <!-- Confirm Password -->
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ __('gothamfolio.registration.confirm_password') }}
                        </label>
                        <div class="relative">
                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors"
                                placeholder="••••••••"
                                wire:model="password_confirmation"
                            >
                            <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                        @error('password_confirmation')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="mb-6">
                        <label for="terms" class="flex items-start">
                            <input
                                id="terms"
                                type="checkbox"
                                name="terms"
                                required
                                class="rounded border-gray-300 text-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 mt-1"
                            >
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('gothamfolio.registration.i_agree_with') }}
                                <a href="#" class="text-primary-500 hover:text-primary-400 transition-colors" wire:navigate>
                                    {{ __('gothamfolio.registration.terms_of_use') }}
                                </a>
                                {{ __('gothamfolio.registration.and') }}
                                <a href="#" class="text-primary-500 hover:text-primary-400 transition-colors" wire:navigate>
                                    {{ __('gothamfolio.registration.privacy_policy') }}
                                </a>
                            </span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-primary-500 to-purple-500 hover:from-primary-600 hover:to-purple-600 text-white py-3 px-4 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 shadow-lg"
                    >
                        <i class="fas fa-user-plus mr-2"></i>
                        {{ __('gothamfolio.registration.register_button') }}
                    </button>

                    <!-- Login Link -->
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                {{ __('gothamfolio.registration.already_have_account') }}
                            <a href="{{ route('login') }}" class="font-medium text-primary-500 hover:text-primary-400 transition-colors" wire:navigate>
                                {{ __('gothamfolio.registration.login_link') }}
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
