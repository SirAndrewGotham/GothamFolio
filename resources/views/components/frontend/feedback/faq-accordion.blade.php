<div class="bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900 rounded-xl p-4">
    <div class="flex items-center mb-3">
        <div class="w-6 h-6 rounded-full bg-primary-500 flex items-center justify-center mr-2">
            <i class="fas fa-question text-white text-xs"></i>
        </div>
        <h4 class="font-semibold text-sm text-gray-800 dark:text-gray-200">Частые вопросы</h4>
    </div>

    <div class="faq-accordion" x-data="{
        openIndex: null,
        toggleItem(index) {
            this.openIndex = this.openIndex === index ? null : index;
        }
    }">
        <div class="space-y-1.5">
            @php
                $compactFaqs = [
                    [
                        'icon' => 'fas fa-clock',
                        'question' => 'Сколько времени занимает ответ?',
                        'answer' => 'Обычно я отвечаю в течение 24 часов. В рабочие дни ответ приходит ещё быстрее — обычно в течение 2-6 часов.'
                    ],
                    [
                        'icon' => 'fas fa-handshake',
                        'question' => 'Можно ли обсудить проект до заключения договора?',
                        'answer' => 'Конечно! Я всегда готов провести бесплатную консультацию, обсудить ваши идеи и предложить оптимальное решение перед началом сотрудничества.'
                    ],
                    [
                        'icon' => 'fas fa-globe',
                        'question' => 'Работаете ли вы с международными клиентами?',
                        'answer' => 'Да, я работаю с клиентами по всему миру. Имею опыт удаленной работы с командами из разных стран и временных зон.'
                    ],
                    [
                        'icon' => 'fas fa-code',
                        'question' => 'Какие технологии вы используете в работе?',
                        'answer' => 'Основной стек: Laravel, Livewire, Alpine.js, Tailwind CSS, Vue.js, MySQL/PostgreSQL. Также работаю с различными API, системами платежей и облачными сервисами.'
                    ],
                    [
                        'icon' => 'fas fa-headset',
                        'question' => 'Предоставляете ли вы техническую поддержку?',
                        'answer' => 'Да, я предоставляю техническую поддержку и обслуживание проектов. Мы можем обсудить различные варианты поддержки в зависимости от ваших потребностей.'
                    ]
                ];
            @endphp

            @foreach($compactFaqs as $index => $faq)
                <div class="faq-item group bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-lg border border-primary-200/60 dark:border-gray-600 overflow-hidden transition-all duration-250 hover:border-primary-300 dark:hover:border-gray-500"
                     :class="openIndex === {{ $index }} ? 'ring-1 ring-primary-400 shadow-sm border-primary-300' : 'shadow-xs'">
                    <button
                        @click="toggleItem({{ $index }})"
                        class="w-full px-3 py-2.5 text-left flex items-start justify-between focus:outline-none focus:ring-1 focus:ring-primary-400 focus:ring-inset rounded-lg transition-colors duration-150 hover:bg-primary-50/40 dark:hover:bg-gray-700/20"
                    >
                        <div class="flex items-start space-x-2.5">
                            <div class="w-4 h-4 rounded-full bg-primary-100 dark:bg-primary-900/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="{{ $faq['icon'] }} text-primary-500 text-[10px]"></i>
                            </div>
                            <span class="font-medium text-gray-800 dark:text-gray-200 text-xs leading-tight text-left">
                            {{ $faq['question'] }}
                        </span>
                        </div>
                        <svg class="w-3.5 h-3.5 text-primary-500 transition-transform duration-250 flex-shrink-0 mt-0.5"
                             :class="openIndex === {{ $index }} ? 'rotate-180' : ''"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openIndex === {{ $index }}"
                         x-collapse
                         class="border-t border-primary-100/30 dark:border-gray-600 transition-all duration-250">
                        <div class="px-3 py-2.5 bg-gradient-to-r from-primary-50/20 to-transparent dark:from-gray-700/20 dark:to-transparent">
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-xs pl-7">
                                {{ $faq['answer'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
