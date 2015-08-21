<!DOCTYPE html>
<html>
<body>

<?php

print substr_replace('My pet is a blue dog.','fish.',12);
print substr_replace('My pet is a blue dog.','green',12,4);
$credit_card = '4111 1111 1111 1111';
print substr_replace($credit_card,'xxxx ',0,strlen($credit_card)-4);
print substr_replace('My name is mahmu islam','anika',11,5);
$string = "This weekend, I'm going shopping for a pet chicken.";
$vowels = 0;
for ($i = 0, $j = strlen($string); $i < $j; $i++) {
    if (strstr('aeiouAEIOU',$string[$i])) {
        $vowels++;
    }
    
}
print $vowels;

$s = "Once upon a time ther
e was a turtle.";
// break the string up into words
$words = explode(' ',$s);
// reverse the array of words

$words = array_reverse($words);
// rebuild the string
$s = join(' ',$words);
print $s


?>

</body>
</html>