<?php
   function year_check($year){
      if ($year % 400 == 0)
         print("It is a leap year");
      else if ($year % 100 == 0)
         print("It is not a leap year");
      else if ($year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   $year = 2000;
   year_check($year);
?>