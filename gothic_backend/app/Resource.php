<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'user_id', 'gold_coin', 'adamant_ore' ,'arcanit_ore' , 'exp_points' ,
        'exp_points_breakpoint','learning_points',

         
        
    ];
}
