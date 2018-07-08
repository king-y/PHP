<?php 

header("content-type:text/html; charset=utf-8");


// 1

	$a[] = 10;

	var_dump($a);

// 2

	$b = ['三高','毛蛋','大王','卢姥爷'];

	var_dump($b);

// 3

	$c = array('杨贵妃','貂蝉','王昭君','???');

	var_dump($c);

// 增删改

	echo $c[3];
	var_dump($c[3]);


//改

	$c[3]='楚国';
	var_dump($c[3]);

// 删

	unset($c[2]);
	var_dump($c);

//判断

$y = [100,10.01,true,'曹超',['三高','毛蛋','大王','卢姥爷'],new stdClass, fopen('01-array.php','r'),null];

var_dump($y);

 ?>