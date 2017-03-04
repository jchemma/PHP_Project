<?php

$hero = new player(20, 50, 3, 8);
$dragon = new enemy(70, 3, 10);
$heroattack;
$enemmyattack;

public function rollAtk(){
	$heroattack = hero->attack();
	$enemyattack = enemy->attack();
}

public function rollDef(){
	$heroattack = hero->defend();
	$enemyattack = enemy->attack();
}

public function reroll(){
	$heroattack = hero->attack();
}

public function battle(){
	if($heroattack > $enemyattack){
		$enemy->health -= ($heroattack - $enemyattack)
	}

	if($heroattack < $enemyattack){
		$hero->health -= ($enemyattack - $healthattack)
	}

	if($herodefense < $enemyattack){
		$hero->health -= ($enemyattack - $healthattack)
	}
	
	if($hero->defense > $enemyattack){
		//nothing yet;
	}
}


?>