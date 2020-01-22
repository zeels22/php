<?php
function palindrome($number){
      $final = 0;
      $temp=$number;
      while(floor($temp)){
         $temp1 = $temp%10;
         $final = $final*10 + $temp1;
         $temp=$temp/10;
         
      }
      if($number==$final){
         return 1;
      } else{
         return 0;
      }

   }
   if(isset($_POST['number'])){
      $number = $_POST['number'];
      if(!empty($number)){
          if(palindrome($number)){
             echo "$number is a palindrome number";
          }else{
             echo "$number is not a palindrome";
          }
      }
  }
?>


<form action="3_palindromeNumber.php" method="POST">
<input type="text" name="number" placeholder="number to check">
<input type="submit">
</form>
