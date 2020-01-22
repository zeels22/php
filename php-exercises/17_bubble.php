<?php
function bubbleSort($array){
    $n = sizeof($array);
    for($i = 0; $i<$n; $i++){
        for($j = 0; $j<$n-$i-1 ;$j++){
            if($array[$j]>$array[$j+1]){
                $temp=$array[$j];
                $array[$j]=$array[$j+1];
                $array[$j+1]=$temp;
            }
        }
    }
return $array;
}


$numbers = array(1,2,3,9,8,7,6,5,3,4,5);
print_r (bubbleSort($numbers));
//print_r($numbers);
?>