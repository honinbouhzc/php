<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<table>
<form name="form1" method="post" action="">
	<tr>
		<td width="80" height="20" align="center"><span class="style2">意见主题：</span></td>
		<td width="194">
			<select name="select" size="1">
				<option>公司发展</option>
				<option>公司制度</option>
				<option selected="selected">后勤服务</option>
				<option>员工薪资</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td align="center" valign="middle" class="style2">意见内容:</td>
		<td><textarea name="yijian" cols="22" rows="3"></textarea></td>
	</tr>

	<tr>
		<td>&nbsp;</td><td><input type="submit" name="sub" value="提交"></td>
	</tr>
	<?php
		if(isset($_POST['sub'])){
			$textarea = $_POST['yijian'];
			$select = $_POST['select'];
		}
	?>
	<tr><td colspan="2" class="style2">获取下拉列表的值：<?php echo $select; ?></td></tr>
	<tr><td colspan="2" class="style2">意见和内容:<?php echo $textarea; ?></td></tr>
</form>
</table>	
</body>
</html>