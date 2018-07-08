<?php 
header("content-type:text/html; charset=utf-8");	
/*
1.变量
		
		格式: $name = value;
 */
$a=10;
$b=20;
echo $a+$b;


// 2.未定义变量:没有值的变量
echo $z;

//3.命名规范
		//由数字,字母和下划线组成,但是不能以数字开头
$_name = "胖";
echo $_name;

		//支持中文不推荐
$哈哈="哈哈哈哈哈";
echo  $哈哈;

	// 4.区分大小写
	$a="嗯哼";
	echo "$a";
	echo "$A";

 ?>