<?php
function reverse($number){
      $final = 0;
      $temp=$number;
      while(floor($temp)){
         $temp1 = $temp%10;
         $final = $final*10 + $temp1;
         $temp=$temp/10;
         
      }
      return($final);
   }
   if(isset($_POST['number'])){
      $number = $_POST['number'];
      if(!empty($number)){
          $final = reverse($number);
          echo "Reverse number of $number is $final";
      }
  }
?>


<form action="4_reverseNumber.php" method="POST">
<input type="text" name="number" placeholder="number to check">
<input type="submit">
</form>
