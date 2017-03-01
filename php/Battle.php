<?php

$hero = new player(20, 50, 3, 8);
$dragon = new enemy(70, 3, 10);

public function battle(){
	if($hero->attack > $enemy->attack){
		$enemy->health -= ($hero->attack - $enemy->attack)
	}

	if($hero->attack < $enemy->attack){
		$hero->health -= ($enemy->attack - $health->attack)
	}

	if($hero->defense < $enemy->attack){
		$hero->health -= ($enemy->attack - $health->attack)
	}
	
	if($hero->defense > $enemy->attack){
		//nothing yet;
	}
}

public function reroll(){
}
?>