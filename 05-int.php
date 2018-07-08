<?php 

//整型





//最大整型

	echo PHP_INT_MAX;   

	echo '<br>';

// 查看数据类型

	var_dump(PHP_INT_MAX);

//数值大于最大整数将转为浮点类型

	$x=2147488888888;
	echo $x;
	var_dump($x);

//判断整型

	var_dump(is_int($x));

	var_dump(is_int(100));
	
	echo '<br>';
//进制

	// 0b 	二进制
	// 0	八进制
	// 0x 	十六进制
	$a = 100;
	echo $a;
	echo '<br>';




	$a=0b10;
	echo $a;
	echo '<br>';


	$a=0xaa;
	echo $a;
	echo '<br>';


	$a=045;
	echo $a;
	echo '<br>';

 ?>