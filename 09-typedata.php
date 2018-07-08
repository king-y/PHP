<?php 

header("content-type:text/html; charset=utf-8");
// 强制类型转化

$str = '节目区域材料欢迎提出领域我不欢迎，我们';

var_dump( (int)$str );
var_dump( (float)$str );
var_dump( (bool)$str );
var_dump( (array)$str );
var_dump( (object)$str );
var_dump($str);
echo  '<hr>';

var_dump(intval($str));
var_dump(floatval($str));
// var_dump(boolval($str));
var_dump(strval($str));
var_dump($str);
echo  '<hr>';

settype($str,'int');
var_dump($str);
settype($str,'string');
var_dump($str);

 ?>