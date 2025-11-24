<x-backend.layouts.app>
    <!-- Add this personal header -->
    <div class="mb-8 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
            <i class="fas fa-rocket text-blue-600 text-2xl"></i>
        </div>
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Hello there! 👋</h1>
        <p class="text-lg text-gray-600">Ready to create something amazing today?</p>
    </div>

    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-2"> <!-- Changed from 3 to 2 -->
            <!-- Feedback Stats Widget -->
            <x-backend.widgets.feedback-stats />
            
            <!-- Blog Stats Widget -->
            <x-backend.widgets.blog-stats />
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
        </div>
    </div>
</x-backend.layouts.app>
