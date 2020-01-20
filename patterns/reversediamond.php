<?php

$total_rows=11;
$rows=($total_rows)/2;
$space=$rows;


for($i=$rows;$i>=0;$i--){
	for($j=0;$j<$space;$j++){
		echo " &nbsp ";
	}
	$space++;
	
	for($j=0;$j<=$i;$j++){
		echo "&nbsp*&nbsp";
	}
	echo "</br>";
}


for($i=1;$i<$rows;$i++){
	for($j=0;$j<$space-2;$j++){
		echo "&nbsp ";
	}
	$space--;
	
	for($j=0;$j<=$i;$j++){
		echo "&nbsp*&nbsp";
	}
	echo "</br>";
}

?>