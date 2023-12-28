<h2>Strings Tutorial</h2>
<?php
echo "Hello <br>";
echo 'Hello <br>';
echo "<br> <br>";

$x = "John";
echo "Hello $x";
echo "<br>";
$x = "John";
echo 'Hello $x';
echo "<br> <br>";

echo strlen("Hello world!");
echo "<br>";
echo str_word_count("Hello world!");
echo "<br> <br>";

echo strpos("Hello world!", "world");
echo "<br>";
echo strpos("Hello world!", "car"); // returns nothing
echo "<br> <br>";

// Section - Modify Strings
$x = "Hello World!";
echo strtoupper($x);
echo "<br>";
echo strtolower($x);
echo "<br> <br>";

echo str_replace("World", "Dolly", $x);
echo "<br>";
echo strrev($x);
echo "<br>";
echo trim($x);
echo "<br> <br>";

$x = "Hello World!";
$y = explode(" ", $x);
print_r($y);
echo "<br>";
$z = "Merry Christmas to all & $x";
$w = explode(" ", $z);
print_r($w);
echo "<br> <br>";

// Section - Concatenate Strings
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
echo "<br>";
$z = $x . " " . $y;
echo $z;
echo "<br>";
$z = "$x $y";
echo $z;
echo "<br> <br>";

// Section - Slicing Strings
$x = "Hello World!";
echo substr($x, 6, 5);
echo "<br>";
echo substr($x, 6);
echo "<br>";
echo substr($x, -5, 3);
echo "<br>";
echo substr($x, 5, -3);
echo "<br> <br>";

// Section - Escape Characters
// ans escape characer is a backslash \ followed by the illegal character desired
// $x = "We are the so-called "Vikings" from the north."; echo $x;
$x = "We are the so-called \"Vikings\" from the north."; 
echo $x;
?>