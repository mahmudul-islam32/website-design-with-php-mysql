<!DOCTYPE html>
<html>
<body>

<?php
$x = 'nstu'; // global variable
 
function Rohan() {
     // create an error
     echo "<p>Variable x inside function is: $x</p>";
}
Rohan();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>