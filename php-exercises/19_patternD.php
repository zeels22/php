<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i==0 || $i==4){
            echo"*&nbsp";}
        elseif($i==1 || $i==2 || $i==3){
            if ($j==0 || $j==4) {
                echo "*&nbsp";
            }else{
                echo "&nbsp&nbsp&nbsp";
            }
            
        }
        
    }
    echo "<br>";
}



?>