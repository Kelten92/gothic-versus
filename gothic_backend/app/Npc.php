<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npc extends Model
{
    protected $fillable = [
        'name', 'avatar', 'lvl', 'strength' , 'dexterity' , 'mana' , 'health' , 'one_handed' , 'two_handed' , 'bow' , 'crossbow' , 'ring_of_magic' , 'weapon_id' , 
        'armor_id'
    ];
}
