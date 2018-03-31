<?php

namespace App\Services\GameEngine;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Expedition;
use App\Notifications\ExpeditionReport;
use App\Services\GameEngine\PlayerService;
use App\Events\PlayerPromoted;


class ExpeditionService {
    public $expedition;
    protected $userRepo;
    protected $playerService;
 

    public function __construct(UserRepository $user,PlayerService $player) {
        $this->userRepo = $user;
        $this->playerService = $player;
    }
    /*
    Sprawdza czy użytkownik już wyruszył na wyprawę
    return True or False
    */ 
    public function expeditionInProgress() {
        
        if($this->userRepo->getExpedition()!==NULL){
            $this->expedition = $this->userRepo->getExpedition();
            return true;
        }
        else{
            return false;
        }
    }
    /*
    Sprawdza czy wyprawa się zakończyła
    return True or False
    */ 
    public function expeditionIsComplete() {
        $now = date("Y-m-d H:i:s");
        if($this->expedition->pivot->end_date < $now) {
            return true;
        }
        else {
            return false;
        }
    }
    /*
    Rozpoczyna nową wyprawę , tworzy rekord w tabeli(pivocie) user_expedition
    return True or False
    */ 
    public function startNew(Request $request) {
        $end_date = date("Y-m-d H:i:s",time()+300);
        $quest_id = $this->randomExpeditionEntity($request->difficult_lvl);
        DB::table('expedition_user')->insert(
            array('user_id' => $request->user_id, 'expedition_id' => $quest_id, 'end_date' => $end_date )
        );
    }
    /*
    Wyciąga z bazy losową jednostkę modelu Expedition
    return Mixed or NULL
    */ 
    private function randomExpeditionEntity($diff_lvl) {
        $quest = Expedition::where('difficult_lvl', '=', $diff_lvl )
                            ->inRandomOrder()->first();      

        return $quest->id;
    }
    /*
    Wylicza procentową szansę na udaną wyprawę
    return Int $chance
    */ 
    private function successChance($skills, $exp_points, $diff_lvl) {
        $chance = $skills / $exp_points * 3000;
        if($diff_lvl == 'easy') $chance -= 5;
        else if($diff_lvl == 'medium') $chance -= 15;
        else $chance -= 25;
        return $chance;
    }
    /*
    Główna funkcja 
    return True or False
    */ 
    public function calculateExpedition() {
        $auth_user = $this->userRepo->getUser();
        switch ($this->expedition->type) {
            case 'exploration':
                $testing_skills_value = $auth_user->skills->stamina + 
                                        $auth_user->skills->inquisitiveness;
            break;
            
            case 'delivery':
                $testing_skills_value = $auth_user->skills->stealth + 
                                        $auth_user->skills->stamina;
            break;

            case 'escort':
                $testing_skills_value = $auth_user->skills->strength + 
                                        $auth_user->skills->alertness;
            break;

            case 'hunting':
                $testing_skills_value = $auth_user->skills->dexterity + 
                                        $auth_user->skills->alertness;
            break;

            case 'riddle':
                $testing_skills_value = $auth_user->skills->intelligence + 
                                        $auth_user->skills->knowledge;
            break;

            case 'theft':
                $testing_skills_value = $auth_user->skills->stealth + 
                                        $auth_user->skills->dexterity;
            break;


            case 'investigation':
                $testing_skills_value = $auth_user->skills->inquisitiveness + 
                                        $auth_user->skills->intelligence;
            break;


            case 'trading':
                $testing_skills_value = $auth_user->skills->charisma + 
                                        $auth_user->skills->knowledge;
            break;

            case 'guard':
                $testing_skills_value = $auth_user->skills->charisma + 
                                        $auth_user->skills->strength;
            break;

            default:
               echo 'defult';
            break;
        }

        $diff_lvl =  $this->expedition->difficult_lvl;
        $exp_points = $auth_user->resources->exp_points;
        $chance = $this->successChance($testing_skills_value, $exp_points, $diff_lvl);
        $mod = rand(1,100);
       
        if($chance > $mod )
        {   
            $rewards = [];
            $rewards['exp_reward'] = rand(12,18);
            $rewards['arcanit_reward'] = rand(1,5);
            $rewards['adamant_reward'] = rand(1,2);

            $auth_user->resources->update(['exp_points' => $exp_points + $rewards['exp_reward'],
                                    'arcanit_ore' => $auth_user->resources->arcanit_ore + $rewards['arcanit_reward'],
                                    'adamant_ore' => $auth_user->resources->adamant_ore + $rewards['adamant_reward']]);
            
            $status = "Wyprawa udana";

            if($this->playerService->can_be_promoted($auth_user->resources->exp_points,
                                                $auth_user->resources->exp_points_breakpoint))
            {
                event(new PlayerPromoted($auth_user));
            } 
        }
        else
        {
            $status = "Wyprawa nieudana";
        }

        if(isset($rewards['exp_reward']))
        {
           $report = $this->createReport($this->expedition->name,$this->expedition->descryption,
                                $rewards,$chance,$status);
        }
        else
        {
            $report = $this->createReport($this->expedition->name,$this->expedition->descryption,
                               NULL,$chance,$status);

        }
        
        $this->userRepo->notify(new ExpeditionReport($report));
        
    }
    /*
    Zwraca ostatnią wiadomość z powiadomień uzytkownika (raport dopiero zakończonej wyprawy)
    return Int $id
    */ 
    public function getExpeditionId() 
    {
        return $this->userRepo->notificationsLast()->id;
    }
     /*
    Tworzy raport wyprawy
    return array
    */ 
    private function createReport($name,$descryption,array $rewards = NULL,$chance,$status) 
    {
        $report['name'] = $name;
        $report['descryption'] = $descryption;
        $report['chance'] = $chance;
        $report['status'] = $status;
        if($rewards == NULL) 
        {
            $report['exp_reward'] = NULL;
            $report['arcanit_reward'] = NULL;
            $report['adamant_reward'] = NULL;
        }
        else
        {
            $report['exp_reward'] = $rewards['exp_reward'];
            $report['arcanit_reward'] = $rewards['arcanit_reward'];
            $report['adamant_reward'] = $rewards['adamant_reward'];
        }

        return $report;
    }

   

    

}