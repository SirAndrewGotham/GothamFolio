<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        Password::sendResetLink($this->only('email'));

        session()->flash('status', __('gothamfolio.auth.reset_link_sent'));
    }
}; ?>

<div class="fluid-container">
    <div class="flex flex-col lg:flex-row items-center justify-center gap-12 max-w-6xl mx-auto">
        <!-- Left Column - Info -->
        <div class="lg:w-1/2 text-center lg:text-left fade-in">
            <div class="max-w-lg mx-auto lg:mx-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    {{ __('gothamfolio.auth.forgot_password_title') }}
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                    {{ __('gothamfolio.auth.forgot_password_message') }}
                </p>

                <div class="space-y-4">
                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center text-white mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">{{ __('gothamfolio.auth.instructions_email') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.auth.get_reset_link') }}</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white mr-4">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">{{ __('gothamfolio.auth.secure_process') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('gothamfolio.auth.secure_recovery') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Form -->
        <div class="lg:w-1/2 w-full max-w-md fade-in" style="transition-delay: 0.2s;">
            <div class="auth-card bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-200 dark:border-gray-700">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-xl mx-auto mb-4">
                        <i class="fas fa-key"></i>
                    </div>
                    <h2 class="text-2xl font-bold">{{ __('gothamfolio.auth.password_recovery_title') }}</h2>
                    <p class="text-gray-600 dark:text-gray-400 mt-2">
                        {{ __('gothamfolio.auth.enter_email_for_link') }}
                    </p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 p-4 bg-green-100 dark:bg-green-900/30 border border-green-400 dark:border-green-600 text-green-700 dark:text-green-300 rounded-lg">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" wire:submit="sendPasswordResetLink">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ __('Email адрес') }}
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

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-primary-500 to-purple-500 hover:from-primary-600 hover:to-purple-600 text-white py-3 px-4 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 shadow-lg"
                    >
                        <i class="fas fa-paper-plane mr-2"></i>
                        {{ __('gothamfolio.auth.send_reset_link_button') }}
                    </button>

                    <!-- Back to Login -->
                    <div class="mt-6 text-center">
                        <a href="{{ route('login') }}" class="inline-flex items-center text-sm text-primary-500 hover:text-primary-400 transition-colors" wire:navigate>
                            <i class="fas fa-arrow-left mr-2"></i>
                            {{ __('gothamfolio.auth.back_to_login') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
