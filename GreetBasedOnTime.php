<?php 
$dat = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$date=$dat->format('H');
if($date < 12) 
  echo "Good Morning"; 
else if($date < 17) 
  echo "Good Afternoon";
else if($date<20)
  echo "Good Evening"; 
else 
  echo "Good Night"; 
?>