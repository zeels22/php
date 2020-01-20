<?php

$rows=10;
$space=$rows-1;

for($i=0;$i<$rows;$i++){
	for($j=0;$j<$space;$j++){
		echo "&nbsp ";
	}
	$space--;
	
	for($j=0;$j<=$i;$j++){
		echo "&nbsp*&nbsp";
	}
	echo "</br>";
}

?>