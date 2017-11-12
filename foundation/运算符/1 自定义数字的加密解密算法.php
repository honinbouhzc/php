<?php 
//输出表单
echo "<form action='' method='post'>";
echo "数字口令:<input type='text' name='text'>";
echo "<input type='submit' name='sub' value='确定'>";
echo "</form>";

//定义常量
define('PI',3.1415926535);

//自定义加密算法
function encrypt($str){
	return $str = $str + PI ;//将口令与常量相加
}

//自定义解密算法
function decrypt($str){
	return $str = $str - PI ;//将加密后的口令与常量相减
}

//通过POST方法传参
if($_POST['text']){
	echo "加密口令&nbsp;&nbsp;".encrypt($_POST['text'])."<br>";//取得加密后的结果
	$_SESSION['pwd'] = encrypt($_POST['text']);//保存再session中
?>
<!-- 超链接 -->
<a href="1%20自定义数字的加密解密算法.php?pwd=1">解密口令</a>

<?php 
}
//判定地址栏中是否存在pwd
if(isset($_GET['pwd'])){
	//解密口令并输出
	echo "解密口令&nbsp;&nbsp;".decrypt($_SESSION['pwd']);
}
?>