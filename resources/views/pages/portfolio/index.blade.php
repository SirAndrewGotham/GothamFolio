<x-frontend.layouts.app>
    @volt('portfolio-page')
    @php
        use App\Models\Project;
        $projects = Project::with(['projectType', 'categories'])
            ->where('is_active', true)
            ->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
    @endphp

    <div x-data="portfolioApp()" x-init="init()" class="w-full pt-20">
        {{--        <!-- Debug Output -->--}}
        {{--        <div class="container mx-auto px-4 py-4 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200">--}}
        {{--            <p>Total Projects: {{ Project::count() }}</p>--}}
        {{--            <p>Active Projects: {{ Project::where('is_active', true)->count() }}</p>--}}
        {{--            <p>Projects Variable: {{ $projects->count() }}</p>--}}
        {{--        </div>--}}

        <!-- Hero Section -->
        <section class="py-16 bg-gradient-to-br from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ __('gothamfolio.portfolio.hero.title') }}</h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto">
                    {{ __('gothamfolio.portfolio.hero.description') }}
                </p>
            </div>
        </section>

        <!-- Portfolio Content -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                @if($projects->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($projects as $project)
                            @include('pages.portfolio.partials.project-card', ['project' => $project])
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <div
                            class="w-24 h-24 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-400 mx-auto mb-4">
                            <i class="fas fa-folder-open text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">No projects found</h3>
                        <p class="text-gray-600 dark:text-gray-400">There are no active projects in the database.</p>
                    </div>
                @endif
            </div>
        </section>
    </div>

    <script>
        function portfolioApp() {
            return {
                darkMode: localStorage.getItem('darkMode') === 'true',
                init() {
                    document.documentElement.classList.toggle('dark', this.darkMode);
                },
                toggleDarkMode() {
                    this.darkMode = !this.darkMode;
                    localStorage.setItem('darkMode', this.darkMode);
                    document.documentElement.classList.toggle('dark', this.darkMode);
                }
            }
        }
    </script>
    @endvolt
</x-frontend.layouts.app>
