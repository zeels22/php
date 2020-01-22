<?php

$row=5;
$col=5;
for($i=1;$i<=$row;$i++){
    for($j=0;$j<=$col;$j++){
        $n = $i + $j*$row;
        echo "$n &nbsp";
    }
    echo "<br>";
}


?>