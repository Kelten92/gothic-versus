<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    public static function getAllOneHanded()
	{
	    return Weapon::where('type','1h')->get();
	}

	public static function getAllTwoHanded()
	{
	    return Weapon::where('type','2h')->get();
	}

	public static function getAllBows()
	{
	    return Weapon::where('type','bow')->get();
	}

	public static function getAllCrossbows()
	{
	    return Weapon::where('type','cbow')->get();
	}

	public static function getAllSpells()
	{
	    return Weapon::where('type','spell')->get();
	}

	public function npcs()
    {
        return $this->hasMany('App\Npc','weapon_id', 'id');
    }
}
