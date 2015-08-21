<!DOCTYPE html>
<html>
<body>

<?php
  $p1 = array("Html", "Css", "php", "java");
  echo "p1 element: " . $p1[2] . "<br>";
  $p2 = array('html' => "i love html",
              'css' => "i love css",
              'php'  => "i love php",
              'java'  => "i love java");
  echo "p2 element: " . $p2['php'] . "<br>";
?>

</body>
</html>