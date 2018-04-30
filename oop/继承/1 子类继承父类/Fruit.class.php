<?php 
class Fruit{
	private $color;
	private $shape;

	public function __construct($color,$shape){
		$this->color = $color;
		$this->shape = $shape;
	}

	public function getColor(){
		return $this->color;
	}

	public function getShape(){
		return $this->shape;
	}
}

?>