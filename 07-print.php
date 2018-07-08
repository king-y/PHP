<?php 



// echo

$var = 2;
$var = 2.0;
$var = 'abc';
// $var =  false;
// $var = true;
// $var = [];
// $var = new stdClass;
$var = fopen('01-array.php','r');
// $var = null;

echo $var;

echo "<hr>";

// print

$var = 2;
$var = 2.0;
$var = 'abc';
// $var =  false;
// $var = true;
// $var = [];
// $var = new stdClass;
$var = fopen('01-array.php','r');
// $var = null;


print($var);


echo "<hr>";

// print_r


$var = 2;
$var = 2.0;
$var = 'abc';
// $var =  false;
// $var = true;
$var = [];
$var = new stdClass;
$var = fopen('01-array.php','r');
// $var = null;

print_r($var);

echo "<hr>";

$var = 2;
$var = 2.0;
$var = 'abc';
$var =  false;
$var = true;
$var = [];
$var = new stdClass;
$var = fopen('01-array.php','r');
$var = null;

var_dump($var);

	echo "<hr>";

	for ($i=1; $i < 10000; $i++) { 
		$y[] = $i;
	}

	// var_dump($y);
	print_r($y);

 ?>
