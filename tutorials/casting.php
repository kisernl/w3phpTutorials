<h2>Casting Tutorial</h2>
<?php
echo "<h3> Cast to String </h3>";
$a = 5;
$b = 5.34;
$c = "hello";
$d = true;
$e = NULL;

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>";

echo "<h3> Cast to Integer </h3>";
$a = 5;
$b = 5.34;
$c = "25 kilometers";
$d = "kilometers 25";
$e = "hello";
$f = true;
$g = NULL;

$a = (int) $a; 
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>";
var_dump($f); echo "<br>";
var_dump($g); echo "<br>";

echo "<h3> Cast to Float </h3>";
$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>";
var_dump($f); echo "<br>";
var_dump($g); echo "<br>";

echo "<h3> Cast to Boolean </h3>";
$a = 5;
$b = 5.34;
$c = 0;
$d = -1;
$e = 0.1;
$f = "hello";
$g = "";
$h = true;
$i = NULL;

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>";
var_dump($f); echo "<br>";
var_dump($g); echo "<br>";
var_dump($h); echo "<br>";
var_dump($i); echo "<br>";

echo "<h3> Cast to Array </h3>";
$a = 5;
$b = 5.34;
$c = "hello";
$d = true;
$e = NULL;

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>";

echo "<h3> Convert Object to Array </h3>";
class Car {
    public $color;
    public $model;
    public function _construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");

$myCar = (array) $myCar;
var_dump($myCar);

echo "<h3> Cast to Object </h3>";
$a = 5;
$b = 5.34;
$c = "hello";
$d = true;
$e = NULL;

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>";

echo "<h3> Convert Array to Object </h3>";
$a = array("Volvo", "BMW", "Toyota");
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 

$a = (object) $a;
$b = (object) $b;

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";

/* apparently the "unset" cast no longer supporter in PHP
echo "<h3> Cast to NULL </h3>";
$a = 5; 
$b = 5.34; 
$c = "hello"; 
$d = true; 
$e = NULL;  

$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>"; */
?>
