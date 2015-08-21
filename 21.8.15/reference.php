<!DOCTYPE html>
<html>
<body>

<?php

  $a1 = "WILLIAM";
  $a2 = "henry";
  $a3 = "gatES";
  echo $a1 . " " . $a2 . " " . $a3 . "<br>";
  fix_names($a1, $a2, $a3);
  echo $a1 . " " . $a2 . " " . $a3;
  function fix_names(&$n1, &$n2, &$n3)
  {
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
  }



  $object = new User;
  print_r($object); echo "<br>";
  $object->name     = "Joe";
  $object->password = "mypass";
  print_r($object); echo "<br>";
  $object->save_user();
  class User
  {
    public $name, $password;
    function save_user()
    {
      echo "Save User code goes here";
    }
  }




function trim_value(&$value) 
{ 
    $value = trim($value); 
}

$fruit = array('apple','banana ', ' cranberry ');
var_dump($fruit);

array_walk($fruit, 'trim_value');
var_dump($fruit);

$booklist=<<<END
Elmer Gantry             Sinclair Lewis1927
The Scarlatti Inher
itanceRobert Ludlum 1971
The Parsifal Mosaic      Robert Ludlum 1982
Sophie's Choice          William Styron1979
END;

$books = explode("\n",$booklist);
for($i = 0, $j = count($books); $i < $j; $i++) {
  $book_array[$i]['title'] = substr($books[$i],0,25);
  $book_array[$i]['author'] = substr($books[$i],25,14);
  $book_array[$i]['publication_year'] = substr($books[$i],39,4);
  echo $book_array[$i]['title'];
  echo $book_array[$i]['author'];
  echo $book_array[$i]['publication_year'];
}




?>

</body>
</html>