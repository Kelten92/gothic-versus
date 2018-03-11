<?php

namespace App\Listeners;

use App\Skill;
use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InsertSkills
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
        Skill::create([
            'user_id' => $event->user->id,
            'lvl' => 1,
            'health' => 100,
            'strength' => 10,
            'dexterity' => 10,
            'intelligence' => 10,
            'stamina' => 10,
            'alertness' => 10,
            'knowledge' => 10,
            'charisma' => 10,
            'stealth' => 10,
            'inquisitiveness' => 10,
            
        ]);
    }
}
