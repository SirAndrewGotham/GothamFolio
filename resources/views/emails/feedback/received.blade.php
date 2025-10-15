<x-mail::message>
    # Новое сообщение из формы обратной связи сайта

    **От:** {{ $data['name'] }} ({{ $data['email'] }})
    **Тема:** {{ $data['subject'] }}
    **Категория:** {{ $data['category'] }}

    **Сообщение:**
    {{ $data['message'] }}

    <x-mail::button :url="url('/admin/feedback')">
        Просмотреть в админке
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
