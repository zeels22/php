<?php


for($i=0;$i<=10;$i++){
	for($j=0;$j<=10;$j++){
		if($i==0||$i==10||$j==2||$j==10){
			echo "* ";
		}
		else echo "&nbsp&nbsp ";
	}
	echo "</br>";
}
echo "</br> small d:- </br>";

for($i=0;$i<=10;$i++){
	for($j=0;$j<=10;$j++){
		if($i==10||$j==10||$i==5||($i>=5&&$j==0)||$j==10){
			echo "* ";
		}
		else echo "&nbsp&nbsp ";
	}
	echo "</br>";
}


?>