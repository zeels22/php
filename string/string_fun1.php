<?php
$string="Hello I am Zeel .";

$b=str_word_count($string,2,".");
print_r($b);

echo "<br>";

$c=str_shuffle($string);
echo $c;

echo "<br>";

$d = strrev($string);
echo $d;
echo "<br>";

$e = substr($string,1,-3);
echo $e;
echo "<br>";
?>