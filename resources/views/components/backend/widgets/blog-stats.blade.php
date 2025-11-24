@props(['total', 'published', 'draft', 'latest'])

<div class="bg-white rounded-lg shadow p-6 h-full">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold text-gray-800">Blog Posts</h3>
        <i class="fas fa-blog text-green-500"></i>
    </div>

    <div class="grid grid-cols-3 gap-3">
        <!-- Total Posts -->
        @if($total > 0)
            <a href="{{ route('admin.posts.index') }}"
               class="text-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                @else
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        @endif
                        <div class="text-xl font-bold text-gray-800">{{ $total }}</div>
                        <div class="text-xs text-gray-600 mt-1">Total</div>
                    @if($total > 0)
            </a>
        @else
    </div>
    @endif

    <!-- Published Posts -->
    @if($published > 0)
        <a href="{{ route('admin.posts.index', ['filter' => 'published']) }}"
           class="text-center p-3 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
            @else
                <div class="text-center p-3 bg-green-50 rounded-lg">
                    @endif
                    <div class="text-xl font-bold text-green-800">{{ $published }}</div>
                    <div class="text-xs text-green-600 mt-1">Published</div>
                @if($published > 0)
        </a>
    @else
</div>
@endif

<!-- Draft Posts -->
@if($draft > 0)
    <a href="{{ route('admin.posts.index', ['filter' => 'draft']) }}"
       class="text-center p-3 bg-yellow-50 rounded-lg hover:bg-yellow-100 transition-colors">
        @else
            <div class="text-center p-3 bg-yellow-50 rounded-lg">
                @endif
                <div class="text-xl font-bold text-yellow-800">{{ $draft }}</div>
                <div class="text-xs text-yellow-600 mt-1">Draft</div>
            @if($draft > 0)
    </a>
    @else
        </div>
    @endif
    </div>

    @if($latest)
        <div class="mt-4 pt-3 border-t border-gray-200">
            <p class="text-xs text-gray-600 mb-2">Latest post:</p>
            <a href="{{ route('admin.posts.edit', $latest) }}"
               class="block text-sm text-gray-800 hover:text-blue-600 truncate">
                {{ Str::limit($latest->title, 35) }}
            </a>
            <p class="text-xs text-gray-500 mt-1">
                {{ $latest->created_at->diffForHumans() }}
            </p>
        </div>
    @endif

    <div class="mt-3">
        <a href="{{ route('admin.posts.create') }}"
           class="flex items-center justify-center px-3 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors text-sm">
            <i class="fas fa-plus mr-2"></i>
            New Post
        </a>
    </div>
    </div>
