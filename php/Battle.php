<?php

$hero = new player(20, 50, 3, 8);
$dragon = new enemy(50, 3, 10);

if($hero->attack > $enemy->attack){
	$enemy->health -= ($hero->attack - $enemy->attack)
}

if($hero->attack < $enemy->attack){
	$hero->health -= ($enemy->attack - $health->attack)
}

if($hero->defense < $enemy->attack){
	$hero->health -= ($enemy->attack - $health->attack)
}

?>