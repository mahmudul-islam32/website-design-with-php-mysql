<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contactchoice = $_POST['contact'];
$phoneoremail = $_POST['phoneoremail'];
$city = $_POST['city'];
$comments = $_POST['comments'];

$fullname=$firstname.''.$lastname;

print"Information submited for: $fullname</br>";
print"ur $contactchoice is $phoneoremail</br>";
print"u r interested in living $city</br> ";
print "<h5>Thank you</h5>";
?>