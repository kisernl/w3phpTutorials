<!DOCTYPE html>
<html>
<body>
 <h1>My first (not really) PHP page</h1>
<?php

//Asher's Code
require("asher.php");
echo "<br>" . "<br>";

// Eli's code below!
echo "<br>" . "<br>";
require("eli.php");
 
// Eli's code above!
//Wyatt TIME!!!!!
echo "<br>" . "<br>" . "<br>" . "<br>";
require("wyatt.php");

//Wyatt is done.
echo "<br>";
echo "<br>";
?>

<?php

require("tutorials/all_tutorials.php");
echo "<br>" . "<br>";

?>
<br>
<br>
<br>

</body>
</html>

<?php
echo "PHP version" . "<br>";
echo phpversion();
?>