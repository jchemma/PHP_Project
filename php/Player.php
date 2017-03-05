<!DOCTYPE html>
<html>
	<body>
		<?php
			include('Character.php');
			class Player extends Character{
				private $mana;
				
				function __construct($w, $x, $y, $z){
					parent:: __construct($x, $y, $z);
					$this -> mana = $w;
				}
				
				public function defend(){
					$total = 0;
					for($i=0; $i<$this->def; $i++){
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
				
				public function decreaseMana($mana){
					$this->mana -= $mana;
				}
			}
		?>
	</body>
</html>