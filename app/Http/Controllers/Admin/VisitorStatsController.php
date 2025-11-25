<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorStatsController extends Controller
{
    public function __construct()
    {
        // Add authorization middleware if needed
        // $this->middleware('can:view_visitor_stats');
    }

    public function index()
    {
        $stats = [
            'total_visits' => Visitor::count(),
            'today_visits' => Visitor::whereDate('created_at', today())->count(),
            'unique_visitors' => Visitor::distinct('ip_address')->count('ip_address'),
            'bot_visits' => Visitor::where('is_bot', true)->count(),
            'top_pages' => Visitor::query()
                ->selectRaw('path, COUNT(*) as visits')
                ->groupBy('path')
                ->orderBy('visits', 'desc')
                ->limit(10)
                ->get(),
            'browser_stats' => Visitor::query()
                ->selectRaw('browser, COUNT(*) as visits')
                ->groupBy('browser')
                ->orderBy('visits', 'desc')
                ->get(),
            'device_stats' => Visitor::query()
                ->selectRaw('device_type, COUNT(*) as visits')
                ->groupBy('device_type')
                ->orderBy('visits', 'desc')
                ->get(),
        ];

        return view('admin.visitors.index', compact('stats'));
    }

    public function chartData(Request $request): \Illuminate\Http\JsonResponse
    {
        $days = min(max((int) $request->get('days', 30), 1), 365);

        $visits = Visitor::query()
            ->selectRaw('DATE(created_at) as date, COUNT(*) as visits')
            ->where('created_at', '>=', now()->subDays($days))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return response()->json($visits);
    }
}
