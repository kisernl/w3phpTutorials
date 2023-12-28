<h2>Functions Tutorial</h2>
<?php
function myMessage() {
    echo "Hello World!";
}

myMessage();

echo "<br> <br>";

function familyName($fname) {
    echo "$fname Kiser <br>";
}

familyName("Noah");
familyName("Hilary");
familyName("Wyatt");
familyName("Eli");
familyName("Asher");

echo "<br> <br>";

function familyName2($fname, $year) {
    echo "$fname Kiser. Born in $year. <br>";
}

familyName2("Noah", "1981");
familyName2("Hilary", "1983");
familyName2("Wyatt", "2010");
familyName2("Eli", "2012");
familyName2("Asher", "2014");

echo "<br> <br>";

function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // default argument set in function above
setHeight(135);
setHeight(80);

echo "<br> <br>";

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

echo "<br> <br>";

// GARRISON -- I don't understand what is happening in this function ("passing arguments by reference")
function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;


echo "<br> <br>";

// GARRISON - can't track with this one either
function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;


echo "<br> <br>";

// GARRISON - this one is a struggle too
function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
        $txt = $txt."Hi, $firstname[$i] $lastname. <br>";
    }
    return $txt;
}

$a = myFamily("Kiser", "Hilary", "Wyatt", "Eli", "Asher");
echo $a;


echo "<br> <br>";

/* [NOTE] this will give an error beciase variadic argument is 1st
function myFamily( ...$firstname, $lastname) { 
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
        $txt = $txt."Hi, $firstname[$i] $lastname. <br>";
    }
    return $txt;
}

$a = myFamily("Kiser", "Hilary", "Wyatt", "Eli", "Asher");
echo $a; */

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10 -- NK but it wasn't!
// it only works if I drop "days" from the string

echo "<br> <br>";

/* declare(strict_types=1);
function addNumbersX(int $a, int $b) {
    return $a + $b;
}
echo addNumbersX(5, "5");
     [NOTE] this throws an error becuase it's not at the top of the overall script --
     BUT it also throws an error for the string "5" 


     Below is also a use of strict, but on RETURN (see the -- : float -- before the  -- { -- )

declare(strict_types=1); 
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);

    And one more note - You can specify a different return type, than the argument types, 
    but make sure the return is the correct type:

declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);

*/

?>