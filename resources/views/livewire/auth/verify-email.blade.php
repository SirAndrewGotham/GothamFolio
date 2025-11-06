<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    /**
     * Send an email verification notification to the user.
     */
    public function sendVerification(): void
    {
        Auth::user()->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }

    /**
     * Handle the component's rendering hook.
     */
    public function rendering(View $view): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
//            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
            $this->redirectIntended(default: url('/'));

            return;
        }
    }
}; ?>

<div class="fluid-container">
    <div class="max-w-2xl mx-auto text-center fade-in">
        <div class="auth-card bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-200 dark:border-gray-700">
            <!-- Icon -->
            <div class="w-20 h-20 rounded-full bg-gradient-to-r from-primary-500 to-purple-500 flex items-center justify-center text-white font-bold text-2xl mx-auto mb-6">
                <i class="fas fa-envelope-open"></i>
            </div>

            <!-- Title -->
            <h1 class="text-3xl font-bold mb-4">
                {{ __('gothamfolio.verify_email.title') }}
            </h1>

            <!-- Message -->
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">
                {{ __('gothamfolio.verify_email.message') }}
            </p>

            <!-- Additional Info -->
            <div class="bg-blue-50 dark:bg-blue-900/30 border border-blue-200 dark:border-blue-700 rounded-lg p-4 mb-8">
                <div class="flex items-center">
                    <i class="fas fa-info-circle text-blue-500 mr-3 text-xl"></i>
                    <p class="text-blue-700 dark:text-blue-300 text-sm">
                        {{ __('gothamfolio.verify_email.spam_note') }}
                    </p>
                </div>
            </div>

            <!-- Resend Form -->
            <form method="POST" wire:submit="sendVerification">
                @csrf

                <button
                    type="submit"
                    class="w-full max-w-xs bg-gradient-to-r from-primary-500 to-purple-500 hover:from-primary-600 hover:to-purple-600 text-white py-3 px-6 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 shadow-lg mx-auto"
                >
                    <i class="fas fa-paper-plane mr-2"></i>
                    {{ __('gothamfolio.verify_email.resend_link_button') }}
                </button>
            </form>

            <!-- Logout -->
            <form method="POST" wire:submit="logout" class="mt-6">
                @csrf
                <button
                    type="submit"
                    class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors"
                >
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    {{ __('gothamfolio.verify_email.logout_button') }}
                </button>
            </form>

            <!-- Success Message -->
            @if (session('status') == 'verification-link-sent')
                <div class="mt-4 p-4 bg-green-100 dark:bg-green-900/30 border border-green-400 dark:border-green-600 text-green-700 dark:text-green-300 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        {{ __('gothamfolio.verify_email.new_link_sent') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
