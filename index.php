<!DOCTYPE html>
<html>
<body>
 <h1>My first (not really) PHP page</h1>
<?php

//Boys' Code
require("boys/boyscode.php");
echo "<br>" . "<br>";

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