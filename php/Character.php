<!DOCTYPE html>
<html>
	<body>
		<?php
			class Character{
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
				
				public function decreaseHealth($health){
					$this -> health -= $health;	
				}
			}
		?>
	</body>
</html>