<?php


for($i=0;$i<=10;$i++){
	for($j=0;$j<=10;$j++){
		if($i==0||$i==10||$j==0||$i==5||$j==10){
			echo "* ";
		}
		else echo "&nbsp&nbsp ";
	}
	echo "</br>";
}

?>
</br>
<?php


for($i=0;$i<=10;$i++){
	for($j=0;$j<=10;$j++){
		if($i==10||$j==0||$i==5||($i>=5&&$j==10)){
			echo "* ";
		}
		else echo "&nbsp&nbsp ";
	}
	echo "</br>";
}

?>