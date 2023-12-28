<h2>Constants Tutorial</h2>
<?php
define("GREETING", "Welcome to W3Schools.com!" /*, case_insensitive: true - no longer supported*/);
echo GREETING; echo "<br>";
// echo greeting; comes back as an error - constants are always case-sensitve now

const MYCAR = "Volvo";
echo MYCAR; echo "<br>";

define("cars", [
    "Ford",
    "BMW",
    "Toyota",
]);
echo cars[0];
echo "<br>";

function myTest() {
    echo GREETING;
}
myTest();
echo "<br>";
echo __LINE__;
echo "<br>";

function ABC() {
    echo GREETING;
    echo "<br>";
    echo __FUNCTION__;
}
ABC();
echo "<br>";
?>
