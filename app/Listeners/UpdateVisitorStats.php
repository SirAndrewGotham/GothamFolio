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
    public function handle(VisitorTracked $event)
    {
        // This listener doesn't need to do much since the event
        // already broadcasts the updated stats
        // You can add additional processing here if needed
    }
}
