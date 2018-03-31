<?php

namespace App\Services\GameEngine;

use App\Repositories\UserRepository;

class PlayerService {

    protected $userRepo;

    public function __construct(UserRepository $user) {
        $this->userRepo = $user;
    }
    public function can_be_promoted($exp_points, $exp_points_breakpoint) {
        if($exp_points > $exp_points_breakpoint){
            return true;
        }
        else 
        {
            return false;
        }
    }
    private function lvlUp($playerLvl)
    {
        $this->userRepo->setSkill($playerLvl, $playerLvl + 1);
    }

    private function LPUp($learning_points)
    {
        $this->userRepo->setSkill($learning_points, $learning_points + 10);
    }

    private function designateNewBreakpoint($break_point)
    {   
        $new = $break_point * 0.10;
        $this->userRepo->setSkill($break_point, $break_point + $new);
    }
}