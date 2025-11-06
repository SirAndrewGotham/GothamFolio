<x-backend.partials.index :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-backend.partials.index>
