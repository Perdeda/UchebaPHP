<?php
interface Student{
	function getName();
	function getGrades();
}
class Three implements Student{
	public $name = "Oleg";
	public $age = 23;
	public $group = "803oa20";
	public $Planguages = array("da");
	public $languages = "russkey";
	public function getName(){
		echo $this->name;
	}
	public function getGrades(){
		echo(3);
	}
	public function Prospat(){
		echo("oy");
	}
	public function Perevod(){
		$this->group = str_shuffle($this->group);
		return($this->group);
	}
}
class Four implements Student{
	public $name = "Igor";
	public $age = 20;
	public $group = "803oa20";
	public $Planguages = array("PHP","JS","HTTP","CSS");
	public $PlanguagesCopy = array("PHP","JS","HTTP","CSS");
	public $languages = array("Russian","English");
	public function getName(){
		echo $this->name;
	}
	public function getGrades(){
		echo(4);
	}
	public function Skatat(){
		shuffle($this->Planguages);
		array_pop($this->Planguages);
		print_r($this->Planguages);
	}
	public function SdelatDz(){
		$this->Planguages = $this->PlanguagesCopy;
		print_r($this->Planguages);
	}
	public function Otprositsya(){
		if(rand(1,10) > 8){
			echo("ladno");
		}
		else{
			echo("Net");
		}
	}
}
class Five implements Student{
	public $name = "PETR";
	public $age = 21;
	public $group = "803oa20";
	public $Planguages = array("PHP","JS","HTTP","CSS","C++","C#","Java","Pyton");
	public $languages = array("Russian","English","Язык книги зачарования из майнкрафта");
	public function getName(){
		echo $this->name;
	}
	public function getGrades(){
		echo(5);
	}
	public function Pomolodet(){
		$this->age = $this->age - 1;
	}
	public function Postaret(){
		$this->age = $this->age + 1;
	}
	public function PeReVoDqst(){
		$this->group = "666?";
	}
	public function NewIdentitiy(){
		$this->name = "Talandar";
	}
}
echo("Troyechnik <br/>");
$three = new Three();
$three->getGrades();
echo("<br/>IMYA<br/>");
$three->getName();
echo("<br/>PROSPAL<br/>");
$three->Prospat();
echo("<br/>PEREVOD<br/>");
echo($three->Perevod());
echo("<br/><br/>Khoroshist<br/>");
$four = new Four();
$four->getGrades();
echo("<br/>IMYA<br/>");
$four->getName();
echo("<br/>SKATAL<br/>");
$four->Skatat();
echo("<br/>SDELALDZ<br/>");
$four->SdelatDz();
echo("<br/>OTPROSILSYA?<br/>");
$four->Otprositsya();
echo("<br/><br/>Otlichnik<br/>");
$five = new Five();
$five->getGrades();
echo("<br/>IMYA<br/>");
$five->getName();
echo("<br/>POMOLODET<br/>");
$five->Pomolodet();
echo($five->age);
echo("<br/>POSTARET<br/>");
$five->Postaret();
echo($five->age);
echo("<br/>PEREVOD?<br/>");
$five->PeReVoDqst();
echo($five->group);
echo("<br/>TEPERIMYAMNE<br/>");
$five->NewIdentitiy();
echo($five->name);

?>
