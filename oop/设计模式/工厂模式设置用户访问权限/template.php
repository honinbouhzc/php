<?php 
abstract class Father{ //定义基类

}

class Child1 extends Father{ //定义子类1，继承基类

}

class Child2 extends Father{//定义子类2，继承基类

}

class Factory{//定义工厂类
	public static function create($condition){ //定义创建对象的方法
		if ($condition == '条件1') {
			return new Child1();
		}elseif ($condition == '条件2') {
			return new Child2();
		}
	}
}

?>