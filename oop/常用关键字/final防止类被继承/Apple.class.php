<?php 
require_once 'Fruit.class.php';
final class Apple extends Fruit{
	private $shape;

	public function __construct($color,$sharp){
		parent::__construct($color);
		$this->sharp = $sharp;
	}

	public function getSharp(){
		return $this->sharp;
	}
}



?>