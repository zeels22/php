<?php
for($i=0;$i<=10;$i++){
	for($j=0;$j<=10;$j++){
		if($i==0||$i==10||($i+$j==10)){
			echo " *&nbsp";
		}
		else echo " &nbsp&nbsp&nbsp";
	}
	echo "</br>";
}

?>