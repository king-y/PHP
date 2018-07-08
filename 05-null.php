<?php 

// nothing
// 三种情况直接为空值



$a = null;

var_dump($a);



var_dump(@$b);



$c = 10;
unset($c);
var_dump(@$c);



 ?>