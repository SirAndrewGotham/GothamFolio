<x-backend.layouts.app title="{{ __('Create Feature') }}">
    <flux:header class="border-b border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800">
        <h1 class="text-xl font-semibold">{{ __('Create Feature') }}</h1>
        <flux:spacer />
       <flux:button :href="route('admin.features.index')" variant="secondary">
            {{ __('Back to Features') }}
        </flux:button>
    </flux:header>

    <main class="p-6">
        <flux:card>
            <form method="POST" action="{{ route('admin.features.store') }}">
                @csrf

                <flux:input.group>
                    <flux:input.label>{{ __('Title') }}</flux:input.label>
                    <flux:input type="text" name="title[en]" :value="old('title.en')" required />
                    @error('title.en')
                        <flux:input.error>{{ $message }}</flux:input.error>
                    @enderror
                </flux:input.group>

                <flux:input.group>
                    <flux:input.label>{{ __('Description') }}</flux:input.label>
                    <flux:textarea name="description[en]" rows="3">{{ old('description.en') }}</flux:textarea>
                    @error('description.en')
                        <flux:input.error>{{ $message }}</flux:input.error>
                    @enderror
                </flux:input.group>

                <flux:input.group>
                    <flux:input.label>{{ __('Icon') }}</flux:input.label>
                    <flux:input type="text" name="icon" :value="old('icon')" placeholder="e.g., sparkles, academic-cap, etc." />
                    @error('icon')
                        <flux:input.error>{{ $message }}</flux:input.error>
                    @enderror
                </flux:input.group>

                <flux:input.group>
                    <flux:input.label>{{ __('Order') }}</flux:input.label>
                    <flux:input type="number" name="order" :value="old('order', 0)" />
                    @error('order')
                        <flux:input.error>{{ $message }}</flux:input.error>
                    @enderror
                </flux:input.group>

                <flux:input.group>
                    <flux:checkbox name="is_active" :checked="old('is_active', true)">
                        {{ __('Active') }}
                    </flux:checkbox>
                </flux:input.group>

                <flux:button.group>
                    <flux:button type="submit" variant="primary">{{ __('Create Feature') }}</flux:button>
                    <flux:button :href="route('admin.features.index')" variant="secondary">{{ __('Cancel') }}</flux:button>
                </flux:button.group>
            </form>
        </flux:card>
    </main>
</x-backend.layouts.app>
