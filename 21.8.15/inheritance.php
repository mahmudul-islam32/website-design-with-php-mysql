<!DOCTYPE html>
<html>
<body>

<?php
  $object           = new Subscriber;
  $object->name     = "Mahmudul islam";
  $object->password = "pwqop";
  $object->phone    = "01686209729";
  $object->email    = "mahmud.islam32@gmail.com";
  $object->display();
  class User
  {
    public $name, $password;
    function save_user()
    {
      echo "Save User code goes here";
    }
  }
  class Subscriber extends User
  {
    public $phone, $email;
    function display()
    {
      echo "Name:  " . $this->name     . "<br>";
      echo "Pass:  " . $this->password . "<br>";
      echo "Phone: " . $this->phone    . "<br>";
      echo "Email: " . $this->email;
    }
  }
?>

</body>
</html>