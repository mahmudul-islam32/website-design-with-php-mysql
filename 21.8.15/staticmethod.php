<!DOCTYPE html>
<html>
<body>

<?php


  User::pwd_string();
  class User
  {
    static function pwd_string()
    {
      echo "Please enter your password";
    }
  }


    Translate::lookup();
  class Translate
  {
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH  = 2;
    const GERMAN  = 3;
    // ...
    static function lookup()
    {
      echo self::SPANISH;
    }
  }
      $temp = new Test();
  echo "Test A: " . Test::$static_property . "<br>";
  echo "Test B: " . $temp->get_sp()        . "<br>";
  echo "Test C: " . $temp->static_property . "<br>";//can't access by object
  class Test
  {
    static $static_property = "I'm static";
    function get_sp()
    {
       return self::$static_property;
    }
  }

?>

</body>
</html>