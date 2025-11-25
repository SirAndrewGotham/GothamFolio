@php
    use Illuminate\Support\Facades\Storage;
@endphp

<x-backend.layouts.app :title="__('admin.gallery.galleries')">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">{{ __('admin.gallery.galleries') }}</h1>
        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">
            {{ __('admin.gallery.create_new') }}
        </a>
    </div>

    @if($galleries->isEmpty())
        <div class="bg-white rounded-lg shadow p-6 text-center">
            <p class="text-gray-500 mb-4">{{ __('admin.gallery.no_galleries') }}</p>
            <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">
                {{ __('admin.gallery.create_first') }}
            </a>
        </div>
    @else
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('admin.gallery.title') }}
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('admin.gallery.images_count') }}
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('admin.gallery.year') }}
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('admin.gallery.status') }}
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('admin.gallery.actions') }}
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($galleries as $gallery)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $gallery->title }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $gallery->images_count }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $gallery->year }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex flex-col space-y-1">
                                <span class="px-2 py-1 text-xs rounded-full {{ $gallery->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $gallery->is_active ? __('admin.gallery.active') : __('admin.gallery.inactive') }}
                                </span>
                                <span class="px-2 py-1 text-xs rounded-full {{ $gallery->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $gallery->is_published ? __('admin.gallery.published') : __('admin.gallery.draft') }}
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.galleries.show', $gallery) }}" class="text-blue-600 hover:text-blue-900 mr-3">{{ __('admin.gallery.view') }}</a>
                            <a href="{{ route('admin.galleries.edit', $gallery) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">{{ __('admin.gallery.edit') }}</a>
                            <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('{{ __('admin.gallery.confirm_delete') }}')">{{ __('admin.gallery.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $galleries->links() }}
        </div>
    @endif
</x-backend.layouts.app>
