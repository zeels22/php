<?php

function swap($a,$b){
    $a=$a+$b;       
    $b=$a-$b;       
    $a=$a-$b;
    return $a . $b;
}
echo swap(20,50);
?>

