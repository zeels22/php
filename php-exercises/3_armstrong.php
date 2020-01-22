<?php
function armstrong($number){
      $final = 0;
      $temp=$number;
      $len=strlen($number);
      while(floor($temp)){
         $temp1 = $temp%10;
         $final = $final + pow($temp1,$len);
         $temp=$temp/10;
      }
      if($final==$number){
          return 1;
      }else{
          return 0;
      }
    }
    if(isset($_POST['number'])){
        $number = $_POST['number'];
        if(!empty($number)){
            if(armstrong($number)){
            echo "$number is an armstrong number";
        }else{
            echo "$number is not an armstrong number";
        }
    }
}
  ?>
  
  
  <form action="3_armstrong.php" method="POST">
  <input type="text" name="number" placeholder="number to check">
  <input type="submit">
  </form>