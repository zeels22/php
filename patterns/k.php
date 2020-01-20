<?php

$total_rows=11;
$rows=($total_rows)/2;
$space=$rows;
$char=1;

for($i=$rows;$i>=0;$i--){
	
	for($j=0;$j<=$i;$j++){
		echo "&nbsp$j&nbsp";
		
	}
	$char++;
	echo "</br>";
}
$char--;
for($i=1;$i<$rows;$i++){

	
	for($j=0;$j<=$i;$j++){
		echo "&nbsp$j&nbsp";
	}
	echo "</br>";
}

?>