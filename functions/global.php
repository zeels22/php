<?php

$a=10;

function func(){
	global $a;
	echo $a;
}
func();

?>