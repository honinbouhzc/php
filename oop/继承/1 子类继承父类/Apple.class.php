<?php 
require_once 'Fruit.class.php';
class Apple extends Fruit{
	public function __construct($color,$shape){
		parent::__construct($color,$shape);
	}
}


?>