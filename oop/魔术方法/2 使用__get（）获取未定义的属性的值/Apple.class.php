<?php 
class Apple{
	private $color;
	private $shape;
	private $weight;

	public function __contruct($color,$shape,$weight){
		$this->color = $color;
		$this->shape = $shape;
		$this->weight = $weight;
	}

	public function getProperty(){
		return '这个苹果重'.$this->weight.'是'.$this->color.'色'.$this->shape.'的!<br>';
	}

	public function __get($name){ //使用__get()打印未定义属性的名称
		echo '在类中未定义属性'.$name;
	}
}

?>