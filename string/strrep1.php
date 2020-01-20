<?php

$str="hello abc xyz hello hellothere";
echo "$str</br>";
$find="hello";
$replace="heyy ";

$str3=str_replace($find, $replace, $str);
echo $str3;



$str="hello abc xyz hello hellothere";
echo "$str<br>";
$replace="heyy ";
$str3=substr_replace($str,$replace ,5,0);
echo $str3;
?>