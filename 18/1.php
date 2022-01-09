<?php
function call(){
	if(isset($_POST["name"])){
	if((int)$_POST['GPA'] > 5 || (int)$_POST['GPA'] < 2){
		header("Location: html1.html");
		exit;
	}
	if($_FILES['file']['size'] > 5000000){
		header("Location: html1.html");
		exit;
	}
	else{
		echo("Namalniy file</br>");
		echo htmlspecialchars($_POST['name'])."</br>";
		echo htmlspecialchars($_POST['surname'])."</br>";
		echo htmlspecialchars($_POST['DOB'])."</br>";
		echo htmlspecialchars($_POST['GPA'])."</br>";
		echo htmlspecialchars($_POST['education'])."</br>";
		echo htmlspecialchars($_POST['date'])."</br>";
	}
	$tz = ini_get('date.timezone');
	$dtz = new DateTimeZone($tz);
	$regDate = new Datetime("now",$dtz);
	echo $regDate->format("d-m-y");
	}
}
call();
$name = $_POST['name'];
$surname = $_POST['surname'];
$DOB = $_POST['DOB'];
$GPA = $_POST['GPA'];
$education = $_POST['education'];
$gdate = $_POST['date'];
echo ("<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action=\"3.php\" method=\"post\" enctype=\"multipart/form-data\">
<p><input type=\"text\" name=\"name\" value=$name hidden /></p>
<p><input type=\"text\" name=\"surname\" value=$surname hidden /></p>
<p><input type=\"date\" name=\"DOB\" value=$DOB hidden /></p>
<p><input type=\"text\" name=\"GPA\" value=$GPA hidden /></p>
<p><input type=\"text\" name=\"education\" value=$education hidden/></p>
<p><input type=\"date\" name=\"date\" value=$gdate hidden /></p>
<p>VASH POL:<input type=\"text\" name=\"gender\" required/></p>
<p><input type=\"submit\"/></p>
</form>
</body>
</html>");
?>