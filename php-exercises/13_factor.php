<?php

function factor($number){
    $factors=array();
    for($i=1;$i<=$number;$i++){
        if ($number%$i==0) {
            array_push($factors,$i);
        }
    }
    return $factors;
}
foreach(factor(100) as $values){
    echo "$values ,&nbsp";
}
?>