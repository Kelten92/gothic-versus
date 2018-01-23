<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npc extends Model
{
    protected $fillable = [
        'name', 'avatar', 'lvl', 'strength' , 'dexterity' , 'mana' , 'health' , '1h_weapons' , '2h_weapons' , 'bow' , 'crossbow' , 'ring_of_magic' , 'weapon_id' , 
        'armor_id'
    ];
}
