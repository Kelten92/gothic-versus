<?php

namespace App\Services\GameEngine;

use Auth;
use App\User;
use App\Expedition;
use App\Notifications\ExpeditionReport;

class ExpeditionService {
    public $expedition;
    public $user;

    //param User $user;
    //return true or false;
    public function expeditionInProgress($user) {
        if($user->expeditions->first()){
            $this->expedition = $user->expeditions->first();
            $this->user = $user;
            return true;
        }
        else{
            return false;
        }
    }

    public function expeditionIsComplete() {
        $now = date("Y-m-d H:i:s");
        if($this->expedition->pivot->end_date < $now) {
            return true;
        }
        else {
            return false;
        }
    }

    public function randomExpeditionEntity($diff_lvl) {
        $quest = Expedition::where('difficult_lvl', '=', $diff_lvl )
                            ->inRandomOrder()->first();      

        return $quest->id;
    }

    private function successChance($skills, $exp_points, $diff_lvl) {
        $chance = $skills / $exp_points * 3000;
        if($diff_lvl == 'easy') $chance -= 5;
        else if($diff_lvl == 'medium') $chance -= 15;
        else $chance -= 25;
        return $chance;
    }

    public function calculateExpedition() {
        $type = $this->expedition->type;
        $diff_lvl =  $this->expedition->difficult_lvl;
        switch ($type) {
            case 'exploration':
            
                $testing_skills_value = $this->user->skills->alertness + 
                                        $this->user->skills->stamina;
                $exp_points = $this->user->resources->exp_points;
                $chance = $this->successChance($testing_skills_value, $exp_points, $diff_lvl);
                $mod = rand(1,100);
                $exp_reward = rand(12,18);

                if($chance > $mod ) {
                    $this->user->resources->update(['exp_points' => $exp_points + $exp_reward  ]);
                }
                echo $chance;
                echo $mod;
                $this->user->notify(new ExpeditionReport($this->expedition));
            break;
            
            case 'warrior':
               echo 'warrior';
            break;

            case 'test':
               echo 'test';
            break;

            case 'hunt':
               echo 'hunt';
            break;

            default:
               echo 'defult';
            break;
        }
    }

   

    

}