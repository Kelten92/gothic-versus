<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Repositories\UserRepository;


class HomeController extends Controller
{   
    protected $userRepo;

    public function __construct(UserRepository $user) {
        $this->userRepo = $user;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {   
        $skills = $this->userRepo->getSkills();
        $resources = $this->userRepo->getResources();
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
        return $this->service->test();
    }
}
