<?php

namespace App\Services\GameEngine;

use App\Repositories\UserRepository;

class TrainingService {

    protected $userRepo;

    public function __construct(UserRepository $user) {
        $this->userRepo = $user;
    }

    public function train(string $skill) 
    {   
        $user = $this->userRepo->getUser();
        $train_skill = $user->skills->$skill;
        $user_gold = $user->resources->gold_coin;
        $user_lp = $user->resources->learning_points;
        $gold_cost = $train_skill * 10;
        $lp_cost = floor($train_skill / 10);

        if($lp_cost > $user_lp || $gold_cost > $user_gold)
        {
            $status = 'Nie masz wystarczających surowców';
            return $status;
        }
        else
        {
            $user->skills->update([$skill => $train_skill + 1]);
            $user->resources->update(['gold_coin' => $user_gold - $gold_cost,
                                    'learning_points' => $user_lp - $lp_cost]);
            $status = 'Skill zwiększony o 1';
            return $status;
        }
    }
    public function training_costs() 
    {
        $skills = $this->userRepo->getSkills();
        $costs = [];
        $costs['strength'] = floor($skills->strength / 6);
        $costs['dexterity'] = floor($skills->dexterity / 6);
        $costs['intelligence'] = floor($skills->intelligence / 6);
        $costs['stamina'] = floor($skills->stamina / 6);
        $costs['alertness'] = floor($skills->alertness / 6);
        $costs['knowledge'] = floor($skills->knowledge / 6);
        $costs['charisma'] = floor($skills->charisma / 6);
        $costs['stealth'] = floor($skills->stealth / 6);
        $costs['inquisitiveness'] = floor($skills->inquisitiveness / 6);

        return $costs;
    }
}