<html>
<table border="1px">

<?php
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($j=1;$j<=10;$j++){
        $n=$i*$j;
            echo "<td> $n </td>";
    }
    echo "</tr>";
}
?>
</table>
  </body>
  </html>