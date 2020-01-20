<?php
function reverse($str){
	$len=strlen($str);
	for($i=0,$j=($len-1);$i<$j;$i++,$j--){
		$tmp=$str[$j];
		$str[$j]=$str[$i];
		$str[$i]=$tmp;
		
	}	
	return $str;
}

echo "final= ".reverse("abcdef");
?>