<h2>Arrays Tutorial</h2>
<?php
$UScars = array("Ford", "GMC", "Jeep");

function myFunction()
{
  echo "This text comes from a function inside of an array";
}

$myArr = array(
  "Ford",
  2019,
  myFunction(),
  $UScars
);

echo "<br> <br>";

echo "number of cars in \$UScars array: " . count($UScars);

echo "<br> <br>";
// Indexed Arrays

echo $UScars[0];

echo "<br> <br>";

$UScars[1] = "Tesla";
var_dump($UScars);

echo "<br> <br>";
echo $UScars[1];

echo "<br> <br>";

foreach ($UScars as $x) {
  echo "$x <br>";
}

echo "<br> <br>";

array_push($UScars, "To-YODA");
var_dump($UScars);

echo "<br> <br>";

// $candy = array("Snickers", "Mounds", "KitKat"); -- thought I needed to do this, but didn't

$candy[5] = "Snickers";
$candy[7] = "Mounds";
$candy[14] = "KitKat";

array_push($candy, "Tootsie Roll");
var_dump($candy);

echo "<br> <br>";

// Associative Arrays

$donuts = array("brand" => "Dunkin", "flavor" => "Strawberry Sprinkles", "rating" => 9);
var_dump($donuts);

echo "<br> <br>";

echo $donuts["flavor"];

echo "<br> <br>";

$donuts["rating"] = 3;
var_dump($donuts);

$donuts["flavor"] = "Santa Belly";

echo "<br> <br>";

foreach ($donuts as $x => $y) {
  echo "$x: $y <br>";
}

echo "<br> <br>";

// Create Arrays
$carsX = array("Volvo", "BMW", "Toyota");

$carsY = ["Volvo", "BMW", "Toyota"]; // shorter syntax for arrays

$carsZ = [ // line breaks are optional - they don't change anything in the array
  "Volvo",
  "BMW",
  "Toyota" // can use -- , -- at end if deisred, not necessary though
];

$carsZ1 = []; // empty array that can have items added later (works for associatve arrays too)
$carsZ1[0] = "Volvo";
$carsZ1[1] = "BMW";
$carsZ1[2] = "Toyota";

// Mixed Array Keys

$shoes = [];
$shoes[0] = "nike";
$shoes[1] = "adidas";
$shoes["brand"] = "reebok";

var_dump($shoes);

echo "<br> <br>";

// Access Arrays

echo $shoes[1];

echo "<br> <br>";

echo $shoes["brand"];
echo "<br>";

echo $shoes['brand']; // single quotes as well as double quotes work to access array

echo "<br> <br>";

// GARRISON - how do I execute a function within an array???
var_dump($myArr);
// $myArr[2](); // exectute function within an array -- see fucntion & array on line2 5-9 -- needed  -- return -- NOT -- echo --!!!


echo "<br> <br>";

foreach ($donuts as $x => $y) {
  echo "$x: $y <br>";
}

echo "<br> <br>";

foreach ($carsX as $x) {
  echo "$x <br>";
}

echo "<br> <br>";

$spaceships = array(
  array("X-wing", 25, 15),
  array("A-wing", 30, 22),
  array("B-wing", 20, 20),
  array("Jedi Starfighter", 6, 4)
);

echo $spaceships[0][0] . ": In stock: " . $spaceships[0][1] . ", sold: " . $spaceships[0][2] . ".<br>";
echo $spaceships[1][0] . ": In stock: " . $spaceships[1][1] . ", sold: " . $spaceships[1][2] . ".<br>";
echo $spaceships[2][0] . ": In stock: " . $spaceships[2][1] . ", sold: " . $spaceships[2][2] . ".<br>";
echo $spaceships[3][0] . ": In stock: " . $spaceships[3][1] . ", sold: " . $spaceships[3][2] . ".<br>";

echo "<br> <br>";

echo "ELI! The First Order intercepted the message above! You're not safe! ...<br>";
echo "Quickly, dive into a pile of dirty clothes!!!";

// GARRISON -- what is going on in the example below? -- G: row is parent array & col is child array
echo "<br> <br>";

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>" . $spaceships[$row][$col] . "</li>";
  }
  echo "</ul>";
}

echo "<br> <br>";

// Sorting Arrays

sort($carsX);
// GARRISON -- how does this sort alphabetically? - it does, but how???
$clength = count($carsX);
for ($x = 0; $x < $clength; $x++) {
  echo $carsX[$x];
  echo "<br>";
}
echo "<br> <br>";

$numbersX = array(4, 6, 2, 22, 11);
sort($numbersX);
// GARRISON -- need help understanding this logic as well
$arrlength = count($numbersX);
for ($x = 0; $x < $arrlength; $x++) {
  echo $numbersX[$x];
  echo "<br>";
}
echo "<br> <br>";

// now it's reverse ordering... but same questions
rsort($carsX);
$clength = count($carsX);
for ($x = 0; $x < $clength; $x++) {
  echo $carsX[$x];
  echo "<br>";
}
echo "<br> <br>";

rsort($numbersX);
$arrlength = count($numbersX);
for ($x = 0; $x < $arrlength; $x++) {
  echo $numbersX[$x];
  echo "<br>";
}
echo "<br> <br>";

/* GARRISON -- for the following -- asort -- & -- ksort --- how does the sort function override the 
inherent array order? Is is just becuase it comes before the function call? */

$age = array("Peter" => "35", "Ben" => "43", "Joe" => "37");

/*  I used the following and it seems to confirm it's all about the function following the "a/ksort"
 */
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<br> <br>";

asort($age);

foreach ($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br> <br>";

ksort($age);

foreach ($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br> <br>";

arsort($age);

foreach ($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br> <br>";

krsort($age);

foreach ($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>