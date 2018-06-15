<!--
*
*
* @Author: wyy
* @Date:   2018-06-15 12:44:56
* @Email:  2752154874@qq.com
* @Last Modified by:   wyy
* @Last Modified time: 2018-06-15 13:14:50
*
*
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php variable</title>
</head>
<body>
	<!-- 变量用于存储数据的容器 -->
	<?php
	$x=5;
	$y=7;
	$y=$x+$y;
	echo $y;
	?>

<!--
*PHP 变量规则：
*变量以 $ 符号开始，后面跟着变量的名称
*变量名必须以字母或者下划线字符开始
*变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
*变量名不能包含空格
*变量名是区分大小写的（$y 和 $Y 是两个不同的变量）
 -->
<!--
*PHP是一门弱类型语言
*PHP会根据变量的值，自动把变量转换为正确的数据类型
-->
<?php
	$text="hello,nice to meet you."
?>

<!--
*变量的作用域是脚本中变量可被引用/使用的部分。

*PHP 有四种不同的变量作用域：

*local
*global
*static
*parameter
-->


<?php
$x=5; // 全局变量  定义在函数外部的就是全局变量，它的作用域从定义处一直到文件结尾。

function myTest()
{
    $y=10; // 局部变量  函数内定义的变量就是局部变量，它的作用域为函数定义范围内
    echo "<p>测试函数内变量:<p>";
    echo "变量 x 为: $x";
    echo "<br>";
    echo "变量 y 为: $y";
}

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
echo "变量 y 为: $y";
?>

<!-- 
函数内访问全局变量需要 global 关键字或者使用 $GLOBALS[index] 数组
-->

<?php
//global 关键字用于函数内访问全局变量。
//在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字 
$x=5;
$y=10;

function myTest()
{
    global $x,$y;
    $y=$x+$y;
}

myTest();
echo $y; // 输出 15
?>

<?php
//PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 
//index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量。
$x=5;
$y=10;
 
function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 
 
myTest();
echo $y;
?>

<?php
//保证某个就变量不要被删除
function myTest()
{
    static $x=0;
    echo $x;
    $x++;
}
 
myTest();
myTest();
myTest();
?>

<?php
//参数是通过调用代码将值传递给函数的局部变量。
function myTest($x)
{
    echo $x;
}
myTest(5);
?>

<!-- 在 php 中函数是有独立的作用域，所以局部变量会覆盖全局变量，即使局部变量中并定义没有全局变量相同的变量，也会被覆盖。如下： -->

<?php
$a=5;
$b=3;
function t()
{
    echo $a-$b; // 输出 0
}
t();
?>
<!-- 要想在函数中直接使用全局变量可以通过 global 关键字声明或者通过 php 中自定义的 $GLOBALS 数组获取: -->

<?php
$a=5;
$b=3;
function t1()
{  
    global $a,$b;
    echo $a-$b;  // 输出 2
}
t1();

echo PHP_EOL;

function t2()
{
    echo $GLOBALS['a']-$GLOBALS['b'];  // 输出 2
}
t2();
?>
</body>
</html>