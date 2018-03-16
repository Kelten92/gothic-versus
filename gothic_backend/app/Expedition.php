<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedition extends Model
{
    protected $fillable = [
        'name', 'descryption' , 'difficult_lvl', 'type', 'reward_mod', 'experience_mod '
    ];

    public function users() {
        return $this->belongsToMany('App\User', 'expedition_user', 'user_id', 'expedition_id');
    }
}
