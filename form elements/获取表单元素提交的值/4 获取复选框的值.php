<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<table width="260" border="1" cellpadding="0" cellspacing="0" bordercolor="#06c">
<form name="form1" action="" method="post">
	<tr align="center"><td height="25" colspan="2"><span class="style1">个人爱好统计</span></td></tr>
	<tr>
		<td width="98" height="20" align="center"><span>用户名</span></td>
		<td width="156"><input type="text" name="username" id="username" size="20" maxlength="30"></td>
	</tr>

	<tr>
		<td height="60" align="center" class="style2">个人爱好选项</td>
		<td valign="middle">
			<p class="style2">
				体育:<input type="checkbox" name="tiyu" value="体育">
				文学:<input type="checkbox" name="wenxue" value="文学">
			</p>

			<p class="style2">
				音乐:<input type="checkbox" name="yinyue" value="音乐">
				美术:<input type="checkbox" name="meishu" value="美术">
			</p>
		</td>
	</tr>

	<tr>
		<td height="20" align="center">&nbsp;</td>
		<td valign="middle"><input type="submit" name="sub1" value="提交"></td>
	</tr>
</form>	
<?php 
	if (isset($_POST['sub1'])) {
		$user  = $_POST['username'];
		$tiyu  = $_POST['tiyu'];
		$wenxue = $_POST['wenxue'];
		$yinyue = $_POST['yinyue'];
		$meishu = $_POST['meishu'];
	}
?>	
	<tr>
		<td height="20" align="center" class="style2"><?php echo $user ?></td>
		<td valign="middle" class="style2">
			<?php echo $tiyu; ?>&nbsp;<?php echo $wenxue; ?>&nbsp;<?php echo $yinyue; ?> &nbsp;<?php echo $meishu; ?>
		</td>
	</tr>
</table>
</body>
</html>