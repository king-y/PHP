<?php 

/*
可变变量:将变量的值给另一变量作为名字使用

引用变量:
		传值:将一个变量的值赋给另一个变量
		传址:将一个变量的内存地址赋给另一个变量

 */

$a="teach";
$teach="mathteach";
echo $teach;



$b=10;
$c=$b;
echo $c;


$x=10;
$y=&$x;
echo $y;
 ?>