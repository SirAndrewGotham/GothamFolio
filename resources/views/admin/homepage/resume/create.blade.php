<x-backend.layouts.app title="{{ __('Create Resume Item') }}">
    <div class="border-b border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 px-6 py-4 flex items-center justify-between">
        <h1 class="text-xl font-semibold">{{ __('Create Resume Item') }}</h1>
        <a href="{{ route('admin.resume.index') }}" class="px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150 dark:bg-gray-600 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-offset-gray-800">
            {{ __('Back to Resume') }}
        </a>
    </div>

    <main class="p-6">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <form method="POST" action="{{ route('admin.resume.store') }}">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Type') }}</label>
                        <select name="type" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                            <option value="experience" {{ old('type') == 'experience' ? 'selected' : '' }}>{{ __('Experience') }}</option>
                            <option value="education" {{ old('type') == 'education' ? 'selected' : '' }}>{{ __('Education') }}</option>
                            <option value="skill" {{ old('type') == 'skill' ? 'selected' : '' }}>{{ __('Skill') }}</option>
                        </select>
                        @error('type')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    @php
                        $languages = \App\Models\Language::active()->ordered()->get();
                    @endphp

                    <!-- Translations Section -->
                    <div class="mb-6 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200 mb-4">{{ __('Translations') }}</h3>
                        
                        @foreach($languages as $language)
                        <div class="mb-6 p-4 border border-gray-200 dark:border-gray-600 rounded-md">
                            <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-3 flex items-center">
                                <span class="mr-2">{{ $language->name_english }}</span>
                                @if($language->is_fallback)
                                <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full dark:bg-blue-900 dark:text-blue-200">{{ __('Fallback') }}</span>
                                @endif
                            </h4>
                            
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Title') }}</label>
                                    <input type="text" name="title[{{ $language->code }}]" value="{{ old('title.' . $language->code) }}" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" {{ $language->is_fallback ? 'required' : '' }} />
                                    @error('title.' . $language->code)
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Subtitle') }}</label>
                                    <input type="text" name="subtitle[{{ $language->code }}]" value="{{ old('subtitle.' . $language->code) }}" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" />
                                    @error('subtitle.' . $language->code)
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Description') }}</label>
                                    <textarea name="description[{{ $language->code }}]" rows="3" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">{{ old('description.' . $language->code) }}</textarea>
                                    @error('description.' . $language->code)
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- End Translations Section -->

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Icon') }}</label>
                        <input type="text" name="icon" value="{{ old('icon') }}" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" />
                        @error('icon')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Duration') }}</label>
                        <input type="text" name="duration" value="{{ old('duration') }}" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" />
                        @error('duration')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Percentage') }}</label>
                        <input type="number" name="percentage" value="{{ old('percentage') }}" min="0" max="100" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" />
                        @error('percentage')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Link') }}</label>
                        <input type="url" name="link" value="{{ old('link') }}" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" />
                        @error('link')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Order') }}</label>
                        <input type="number" name="order" value="{{ old('order', 0) }}" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" />
                        @error('order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600" />
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Active') }}</span>
                        </label>
                    </div>

                    <div class="flex space-x-2">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 dark:focus:ring-offset-gray-800">
                            {{ __('Create Resume Item') }}
                        </button>
                        <a href="{{ route('admin.resume.index') }}" class="px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150 dark:bg-gray-600 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-offset-gray-800">
                            {{ __('Cancel') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-backend.layouts.app>
