<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<table width="300" height="182" border="1" cellspacing="0" cellpadding="0">
	<form name="form1" method="post" action="">
		<tr align="center">
			<td height="30" colspan="2"><span class="style1">明日科技留言板系统</span></td>
		</tr>

		<tr>
			<td width="83" height="25" align="center"><span class="style4">用户名</span> </td>
			<td><input type="text" name="username" id="username"></td>
		</tr>

		<tr>
			<td align="center" class="style4">留言内容</td>
			<td height="50"><textarea name="test" cols="25" rows="5" id="test">欢迎大家访问我们的论坛</textarea></td>
		</tr>

		<tr align="center">
			<td height="25" colspan="2"><input type="submit" value="提交" name="sub1"></td>
		</tr>
<?php 
	if (isset($_POST['sub1'])) {
		$username = $_POST['username'];
		$test = $_POST['test'];
	}
?>
		<tr align="center">
			<td height="25" colspan="2"><span class="style4">用户名：<?php echo $username; ?></span></td>
		</tr>

		<tr>
			<td height="25" colspan="2" align="center"><span class="style4">文本：<?php echo $test; ?></span></td>
		</tr>
	</form>
</table>
</body>
</html>