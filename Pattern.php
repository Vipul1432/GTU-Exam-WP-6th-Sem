<?php
for($i=1; $i<=5; $i++)
{
 for($j=$i; $j>=1; $j--)
  echo $j % 2;
 echo "<br>";
}
?>

<?php
for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= $i; $j++) {
        $k = ($i + $j) % 2;
        echo $k;
    }
    echo "<br/>";
} 
?>