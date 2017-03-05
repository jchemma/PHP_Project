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
						echo "Player wins <br><br>";
						echo "Player Attack: ".$this->player_attack."<br>";
						echo ($this->player_attack)-($this -> boss_attack)."<br>";
						echo "Health:".$this->boss->getHealth()."<br>";
						echo "Attack:".$this->boss->getAtk()."<br>";
						echo "Defense:".$this->boss->getDef()."<br>";
						
						echo "Health:".$this->player->getHealth()."<br>";
						echo "Attack:".$this->player->getAtk()."<br>";
						echo "Defense:".$this->player->getDef()."<br>";
					}else{//($player_attack <  $boss_attack){
						
						$this -> player -> decreaseHealth(($this->boss_attack)-($this -> player_attack));
						echo "Boss wins <br><br>";
						echo ($this->boss_attack)-($this -> player_attack);
						echo "Player Attack: ".$this->player_attack;
						echo "Boss Attack: ".$this->boss_attack;
						echo "Health:".$this->boss->getHealth()."<br>";
						echo "Attack:".$this->boss->getAtk()."<br>";
						echo "Defense:".$this->boss->getDef()."<br>";
						echo "Health:".$this->player->getHealth()."<br>";
						echo "Attack:".$this->player->getAtk()."<br>";
						echo "Defense:".$this->player->getDef()."<br>";
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