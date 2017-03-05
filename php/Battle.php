<!DOCTYPE html>
<html>
	<body>
		<?php
		
			class Battle{
				
				private $player;
				private $boss;
				private $player_attack = 0;
				private $boss_attack = 0;
				private $isAttacking = True;
				
				function __construct($player, $boss){
					$this -> player = $player;
					$this -> boss = $boss;
				}
				
				function rollAttack(){
					$isAttacking = True;
					$this->player_attack = $this->player -> attack();
					$this->boss_attack = $this->boss -> attack();
					if($this->player_attack > $this->boss_attack){
						$this -> boss -> decreaseHealth(($this->player_attack)-($this -> boss_attack));
						echo "Winner: Boss<br>";
						echo "Damage to Player: ".$this->boss_attack-$this->player_attack."<br>";
						echo "Boss Damage: ".$this->boss_attack."<br>";
						echo "Boss Health:".$this->boss->getHealth()."<br>";
						echo "Boss Attack:".$this->boss->getAtk()."<br>";
						echo "Boss Defense:".$this->boss->getDef()."<br><br>";
						echo "Player Health:".$this->player->getHealth()."<br>";
						echo "Player Attack:".$this->player->getAtk()."<br>";
						echo "Player Defense:".$this->player->getDef()."<br>";
					}else{
						$this -> player -> decreaseHealth(($this->boss_attack)-($this -> player_attack));
						echo "Winner: Player<br>";
						echo "Damage to Boss: ".$this->player_attack-$this->boss_attack."<br>";
						echo "Boss Health:".$this->boss->getHealth()."<br>";
						echo "Boss Attack:".$this->boss->getAtk()."<br>";
						echo "Boss Defense:".$this->boss->getDef()."<br><br>";
						echo "Player Health:".$this->player->getHealth()."<br>";
						echo "Player Attack:".$this->player->getAtk()."<br>";
						echo "Player Defense:".$this->player->getDef()."<br>";
					}
				}
				
				function rollDefense(){
					$isAttacking = False;
					$player_attack = $this->player -> defend();
					$boss_attack = $this->boss -> attack();
					if($player_attack < $boss_attack){
							$health_decrease = $player_attack - $boss_attack;
							$player -> setHealth($player -> getHealth() - $health_decrease);
						}
				}
				
				function reroll(){
					$player_attack = $this ->player -> attack();
				}
				
			}
		
		?>
	</body>
</html>