<?php

function leapYearCheck($year){
    if ($year%4==0) {
        if ($year%100==0 && $year%400!=0) {
            return 0;
        }else{
            return 1;
        }
    }else{
        return 0;
    }
        
    }
    if(isset($_POST['year'])){
        $year = $_POST['year'];
        if(!empty($year)){
            if (leapYearCheck($year)) {
                echo "$year is a leap Year..!! Enjoy 29th Feb";
            }
            else{
                echo "Soryy $year is not a leap Year...";
            }
        }
    }
  ?>
  
  
  <form action="8_leapYear.php" method="POST">
  <input type="number" name="year" placeholder="yearr to check">
  <input type="submit">
  </form>
  