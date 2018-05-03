<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
require_once 'UserPermission.class.php';
require_once 'User.db.php';

echo '<table>';
foreach ($users as $user) { //遍历用户权限数组
	$userPermission = UserPermissionFactory::getUser($user['type']);//获得用户权限对象

	echo '<tr>';
	echo '<td>'.$user['name']."</td>";
	echo str_replace('Admin', '管理员', str_replace('Member', '会员', str_replace('Guest', '游客', $user['type'])));
	echo '<td>'.$userPermission->select()?'是':'否'."</td>";
	echo '<td>'.$userPermission->add()?'是':'否'."</td>";
	echo '<td>'.$userPermission->edit()?'是':'否'."</td>";
	echo '<td>'.$userPermission->delete()?'是':'否'."</td>";
	echo '</tr>';
}

echo '</table>';
?>
</body>
</html>