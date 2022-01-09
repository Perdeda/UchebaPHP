<?php
interface AdvPub{
	public function advPublish($nameOfCompany, $product, $price);
}
abstract class AdvCompany{
	private $company;
	public function getCompany(){
		return $this->company;
	}
	public function setCompany($n){
		$this->company = $n;
	}
	
	private $product;
	public function getProduct(){
		return $this->product;
	}
	public function setProduct($n){
		$this->Product = $n;
	}
	
	private $price;
	public function getPrice(){
		return $this->price;
	}
	public function setPrice($n){
		$this->Price = $n;
	}
	
	function __construct($cName,$pName,$pTag){
		echo("const abstr <br/>");
		$this->setCompany($cName);
		$this->setPrice($pName);
		$this->setProduct($pTag);
	}
}
class Advertisment implements AdvPub{
	public function advPublish($nameOfCompany, $product, $price){
		return $anon = new class($nameOfCompany, $product, $price) extends AdvCompany{
			function __construct($nameOfCompany, $product, $price){
				echo("anaon const<br/>");
				parent::__construct($nameOfCompany, $product, $price);
			}
		};
	}
}
$ad = new Advertisment();
print_r($ad->advPublish("a","b",1));
?>
