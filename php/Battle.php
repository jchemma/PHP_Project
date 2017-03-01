Battle
<?php
$hero = new player();
$dragon = new enemy();
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