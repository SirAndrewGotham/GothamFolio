<?php
use function Livewire\Volt\{state, rules, mount};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackReceived;
use Illuminate\Support\Facades\Log; // Add this line for explicit logging

state([
    'name' => '',
    'email' => '',
    'subject' => '',
    'category' => '',
    'message' => '',
    'formSubmitted' => false,
    'formSubmitting' => false,
]);

rules([
    'name' => 'required|min:2',
    'email' => 'required|email',
    'subject' => 'required|min:5',
    'category' => 'required',
    'message' => 'required|min:10',
]);

$submit = function () {
    $this->validate();

    $this->formSubmitting = true;

    Log::info('FeedbackForm: Starting submission process.');
    Log::info('FeedbackForm: MAIL_MAILER config: ' . config('mail.default'));
    Log::info('FeedbackForm: MAIL_FROM_ADDRESS config: ' . config('mail.from.address'));
    Log::info('FeedbackForm: MAIL_TO_ADDRESS from env: ' . env('MAIL_TO_ADDRESS'));
    Log::info('FeedbackForm: LOG_CHANNEL config: ' . config('logging.default'));

    try {
        // Save to database
        Log::info('FeedbackForm: Attempting to save feedback to database.');
        $feedback = \App\Models\Feedback::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'category' => $this->category,
            'message' => $this->message,
        ]);
        Log::info('FeedbackForm: Feedback saved with ID: ' . $feedback->id);

        // Send email
        Log::info('FeedbackForm: Attempting to send email.');
        Mail::to(env('MAIL_TO_ADDRESS', config('mail.from.address')))->send(new FeedbackReceived($feedback->toArray()));
        Log::info('FeedbackForm: Email sent.');


        $this->formSubmitted = true;

        // Reset form fields
        $this->reset(['name', 'email', 'subject', 'category', 'message']);

    } catch (\Exception $e) {
        Log::error('FeedbackForm Error: ' . $e->getMessage(), ['exception' => $e]);
    } finally {
        $this->formSubmitting = false;
        Log::info('FeedbackForm: Submission process finished.');
    }
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
                    <option value="feedback">Отзыв о работе</option>
                    <option value="other">Другое</option>
                </select>
                @error('category')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

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
                <span wire:loading.remove>Отправить сообщение</span>
                <span wire:loading class="flex items-center">
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