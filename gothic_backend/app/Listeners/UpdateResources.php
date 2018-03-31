<?php

namespace App\Listeners;

use App\Resource;
use App\Events\PlayerPromoted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateResources
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PlayerPromoted  $event
     * @return void
     */
    public function handle(PlayerPromoted $event)
    {
        $newBreakpoint = function () use ($event) {
            $new = $event->user->resources->exp_points_breakpoint * 0.1;
            $newBP = $event->user->resources->exp_points_breakpoint + $new;
            return $newBP;
        };

        $event->user->resources->update(
            [
                'learning_points' => $event->user->resources->learning_points +10,
                'exp_points_breakpoint' => $newBreakpoint(),
            ]
        );

        $event->user->skills->update(
            [
                'lvl' => $event->user->skills->lvl +1,
                'health' => $event->user->skills->health +50,
            ]
        );
    }
}
