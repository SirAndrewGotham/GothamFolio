<x-frontend.layouts.app>
    @volt('project-type-page')
    @php
        use App\Models\ProjectType;

        // Get the slug from the current request route
        $slug = request()->route('slug');

        $projectType = ProjectType::where('slug', $slug)->firstOrFail();
        $projects = $projectType->projects()
            ->with('categories')
            ->where('is_active', true)
            ->orderBy('featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
    @endphp

    <div class="w-full pt-20">
        <!-- Hero Section -->
        <section class="py-16 bg-gradient-to-br from-primary-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    {{ $projectType->getTranslation('name') }} Projects
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto">
                    {{ $projectType->getTranslation('description') }}
                </p>
            </div>
        </section>

        <!-- Projects List -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                @if($projects->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($projects as $project)
                            <!-- Reuse the project card from index.blade.php -->
                            @include('pages.portfolio.partials.project-card', ['project' => $project])
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <div class="w-24 h-24 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-400 mx-auto mb-4">
                            <i class="fas fa-folder-open text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">No projects found</h3>
                        <p class="text-gray-600 dark:text-gray-400">There are no active {{ $projectType->getTranslation('name') }} projects.</p>
                    </div>
                @endif
            </div>
        </section>
    </div>
    @endvolt
</x-frontend.layouts.app>
