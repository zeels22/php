<?php

function add($a,$b){
	$sum=$a+$b;
	return $sum;
}

function sub($a,$b){
	$sum=$a-$b;
	return $sum;
}

function mul($a,$b){
	$sum=$a*$b;
	return $sum;
}

function div($a,$b){
	$sum=$a/$b;
	return $sum;
}

$result=div(mul(add(10,20),sub(20,10)),sub(30,25));
echo $result;


?>
