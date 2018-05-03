<?php 
interface DB{
	public function insert();
	public function delete();
	public function update();
	public function select(); 
}

class MySQL implements DB{
	public function insert(){

	}

	public function delete(){

	}

	public function update(){

	}

	public function select(){

	}
}


class Oracle implements DB{
	public function insert(){

	}

	public function delete(){

	}

	public function update(){

	}

	public function select(){

	}
}

class SQLServer implements DB{
	public function insert(){

	}

	public function delete(){

	}

	public function update(){

	}

	public function select(){

	}
}

class DBFactory{
	public static function getDB($tyoe){
		switch ($type) {
			case 'MySQL':
				return new MySQL();
				break;
			case 'Oracle':
				return new Oracle();
				break;
			case 'SQLServer':
				return new SQLServer();
				break;
		}
	}
}
?>