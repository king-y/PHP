<?php

/*
* @Author: wyy
* @Date:   2018-06-15 14:29:19
* @Email:  2752154874@qq.com
* @Last Modified by:   wyy
* @Last Modified time: 2018-06-15 15:48:23
 */
header("Content-Type: text/html;charset=utf-8");
$num=$_GET["num"];
	switch($num){
		case $num>=90 && $num<=100:
			echo "你的成绩等级为A";
			break;
			case $num>=80 && $num<90:
				echo "你的成绩等级为B";
				break;
				case $num>=60 && $num<80:
					echo "你的成绩等级为C";
					break;
					case $num>=0 && $num<60:
						echo "你的成绩等级为D";
						break;
						default:
							echo "你输入的成绩有误，请重新输入.";
							break;
}

?>