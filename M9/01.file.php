<?php 

$file = "C:/Users/shoye/OneDrive/Desktop/php/M9/file/file.txt";

$fp   = fopen($file,"r");
$line =fgets($fp);
echo  $line;
