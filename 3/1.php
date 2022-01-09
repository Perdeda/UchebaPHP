<?php
function z1($d1,$d2){
	echo("ZADANIYE 1<br>");
	if($d1 > $d2){
		echo($d1."<br>");
		echo($d2."<br>");
	}
	else{
		echo($d2."<br>");
		echo($d1."<br>");
	}
}
function z2($a,$b,$c){
	echo("ZADANIYE 2<br>");
	if(($a<$b)&&($b<$c)){
		echo("YES"."<br>");
	}
	else{
		echo("NO"."<br>");
	}
}
function z3($a,$b,$c){
	echo("ZADANIYE 3<br>");
	if(($a >= $b)&&($b >= $c)){
		$a*=2;
		$b*=2;
		$c*=2;
	}
	else{
		$a = abs($a);
		$b = abs($b);
		$c = abs($c);
	}
	echo($a."<br>");
	echo($b."<br>");
	echo($c."<br>");
}
function z4($x,$y){
	echo("ZADANIYE 4<br>");
	if($x == $y){
		echo("x i y ne doljni bit ravni");
	}
	else{
		$ytmp = 0;
		$xtmp = 0;
		if($x > $y){
			$ytmp = y;
			$y = ($x + $y)/2;
			$x = $x*2 * $ytmp*2;
		}
		else{
			$xtmp = $x;
			$x = ($x + $y)/2;
			$y = $xtmp*2 * $y*2;
		}
	}
	echo($x."<br>".$y."<br>");
}

function z5($arr){
	echo("<br>ZADANIYE 5<br>");
	foreach($arr as $value){
		if($value >= 5){
			$value = 1;
		}
		else $value = 0;
		echo($value);
	}
}
function z6plus($a,$b) {return ($a+$b);}
function z6minus($a,$b) {return ($a-$b);}
function z6divide($a,$b) {return ($a/$b);}
function z6multipl($a,$b) {return ($a*$b);}
function z6($type,$a,$b){
	echo("<br>ZADANIYE 5<br>");

	switch($type){
		case 1:echo(z6plus($a,$b)." - plus<br>");break;
		case 2:echo(z6minus($a,$b)." - minus<br>");break;
		case 3:echo(z6divide($a,$b)." - divide<br>");break;
		case 4:echo(z6multipl($a,$b)." - multipl<br>");break;
	}
}
function z7($arr,$arr1){
	if(strlen($arr) > strlen($arr1)){
		echo($arr1.$arr.$arr1);
	}
	else{
		echo($arr.$arr1.$arr);
	}
}
function z8($a,$n){
	$gen1 = array();
	$gen2 = array();
	$j = 0;
	$k = 0;
	for($i = 1; $i <= $n*2;$i++){
		if($i % 2 != 0){
			$gen1[$j] = $i;
			$j++;
		}
		else{
			$gen2[$k] = $i;
			$k++;
		}
	}
	$gen2 = array_reverse($gen2);
	print_r($gen2);
	$key = 0;
	if($a % 2 == 0){
		$key = array_search($a,$gen2);
		return $gen1[$key];
	}
	else {
		$key = array_search($a,$gen1);
		return $gen2[$key];
		
	}
	
}
z1(1,3);
z2(1,3,4);
z3(-2,-1,-3);
z4(1,3);
z5([11,1,3,55,41,2,3,5,11]);
z6(3,10,5);
z7("xdd","oaoa");
echo("Naprotiv - ".z8(2,3));
?>