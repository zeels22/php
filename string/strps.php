<?php

$offset = 0;
$string=" Heyy, There I am Zeel Hello. ";

$find="He";
$length=strlen($find);

for($i=0;$i<strlen($string);$i++){
	if($str_pos= strpos($string, $find , $offset)){
		echo "found at $str_pos </br>";
		$offset=$str_pos+$length;
	}
}


?>