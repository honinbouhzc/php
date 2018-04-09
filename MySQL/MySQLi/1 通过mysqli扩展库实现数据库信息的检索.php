<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	请输入商品名称：<input type="text" name="goodsName">
	<input type="submit" name="sub" value="查找">
</form>
<?php 
	header('content-type:text/html;charser:utf-8');
	if (!$_POST['sub']=='') { //判断用户是否提交了表单
		$conn = new Mysqli('localhost','root','','db09');//实例化一个mysqli类
		$conn->query('set name utf8');

		if ($conn->connect_error) { //如果连接错误，则输出异常
			die('Connect error').$conn->connect_error;
		}

		$sql = "select * from tb_goods where name  like '%".$_POST['goodsName']."%'"; //获得提交关键字，并执行查询
		$res = $conn->query($sql);

		$row = $res->fetch_assoc();//获得查询结果集

		//var_dump($row);


	}else{
		echo "没有找到该商品";
	}

?>
<table border="1"><tr>
	<th>商品名称</th>
	<th>商品价格</th>
	<th>商品数量</th>
	<th>进货日期</th>
	</tr>

	<tr> 
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['shuliang']; ?></td>
		<td><?php echo $row['addtime']; ?></td>
	</tr>	
</table>
</body>
</html>