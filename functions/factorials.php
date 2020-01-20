<?php
    function fact($n){
        $fact=1;
        for($i=1;$i<=$n;$i++){
        $fact=$fact*($i);
    }
    return $fact;
    }
    function factorial($n){
        $fact=1;
        while($n>=1){
            $fact*=$n;
            $n--;
        }
        return($fact);
    }
    echo(fact(3)."<br>");
    echo(factorial(5));
?>

