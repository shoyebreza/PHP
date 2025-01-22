<?php


function evenOdd($n)
{
    if($n %2== 0){
        return true;
    }

    return false;
}

/* $x = trim(fgets(STDIN)); */
$x= 12;
if (evenOdd($x)) {
    echo"{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}

   

?>