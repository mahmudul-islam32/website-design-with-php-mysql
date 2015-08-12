<!DOCTYPE html>
<html>
<body>

<?php
function rohan() {
     static $x = 0;//static variable
     echo $x;
     $x++;
}

rohan();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

</body>
</html>