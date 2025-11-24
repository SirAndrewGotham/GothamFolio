<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Feedback Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-medium">Feedback Messages</h3>
                        
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.feedback.index', ['status' => 'all']) }}" 
                               class="px-3 py-1 text-sm rounded-full {{ $status === 'all' ? 'bg-gray-800 text-white' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}">
                                All ({{ $counts['all'] }})
                            </a>
                            <a href="{{ route('admin.feedback.index', ['status' => 'new']) }}" 
                               class="px-3 py-1 text-sm rounded-full {{ $status === 'new' ? 'bg-blue-100 text-blue-800 border border-blue-300' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}">
                                New ({{ $counts['new'] }})
                            </a>
                            <a href="{{ route('admin.feedback.index', ['status' => 'read']) }}" 
                               class="px-3 py-1 text-sm rounded-full {{ $status === 'read' ? 'bg-green-100 text-green-800 border border-green-300' : 'bg-gray-200 text-gray-800 hover:bg-gray-300' }}">
                                Read ({{ $counts['read'] }})
                            </a>
                        </div>
                    </div>
                    @if($status !== 'all')
                        <div class="mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                {{ $status === 'new' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800' }}">
                                Showing {{ $status }} messages ({{ $feedback->count() }})
                            </span>
                            <a href="{{ route('admin.feedback.index') }}" class="ml-2 text-sm text-gray-600 hover:text-gray-800">
                                Show all
                            </a>
                        </div>
                    @endif
                    @if($feedback->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Name</th>
                                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Email</th>
                                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Subject</th>
                                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Category</th>
                                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Date</th>
                                        <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($feedback as $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->email }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->subject }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->category }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->created_at->format('d.m.Y H:i') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="{{ route('admin.feedback.show', $item) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                                @if(!$item->is_read)
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">New</span>
                                                @endif
                                                @if(!$item->is_read)
                                                    <form action="{{ route('admin.feedback.mark-read', $item) }}" method="POST" class="inline-block">
                                                        @csrf
                                                        <button type="submit" class="text-green-600 hover:text-green-900">Mark Read</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.feedback.mark-unread', $item) }}" method="POST" class="inline-block">
                                                        @csrf
                                                        <button type="submit" class="text-yellow-600 hover:text-yellow-900">Mark Unread</button>
                                                    </form>
                                                @endif
                                                <form action="{{ route('admin.feedback.destroy', $item) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="ml-2 text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-gray-500">No feedback messages yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>
