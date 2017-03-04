<!DOCTYPE html>

<head>
	<link type="text/css" rel="stylesheet" href="../css/stage_style.css">
	<title>Game</title>
	<link type="text/css" rel="stylesheet.css" href="/../css/stage_style.css"
</head>
<body>
	<?php
		class superCharacter{
			private $health;
			public $atk;
			public $def;
			
			function __construct($x,$y,$z){
				$this-> health = $x;
				$this -> atk = $y;
				$this -> def = $z;
			}
			function attack(){
				$total = 0;
				for($i=0; $i<$this->atk; $i++){
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
			
			function __construct($w, $x, $y, $z){
				parent:: __construct($x, $y, $z);
				$this -> mana = $w;
			}
			
			public function defend(){
				$total = 0;
				for($i=0; $i<def; $i++){
					$total += rand(1,6);
				}
				return $total;
			}
			
			public function getMana(){
				return $this -> mana;
			}
			
			public function setMana($mana){
				$this -> mana = $mana;
			}
		}

		class enemy extends superCharacter{
		 //remove later if noting is changed from superclass
		}
		
		class Fight {
			$hero = new player(20, 50, 3, 8);
			$dragon = new superCharacter(70, 3, 10);
			$heroattack = 0;
			$enemmyattack = 0;

			function static rollAtk(){
				$hero2 = new player(6,7,8,9);
				$heroattack = $hero2 -> attack();
				echo "$heroattack";
				$enemyattack = $enemy->attack();
				battle();
				echo "<p>Gautam is cool</p>";
			}
			
			function rollDef(){
				$heroattack = $hero->defend();
				$enemyattack = $enemy->attack();
			}
			
			function reroll(){
				$heroattack = $hero->attack();
			}
			
			function test(){
				echo "<p>Gautam is fool</p>";
			}
			
			function battle(){
				echo "<p>Gautam is cool</p>";
				if($heroattack > $enemyattack){
					$enemy->health -= ($heroattack - $enemyattack);
				}
				if($heroattack < $enemyattack){
					$hero->health -= ($enemyattack - $healthattack);
				}
				if($herodefense < $enemyattack){
					$hero->setHealth($hero->getHealth() - ($enemyattack - $healthattack));
				}
				
				if($hero->defense > $enemyattack){
					//nothing yet;
				}
			}
		}
	?>
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
			<?php
				$mana = $hero -> getMana();
				echo "$mana";
			?>
		</div>
		<div class="button-bar">
			<form action="Stage.php" method="get">
				<button type="submit" name="attack">ATTACK</button>
			</form>
			<?php
				if(isset($_GET['attack'])){
					$Fight -> rollAtk();
					echo "Your mom";
				}
			?>
			<form>
				<button name="defend" type="submit" value="DEFEND" onClick="rollDef();">DEFEND</button>
			</form>
		</div>
	</div>
	<div class="monster-hp">
		Health:
		<?php
			$health = $dragon -> getHealth();
			echo "$health";
		?>
	</div>
	<div class="arena">
		<div class="player"></div>
		<div class="monster"></div>
	</div>
</body>
