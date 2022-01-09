<?php
#ГородаОбщ - Язык, Валюта, Средняя ЗП, Слои Населения, 
#Люди - Кричать, Бегать(км), Приседать(раз), Длительность сна
#Города - Светофоры(вкл выкл), Свет(вкл выкл)
class Country{
	private $language;
	public function getLang(){
		return($this->language);
	}
	public function setLang($n){
		$this->language = $n;
	}
	
	private $currency;
	public function getCur(){
		return($this->currency);
	}
	public function setCur($n){
		$this->currency = $n;
	}
	
	private $avgSal;
	public function getSal(){
		return($this->avgSal);
	}
	public function setSal($n){
		$this->avgSal = $n;
	}
	
	private $townsPeople;
	public function getPpl(){
		return($this->townsPeople);
	}
	public function setPpl($n){
		$this->townsPeople = $n;
	}
}

class Town extends Country{
	#1/0(работает или нет)
	private $trafficL = 1;
	public function getTrl(){
		return($this->trafficL);
	}
	public function setTrl(){
		if($this->trafficL){
			$this->trafficL = 0;
		}
		else{
			$this->trafficL = 1;
		}
	}
	
	private $electric = 1;
	public function getElec(){
		return($this->electric);
	}
	public function setElec(){
		if($this->electric){
			$this->electric = 0;
		}
		else{
			$this->electric = 1;
		}
	}
}

class Hooman{
	public $city;
	public function getCity(){
		return($this->city);
	}
	public function setCity($n){
		$this->city = $n;
	}
	
	public function scream(){
		echo("a");
	}
	
	public $sits;
	public function getSit(){
		return($this->sits);
	}
	public function setSit($n){
		$this->sits = $n;
	}
	
	public $runs;
	public function getRun(){
		return($this->runs);
	}
	public function setRun($n){
		$this->runs = $n;
	}
	
	public $sleeps;
	public function getSleep(){
		return($this->sleeps);
	}
	public function setSleep($n){
		$this->sleeps = $n;
	}
}

$Novosibirsk = new Town();
$Novosibirsk->setLang("Russian");
echo($Novosibirsk->getLang());
$Novosibirsk->setCur("Ruble");
echo($Novosibirsk->getCur());
$Novosibirsk->setSal(69);
echo($Novosibirsk->getSal());
$Novosibirsk->setPpl(array("Russkiye 13%","Amerikantsi 0%","da 87%"));
print_r($Novosibirsk->getPpl());
$Novosibirsk->setTrl();
echo($Novosibirsk->getTrl());
$Novosibirsk->setElec();
echo($Novosibirsk->getElec());

$Andrey = new Hooman();
$Andrey->setCity($Novosibirsk);
echo($Andrey->getCity()->getLang());
$Andrey->scream();
?>