<?php

/*
* @Author: wyy
* @Date:   2018-06-15 16:34:16
* @Email:  2752154874@qq.com
* @Last Modified by:   wyy
* @Last Modified time: 2018-06-15 17:01:42
 */

/*
在 PHP 中，array() 函数用于创建数组：

array();
在 PHP 中，有三种类型的数组：

数值数组 - 带有数字 ID 键的数组
关联数组 - 带有指定的键的数组，每个键关联一个值
多维数组 - 包含一个或多个数组的数组
 */

// $brid=array("small","big","mid");
// echo "you maybe are " .$brid[0] . "," .$brid[1] ."and" .$brid[2] . ".";


/*遍历数组中的值*/

// $test = array('s','t','u','v','w','x','z');
// $testlength=count($test);
// for ($i=0; $i < $testlength ; $i++) { 
// 	echo "$test[$i]";
// 	echo "<br />";
// }



/*关联数组*/

// $age = array('Tom' =>90 , 'Tim' =>80 , 'Jom' =>50 , );
// echo "Tom is " .$age['Tom'] . " years old ";

/*便利关联数组*/

// foreach ($age as $x=>$x_value) {
// 	echo "Key=" .$x ." , value=" .$x_value;
// 	echo "<br>";
// }


/*
对关联数组进行升序和降序排列应使用

asort() - 根据关联数组的值，对数组进行升序排列
ksort() - 根据关联数组的键，对数组进行升序排列
arsort() - 根据关联数组的值，对数组进行降序排列
krsort() - 根据关联数组的键，对数组进行降序排列
 */

?>