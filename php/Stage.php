<!DOCTYPE html>

<<<<<<< HEAD
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="../css/stage_style.css">
		<title>Game</title>
		<link type="text/css" rel="stylesheet.css" href="/../css/stage_style.css"
	</head>
	<body>
		<?php
			session_start();
			include('Battle.php');
			include('Player.php');
			include('Boss.php');
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
	
	
=======
		
>>>>>>> parent of e878bb5... small change
		$hero = new player(20, 50, 3, 8);
		$dragon = new superCharacter(70, 3, 10);
		$heroattack = 0;
		$enemmyattack = 0;
		
		function rollAtk(){
			echo "Your dad";
			$heroattack = $hero->attack();
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
=======
		
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
>>>>>>> origin/master
			}
			
			function rollDef(){
				$heroattack = $hero->defend();
				$enemyattack = $enemy->attack();
			}
			
			function reroll(){
				$heroattack = $hero->attack();
			}
>>>>>>> 1a69627c275c61fd0f9c4e9379fd26cc3403b4cd
			
			$_SESSION['player'] = new Player(10,10,10,10);
			$_SESSION['boss'] = new Boss(10,10,10,10);
			$_SESSION['battle'] = new Battle($_SESSION['player'],$_SESSION['boss']);
			
		?>
		<div class="player-bar">
			<h3>Health:
				<?php
					$current_health = $_SESSION["player"]-> getHealth();
					echo "$current_health";
				?>
			</h3>
			<h3>
				Mana:
				<?php
					$current_mana = $_SESSION["player"] -> getMana();
					echo "$current_mana";
				?>
			</h3>
			<div class="button-bar">
				<form action="Stage.php" method="get">
					<button type="submit" name="attack">Attack</button>
				</form>
				<?php 
					if(isset($_POST['attack'])){
						$_SESSION('battle') -> rollAttack();
					}
				?>
				<form action="Stage.php">
					<button type="submit" name="defend">Defend</button>
				</form>
				<?php 
					if(isset($_POST['defend'])){
						$_SESSION('battle') -> rollDefense();
					}
				?>
				<form action="Stage.php">
					<button type="submit" name="reroll">ReRoll</button>
				</form>
				<?php 
					if(isset($_POST['reroll'])){
						$_SESSION('battle') -> reroll();
					}
				?>
			</div>
		</div>
		<div class="boss-bar">
			<h3>Health:
				<?php
					$current_boss_health = $_SESSION["boss"]-> getHealth();
					echo "$current_boss_health";
				?>
			</h3>
		</div>
		<div class="player"></div>
		<div class="boss"></div>
	</body>
</html>
