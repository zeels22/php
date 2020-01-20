<?php

$rows=8;
$space=0;

for($i=$rows-1;$i>=0;$i--){
	for($j=0;$j<$space;$j++){
		echo "&nbsp ";
	}
	$space++;
	
	for($j=0;$j<=$i;$j++){
		echo "&nbsp*&nbsp";
	}
	echo "</br>";
}

?>