<?php
function isPrime($number){
    if($number==2 || $number==3){
        return 1;
    }else if($number==1){
        return 2;
    }else{
        $flag=0;
        for($i=2;$i<=round(pow($number,0.5));$i++){
            if($number%$i==0){
            return 0;
            $flag=1;
            }
        }if($flag!=1){
            return 1;
            }
    }
}

if(isset($_POST['number'])){
    $number = $_POST['number'];
    if(!empty($number)){
        if(isPrime($number)==1){
            echo "$number is a prime number ..";
        }
        elseif(!isPrime($number)){
            echo " $number is not a prime number";
        }else{
            echo "$number is a special number";
        }
        
    }
}
?>


<form action="5_primeCheck.php" method="POST">
<input type="text" name="number" placeholder="number to check">
<input type="submit">
</form>