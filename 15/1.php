<?php
function z1(){
	$tz = ini_get('date.timezone');
	$dtz = new DateTimeZone($tz);
	$lastDay = new DateTime("2020-12-31 00:00:00",$dtz);#past
	$firstDay = new DateTime("2021-02-01 00:00:00", $dtz);
	$diff = $lastDay->diff($firstDay);
	$lastDayString = $lastDay->format("Y-m-d");#pastString
	$firstDayString = $firstDay->format("Y-m-d");
	$diffString = $diff->format("%yy, %mm, %dd");
	echo "Esli posledniy den' uchebi - ".$lastDayString." a perviy den' - ".$firstDayString." to kanikuli dlyatsya ".$diffString."</br>";
}
z1();
function z2(){
	if(isset($_POST["name"])){
	echo htmlspecialchars($_POST['name'])."</br>";
	echo htmlspecialchars($_POST['surname'])."</br>";
	echo htmlspecialchars($_POST['fathersName'])."</br>";
	echo htmlspecialchars($_POST['group'])."</br>";
	echo (int)$_POST['number']."</br>";
	$tz = ini_get('date.timezone');
	$dtz = new DateTimeZone($tz);
	$regDate = new Datetime("now",$dtz);
	echo $regDate->format("d-m-y");
}
}
if($_SERVER['REQUEST_METHOD'] == 'GET'){
	echo("<form action=\"1.php\" method=\"post\">
	<p>Name: <input type=\"text\" name=\"name\" /></p>
	<p>Surname: <input type=\"text\" name=\"surname\" /></p>
	<p>Fathers Name: <input type=\"text\" name=\"fathersName\" /></p>
	<p>Group: <input type=\"text\" name=\"group\" /></p>
	<p>Telephone number: <input type=\"text\" name=\"number\" /></p>
	<p><input type=\"submit\" /></p>
	</form>");
}
else{
	z2();
}

?>

