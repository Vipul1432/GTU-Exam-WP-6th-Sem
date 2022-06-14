<?php
$a = -1;
$b = 1;
$number = $_POST['number'];
for($i=0; $i < $number; $i++){
 $c = $a + $b;
 echo $c." ";
 $a = $b; $b = $c;
}
?>