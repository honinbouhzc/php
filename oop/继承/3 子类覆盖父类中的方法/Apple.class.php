<?php 
require_once 'Fruit.class.php';
class Apple extends Fruit{
	private	$color;

	public function __construct($color){
		$this->color = $color;
	}

	public function getColor(){
		return '苹果的颜色是'.$this->color;
	}
}
?>