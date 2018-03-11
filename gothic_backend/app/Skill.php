<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'user_id', 'lvl', 'health' ,'strength' , 'dexterity' ,
         'intelligence' , 'stamina' , 'alertness' , 'knowledge' ,
          'charisma' , 'stealth' , 'inquisitiveness' , 
        
    ];
}
