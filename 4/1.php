<?php
function z1($arr){
	echo("ZADANIYE 1<br>");
	$arr[0] = substr($arr[0],0,1);
	$arr[1] = substr($arr[1],0,1);
	$arr[3] = "";
	echo(implode(".",$arr));
}
function z2($str){
	echo("<br>ZADANIYE 2<br>");
	$str = strrev($str);
	echo($str);
}
function z3($a,$b){
	echo("<br>ZADANIYE 3<br>");
	if($a >= $b*2){
		echo("true");
	}
	else{
		echo("false");
	}
}
function z4($arr,$a){
	echo("<br>ZADANIYE 4<br>");
	$i = $arr[array_search($a,$arr)];
	if($i === false){
		return 0;
	}
	else return $i;
}

function z5($barr){
	echo("<br>ZADANIYE 5<br>");
	$barr = explode(" ", $barr);
	$i = 0;
	foreach($barr as $value){
		$barr[$i] = ucfirst($value);
		$i++;
	}
	print_r($barr);
}

function z6($str){
	echo("<br>ZADANIYE 6<br>");
	

}

z1(["Oleg","Petrov"]);
z2("da");
z3(4,8);
echo(z4(["von","aga","da"],"aga"));# Оно должно работать, но почему-то нет
z5("oleg petr hren drin dron");
?>