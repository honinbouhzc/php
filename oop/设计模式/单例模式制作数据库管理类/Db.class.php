<?php 
class Db{
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

	private function getConnId(){
		$config = parse_ini_file(dirname(__FILE__).'/config.php');//解析配置文件
		$dsn= 'mysql:host='.$config['host'].';$dbname='.$config['dbname'];//配置数据源名称
		$pdo = new PDO($dsn,$config['username'],$config['password']);//实例pdo对象
		$pdo->query('set names'.$config['charset']);//设置字符集
		return $pdo;//返回pdo对象
	}

	public function query($sql){
		$pdo = $this->getConnId();//获取pdo对象
		$sqlType = trim(substr($sql,0,6));//获取查询语句类型

		if ($sqlType == 'update' || $sqlType == 'delete' || $sqlType == 'insert' ) {
			return $pdo->query($sql);
		}elseif ($sqlType == 'select') {
			$tmpArray = array();//定义二维数组
			$results = $pdo->query($sql);//执行select语句
			foreach ($results as  $result) {//将结果保存到二维数组中
				array_push($tmpArray, $result);
			}
			return $tmpArray;
		}else{
			return null;//其他类型返回null
		}
	}
}


?>