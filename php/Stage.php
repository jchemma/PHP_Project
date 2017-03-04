<!DOCTYPE html>

<head>
	<link type="text/css" rel="stylesheet" href="../css/stage_style.css">
	<title>Game</title>
</head>
<body>
	<?php
	
		class superCharacter{
			private $health;
			public $atk;
			public $def;
			
			function __construct($x,$y,$z){
				$this->health = $x;
				$atk = $y;
				$def = $z;
			}
			public function attack(){
				$total = 0;
				for($i=0; $i<$atk; $i++){
					$total += rand(1,6);
				}
				return $total;
			}
			
			function getHealth(){
				return $this-> health;
			}
			
			function setHealth($health){
				$this->health =$health;
			}
			
			public function getAtk(){
				return $this->atk;
			}
			
			public function setAtk($atk){
				$this->atk =$atk;
			}
			
			public function getDef(){
				return $this->def;
			}
			
			public function setDef($def){
				$this->def =$def;
			}
		}

		class player extends superCharacter{
			private $mana;
			
			/* function __construct($w, $x, $y, $z){
				parent:: __construct($x, $y, $z);
				$mana = $w;
			} */
			
			public function defend(){
				$total = 0;
				for($i=0; $i<def; $i++){
					$total += rand(1,6);
				}
				return $total;
			}
		}

		class enemy extends superCharacter{
		 //remove later if noting is changed from superclass
		}
		
		$hero = new superCharacter(50, 3, 8);
		$dragon = new enemy(70, 3, 10);
		$heroattack;
		$enemmyattack;
		
		function rollAtk(){
			$heroattack = $hero->attack();
			$enemyattack = $enemy->attack();
		}
		
		function rollDef(){
			$heroattack = $hero->defend();
			$enemyattack = $enemy->attack();
		}
		
		function reroll(){
			$heroattack = $hero->attack();
		}
		
		function battle(){
			if($heroattack > $enemyattack){
				$enemy->health -= ($heroattack - $enemyattack);
			}
			if($heroattack < $enemyattack){
				$hero->health -= ($enemyattack - $healthattack);
			}
			if($herodefense < $enemyattack){
				$hero->health -= ($enemyattack - $healthattack);
			}
			
			if($hero->defense > $enemyattack){
				//nothing yet;
			}
		}
	?>
	
	<div class="hp-bar">
		<div class="player-status">
			<div id="hp">
				Health:
				<?php 
					$health = $hero -> getHealth();
					echo "$health";
				?>
			</div>
			<div id="mana">
				Mana:
			</div>
		</div>
		<div class="monster-hp"></div>
	</div>
	<div class="button-bar">
		<form action="stage.php" method="get">
			<button name="attack" type="submit" value="ATTACK" onClick="rollAtk();">ATTACK</button>
			<button name="defend" type="submit" value="DEFEND" onClick="rollDef();">DEFEND</button>
		</form>
	</div>
	<div class="arena">
		<div class="player"></div>
		<div class="monster"></div>
	</div>
</body>
