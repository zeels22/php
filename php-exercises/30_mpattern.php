<?php

for($i=0;$i<=10;$i++){
    for($j=0;$j<=10;$j++){
        if ($j==0 || $j==$i || $j==10 || $j+$i==10) {
            echo"*";
        }
        else{
            echo"&nbsp&nbsp";
        }

    }
    echo"<br>";
}



?>