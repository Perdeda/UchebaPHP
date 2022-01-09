<?php
#z3
class President{
	public $name = "name1";
	public function greet($pname){
		echo("da ".$pname);
	}
}
$P = new President();
$Pname = $P->name;
$P->greet($Pname);
#z4
class College{
	private $students = 14;
	private $teachers = 2;
	private $computers = 14;
	private $classrooms = 2;
	public function getStudents(){
		return $this->students;
	}
	public function setStudents($S){
		$this->students = $S;
	}
	public function getTeachers(){
		return $this->teachers;
	}
	public function setTeachers($S){
		$this->teachers = $S;
	}
	public function getComputers(){
		return $this->computers;
	}
	public function setComputers($S){
		$this->computers = $S;
	}
	public function getClassrooms(){
		return $this->classrooms;
	}
	public function setClassrooms($S){
		$this->classrooms = $S;
	}
}
$C = new College();
$C->setStudents(3);
echo("	getStudents = ".$C->getStudents());
$C->setTeachers(69);
echo("	getTeachers = ".$C->getTeachers());
$C->setComputers(420);
echo("	getComputers = ".$C->getComputers());
$C->setClassrooms(1338);
echo("	getClassrooms = ".$C->getClassrooms());
?>