<?php

namespace App\Listeners;

use App\Resource;
use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InsertResources
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        Resource::create([
            'user_id' => $event->user->id,
            'gold_coin' => 500,
            'adamant_ore' => 10,
            'arcanit_ore' => 20,
            'exp_points' => 1000,
            'exp_points_breakpoint' => 1100,
            'learning_points' => 10,
        ]);
    }
}
