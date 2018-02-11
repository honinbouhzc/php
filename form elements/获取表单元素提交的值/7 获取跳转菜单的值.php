<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function MM_jumpMenu(targ,selObj,restore){
			eval(targ+".location='" + selObj.options[selObj.selectedIndex].value+"'");
			if(restore)selObj.selectedIndex = 0 ;
		}
	</script>
</head>
<body>
<table width="300" border="1" cellpadding="0" cellspacing="0">
	<form name="form1">
		<tr align="center"> 
			<td height="25" colspan="2"><span class="style1">获取跳转菜单的值:</span></td>
		</tr>

		<tr>
			<td width="122" height="20" align="center"><span class="style2">选择要跳转的位置:</span></td>
			<td width="172" class="style2">
				<select name="menu1" size="1" onchange="MM_jumpMenu('parent',this,0)">
					<option value="http://www.baidu.com">百度</option>
					<option value="http://www.hupu.com">虎扑</option>
				</select>
			</td>
		</tr>
	</form>
</table>
</body>
</html>