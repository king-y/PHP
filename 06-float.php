<?php 

// 1.精度 有效位14位
	$a=1.123456123456123456;
	echo $a;
	echo '<br>';

	$a=0.0000000123123123123123123123123123131231;
	echo $a;
	echo '<br>';

//科学计数法

	$a=2e100;
	echo  $a;
	echo '<br>';
	var_dump($a);

//判断

	var_dump(is_float($a));
	var_dump(is_float(1));

//不要用浮点做运算

	// if ((0.1+0.1)==0.2) {
	// 	yes;
	// }else{
	// no;
	// }

 ?>