<?php
$str="Hello world, This is Zeel";
$find=array('Hello','is','world');
$replace=array(' ','IS','class');

$str4=str_replace($find, $replace, $str);

echo $str ."</br>";
echo $str4;

?>