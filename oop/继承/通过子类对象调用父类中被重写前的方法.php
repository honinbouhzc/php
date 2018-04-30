<?php 
class Parent1{
	public function fun(){
		return 'Parent';
	}
}

class Child extends Parent1{
	private $parent;
	public function __construct(){
		$this->parent = new Parent1();
	}

	public function getParent(){
		return $this->parent;
	}

	public function fun(){
		return 'Child';
	}	
}

$child = new Child();
echo $child->getParent()->fun();//以链状方式调用父类未被重写的fun（）方法
?>