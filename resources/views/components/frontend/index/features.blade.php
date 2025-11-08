<?php

use App\Models\Feature;
use function Livewire\Volt\{computed};

$features = computed(fn() => Feature::active()
    ->withCurrentTranslations()
    ->ordered()
    ->get());

?>

@volt('features-component')
<section class="py-16 bg-gray-50 dark:bg-gray-800/30 w-full">
    <div class="fluid-container">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
            @foreach($this->features as $feature)
                <div class="text-center p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg fade-in">
                    <div class="w-16 h-16 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-500 mx-auto mb-4">
                        <i class="fas {{ $feature->icon }} text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">{{ $feature->getTranslation('title') ?? $feature->title }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        {!! nl2br(e($feature->getTranslation('description') ?? $feature->description)) !!}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endvolt
