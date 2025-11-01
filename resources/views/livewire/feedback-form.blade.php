<?php
use function Livewire\Volt\{state, rules, mount};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackReceived;

// Add props to accept parameters
mount(function ($hideCategory = false, $defaultCategory = '') {
    $this->hideCategory = $hideCategory;
    $this->defaultCategory = $defaultCategory;

    // Set default category if provided and hideCategory is true
    if ($this->hideCategory && $this->defaultCategory) {
        $this->category = $this->defaultCategory;
    }

    $this->submissionTime = time();
    $this->generateCaptcha();
});

state([
    'name' => '',
    'email' => '',
    'subject' => '',
    'category' => '',
    'message' => '',
    'formSubmitted' => false,
    'formSubmitting' => false,
    'hideCategory' => false,
    'defaultCategory' => '',
    'honeypot' => '',
    'captchaAnswer' => '',
    'captchaQuestion' => '',
    'captchaCorrectAnswer' => 0,
    'submissionTime' => 0,
]);

rules([
    'name' => 'required|min:2',
    'email' => 'required|email',
    'subject' => 'required|min:5',
    'category' => 'required',
    'message' => 'required|min:10',
    'honeypot' => 'max:0', // Honeypot must be empty
    'captchaAnswer' => function ($value) {
        return 'required|in:' . $this->captchaCorrectAnswer;
    },
]);

$generateCaptcha = function () {
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $this->captchaQuestion = "Сколько будет $num1 + $num2?";
    $this->captchaCorrectAnswer = $num1 + $num2;
};

$submit = function () {
    // Time-based protection - silent failure
    if (time() - $this->submissionTime < 3) {
        // Silently fail - show success but don't actually process
        $this->formSubmitted = true;
        $this->reset(['name', 'email', 'subject', 'category', 'message', 'captchaAnswer']);
        $this->generateCaptcha();
        return;
    }

    // Honeypot check - silent failure
    if (!empty($this->honeypot)) {
        $this->formSubmitted = true;
        $this->reset(['name', 'email', 'subject', 'category', 'message', 'captchaAnswer']);
        $this->generateCaptcha();
        return;
    }

    // CAPTCHA validation - show error only for this one (users might make mistakes)
    if ($this->captchaAnswer != $this->captchaCorrectAnswer) {
        $this->addError('captchaAnswer', 'Неверный ответ. Попробуйте еще раз.');
        return;
    }

    // Rate limiting - silent failure
    $ip = request()->ip();
    $recentSubmissions = \App\Models\Feedback::where('ip_address', $ip)
        ->where('created_at', '>', now()->subHour())
        ->count();

    if ($recentSubmissions >= 3) {
        $this->formSubmitted = true;
        $this->reset(['name', 'email', 'subject', 'category', 'message', 'captchaAnswer']);
        $this->generateCaptcha();
        return;
    }

    // If we get here, it's a legitimate submission
    $this->validate([
        'name' => 'required|min:2',
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'category' => 'required',
        'message' => 'required|min:10',
    ]);

    $this->formSubmitting = true;

    // Save to database with IP
    $feedback = \App\Models\Feedback::create([
        'name' => $this->name,
        'email' => $this->email,
        'subject' => $this->subject,
        'category' => $this->category,
        'message' => $this->message,
        'ip_address' => $ip,
    ]);

    // Send email
    Mail::to(config('mail.to.address', config('mail.from.address')))->send(new FeedbackReceived($feedback->toArray()));

    $this->formSubmitted = true;
    $this->reset(['name', 'email', 'subject', 'category', 'message', 'captchaAnswer']);
    $this->generateCaptcha();
    $this->formSubmitting = false;
};
?>

<div>
    <div x-show="!$wire.formSubmitted" class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-6">Отправить сообщение</h2>

        <form wire:submit="submit" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium mb-2">Имя *</label>
                    <input
                        type="text"
                        id="name"
                        wire:model="name"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('name') border-red-500 @enderror"
                        placeholder="Ваше имя"
                    >
                    @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium mb-2">Email *</label>
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
                <label for="subject" class="block text-sm font-medium mb-2">Тема *</label>
                <input
                    type="text"
                    id="subject"
                    wire:model="subject"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('subject') border-red-500 @enderror"
                    placeholder="Тема сообщения"
                >
                @error('subject')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            @if(!$hideCategory)
                <div>
                    <label for="category" class="block text-sm font-medium mb-2">Категория *</label>
                    <select
                        id="category"
                        wire:model="category"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('category') border-red-500 @enderror"
                    >
                        <option value="">Выберите категорию</option>
                        <option value="project">Обсуждение проекта</option>
                        <option value="collaboration">Сотрудничество</option>
                        <option value="question">Вопрос по разработке</option>
                        <option value="feedback">Вопрос о компетенциях</option>
                        <option value="feedback">Отзыв о работе</option>
                        <option value="other">Другое</option>
                    </select>
                    @error('category')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            @else
                <input type="hidden" wire:model="category" value="{{ $defaultCategory }}">
            @endif

            <div>
                <label for="message" class="block text-sm font-medium mb-2">Сообщение *</label>
                <textarea
                    id="message"
                    rows="6"
                    wire:model="message"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('message') border-red-500 @enderror"
                    placeholder="Опишите вашу задачу или вопрос..."
                ></textarea>
                @error('message')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Honeypot field -->
            <div style="display: none;">
                <label for="website">Website</label>
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
                <label for="captchaAnswer" class="block text-sm font-medium mb-2">{{ $captchaQuestion }} *</label>
                <input
                    type="text"
                    id="captchaAnswer"
                    wire:model="captchaAnswer"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors @error('captchaAnswer') border-red-500 @enderror"
                    placeholder="Введите ответ"
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
                    Я соглашаюсь с <a href="/privacy" class="text-primary-500 hover:underline">политикой конфиденциальности</a>
                </label>
            </div>

            <button
                type="submit"
                wire:loading.attr="disabled"
                class="w-full px-6 py-4 bg-primary-500 hover:bg-primary-600 disabled:bg-primary-400 text-white rounded-lg font-medium transition-colors shadow-lg flex items-center justify-center"
            >
                <span x-show="!$wire.formSubmitting">Отправить сообщение</span>
                <span x-show="$wire.formSubmitting" class="flex items-center">
                    <i class="fas fa-spinner fa-spin mr-2"></i>
                    Отправка...
                </span>
            </button>
        </form>
    </div>

    <!-- Success Message -->
    <div x-show="$wire.formSubmitted" class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 text-center fade-in">
        <div class="w-16 h-16 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mx-auto mb-4">
            <i class="fas fa-check text-2xl"></i>
        </div>
        <h2 class="text-2xl font-bold mb-4">Сообщение отправлено!</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-6">
            Спасибо за ваше сообщение. Я свяжусь с вами в ближайшее время.
        </p>
        <button
            wire:click="$set('formSubmitted', false)"
            class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors"
        >
            Отправить еще одно сообщение
        </button>
    </div>
</div>
