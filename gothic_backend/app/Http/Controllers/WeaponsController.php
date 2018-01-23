<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Weapon;

class WeaponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Weapon::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function OneHanded()
    {
        return Weapon::getAllOneHanded();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TwoHanded()
    {
        return Weapon::getAllTwoHanded();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Bows()
    {
        return Weapon::getAllBows();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Crossbows()
    {
        return Weapon::getAllCrossbows();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Spells()
    {
        return Weapon::getAllSpells();
    }

    
}
