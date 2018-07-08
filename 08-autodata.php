<?php 


// bool -----> int

	var_dump(false + 1);  //fasle=0
	var_dump(true +1 );   //true=1

// bool -----> float

	var_dump(false + 1.0);  //fasle=0.0
	var_dump(true + 1.0 );   //true=1.0

// bool ----->string  无法自动转换




// string ----->int

	var_dump( '10' + 10 ); 	// '10'---10
	var_dump( 'de' + 10 ); 	// 'de'---0
	var_dump( '1a' + 10 );  // '1a'--- 1
	var_dump( 'asd100' + 10 );  // 'asd100' --- 0
	var_dump( '1a2c3d' + 10 );  // '1a2c3d' --- 1

// string----->float

	var_dump('1.0' + 11);     //1.2---1.2
	var_dump('w.m' + 11);     //整型---0
	var_dump('1.b' + 11);	  //1.b---1.0
	var_dump('a.1' + 10);	 //a.1----0
	var_dump('1.2.3' );		//1.2
	var_dump('1.2e.3'+10);		//1.2
	var_dump('1e3.2'+10);		//1000
	var_dump('1e.2'+10);		//整型1
	var_dump('true'+10);		//整型0



// int------>float
	var_dump(1+1.0);		//1---1.0

 ?>