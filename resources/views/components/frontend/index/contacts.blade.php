<?php

use function Livewire\Volt\{state, rules, mount};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackReceived;

state([
    'name' => '',
    'email' => '',
    'subject' => '',
    'message' => '',
    'formSubmitted' => false,
    'formSubmitting' => false,
    'honeypot' => '',
    'captchaAnswer' => '',
    'captchaQuestion' => '',
    'captchaCorrectAnswer' => 0,
    'submissionTime' => 0,
]);

rules(fn () => [
    'name' => 'required|min:2',
    'email' => 'required|email',
    'subject' => 'required|min:5',
    'message' => 'required|min:10',
    'honeypot' => 'max:0', // Honeypot must be empty
    'captchaAnswer' => [
        'required',
        function (string $attribute, $value, $fail) {
            if ((int) $value !== $this->captchaCorrectAnswer) {
                $fail(__('gothamfolio.feedback_form.captcha_error'));
            }
        },
    ],
]);

mount(function () {
    $this->submissionTime = time();
    $this->generateCaptcha();
});

$resetForm = function () {
    $this->reset(['name', 'email', 'subject', 'message', 'captchaAnswer', 'formSubmitted']);
    $this->generateCaptcha();
};

$generateCaptcha = function () {
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $this->captchaQuestion = __('gothamfolio.feedback_form.captcha_question', ['num1' => $num1, 'num2' => $num2]);
    $this->captchaCorrectAnswer = $num1 + $num2;
};

$submit = function () {
    // Time-based protection - silent failure
    if (time() - $this->submissionTime < 3) {
        $this->formSubmitted = true;
        $this->formSubmitted = true;
        // $this->resetForm();  // Remove this line
        return;
    }

    // Honeypot check - silent failure
    if (!empty($this->honeypot)) {
        $this->formSubmitted = true;
        // $this->resetForm();  // Remove this line
        return;
    }

    // ... CAPTCHA validation and other code ...

    // If we get here, it's a legitimate submission
//    $this->validate([
//        'name' => 'required|min:2',
//        'email' => 'required|email',
//        'subject' => 'required|min:5',
//        'message' => 'required|min:10',
//    ]);
    $this->validate();

    $this->formSubmitting = true;

    // Save to database with IP
    $feedback = \App\Models\Feedback::create([
        'name' => $this->name,
        'email' => $this->email,
        'subject' => $this->subject,
        'category' => 'homepage_contact',
        'message' => $this->message,
        'ip_address' => request()->ip(),
    ]);

    // Send email
    Mail::to(config('mail.to.address', config('mail.from.address')))->send(new FeedbackReceived($feedback->toArray()));

    $this->formSubmitted = true;
    // $this->resetForm();  // Remove this line - don't reset here!
    $this->formSubmitting = false;
};

?>

@volt('contact-component')
<section id="contacts" class="py-16 w-full">
    <div class="fluid-container">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 fade-in">{{ __('gothamfolio.navigation.contact') }}</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-6">{{ __('gothamfolio.contact_page.get_in_touch') }}</h3>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('gothamfolio.contact_info.email') }}</h4>
                            <a href="mailto:andreogotema@gmail.com"
                               class="text-gray-600 dark:text-gray-400 hover:text-primary-500 transition-colors">
                                andreogotema@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                            <i class="fas fa-phone text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('gothamfolio.contact_info.telephone') }}</h4>
                            <a href="tel:+79918739137"
                               class="text-gray-600 dark:text-gray-400 hover:text-primary-500 transition-colors">
                                +7 (991) 873-9137
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('gothamfolio.contact_info.whatsapp') }}</h4>
                            <a href="https://wa.me/77755569244" target="_blank"
                               class="text-gray-600 dark:text-gray-400 hover:text-primary-500 transition-colors">
                                {{ __('gothamfolio.contact_info.for_messages') }}
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mr-4">
                            <i class="fab fa-telegram text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">{{ __('gothamfolio.contact_info.telegram') }}</h4>
                            <a href="https://t.me/sirandrewgotham" target="_blank"
                               class="text-gray-600 dark:text-gray-400 hover:text-primary-500 transition-colors">
                                @SirAndrewGotham
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="font-semibold mb-4">{{ __('gothamfolio.footer.social_networks') }}</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/in/andrew-gotham/" target="_blank"
                           class="w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/sirandrewgotham" target="_blank"
                           class="w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://vk.com/sirandrewgotham" target="_blank"
                           class="w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                            <i class="fab fa-vk"></i>
                        </a>
                        <a href="https://t.me/sirandrewgotham" target="_blank"
                           class="w-10 h-10 rounded-lg bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-primary-500 hover:text-white transition-colors">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-6">{{ __('gothamfolio.feedback_form.send_message') }}</h3>

                <!-- Form content - hidden when submitted -->
                <div style="{{ $this->formSubmitted ? 'display: none;' : '' }}">
                    <form wire:submit="submit" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-sm font-medium mb-1">{{ __('gothamfolio.feedback_form.name') }} *</label>
                                <input
                                    type="text"
                                    id="name"
                                    wire:model="name"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('name') border-red-500 @enderror"
                                    placeholder="{{ __('gothamfolio.feedback_form.your_name') }}"
                                >
                                @error('name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium mb-1">{{ __('gothamfolio.feedback_form.email') }} *</label>
                                <input
                                    type="email"
                                    id="email"
                                    wire:model="email"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('email') border-red-500 @enderror"
                                    placeholder="your@email.com"
                                >
                                @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium mb-1">{{ __('gothamfolio.feedback_form.subject') }} *</label>
                            <input
                                type="text"
                                id="subject"
                                wire:model="subject"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('subject') border-red-500 @enderror"
                                placeholder="{{ __('gothamfolio.feedback_form.subject_placeholder') }}"
                            >
                            @error('subject')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium mb-1">{{ __('gothamfolio.feedback_form.message') }} *</label>
                            <textarea
                                id="message"
                                rows="5"
                                wire:model="message"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('message') border-red-500 @enderror"
                                placeholder="{{ __('gothamfolio.feedback_form.message_placeholder') }}"
                            ></textarea>
                            @error('message')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Honeypot field -->
                        <div style="display: none;">
                            <label for="website">{{ __('gothamfolio.feedback_form.website') }}</label>
                            <input
                                type="text"
                                id="website"
                                name="website"
                                wire:model="honeypot"
                                autocomplete="off"
                                tabindex="-1"
                            >
                        </div>

                        <!-- CAPTCHA field -->
                        <div>
                            <label for="captchaAnswer" class="block text-sm font-medium mb-1">{{ $captchaQuestion }} *</label>
                            <input
                                type="text"
                                id="captchaAnswer"
                                wire:model="captchaAnswer"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('captchaAnswer') border-red-500 @enderror"
                                placeholder="{{ __('gothamfolio.feedback_form.enter_answer') }}"
                            >
                            @error('captchaAnswer')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="privacy"
                                required
                                class="w-4 h-4 text-primary-500 rounded focus:ring-2 focus:ring-primary-500"
                            >
                            <label for="privacy" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('gothamfolio.feedback_form.privacy_agreement') }} <a href="/documents/privacy" class="text-primary-500 hover:underline">{{ __('gothamfolio.feedback_form.privacy_policy') }}</a>
                            </label>
                        </div>

                        <button
                            type="submit"
                            wire:loading.attr="disabled"
                            class="w-full px-6 py-4 bg-primary-500 hover:bg-primary-600 disabled:bg-primary-400 text-white rounded-lg font-medium transition-colors shadow-lg flex items-center justify-center"
                        >
                            <span wire:loading.class="hidden">{{ __('gothamfolio.feedback_form.send_message') }}</span>
                            <span wire:loading.class.remove="hidden" class="hidden flex items-center">
                                <i class="fas fa-spinner fa-spin mr-2"></i>
                                {{ __('gothamfolio.feedback_form.sending') }}...
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Success Message - shown when submitted -->
                <div style="{{ !$this->formSubmitted ? 'display: none;' : '' }}" class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 text-center fade-in">
                    <div class="w-16 h-16 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mx-auto mb-4">
                        <i class="fas fa-check text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">{{ __('gothamfolio.feedback_form.message_sent') }}</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        {{ __('gothamfolio.feedback_form.message_sent_thank_you') }}
                    </p>
                    <button
                        wire:click="resetForm"
                        class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors"
                    >
                        {{ __('gothamfolio.feedback_form.send_another_message') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endvolt
