<!DOCTYPE html>

<head>
	<link type="text/css" rel="stylesheet" href="../css/stage_style.css">
	<title>Game</title>
</head>
<body>
	<?php
		$hero = new player(20, 50, 3, 8);
		$dragon = new enemy(70, 3, 10);
		$heroattack;
		$enemmyattack;
		
		function rollAtk(){
			$heroattack = hero->attack();
			$enemyattack = enemy->attack();
		}
		public function rollDef(){
			$heroattack = hero->defend();
			$enemyattack = enemy->attack();
		}
		public function reroll(){
			$heroattack = hero->attack();
		}
		public function battle(){
			if($heroattack > $enemyattack){
				$enemy->health -= ($heroattack - $enemyattack)
			}
			if($heroattack < $enemyattack){
				$hero->health -= ($enemyattack - $healthattack)
			}
			if($herodefense < $enemyattack){
				$hero->health -= ($enemyattack - $healthattack)
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
					echo $_GET['health']
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
			<button name="attack" type="submit" value="ATTACK" onClick="roll();"></button>
			<button name="defend" type="submit" value="DEFEND"></button>
		</form>
	</div>
	<div class="arena">
		<div class="player"></div>
		<div class="monster"></div>
	</div>
</body>
