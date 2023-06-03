<?php
$age = array("peter"=>"35", "ben"=>"37", "joe"=>"43");
echo "Ben is ". $age["ben"]. " yaers old.";

$a = 50;
$b = 10;
 if ($a > $b)
 {
    echo "Hello World";
 }

 $array = array ('3' => 'a', '1b' => 'b', 'c', 'd');
echo ($array[1]);
// $cars=array("Volvo","BMW","Toyota");

// echo count($cars). "<br>"; 
echo str_word_count("Hello world!");

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." ."<br>";

$s = '12345';
$s[$s[1]] = '2';
echo $s;
?>