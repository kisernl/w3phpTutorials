<h2>Data Tutorial</h2>
<?php
// You can get the data type of ant object by using the var_dump() function.
$x = 5;
var_dump($x);
?>
<br>
<?php //string
$x = "Hello World!";
$y = 'Hello World!';

var_dump($x);
echo "<br>";
var_dump($y);
?>
<br>
<?php //interger
$x = 5985;
var_dump($x);
?>
<br>
<?php // float
$x = 10.365;
var_dump($x);
?>
<br>
<?php // boolean
$x = true;
var_dump($x);
?>
<br>
<?php
$cars = array("Ford","Volvo","BMW","Toyota");
var_dump($cars);
?>
<br>

<?php
class Cars {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Cars("red", "Volvo");
var_dump($myCar);
?>
<br>
<?php
$x = "Hello World!";
$x = NULL;
var_dump($x);
?>
<br>
<?php
$x = 5;
var_dump($x);
echo "<br>";
$x = "Hello";
var_dump($x);
?>
<br>
<?php
$x = 5;
$x = (string) $x;
var_dump($x);
?>