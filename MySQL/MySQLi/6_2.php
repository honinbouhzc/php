<?php 
session_start();
header ( "Content-type: text/html; charset=utf-8" ); 

//if ($_SESSION['user'] == true) {

$conn = new Mysqli('localhost','root','','db09');
$conn->query('set names utf8');

if ($conn->connect_error) {
	die("connection failure".$conn->connect_error);
}

$read = "select name,email,address from tb_reg";
$res = $conn->query($read);

while ($obj=$res->fetch_object()) {
?>
	<table border="1" align="center">
		<tr>
			<th>姓名</th><th>邮箱</th><th>地址</th>
		</tr>

		<tr>
			<td><?php echo $obj->name; ?></td>
			<td><?php echo substr($obj->email,0,20); ?></td>
			<td><?php echo $obj->address; ?></td>
		</tr>
	</table>
	

<?php	
}
// }else{
// 	echo "您不具有访问权限";
// }
?>