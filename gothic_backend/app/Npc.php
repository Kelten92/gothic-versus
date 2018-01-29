<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npc extends Model
{
    protected $fillable = [
        'name', 'avatar', 'lvl', 'strength' , 'dexterity' , 'mana' , 'health' , 'one_handed' , 'two_handed' , 'bow' , 'crossbow' , 'ring_of_magic' , 'weapon_id' , 
        'armor_id'
    ];

    public function weapon()
    {
        return $this->belongsTo('App\Weapon','weapon_id', 'id');
    }

    public function armor()
    {
        return $this->belongsTo('App\Armor','armor_id', 'id');
    }
}
