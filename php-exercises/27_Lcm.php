<?php

function gcd( $a, $b) 
{ 
   if ($a == 0) 
        return $b; 
    return gcd($b % $a, $a); 
} 

function lcm($a,$b){
    $final = ($a*$b)/gcd($a,$b);
    return $final;

}
if(isset($_POST['n1'])&&isset($_POST['n2'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    if(!empty($n1)&&!empty($n1)){
        echo lcm($n1,$n2);
    }
}


?>

<form action="27_Lcm.php" method="POST">
<input type="text" name="n1" placeholder="no.1">
<input type="text" name="n2" placeholder="no.2">
<input type="submit">
</form>
