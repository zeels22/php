<?php

$numbers=array(1000,120,-1,6,900,27);
$max = $numbers[0];
$min = $max;
$n = sizeof($numbers);
for($i=1; $i<$n; $i++){
    if ($numbers[$i]>$max) {
        $max = $numbers[$i];
    }
    if ($numbers[$i]<$min) {
        $min = $numbers[$i];
    }
}
echo $max ." is max number & min is " .$min;
?>