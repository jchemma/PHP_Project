<?php
class superCharacter{
	protected $health;
	protected $atk;
	protected $def;
	
	functin __construct($x,$y,$z){
		$health = $x;
		$atk = $y;
		$def = $z;
	}
	public function attack(){
		public $total = 0;
		for($i=0; $i<$atk; $i++){
			$total += int rand(1,6);
		}
		return $total;
	}
	
}

class player extends superCharacter{
	private $mana;
	
	function __construct($w, $x, $y, $z){
		parent:: __construct($x, $y, $z);
		$mana = $w;
	}
	
	public function defend(){
		public $total = 0;
		for($i=0; $i<def; $i++){
			$total += int rand(1,6);
		}
		return $total;
	}
}

class enemy extends superCharacter{
 //remove later if noting is changed from superclass
}
?>