<?php  

$file = "C:/Users/shoye/OneDrive/Desktop/php/M9/file/file.txt";
$fp   = fopen($file,"W");

fwrite($fp,"Mercury\n");
fwrite($fp,"Jupiter\n");
fclose($fp);


?>