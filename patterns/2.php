<?php
$rows=5;
//$k=0;
for($i=1;$i<=$rows;$i++,$k=3){
	for($j=1;$j<=$i;$j++){
		while($k >	$i){
			echo "  ";
			$k--;
		}
		echo "*";
	}
	echo "</br>";
}
?>