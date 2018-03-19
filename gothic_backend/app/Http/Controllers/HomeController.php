<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Npc;
use App\Services\FightingService;
use Auth;
use App\User;

class HomeController extends Controller
{   
    public $fightService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FightingService $fight)
    {
        $this->fightService = $fight;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $skills = Auth::user()->skills;
        $resources = Auth::user()->resources;
        return view('home.index', compact('skills','resources'));
    }


    public function fight($id){
        
        $playerA = Npc::find(3);
        $playerB = Npc::find(2);

        $this->fightService->CalculateFight($playerA,$playerB);
        $descryptions = $this->fightService->getDescryption();
        return view('fight', compact('descryptions'));
        
    }

    public function test(){
        return date("Y-m-d H:i:s");
    }
}
