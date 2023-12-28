<h2>if... else Tutorial</h2>
<?php
if (5 > 3) {
    echo "Have a good day!";
  }
echo "<br> <br>";
$t = 14;

if ($t < 20) {
    echo "Have a good day!";
}
echo "<br> <br>";

if ($t == 14) { // == means equal
    echo "Have a good day!";
}
echo "<br> <br>";

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c) {
    echo "both conditions are true";
}
echo "<br> <br>";

$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
    echo "$a is a number between 2 and 7";
}
echo "<br> <br>";

$t = date("H");

if ($t < 20) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br> <br>";

$t = date("H");
echo "$t <br>";

if ($t < 10) {
    echo "Have a good morning!";
} elseif ($t < 20) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br> <br>";

// Shorthand IF statements
$a = 5; 

if ($a < 10) $b = "hello";

echo $b;
echo "<br> <br>";

// Short Hand IF ELSE statements
$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;
echo "<br> <br>";

// Nested IF statements
$a = 13;

if ($a > 10) {
    echo "$a is above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
        echo " but not above 20";
    }
}


?>
