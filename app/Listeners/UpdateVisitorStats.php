<?php

namespace App\Listeners;

use App\Events\VisitorTracked;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateVisitorStats implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(VisitorTracked $event): void
    {
        // Event already broadcasts updated stats via VisitorTracked::broadcastWith()
    }
}
