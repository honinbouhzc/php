<?php 
abstract class Strategy{//定义抽象的基类
	abstract public function fun();//定义抽象方法
}

class Child1 extends Strategy{//定义子类1，使其继承基类
	public function fun(){//实现基类的方法

	}
}

class Child2 extends Strategy{//定义子类2，使其继承基类
	public function fun(){//实现基类的方法
	}
}

if (condition1 == true ) {//如果条件1为真
	$obj =new Child1();//生成子类1的实例对象
}else{
	$obj =new Child2();//生成子类2的实例对象
}
$obj->fun();

?>