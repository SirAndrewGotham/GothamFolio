@volt
<?php
use App\Models\Feedback;

$total = Feedback::count();
$new = Feedback::where('is_read', false)->count();
$read = Feedback::where('is_read', true)->count();
?>
@endvolt

<div class="bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">Feedback Overview</h3>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Total Feedback -->
        <div class="text-center p-4 bg-gray-50 rounded-lg">
            <div class="text-2xl font-bold text-gray-800">{{ $total }}</div>
            <div class="text-sm text-gray-600">Total Messages</div>
        </div>
        
        <!-- New Feedback -->
        <a href="{{ route('admin.feedback.index', ['status' => 'new']) }}" 
           class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
            <div class="text-2xl font-bold text-blue-800">{{ $new }}</div>
            <div class="text-sm text-blue-600">New Messages</div>
            @if($new > 0)
                <div class="mt-1 text-xs text-blue-500">Click to review</div>
            @endif
        </a>
        
        <!-- Read Feedback -->
        <a href="{{ route('admin.feedback.index', ['status' => 'read']) }}" 
           class="text-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
            <div class="text-2xl font-bold text-green-800">{{ $read }}</div>
            <div class="text-sm text-green-600">Read Messages</div>
        </a>
    </div>
    
    @if($new > 0)
        <div class="mt-4 pt-4 border-t border-gray-200">
            <a href="{{ route('admin.feedback.index', ['status' => 'new']) }}" 
               class="flex items-center justify-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-envelope mr-2"></i>
                Review New Messages
            </a>
        </div>
    @endif
</div>
