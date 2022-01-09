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
function z5($a,$d1,$d2){
	echo("ZADANIYE 5<br>");
	if($a % $d1 == 0){
		if($a % $d2 == 0){
			echo(1);
		}
		else echo(0);
	}
	else echo(0);
	echo("<br>");
}
function z6($arr){
	echo("ZADANIYE 6<br>");
	echo(max($arr)."<br>");
	echo(min($arr)."<br>");
}
function z7($arr){
	echo("ZADANIYE 7<br>");
	$i = 0;
	$summ = 0;
	foreach($arr as $value){
		$summ += $value;
		$i++;
	}
	echo(round($summ/$i));
}
function z8(){
	echo("<br>ZADANIYE 8<br>");
	$sharkDistance = 1000;
	$sharkSpeed = 10;
	$pontoonDistance = 300;
	$youSpeed = 2;
	$dolphin = false;
	if($dolphin == true){
		$sharkSpeed /= 2;
	}
	if($sharkDistance/$sharkSpeed < $pontoonDistance/$youSpeed){
		echo("Shark Bait!");
	}
	else echo("Alive!");
}
function z9($arr){
	echo("<br>ZADANIYE 9<br>");
	foreach($arr as $value){
		if($value >= 5){
			$value = 1;
		}
		else $value = 0;
		echo($value);
	}
}
z1(1,3);
z2(1,3,4);
z3(-2,-1,-3);
z4(1,3);
z5(45,1,6);
z6([1,2,21,33,34,-11,24]);
z7([5,5,5,5,2,4]);
z8();
z9([11,1,3,55,41,2,3,5,11])
?>