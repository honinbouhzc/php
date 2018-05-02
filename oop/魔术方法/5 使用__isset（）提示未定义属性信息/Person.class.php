<?php 
class Person{
	private $name;
	private $age;
	private $weight;

	public function __construct($name,$age,$weight){
		$this->name = $name;
		$this->age = $age;
		$this->weight = $weight;
	}

	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}

	public function getWeight(){
		return $this->weight;
	}

	public function __isset($name){
		echo $name.'在类中没有被定义';
	}
}
?>