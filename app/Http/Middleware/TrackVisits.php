<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;

class TrackVisits
{
    public function handle(Request $request, Closure $next)
    {
        register_shutdown_function(function () use ($request) {
            $visitor = Visitor::trackVisit();

            if ($visitor) {
                // If we need to keep some logging on production
//                \Log::info('Visit tracked: ' . $visitor->path . ' from ' . $visitor->ip_address);

                // i do not track in real-time now
//                event(new \App\Events\VisitorTracked($visitor));
            }
        });

        return $next($request);
    }
}
