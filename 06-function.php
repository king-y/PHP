<?php 


// 1.unset() 			删除变量
// 
// 2.empty()			判断变量是否为空

$a = null;
$a = false;
$a = 0;
$a = 0.0;
$a = '';
$a = [];
$a = '0';
var_dump(empty($b));
var_dump(empty($a));


// 3.isset()			判断变量是否设置

$a = null;
$a = false;
$a = 0;
$a = 0.0;
$a = '';
$a = [];
$a = '0';
var_dump(isset($b));
var_dump(isset($a));





 ?>