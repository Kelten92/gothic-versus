<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Npc;
use App\Services\FightingService;

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
        return view('home');
    }


    public function fight($id){
        
        $playerA = Npc::find(3);
        $playerB = Npc::find(2);

        $this->fightService->CalculateFight($playerA,$playerB);
        $descryptions = $this->fightService->getDescryption();
        return view('fight', compact('descryptions'));
        
    }

    public function test(){

        for ($x = 0; $x <= 10; $x++) {

            echo "The number is: $x <br>";
            
            if($x > 0){
                $dodatek = $tablica[$x-1] * 0.1;
                $tablica[$x] = floor($tablica[$x-1] + $dodatek);
                
                  
            } else{
                $tablica[$x] = 1000;
            }
        }
        print_r($tablica); 

    }
}
