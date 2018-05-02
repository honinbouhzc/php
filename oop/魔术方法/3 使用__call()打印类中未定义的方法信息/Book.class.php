<?php 
class Book{
	private $name;
	private $value;

	public function __construct($name,$value){
		$this->name = $name;
		$this->value = $value;
	}

	public function getProperty(){
		return $this->name.'的价格是'.$this->value.'元';
	}

	public function __call($name,$arguments){
		echo $name.'方法没有被定义';
	}
}

?>