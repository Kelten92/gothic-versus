<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedition extends Model
{
    protected $fillable = [
        'user_id', 'length' , 'end_date'
    ];
}
