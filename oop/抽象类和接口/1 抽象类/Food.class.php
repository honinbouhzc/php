<?php 
abstract class Food{
	private $material;

	public function __construct($material){
		$this->material = $material;
	}

	public function getMaterial(){
		return $this->material;
	}
}

?>