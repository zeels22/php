<?php

function gcd( $a, $b) 
{ 
   if ($a == 0) 
        return $b; 
    return gcd($b % $a, $a); 
} 
if(isset($_POST['n1'])&&isset($_POST['n2'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    if(!empty($n1)&&!empty($n1)){
        echo gcd($n1,$n2);
    }
}
?>

<form action="27_Lcm.php" method="POST">
<input type="text" name="n1" placeholder="2">
<input type="text" name="n2" placeholder="1">
<input type="submit">
</form>