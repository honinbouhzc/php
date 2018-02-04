<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<table width="283"	height="85" border="1" cellpadding="0" cellspacing="0">
	<form name="form1" method="post" action="">
		<tr>
			<td width="114" height="30" align="center" class="style1">管理员:</td>
			<td width="163" height="30" align="center"><input type="text" name="username" id="username4" size="20"></td>
		</tr>
		<tr>
			<td align="center" class="style1">密码:</td>
			<td height="30" align="center"><input type="password" name="password" id="password" value="" size="20"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="25">&nbsp;&nbsp;<input type="submit" name="Submit" value="提交"></td>
		</tr>
	</form>	
</table>

<?php 
	if ($_POST['Submit']) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
?>
<table width="284" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<td height="25" align="center" class="style1"><?php echo "管理员：".$username; ?></td>
	</tr>
	<tr>
		<td height="25" align="center" valign="middle" class="style1"><?php echo "密码：$password"; ?></td>
	</tr>
</table>
</body>
</html>