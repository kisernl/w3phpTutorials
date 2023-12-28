<h2>Echo & Print Tutorial</h2>
<?php
echo "<h3>PHP is Fun!</h3>";
echo "Hello world! <br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>
<br>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3schools.com";
$x = 5;
$y = 4;

echo "<h3>" . $txt1 . "</h3>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>
<?php
print "<h3>PHP is Fun!</h3>";
print "Hello World! <br>";
print "I'm about to learn PHP!";
?>
<br>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h3>" . $txt1 . "</h3>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>
