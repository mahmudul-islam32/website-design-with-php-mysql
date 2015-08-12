<?php
  $temp = "The date is ";
  echo longdate($temp, time()).'</br>';
  function longdate($text, $timestamp)
  {
    return $text . date("l F jS Y", $timestamp);
  }




// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC').'</br>';


// Prints something like: Monday
echo date("l").'</br>';

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A').'</br>';

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)).'</br>';

/* use the constants in the format parameter */
// prints something like: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822).'</br>';

// prints something like: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)).'</br>';



    static $count = 0;
    echo $count;
    $count++;
  echo "a: [" . (20 > 9) . "]<br>";
  echo "b: [" . (5 == 6) . "]<br>";
  echo "c: [" . (1 == 0) . "]<br>";
  echo "d: [" . (1 == 1) . "]<br>";

  
  $days_to_new_year = 366 - $day_number; // Expression
  if ($days_to_new_year < 30)
  {
     echo "Not long now till new year";  // Statement
  }
?>

