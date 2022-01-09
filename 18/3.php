<?php
class Person{
	private $name;
	public function getName(){
		return $this->name;
	}
	public function setName($n){
		$this->name = $n;
	}
	
	private $surname;
	public function getSurname(){
		return $this->surname;
	}
	public function setSurname($n){
		$this->surname = $n;
	}
	
	private $DOB;
	public function getDOB(){
		return $this->DOB;
	}
	public function setDOB($n){
		$this->DOB = $n;
	}
	
	private $GPA;
	public function getGPA(){
		return $this->GPA;
	}
	public function setGPA($n){
		$this->GPA = $n;
	}
	
	private $education;
	public function getEducation(){
		return $this->education;
	}
	public function setEducation($n){
		$this->education = $n;
	}
	
	private $gdate;
	public function getGDate(){
		return $this->gdate;
	}
	public function setGDate($n){
		$this->gdate = $n;
	}
	
}

class GenderedPerson extends Person{
	private $gender;
	public function getGender(){
		return $this->gender;
	}
	public function setGender($n){
		$this->gender = $n;
	}
}

function call(){
	if(isset($_POST["name"])){
		$Oleg = new GenderedPerson();
		$Oleg->setName($_POST['name']);
		$Oleg->setSurname($_POST['surname']);
		$Oleg->setDOB($_POST['DOB']);
		$Oleg->setGPA($_POST['GPA']);
		$Oleg->setEducation($_POST['education']);
		$Oleg->setGDate($_POST['date']);
		$Oleg->setGender($_POST['gender']);
		echo ("NAME : ".$Oleg->getName()."</br>");
		echo ("SURNAME : ".$Oleg->getSurname()."</br>");
		echo ("DATE OF BIRTH : ".$Oleg->getDOB()."</br>");
		echo ("GPA : ".$Oleg->getGPA()."</br>");
		echo ("EDUCATION : ".$Oleg->getEducation()."</br>");
		echo ("DATE : ".$Oleg->getGDate()."</br>");
		echo ("VI :".$Oleg->getGender()."</br>");
	}
}
call();


?>

