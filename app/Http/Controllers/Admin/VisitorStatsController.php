<?php

namespace App\Http\Controllers\Admin;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorStatsController
{
    public function __construct()
    {
        // Add authorization middleware if needed
        // $this->middleware('can:view_visitor_stats');
    }

    public function index()
    {
        $stats = [
            'total_visits' => Visitor::count(), // This needs the import
            'today_visits' => Visitor::whereDate('created_at', today())->count(),
            'unique_visitors' => Visitor::distinct('ip_address')->count('ip_address'),
            'bot_visits' => Visitor::where('is_bot', true)->count(), // Add this
            'top_pages' => Visitor::select('path', DB::raw('COUNT(*) as visits'))
                ->groupBy('path')
                ->orderBy('visits', 'desc')
                ->limit(10)
                ->get(),
            'browser_stats' => Visitor::select('browser', DB::raw('COUNT(*) as visits'))
                ->groupBy('browser')
                ->orderBy('visits', 'desc')
                ->get(),
            'device_stats' => Visitor::select('device_type', DB::raw('COUNT(*) as visits'))
                ->groupBy('device_type')
                ->orderBy('visits', 'desc')
                ->get(),
        ];

        return view('admin.visitors.index', compact('stats'));
    }

    public function chartData(Request $request)
    {
        $days = $request->get('days', 30);

        $visits = Visitor::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as visits')
        )
            ->where('created_at', '>=', now()->subDays($days))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return response()->json($visits);
    }
}
