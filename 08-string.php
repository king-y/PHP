<?php 

//字符串用于非数字形态,比如字母,标点,汉字,,,

header("content-type:text/html; charset=utf-8");	


//单引号,双引号  单行

$a = "礼物别的批发程序突出版主，处罚足球注册。";
echo $a;

$b = '每天不详交通色情收入本帖广大农，浏览说。';
echo $b;

//headdoc结构  多行

<<<bot
部落目录给他微软清晰分类窗口是有治疗智能不但鼓，将会早已你们品种永远正式深入抓住，许可证以便天津讨。
你们加大美元常委会表面供求倒是位置论。
bot;




//判断string
 var_dump( is_string($a));


// 判断numberic
$c="123";
var_dump(is_numeric($c));

// 判断scalar
$b="ad123";
var_dump(is_scalar($b));


 ?>