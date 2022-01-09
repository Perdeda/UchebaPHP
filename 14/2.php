<?php
trait AdvPub{
	abstract function advPublish($nameOfCompany, $product, $price);
}

interface Advert{
	function getTypeOfAdv():string;
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
		$this->setProduct($pName);
		$this->setPrice($pTag);
	}
}

class Advertisment{
	use AdvPub;
	public function advPublish($nameOfCompany, $product, $price){
		return $anon = new class($nameOfCompany, $product, $price) extends AdvCompany{
			function __construct($nameOfCompany, $product, $price){
				echo("anaon const<br/>");
				parent::__construct($nameOfCompany, $product, $price);
			}
		};
	}
}

class InternetAdv{
	use AdvPub;
		
	public function advPublish($nameOfCompany, $product, $price, $_quantityOfWebsites,$_ageLimit){
		return $anon = new class($nameOfCompany, $product, $price, $_quantityOfWebsites,$_ageLimit) extends AdvCompany implements Advert{
			function __construct($nameOfCompany, $product, $price, $_quantityOfWebsites,$_ageLimit){
				parent::__construct($nameOfCompany, $product, $price);
				$this->setQuantity($_quantityOfWebsites);
				$this->setAgeL($_ageLimit);
			}
				
			public function getTypeOfAdv():string{
				return "Internet</br>";
			}
			private $quantityOfWebsites;
			public function getQuantitty(){
				return $this->quantityOfWebsites;
			}
			public function setQuantity($n){
				$this->quantityOfWebsites =$n;
			}
		
			private $ageLimit;
			public function getAgeL(){
				return $this->ageLimit;
			}
			public function setAgeL($n){
				$this->ageLimit = $n;
			}
		};
	}
}


class TvAdv{
	use AdvPub;
		
	public function advPublish($nameOfCompany, $product, $price,$_duration,$_langNumber){	
		return $anon = new class($nameOfCompany, $product, $price,$_duration,$_langNumber) extends AdvCompany implements Advert{
			function __construct($nameOfCompany, $product, $price, $_langNumber,$_duration){
				parent::__construct($nameOfCompany, $product, $price);
				$this->setLangNumber($_langNumber);
				$this->setDuration($_duration);
			}
				
			private $duration;
			public function getDuration(){
				return $this->duration;
			}
			public function setDuration($n){
				$this->duration = $n;
			}
		
			private $langNumber;
			public function getLangNumber(){
				return $this->langNumber;
			}
			public function setLangNumber($n){
				$this->langNumber = $n;
			}
				
			public function getTypeOfAdv():string{
				return "TV</br>";
			}
		};
	}
}
$ad = new TvAdv();
echo($ad->advPublish("21","69","25","144","8")->getTypeOfAdv());
$ad1 = new InternetAdv();
echo($ad1->advPublish("221","639","1225","1244","38")->getTypeOfAdv());
?>
