<?php

namespace App\Services\GameEngine;
use App\Expedition;
use Auth;
use App\User;

class ExpeditionService {
    public $expedition;

    public function expeditionAlreadyStarting($expedition) {
        if($expedition){
            $this->expedition = $expedition;
            return true;
        }
        else{
            return false;
        }
    }

    public function expeditionComplete() {
        $now = date("Y-m-d H:i:s");
        if($this->expedition->end_date < $now) {
            return true;
        }
        else {
            return false;
        }
    }

    private function randomExpeditionType() {
        $types = array("thief", "warrior", "explorer", "hunt");
        $index = random(0,3);
        $type = $types[$index];

    }

    public function calculateExpedition() {
        $type = $this->randomExpeditionType();
        $user = Auth::user();
        switch ($type) {
            case 'thief':
                $testing_skills_value = $user->skills->agi + $user->skills->dex;
                if($testing_skills_value / $user->skills->lvl)
            break;
            
            case 'warrior':
                $testing_skills_value = $user->skills->str + $user->skills->sta;
            break;

            case 'explorer':
                $testing_skills_value = $user->skills->sta + $user->skills->ale;
            break;

            case 'hunt':
                $testing_skills_value = $user->skills->ale + $user->skills->dex;
            break;

            default:
                $testing_skills_value = 1;
            break;
        }


    }

    

}