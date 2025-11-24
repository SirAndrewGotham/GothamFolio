<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status', 'all');
        
        $feedback = Feedback::query()
            ->when($status === 'new', fn($query) => $query->where('is_read', false))
            ->when($status === 'read', fn($query) => $query->where('is_read', true))
            ->latest()
            ->get();
        
        $counts = [
            'all' => Feedback::count(),
            'new' => Feedback::where('is_read', false)->count(),
            'read' => Feedback::where('is_read', true)->count(),
        ];
        
        return view('admin.feedback.index', compact('feedback', 'status', 'counts'));
    }

    public function show(Feedback $feedback)
    {
        // Mark as read when viewing
        if (!$feedback->is_read) {
            $feedback->update(['is_read' => true]);
        }
        
        return view('admin.feedback.show', compact('feedback'));
    }

    public function markAsRead(Feedback $feedback)
    {
        $feedback->update(['is_read' => true]);
        
        return redirect()->route('admin.feedback.index')
            ->with('success', 'Feedback marked as read.');
    }

    public function markAsUnread(Feedback $feedback)
    {
        $feedback->update(['is_read' => false]);
        
        return redirect()->route('admin.feedback.index')
            ->with('success', 'Feedback marked as unread.');
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('admin.feedback.index')
            ->with('success', 'Feedback deleted successfully.');
    }

    public function bulkMarkAsRead(Request $request)
    {
        $feedbackIds = explode(',', $request->feedback_ids);
        
        Feedback::whereIn('id', $feedbackIds)->update(['is_read' => true]);
        
        return redirect()->route('admin.feedback.index')
            ->with('success', 'All messages marked as read.');
    }
}
