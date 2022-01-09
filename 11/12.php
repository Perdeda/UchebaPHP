<?php
function z1(){
	$a1 = array (1,2,3);
	$a2 = array(2,1);
	$asum = array_diff($a1,$a2);
	print_r($asum);
}
function z2(){
	$n = 3;
	$a1 = array (array(1,2,3),
				array(1,2,4),
				array(1,2,5));
	$a2 = array (array(3,2,1),
				array(3,2,2),
				array(3,2,3));
#	$asum = array();
	for($i = 0;$i < $n;$i++){
		for($j = 0;$j < $n;$j++){
			$asum[$i][$j] = $a1[$i][$j] +$a2[$i][$j];
		}
	}
	print_r($asum);
}
z1();
z2();
?>