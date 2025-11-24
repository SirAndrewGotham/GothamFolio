@php
use App\Models\Feedback;

$total = Feedback::count();
$new = Feedback::where('is_read', false)->count();
$read = Feedback::where('is_read', true)->count();
@endphp

<div class="bg-white rounded-lg shadow p-6 h-full">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold text-gray-800">Feedback</h3>
        <i class="fas fa-comments text-blue-500"></i>
    </div>
    
    <div class="grid grid-cols-3 gap-3">
        <!-- Total Feedback -->
        <div class="text-center p-3 bg-gray-50 rounded-lg">
            <div class="text-xl font-bold text-gray-800">{{ $total }}</div>
            <div class="text-xs text-gray-600 mt-1">Total</div>
        </div>
        
        <!-- New Feedback -->
        <a href="{{ route('admin.feedback.index', ['status' => 'new']) }}" 
           class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
            <div class="text-xl font-bold text-blue-800">{{ $new }}</div>
            <div class="text-xs text-blue-600 mt-1">New</div>
            @if($new > 0)
                <div class="mt-1 text-xs text-blue-500">→</div>
            @endif
        </a>
        
        <!-- Read Feedback -->
        <a href="{{ route('admin.feedback.index', ['status' => 'read']) }}" 
           class="text-center p-3 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
            <div class="text-xl font-bold text-green-800">{{ $read }}</div>
            <div class="text-xs text-green-600 mt-1">Read</div>
        </a>
    </div>
    
    @if($new > 0)
        <div class="mt-4 pt-3 border-t border-gray-200">
            <a href="{{ route('admin.feedback.index', ['status' => 'new']) }}" 
               class="flex items-center justify-center px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                <i class="fas fa-envelope mr-2"></i>
                Review New
            </a>
        </div>
    @endif
</div>

