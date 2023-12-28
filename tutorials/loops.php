<h2>Loops Tutorial</h2>
<?php
echo "<h3>PHP while Loop</h3> <br>";

$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}
echo "<br><br>";

// use the -- break -- statement to stop the loop even if the condition is still true
$i = 1;
while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
}
echo "<br><br>";

// use the -- continue -- statement to stop the current iteration, adn contiue with the next
$i = 0;
while ($i < 6) {
    $i++;
    if ($i == 3) continue;
    echo $i;
}
echo "<br><br>";

$i = 1;
while ($i < 6):
    echo $i;
    $i++;
endwhile;

echo "<br><br>";

$i = 0;
while ($i < 100) {
    $i+=10;
    echo "$i <br>";
}
echo "<br><br>";

// now do...while loops
echo "<h3>PHP do while Loop</h3> <br>";

$i = 1;

do {
    echo $i;
    $i++;
} while ($i < 6);

echo "<br><br>";

/* note: with the do...while loop, it tests conditions AFTER the first pass
which means that the confition maybe false, but still give one result prior to testing condition */
$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);

echo "<br><br>";

$i = 1;

do {
    if ($i == 3) break;
    echo $i;
    $i++;
} while ($i < 6);

echo "<br><br>";

$i = 0;

do {
    $i++;
    if ($i == 3) continue;
    echo $i;
} while ($i < 6);

echo "<br><br>";

// now do...for loops
echo "<h3>PHP for Loop</h3> <br>";

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo "<br><br>";

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
}

echo "<br><br>";

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
}

echo "<br><br>";

for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
}

echo "<br><br>";

// now do...foreach loops
echo "<h3>PHP foreach Loop</h3> <br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    echo "$x <br>";
}

echo "<br><br>";

$members = array( // could do the array on a single line, but I like the organzation of multiple lines
    "Peter"=>"35",
    "Ben" => "37",
    "Joe" => "43"
);

foreach ($members as $x => $y) {
    echo "$x : $y <br>";
}

echo "<br><br>";

class Motorcycle {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}

$myMotorcycle = new Motorcycle("Black", "Triumph");

foreach ($myMotorcycle as $x => $y) {
    echo "$x: $y <br>";
}

echo "<br><br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
}


echo "<br><br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "blue") continue;
    echo "$x <br>";
}

echo "<br><br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "blue") $x = "pink";
    echo "$x <br>";
}

var_dump($colors);

echo "<br><br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
    if ($x == "blue") $x = "pink";
    echo "$x <br>";
}

var_dump($colors);


echo "<br><br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
    echo "$x <br>";
endforeach;

echo "<br><br>";

// now do...break out of loops
echo "<h3>PHP break Loop</h3> <br>";

// jump out of -- for -- loop when $x is 4
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}

echo "<br><br>";

// jump out of -- while -- loop 
$x = 0;

while($x < 10) {
    if ($x == 4) {
        break;
    }
    echo "the number is: $x <br>";
    $x++;
}

echo "<br><br>";

// jump out of -- do...while -- loop 
$i = 1;

do {
    if ($i == 3) break;
    echo "$i <br>";
    $i++;
} while ($i < 6);

echo "<br><br>";

// jump out of -- foreach -- loop 
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
}

echo "<br><br>";

/*
// now do...continue in loops
echo "<h3>PHP continue Loop</h3> <br>";

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "the number is: $x <br>";
}

echo "<br><br>";

$x = 0;

while ($x < 10) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
    $x++;
} */

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
  
echo "<br><br>";

$x = 0;
 
while($x < 10) {
  $x++;
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
} 

echo "<br><br>";

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

echo "<br><br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
?>
