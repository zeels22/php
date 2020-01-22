<?php

function fibonacci($n){
    $string = " ";
    $n1=0;
    $n2=1;
    for($i=0;$i<$n;$i++){
            $string = "$string $n1, ";
            $temp = $n1;
            $n1 = $n2;
            $n2 = $n1 + $temp;   
    }
    return $string;

}
if(isset($_POST['length'])){
    $length = $_POST['length'];
    if(!empty($length)){
        echo fibonacci($length);
    }
}

?>

<form action="2_fibo.php" method="POST">
<input type="text" name="length" placeholder="total length">
<input type="submit">
</form>
