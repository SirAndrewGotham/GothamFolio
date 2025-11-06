<div class="fluid-container">
    <div class="max-w-md mx-auto fade-in">
        <div class="auth-card bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-200 dark:border-gray-700">
            <!-- Icon -->
            <div class="w-16 h-16 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-xl mx-auto mb-6">
                <i class="fas fa-shield-alt"></i>
            </div>

            <!-- Title -->
            <h1 class="text-2xl font-bold text-center mb-2">
                {{ __('Подтвердите пароль') }}
            </h1>

            <!-- Message -->
            <p class="text-gray-600 dark:text-gray-400 text-center mb-8">
                {{ __('Это защищенная область приложения. Пожалуйста, подтвердите ваш пароль, чтобы продолжить.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm.store') }}">
                @csrf

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        {{ __('Пароль') }}
                    </label>
                    <div class="relative">
                        <input
                            id="password"
                            type="password"
                            name="password"
                            wire:model="password"
                            required
                            autocomplete="current-password"
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('password') border-red-500 @enderror"
                            placeholder="••••••••"
                        >
                        <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-primary-500 to-purple-500 hover:from-primary-600 hover:to-purple-600 text-white py-3 px-4 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 shadow-lg"
                >
                    <i class="fas fa-check mr-2"></i>
                    {{ __('Подтвердить') }}
                </button>

                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <div class="mt-4 text-center">
                        <a href="{{ route('password.request') }}" class="text-sm text-primary-500 hover:text-primary-400 transition-colors" wire:navigate>
                            {{ __('Забыли пароль?') }}
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
