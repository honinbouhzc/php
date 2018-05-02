<?php
//单例模式指在程序应用范围内只对指定的类创建一个实例，也就是说单例模式只包含一个对象，就是单例本身
# 1 单例模式的类通常拥有一个私有的构造方法和一个私有的克隆方法，这样可以确保用户无法通过创建对象或者克隆的方式对其进行实例化
# 2 单例模式的类包含一个静态的用于保存当前类实例的成员变量，以及一个静态方法，该静态方法负责对其本身进行实例化。然后将实例化后的对象保存到类中所声明的静态变量中，从而确保一个对象被创建

class Singleton{

	private static $instance; //保存当前类的实例后的对象

	public static function getInstance(){ //静态方法，返回类实例
		if (null == self::$instance) { //如果没有定义
			self::$instance = new Db();
		}
		return self::$instance;//返回当前对象
	}

	private function __construct(){//私有的构造方法

	}

	private function __clone(){//私有的克隆方法
	}
}

$singleton = Singleton::getInstance();//获得类的对象

?>