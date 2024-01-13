<h2>Superglobals Tutorial</h2>
<?php
$x = 75;
  
function mySGfunction() {
  echo $GLOBALS['x'];
}

mySGfunction();

echo "<br></br><br></br>";

$y = 76;
  
function mySGxfunction() {
  global $y;
  echo $y;
}

mySGxfunction();

echo "<br></br><br></br>";

$C = 100;

echo $GLOBALS["C"];
echo "<br></br>";
echo $C;

echo "<br></br><br></br>";


function myXYZfunction() {
    $GLOBALS["XYZ"] = 100;
  }
  
  myXYZfunction();
  
  echo $GLOBALS["XYZ"];
  echo "<br></br>";
  echo $XYZ;

?>