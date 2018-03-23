<html>
	<body style="font-size:16px; color:blue; font-family:'微软雅黑'">
	<form action ="" method ="post" name ="form1">
		IP地址：<input type="text" name="ip" size="18" ><br>
		对应数字<input type="text" name="ipNum" size="18" >
		<input name="Button" type="button" class="buttoncss"onClick="deal(form1)"value="转换" />
	</form>
	</body>
</html>

<script language="javascript">
function deal(myform){     //自定义函数
	var ip=form1.ip.value;  //定义变量
	objExp=/(\d+).(\d+).(\d+).(\d+)/;  //正则表达式
	if(ip==""){  //条件判断
		alert("请输入IP地址!");form1.ip.focus();return;
	}
	if(objExp.test(ip)){
		myform.ipNum.value=convert(ip);
	}else{
		alert("您输入的IP地址不合法!");form1.ip.focus();return;
	}
}
function convert(ip){  //自定义函数
	ip=ip.split("."); 
	vip=ip[0]*255*255*255+ip[1]*255*255+ip[2]*255+ip[3]*1; //转换程式
	return vip; //返回值
}
</script>
