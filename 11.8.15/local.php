<!DOCTYPE html>
<html>
<body>

<?php
function rohan() {
     $x = 'nstu'; // local variable
     echo "<p>Variable x inside function is: $x</p>";
}
rohan();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>