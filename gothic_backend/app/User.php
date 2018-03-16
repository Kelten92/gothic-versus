<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function expeditions()
    {
        return $this->belongsToMany('App\Expedition', 'expedition_user',
         'user_id', 'expedition_id')->withPivot('end_date');
    }

    public function skills()
    {
        return $this->hasOne('App\Skill', 'user_id', 'id');
    }

    public function resources()
    {
        return $this->hasOne('App\Resource', 'user_id', 'id');
    }
}
