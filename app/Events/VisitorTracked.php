<?php

namespace App\Events;

use App\Models\Visitor;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VisitorTracked
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $visitor;

    public function __construct(Visitor $visitor)
    {
        $this->visitor = $visitor;
    }

    public function broadcastOn()
    {
        return new Channel('visitor-stats');
    }

    public function broadcastWith()
    {
        return [
            'total_visits' => Visitor::count(),
            'today_visits' => Visitor::whereDate('created_at', today())->count(),
        ];
    }
}
