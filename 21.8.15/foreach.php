<!DOCTYPE html>
<html>
<body>

<?php

  $language=array("html","css","php","java");
  $j=0;
 foreach($language as $learn){
 
   echo " we learn $j : $learn</br>";
    $j++;
 
 
 }

       $paper = array('copier' => "Copier & Multipurpose",
                 'inkjet' => "Inkjet Printer",
                 'laser'  => "Laser Printer",
                 'photo'  => "Photographic Paper");
    
        foreach($paper as $item => $description)
    echo "$item: $description<br>"


?>

</body>
</html>