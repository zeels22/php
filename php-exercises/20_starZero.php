<?php
$k=1;
    for($i=0;$i<5;$i++){
        for($j=0;$j<$i+$k;$j++){
            echo "*";
            
        }
        for($z=0;$z<=$i;$z++){
            echo"0";
        }
        $k+=$i+1;
        echo "<br>";
    }
?>

