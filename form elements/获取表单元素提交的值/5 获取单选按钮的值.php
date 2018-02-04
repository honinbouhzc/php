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
				<label><input type="radio" name="radiogroup" value="体育">体育</label>
				<label><input type="radio" name="radiogroup" value="文学">文学</label>
				<label><input type="radio" name="radiogroup" value="美术">美术</label>
				<label><input type="radio" name="radiogroup" value="音乐">音乐</label>			
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
		$radiogroup = $_POST['radiogroup'];
	}
?>
	<tr>
		<td height="20" align="center" class="style2"><?php echo $user; ?></td>
		<td valign="middle" class="style2">
			<?php echo $radiogroup; ?>
		</td>
	</tr>
</table>
</body>
</html>
