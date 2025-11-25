<x-backend.layouts.app>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Visitor Statistics</h1>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-2">Total Visits</h3>
                <p class="text-3xl font-bold text-primary-600">{{ number_format($stats['total_visits']) }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-2">Today's Visits</h3>
                <p class="text-3xl font-bold text-primary-600">{{ number_format($stats['today_visits']) }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-2">Unique Visitors</h3>
                <p class="text-3xl font-bold text-primary-600">{{ number_format($stats['unique_visitors']) }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-2">Bot Visits</h3>
                <p class="text-3xl font-bold text-primary-600">{{ number_format($stats['bot_visits']) }}</p>
            </div>
        </div>

        <!-- Add this near the top, after the stats cards -->
        <div class="mb-8">
            @livewire('admin.visitor-stats')
        </div>

        <!-- Date Range Filter -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h3 class="text-lg font-semibold mb-4">Visits Over Time</h3>
            <div class="flex gap-4 mb-4">
                <select id="daysFilter" class="px-4 py-2 border rounded-lg">
                    <option value="7">Last 7 days</option>
                    <option value="30" selected>Last 30 days</option>
                    <option value="90">Last 90 days</option>
                    <option value="365">Last year</option>
                </select>
            </div>
            <div id="visitsChart" class="h-64"></div>
        </div>

        <!-- Top Pages -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Top Pages</h3>
                <div class="space-y-3">
                    @foreach($stats['top_pages'] as $page)
                    <div class="flex justify-between items-center">
                        <span class="text-sm truncate max-w-xs">{{ $page->path }}</span>
                        <span class="text-sm font-semibold bg-primary-100 px-2 py-1 rounded">
                            {{ number_format($page->visits) }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Browser Statistics -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Browser Usage</h3>
                <div class="space-y-3">
                    @foreach($stats['browser_stats'] as $browser)
                    <div class="flex justify-between items-center">
                        <span class="text-sm">{{ $browser->browser }}</span>
                        <span class="text-sm font-semibold bg-primary-100 px-2 py-1 rounded">
                            {{ number_format($browser->visits) }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Device Statistics -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold mb-4">Device Types</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach($stats['device_stats'] as $device)
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <h4 class="font-semibold mb-2">{{ ucfirst($device->device_type) }}</h4>
                    <p class="text-2xl font-bold text-primary-600">{{ number_format($device->visits) }}</p>
                    <p class="text-sm text-gray-600">
                        {{ round(($device->visits / $stats['total_visits']) * 100, 1) }}%
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let visitsChart;

        function loadChartData(days = 30) {
            fetch(`/admin/visitors/chart-data?days=${days}`)
                .then(response => response.json())
                .then(data => {
                    updateChart(data);
                });
        }

        function updateChart(data) {
            const ctx = document.getElementById('visitsChart').getContext('2d');

            if (visitsChart) {
                visitsChart.destroy();
            }

            visitsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data.map(item => item.date),
                    datasets: [{
                        label: 'Visits',
                        data: data.map(item => item.visits),
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });
        }

        // Initial load
        loadChartData(30);

        // Filter change
        document.getElementById('daysFilter').addEventListener('change', function() {
            loadChartData(this.value);
        });
    </script>
    @endpush
</x-backend.layouts.app>
