<html>
<table border="1px">

<?php
for($i=1;$i<7;$i++){
    echo "<tr>";
    for($j=1;$j<6;$j++){
        $n=$i*$j;
            echo "<td> $i*$j = $n </td>";
    }
    echo "</tr>";
}
?>
</table>
  </body>
  </html>