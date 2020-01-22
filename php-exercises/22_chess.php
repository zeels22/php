<html>
<style>
table{
    position: absolute;
    left: 50%;
    transform: translate(-50%);
    border-collapse:collapse;
}
td{
    height: 75px;
    width: 75px;
}
.odd{
    background-color: white;
}
.even{
    background-color: black;
}
</style>
<table border="1px">

<?php
for($i=0;$i<8;$i++){
    echo "<tr>";
    for($j=0;$j<8;$j++){
        if(($i+$j)%2==0){
            echo "<td class=odd ></td>";
        }
        else{
            echo "<td class=even ></td>";
        }

    }
    echo "</tr>";
}
?>
</table>
  </body>
  </html>