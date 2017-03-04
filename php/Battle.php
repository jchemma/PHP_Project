<!DOCTYPE html>
<html>
	<body>
		<?php
		
			class Battle {
				
				private $player = new Player(10,10,10,10);
				private $boss = new Boss(10,10,10,10);
				private $player_attack = 0;
				private $boss_attack = 0;
				private $isAttacking = False;
				
				function rollAttack(){
					$isAttacking = True;
					$player_attack = $player -> attack();
					$boss_attack = $boss -> attack();
					battle();
				}
				
				function rollDefense(){
					$isAttacking = False;
					$player_attack = $player -> defend();
					$boss_attack = $boss -> attack();
					battle();
				}
				
				function reroll(){
					$hero_attack = $hero -> attack();
				}
				
				function battle(){
					if($isAttacking){
						if(player_attack >  boss_attack){
							$boss -> getHealth() -= ($hero_attack - $boss_attack);
						}elseif(player_attack <  boss_attack){
							$player -> getHealth() -= ($boss_attack - $hero_attack)
						}
					}else{
						if($player_attack < $boss_attack){
							$player -> getHealth() -= ($boss_attack - $player_attack);
						}
					}
				}
				
			}
		
		?>
	</body>
</html>