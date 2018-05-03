<?php 
abstract class UserPermission{ //定义抽象用户权限类
	public function select(){
		return true;
	}

	public function add(){
		return false;
	}

	public function edit(){
		return false;
	}
	 public function delete(){
	 	return false;
	 }
}


class GuestPermission extends UserPermission{ //定义游客权限类

}

class MemberPermisson extends UserPermission{ //定义会员权限类
	public function add(){
		return true;
	}
}

class AdminPermission extends UserPermission{ //定义管理员权限类
	public function add(){
		return true;
	}

	public function edit(){
		return true;
	}

	public function delete(){
		return true;
	}
}

class UserPermissionFactory{ //定义用户权限工厂
	public static function getUser($userType){
		switch ($userType) {
			case 'Guest':
				return new GuestPermission();
				break;
			
			case 'Member':
				return new MemberPermisson();
				break;

			case 'Admin':
				return new AdminPermission();
				break;	
		}
	}
}

?>