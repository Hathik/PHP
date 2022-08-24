<h2>Destruct Function</h2>
<?php
class Fruit{
	public $name;
	public $colour;
	
	function __construct($name){
		$this->name = $name;
	}
	function __destruct(){
		echo "The Fruit is {$this->name}.";
	}
	function message(){
		echo "<br>I am a fruit class<br>";
	}
}

$apple = new Fruit("Apple");
$apple -> message();
?>

<h2>Abstract Class</h2>
<?php
abstract class Shape{
	protected $color;
	protected $isFilled;
	public function __construct($col, $isFilled){
		$this->color = $col;
		$this->isFilled= $isFilled;
	}
	
	abstract public function getArea();
	
	public function setColor($col){
		echo "I am from Parent class.";
		$this->color = $col;
	}
	public function getColor(){
		return $this->color;
	}
	public function isFilled(){
		return $this->isFilled;
	}
	public function makeHollow(){
		$this->isFilled = false;
	}
	public function fill(){
		$this->color = true;
	}
}

class Square extends Shape{
	private $length;
	
	public function __construct($col, $isFilled, $l){
		parent::__construct($col, $isFilled);
		$this->length = $l;
	}
	public function setColor($col){
		echo "<br> Setting up the color as {$this->color} <br>";
	}
	public function setLength($l){
		$this->length = $l;
	}
	public function getLength(){
		return $this->length;
	}
	public function getArea(){
		return pow($this->length,2);
	}
}

class Circle extends Shape{
	private $radious;
	
	public function __construct($col, $isFilled, $r){
		parent::__construct($col, $isFilled);
		$this->radious = $r;
	}
	public function setRadious($r){
		$this->radious = $r;
	}
	public function getRadious(){
		return $this->radious;
	}
	public function getArea(){
		//return M_PI * radious * radious;
		return M_PI * pow($this->radious,2);
	}
}

$s1 = new Square("Green", true, 8);
$s1->setColor("Pink");
print($s1->getArea());
echo "<br>";

$c1 = new Circle("White", true, 9);
$c1->setRadious(9);
$c1->setColor("yellow");
echo "<br>";

// $shape1 = new Shape("Red",true);
//print_r($shape1);
//echo "<br>".$shape1->getColor(); 
echo "<br>";
print($c1->getArea());

?>

<h2>Interface</h2>
<?php
interface Sellable{
	public function addStock($num);
	public function sellItem();
	public function getStockCount();
}

class Television implements Sellable{
	private $screenSize;
	private $stockCount;
	
	public function getScreenSize(){
		return $this->screenSize;
	}
	public function setScreenSize($s){
		$this->screenSize = $s;
	}
	public function addStock($num){
		$this->stockCount += $num;
	}
	public function sellItem(){
		$this->stockCount -= 1;
	}
	public function getStockCount(){
		return $this->stockCount;
	}
}

class TennisBall implements Sellable{
	private $count;
	private $color;
	
	public function setColor($c){
		$this->color = $c;
	}
	public function getColor(){
		return $this->color;
	}
	public function addStock($num){
		$this->count += $num;
	}
	public function sellItem(){
		$this->count -= 1;
	}
	public function getStockCount(){
		return $this->count;
	}
}

$tv1 = new Television();
$tv1->setScreenSize("14");
$tv1->addStock(50);
print($tv1->getStockCount()); echo "<br>";
$tv1->sellItem();
print($tv1->getStockCount()); echo "<br>";

$tb1 = new TennisBall();
$tb1->setColor("Green");
$tb1->addStock(20);
print($tb1->getStockCount()); echo "<br>";
$tb1->sellItem();
print($tb1->getStockCount()); echo "<br>";
?>