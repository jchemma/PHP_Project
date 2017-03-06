<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="../css/stage_style.css">
	</head>
	<body>
		<?php
		
			
			include('Battle.php');
			include('Player.php');
			include('Boss.php');
		
 			if(!isset($_COOKIE["PHPSESSID"])){
				session_start();
				$_SESSION['player'] = new Player(10,100,10,10);
				$_SESSION['boss'] = new Boss(100,10,10);
				$_SESSION['battle'] = new Battle($_SESSION['player'],$_SESSION['boss']);
			}else{
				session_start();
			}
		?>
		<div class="status">
			<div class="player-bar">
				<h3 id="red">
					Health:
					<?php
						$current_health = $_SESSION["player"]-> getHealth();
						echo "$current_health";
					?>
				</h3>
				<h3 id="blue">
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
						if(isset($_GET['attack'])){
							$_SESSION['battle'] -> rollAttack();
						}
					?>
					<form action="Stage.php" method="get">
						<button type="submit" name="defend">Defend</button>
					</form>
					<?php 
						if(isset($_GET['defend'])){
							$_SESSION['battle'] -> rollDefense();
						}
					?>
					<form action="Stage.php" method="get">
						<button type="submit" name="heal">Heal</button>
					</form>
					<?php 
						if(isset($_GET['heal'])){
							$_SESSION['battle'] -> heal();
						}
					?>
				</div>
				
			</div>
			<div class="boss-bar">
				<h3 id="red">Health:
					<?php
						$current_boss_health = $_SESSION["boss"]-> getHealth();
						echo "$current_boss_health";
					?>
				</h3>
			</div>
		</div>
		<div class="arena">
			<div class="player">
				<img src="../img/player.gif" alt="The Hero">
			</div>
			<div class="boss">
				<img src="../img/boss.gif" alt="The Boss">
			</div>
		</div>
		<div class="Reset">
			<form action="Stage.php" method="get">
				<button type="submit" name="reset">RESET</button>
			</form>
			<?php
				if(isset($_GET['reset'])){
					$_SESSION['battle'] -> resett();
				}
			?>
		</div>
	</body>
</html>
