<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" style="margin: 0px; padding:0px;">  
   请选择颜色：<br>    
        　红色：<input type="radio" name="color" value="0">　
        白色：<input type="radio" name="color" value="1">　
        黑色：<input type="radio" name="color" value="2">　
        宝石蓝：<input type="radio" name="color" value="3"><br>

   请选择类型：<br>    
        　奔驰：<input type="radio" name="type1" value="0">　
        宝马：<input type="radio" name="type1" value="1">　
        奥迪：<input type="radio" name="type1" value="2">　
        捷达：<input type="radio" name="type1" value="3"><br>
   <input type="submit" value="提交"> <br>    
  </form> 
  <font color='#0000ff'>
  	<?php 
  		$color = $_POST['color'];
  		$type = $_POST['type1']; 
  		require_once 'Car.class.php';
  		$car = new Car($color,$type);
  		if (isset($color) && isset($type)) {
  			echo $car->getInfo();
  		}
  	?>
  </font>     
</body>
</html>