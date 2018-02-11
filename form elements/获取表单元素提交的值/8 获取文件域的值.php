<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0">
	<form name="form1" method="post" action="">
		<tr><td align="center" colspan="2">获取文件域的值</td></tr>
		<tr>
			<td width="95" align="center"><span class="style2">上传:</span></td>
			<td width="200"><input type="file" name="load" id="file" size="15" maxlength="80"></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="sub" value="提交"></td>
		</tr>
		<?php
	if (isset($_POST['sub'])) {
		$file =  $_POST['load'];
	}
	?>

		<tr>
			<td align="center" class="style2">输出上传的值:</td>
			<td class="style2"><?php echo $file; ?></td>
		</tr>

		
	</form>
</table>
</body>
</html>