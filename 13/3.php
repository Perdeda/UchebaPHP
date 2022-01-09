<?php
#В каждом месяце 31 день и всё тут
abstract class Worker {
	private $vacTaken = 0;
	public function Greet(){
		echo("<br/>privetb<br/>");
	}
	public function Bye(){
		echo("<br/>poka<br/>");
	}
	public function Vacation($month,$day){
		if($this->vacTaken == 0){
			if($month < 12){
				$this->vacTaken = 1;
				return 1;
			}
			else{
				if($day < 7){
					$this->vacTaken = 1;
					return 1;
				}
				else{
					return 0;
				}
			}
		}
		else{
			return 0;
		}
	}
}
class QA extends Worker{
	public function AssureQuality(){
		echo("<br/>soidet<br/>");
	}
}
class Developer extends Worker{
	public function Develop(){
		echo("<br/>potom peredelayu<br/>");
	}
}
class TeamLead extends Worker{
	public function Lead(){
		echo("<br/>tut vse ploho kto-nibud peredelayte<br/>");
	}
}
$day = 1;
$month = 1;

$tlead = new TeamLead();

$qa = new QA();

$developer = new Developer();

$occupied = 0;
$randomNum = 0;

while($day < 32 && $month < 13){
	if($occupied > 0){
		$occupied++;
		#echo("occupied = ".$occupied."<br/>");
		if($occupied == 24){
			$occupied = 0;
			echo("VERNULSYA<br/>");
		}
	}
	
	if($occupied == 0){
	$randomNum = rand(1,100);
	if($randomNum < 10){
		if($randomNum < 9 && $randomNum > 5){
			echo("QA ADIHAT");
			if($qa->Vacation($month,$day) == 1){
					echo(1 ." DEN ".$day."<br/>");
					$occupied = 1;
			}
			else{
				echo(0 . "<br/>");
			}
		}
		else if($randomNum == 1){
			echo("DEVELOPER NA OTDIH");
			if($developer->Vacation($month,$day) == 1){
				echo(1 ." DEN ".$day."<br/>");
					$occupied = 1;
			}
			else{
				echo(0 . "<br/>");
			}
		}
		else{
			echo("TEAMLEAD NA OTDIH");
			if($tlead->Vacation($month,$day) == 1){
					echo(1 ." DEN ".$day."<br/>");
					$occupied = 1;
			}
			else{
				echo(0 . "<br/>");
			}
		}
	}
	}
	
	$day++;
	#$tlead->Lead();
	#$developer->Develop();
	#$qa->AssureQuality();
	if($day == 32){
		$day = 1;
		$month++;
		echo($month."<br/>");
	}
}
?>