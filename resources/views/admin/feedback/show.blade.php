<x-backend.layouts.app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Feedback Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <h3 class="text-lg font-medium">Sender Information</h3>
                            <p><strong>Name:</strong> {{ $feedback->name }}</p>
                            <p><strong>Email:</strong> {{ $feedback->email }}</p>
                            <p><strong>IP Address:</strong> {{ $feedback->ip_address }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium">Message Details</h3>
                            <p><strong>Subject:</strong> {{ $feedback->subject }}</p>
                            <p><strong>Category:</strong> {{ $feedback->category }}</p>
                            <p><strong>Received:</strong> {{ $feedback->created_at->format('d.m.Y H:i') }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-lg font-medium">Message</h3>
                        <div class="p-4 mt-2 bg-gray-100 rounded-lg">
                            {{ $feedback->message }}
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('admin.feedback.index') }}" class="px-4 py-2 text-white bg-gray-600 rounded hover:bg-gray-700">Back to List</a>
                        <form action="{{ route('admin.feedback.destroy', $feedback) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 ml-2 text-white bg-red-600 rounded hover:bg-red-700" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.app>
