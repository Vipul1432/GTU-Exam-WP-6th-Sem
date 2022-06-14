<?php
$myfile = fopen("TextFile.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("TextFile.txt"));
fclose($myfile);
?>