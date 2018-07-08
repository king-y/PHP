<?php

/*
* @Author: wyy
* @Date:   2018-07-06 15:15:44
* @Email:  2752154874@qq.com
* @Last Modified by:   wyy
* @Last Modified time: 2018-07-06 15:55:54
 */



$s=0;
$m=1;

var_dump($s,$m);
var_dump($s=10 || $m);
var_dump($s,$m);

echo "<br>";

$s=0;
$m=1;

var_dump($s,$m);
var_dump($s || $m=3);
var_dump($s,$m);

echo "<br>";

$s=1;
$m=2;

var_dump($s,$m);
var_dump($s=0 || $m=0);
var_dump($s,$m);


echo "<br>";

$s=1;
$m=2;

var_dump($s,$m);
var_dump($s=4 && $m=2 || $m=0);
var_dump($s,$m);

?>