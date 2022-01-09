<?php
function z1($a,$d1,$d2){
	if(($a % $d1) == 0 && ($a % $d2) == 0){
		return true;
	}
	else return false;
}
function z2($arr){
	$summ = 0;
	$i=0;
	foreach($arr as $value){
		$summ = $summ + $value;
		$i++;
	}
	return($summ / $i);
}
function z3($arr){
	$i = 1;
	foreach($arr as $value){
		$value = $i.": ".$value."<br>";
		print_r($value);
		$i++;
	}
	return $arr;
}
if(z1(5,4,1)){
	print_r("true");
}
else print_r("false");
print_r(z2([1,2,3,4])."<br>");
z3(["a","b","c"]);
?>