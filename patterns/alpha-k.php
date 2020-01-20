<?php
$k=5;
for($i=0;$i<=5;$i++){
	for($j=0;$j<=5;$j++){
		if($j==0){
			echo "*";
		}
		else if($j==$k){
			echo "&nbsp*&nbsp";
			$k--;
		}
		else echo"&nbsp &nbsp";
		
	}
	echo "</br>";
}
$k=1;
for($i=0;$i<5;$i++){
	for($j=0;$j<=5;$j++){
		if($j==0){
			echo "*";
		}
		else if($j==$k){
			echo "&nbsp*&nbsp";
			$k++;
			$j++;
		}
		else echo"&nbsp &nbsp";
		
	}
	echo "</br>";
}

?>