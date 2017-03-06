<!DOCTYPE html>
<html>
	<body>
		<?php
		
			class Battle{
				
				private $player;
				private $boss;
				private $player_attack = 0;
				private $boss_attack = 0;
				
				function __construct($player, $boss){
					$this -> player = $player;
					$this -> boss = $boss;
				}
				
				function rollAttack(){
					$this->player_attack = $this->player -> attack();
					$this->boss_attack = $this->boss -> attack();
					if($this->player_attack > $this->boss_attack){
						$this -> boss -> decreaseHealth(($this->player_attack)-($this -> boss_attack));
						//echo "<h3 id=\"green\">Player Roll:".$this->player_attack."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Boss Roll: ".$this->boss_attack."</h3><br>";
						echo "Winner: Player<br>";
						echo "Damage to Boss: ".($this->player_attack-$this->boss_attack)."<br>";
						echo "Boss Roll: ".$this->boss_attack."<br>";
						echo "Boss Health:".$this->boss->getHealth()."<br>";
						echo "Boss Attack:".$this->boss->getAtk()."<br>";
						echo "Boss Defense:".$this->boss->getDef()."<br><br>";
						echo "Player Roll:".$this->player_attack."<br>";
						echo "Player Health:".$this->player->getHealth()."<br>";
						echo "Player Attack:".$this->player->getAtk()."<br>";
						echo "Player Defense:".$this->player->getDef()."<br>"; 
					}else{
						$this -> player -> decreaseHealth(($this->boss_attack)-($this -> player_attack));
						// "<h3 id=\"green\">Player Roll:".$this->player_attack."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Boss Roll: ".$this->boss_attack."</h3><br>";
						 echo "Winner: Boss<br>";
						echo "Damage to Player: ".($this->boss_attack-$this->player_attack)."<br>";
						echo "Boss Health:".$this->boss->getHealth()."<br>";
						echo "Boss Attack:".$this->boss->getAtk()."<br>";
						echo "Boss Defense:".$this->boss->getDef()."<br><br>";
						echo "Boss Roll: ".$this->boss_attack."<br>";
						echo "Player Health:".$this->player->getHealth()."<br>";
						echo "Player Attack:".$this->player->getAtk()."<br>";
						echo "Player Defense:".$this->player->getDef()."<br>";
						echo "Player Roll:".$this->player_attack."<br>"; 
					}
				}
				
				function rollDefense(){
					$this->player_attack = $this->player -> defend();
					$this->boss_attack = $this->boss -> attack();
					if($this->player_attack < $this->boss_attack){
						$this -> player -> decreaseHealth(($this->boss_attack)-($this -> player_attack));
						/* echo "Defense failed."; */
					}
					//echo "<h3 id=\"green\">Player Roll:".$this->player_attack."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Boss Roll: ".$this->boss_attack."</h3><br>";
				}
				
				function heal(){
					if($this->player->getMana() >= 2){
						$this->player-> decreaseHealth(-40);
						$this->player-> decreaseMana(2);
					}
					
				}
				
				function win_condition(){
					if($this->player->getHealth()<=0 || $this->boss->getHealth()<=0){
						
					}
				}
				
				function resett(){
					$_SESSION['player'] = new Player(10,100,10,10);
					$_SESSION['boss'] = new Boss(100,10,10);
					$_SESSION['battle'] = new Battle($_SESSION['player'],$_SESSION['boss']);
				}				
			}
		
		?>
	</body>
</html>