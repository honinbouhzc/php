<?php 
class db{
	private $host;//mysql数据库服务器地址
	private $username;//用户名
	private $password;//密码
	private $dbname;//数据库名称
	private $charset;//数据库编码

	public function __construct($host,$username,$password="",$dbname,$charset="utf-8"){//使用构造方法来实现类的初始化
		$this->host = $host;//初始服务器地址
		$this->username = $username;//初始用户名
		$this->password = $password;//初始密码
		$this->dbname = $dbname;//初始数据库名
		$this->charset = $charset;//初始数据库字符集
	}

	public function getConn(){//成员方法：数据库连接方法
		$mysqli = new Mysqli($this->host,$this->username,$this->password,$this->dbname);//获得数据库连接的句柄
		if ($mysqli->connect_error) {//
			die('连接数据库失败&nbsp;'.$mysqli->connect_error);//
			@$mysqli->query('set names utf8');//设置字符集，用@屏蔽运行期的错误
			return $mysqli;//返回连接句柄
		}
	}
}


?>