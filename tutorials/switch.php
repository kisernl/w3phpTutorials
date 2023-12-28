<h2>Switch Tutorial</h2>
<?php
$favcolor = "purple";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br> <br>";

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br> <br>";

$d = 4;

switch ($d) {
    case 6:
        echo "Today is Saturday";
        break;
    case 0:
        echo "Today is Sunday";
        break;
    default:
        echo "Looking forward to the Weekend";
}
echo "<br> <br>";

$d = 4;

switch ($d) {
    default:
        echo "Looking forward to the Weekend"; // default doesn't have to be last - but last is recommended
        break;
    case 6:
        echo "Today is Saturday";
        break;
    case 0:
        echo "Today is Sunday";
        break;

}
echo "<br> <br>";

$d = 4;

switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "The week feels so long!";
        break;
    case 6:
    case 0:
        echo "Finally... the weekend!";
        break;
    default:
        echo "Something went wrong.";
}
?>
