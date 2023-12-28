<h2>Variables Tutorial</h2>
<?php
/* these are $variables in PHP - think of them as containers for storing data...
AND remember they ARE case-sensitive! */
$x = 5; // $x is an integer
$z = "John"; // $z is a string
echo $x;
echo "<br>";
echo $z;
echo "<br>";
echo "<br>";
// the echo statement is often used to outbout data to the screen
$w3url = "W3Schools.com";
echo "I love $w3url!";
echo "<br>";
echo "I love " . $w3url . "!";

echo "<br>";
$y = 4;
echo $x + $y;

$d = $o = $g = "Dog";

echo "<br>";
var_dump($y);
echo "<br>";
var_dump(5);
echo "<br>";
var_dump(3.14);
echo "<br>";
var_dump(true);
echo "<br>";
var_dump([2, 3, 56]);
echo "<br>";
var_dump(NULL);
?>
<br>
<br>
<?php
$x = 5; // global scope

function myTest1() {
  // using x inside this function will generate an error 
  // unless it is declared within the function... LCOAL SCOPE
  $x =5; //local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest1();

echo "<p>Variable x outside function is: $x</p>";

echo "<br>";
echo "<br>";

function myTest2() {
    global $x, $y;
    $y = $x + $y;
}
myTest2();
echo $y;
?>
<br>
<br>
<?php

function myTest3() {
    static $x = 0;
    echo $x;
    $x++;
}
myTest3();
echo "<br>";
myTest3();
echo "<br>";
myTest3();
echo "<br>";

?>