<?php

namespace App\Services;

use App\Npc;

class FightingService {
	
	public $playerA;
	public $playerB;
  public $descryption;	


  public function CalculateFight(Npc $playerA, Npc $playerB){
    $playerA_HP = $playerA->health;
  	$playerB_HP = $playerB->health;
  	while ($playerA_HP > 0 && $playerB_HP >0) {

  		if($this->TryHit($playerA,$playerB)){
        $dmg = $this->CalculateDMG($playerA);
        $def = $this->CalculateDef($playerB, $playerA);
        $playerB_HP -= $dmg - $def; 
                        
        $desc[] = $playerA->name." atakuje z broni ".$playerA->weapon->name." i zadaje ".$playerB->name." obrażenia o wartości ".$dmg." zmniejszone o obronę przeciwnika ".$def.' '.$playerB_HP.':'.$playerA_HP;
      }
      else{
        $desc[] = $playerA->name." chybił";
      }

      if($this->TryHit($playerB,$playerA)){
        $dmg = $this->CalculateDMG($playerB);
        $def = $this->CalculateDef($playerA, $playerB);
        $playerA_HP -= $dmg - $def; 
                        
        $desc[] = $playerB->name." atakuje z broni ".$playerB->weapon->name." i zadaje ".$playerA->name." obrażenia o wartości ".$dmg." zmniejszone o obronę przeciwnika ".$def.' '.$playerB_HP.':'.$playerA_HP;
      }
      else{
        $desc[] = $playerB->name." chybił";
      }

  	}
    $this->descryption = $desc;
  }

  private function CalculateDMG($player){
    switch ($player->weapon->type) {
      case '1h':
        $dmg = $player->strength + $player->weapon->dmg;
        break;
      case '2h':
        $dmg = $player->strength + $player->weapon->dmg;
        break;
      case 'bow':
        $dmg = $player->dexterity + $player->weapon->dmg;
        break;
      case 'cbow':
        $dmg = $player->dexterity + $player->weapon->dmg;
        break;
      case 'spell':
        $dmg = $player->mana + $player->weapon->dmg;
        break;
      default:
        $dmg = 1;
        break;
    }
    return $dmg;
  }

  private function CalculateDef($player,$opponent){
    switch ($opponent->weapon->type) {
      case '1h':
        $def = $player->armor->steel_protect;
        break;
      case '2h':
        $def = $player->armor->steel_protect;
        break;
      case 'bow':
        $def = $player->armor->arrows_protect;
        break;
      case 'cbow':
        $def = $player->armor->arrows_protect;
        break;
      case 'spell':
        $def = $player->armor->magic_protect;
        break;
      default:
        $def = 1;
        break;
    }
    return $def;
  }

  private function TryHit($player,$opponent){
    if($player->one_handed + rand(5,20) > $opponent->one_handed + rand(5,20)){
      return true;
    }
  }

  public function getDescryption(){
    return $this->descryption;
  }
}
