<div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold mb-4 dark:text-white">Real-time Stats</h3>
    <div class="grid grid-cols-2 gap-4">
        <div class="text-center">
            <h4 class="text-sm text-gray-600 dark:text-gray-400 mb-1">Total Visits</h4>
            <p class="text-2xl font-bold text-primary-600" wire:loading.class="opacity-50">{{ $totalVisits }}</p>
        </div>
        <div class="text-center">
            <h4 class="text-sm text-gray-600 dark:text-gray-400 mb-1">Today's Visits</h4>
            <p class="text-2xl font-bold text-primary-600 dark:text-primary-400">{{ $todayVisits }}</p>
        </div>
    </div>
</div>
