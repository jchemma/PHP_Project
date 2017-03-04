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
		?>
	</body>
</html>