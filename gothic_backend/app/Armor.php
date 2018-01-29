<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    public function npcs()
    {
        return $this->hasMany('App\Npc','armor_id', 'id');
    }
}
