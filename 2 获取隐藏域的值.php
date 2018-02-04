<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php $hidden = 27; ?>
<table width="220" border="1" cellpadding="0" cellspacing="0">
	<form name="form1" method="post" action="">
		<tr>
			<td width="151" align="center" class="style1">隐藏域的值: <?php echo $hidden ; ?><input type="hidden" name="ID" value="<?php echo $hidden; ?>"></td>
			<td width="60" height="25"><input type="submit" name="sub1" value="提交"></td>
		</tr>
	<?php 
	if ($_POST['sub1']) {
		$hidden = $_POST['ID'];
	}
	?>
		<tr>
			<td height="25" colspan="2" align="center" class="style1">获取隐藏域的值：<?php echo $hidden; ?></td>
		</tr>
	</form>
</table>

</body>
</html>